<?php
/**
 * includes/seo.php
 * Per-page SEO overrides edited in /admin/seo.
 *
 * Each page file keeps its own defaults ($page_title, $meta_description, JSON-LD);
 * the dashboard stores only what was changed in ma_page_meta, so the page file stays
 * the source of truth and "Reset to default" just deletes the override.
 */

require_once __DIR__ . '/db.php';

/** Editable pages: URL path => [page file, label]. */
const SEO_PAGES = [
    '/'               => ['index.php',          'Home'],
    '/features'       => ['features.php',       'Features'],
    '/how-it-works'   => ['how-it-works.php',   'How It Works'],
    '/industries'     => ['industries.php',     'Industries'],
    '/mobile-app'     => ['mobile-app.php',     'Mobile App'],
    '/about'          => ['about.php',          'About'],
    '/pricing'        => ['pricing.php',        'Pricing'],
    '/contact'        => ['contact.php',        'Contact'],
    '/privacy-policy' => ['privacy-policy.php', 'Privacy Policy'],
    '/terms'          => ['terms.php',          'Terms of Service'],
];
const SEO_TITLE_RANGE       = [30, 60];
const SEO_DESCRIPTION_RANGE = [70, 160];

/** URL path for a page slug as used in $current_page ('home' → '/'). */
function seo_path_for(string $slug): string
{
    return $slug === 'home' || $slug === '' ? '/' : '/' . $slug;
}

/**
 * Defaults written in the page file: title, description, schema (pretty JSON string), og_image.
 * Read from the source so the dashboard never has to render the page.
 */
function seo_page_defaults(string $path): array
{
    $file = dirname(__DIR__) . '/' . (SEO_PAGES[$path][0] ?? '');
    $src  = is_file($file) ? (string) file_get_contents($file) : '';
    $str  = function (string $var) use ($src): string {
        return preg_match('/\$' . $var . '\s*=\s*\'((?:[^\'\\\\]|\\\\.)*)\'/', $src, $m) ? stripcslashes($m[1]) : '';
    };
    $schema = '';
    if (preg_match("/<<<'JSONLD'\R(.*?)\R\s*JSONLD;/s", $src, $m)) {
        $decoded = json_decode($m[1], true);
        $schema  = $decoded === null ? trim($m[1]) : json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    $slug = ltrim($path, '/') ?: 'home';
    $og   = is_file(dirname(__DIR__) . "/assets/og/{$slug}.jpg") ? "/assets/og/{$slug}.jpg" : '/assets/og/home.jpg';
    return [
        'title'       => $str('page_title'),
        'description' => $str('meta_description'),
        'schema'      => $schema,
        'og_image'    => SITE_URL . $og,
    ];
}

/** Saved overrides for a page (only the changed fields), or [] when none / DB unavailable. */
function seo_page_meta(string $path): array
{
    if (!isset(SEO_PAGES[$path])) {
        return [];
    }
    $row = db_safe(fn() => db_one('SELECT title, description, og_image, schema_json, noindex, updated_at FROM ma_page_meta WHERE path = ?', [$path]), null);
    return $row ? array_filter($row, fn($v) => $v !== null) : [];
}

/** All overrides keyed by path (dashboard overview). */
function seo_all_meta(): array
{
    $rows = db_all('SELECT * FROM ma_page_meta');
    return array_column($rows, null, 'path');
}

/**
 * Validate admin-entered JSON-LD. Returns the normalised pretty JSON, '' for "no schema",
 * or null with $error set.
 */
function seo_parse_schema(string $json, ?string &$error): ?string
{
    $json = trim($json);
    if ($json === '[]') {
        return '';
    }
    $value = json_decode($json, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        $error = 'Schema is not valid JSON (' . json_last_error_msg() . '). Nothing was saved.';
        return null;
    }
    if (!is_array($value)) {
        $error = 'Schema must be a JSON object or a list of objects. Nothing was saved.';
        return null;
    }
    $items = array_is_list($value) ? $value : [$value];
    foreach ($items as $i => $item) {
        $graph = is_array($item) && isset($item['@graph']);
        if (!is_array($item) || array_is_list($item) || (empty($item['@type']) && !$graph)) {
            $error = 'Schema item ' . ($i + 1) . ' needs an "@type" (for example "Organization" or "WebPage"). Nothing was saved.';
            return null;
        }
    }
    return json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * Save the editor form for one page. Values equal to the page default are stored as NULL.
 * Returns true on success; false with $error set.
 */
function seo_save(string $path, array $post, ?string &$error): bool
{
    $d     = seo_page_defaults($path);
    $clean = fn($v) => trim(preg_replace('/\s+/u', ' ', (string) $v));
    $orNull = fn(string $v, string $default) => ($v === '' || $v === $default) ? null : $v;

    $title       = $orNull(mb_substr($clean($post['title'] ?? ''), 0, 200), $d['title']);
    $description = $orNull(mb_substr($clean($post['description'] ?? ''), 0, 400), $d['description']);
    $ogImage     = $clean($post['og_image'] ?? '');
    if ($ogImage !== '' && !preg_match('#^(https?://|/)#', $ogImage)) {
        $error = 'Social image must be a full URL (https://…) or a path starting with /. Nothing was saved.';
        return false;
    }
    $ogImage = $orNull(mb_substr($ogImage, 0, 300), $d['og_image']);

    $schemaIn = trim(str_replace("\r\n", "\n", (string) ($post['schema'] ?? '')));
    $schema   = null;
    if ($schemaIn !== '') {
        $schema = seo_parse_schema($schemaIn, $error);
        if ($schema === null) {
            return false;
        }
        $defaultNorm = $d['schema'] === '' ? '' : (string) seo_parse_schema($d['schema'], $ignored);
        if ($schema === $defaultNorm) {
            $schema = null;
        }
    }
    $noindex = !empty($post['noindex']) ? 1 : null;

    try {
        if ($title === null && $description === null && $ogImage === null && $schema === null && $noindex === null) {
            db_query('DELETE FROM ma_page_meta WHERE path = ?', [$path]);
        } else {
            db_query('REPLACE INTO ma_page_meta (path, title, description, og_image, schema_json, noindex, updated_at) VALUES (?, ?, ?, ?, ?, ?, NOW())',
                [$path, $title, $description, $ogImage, $schema, $noindex]);
        }
    } catch (PDOException $e) {
        error_log('seo_save: ' . $e->getMessage());
        $error = 'Could not save to the database. Please try again.';
        return false;
    }
    return true;
}

/** ok | warn | empty, for title/description length checks. */
function seo_length_state(int $length, array $range): string
{
    if ($length === 0) {
        return 'empty';
    }
    return $length >= $range[0] && $length <= $range[1] ? 'ok' : 'warn';
}

/** Page URL as Google shows it, e.g. markattendance.io › pricing */
function seo_breadcrumb_url(string $path): string
{
    $host = preg_replace('/^www\./', '', (string) parse_url(SITE_URL, PHP_URL_HOST));
    return implode(' › ', array_merge([$host], array_filter(explode('/', $path))));
}

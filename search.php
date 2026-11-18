<?php
require_once __DIR__ . '/includes/config.php';

/**
 * Site search — indexes the text of each page file at request time.
 * Small site (≈10 pages), so no database or cache is needed.
 */
const SEARCH_PAGES = [
    ''               => 'index.php',
    'features'       => 'features.php',
    'how-it-works'   => 'how-it-works.php',
    'industries'     => 'industries.php',
    'mobile-app'     => 'mobile-app.php',
    'about'          => 'about.php',
    'pricing'        => 'pricing.php',
    'contact'        => 'contact.php',
    'privacy-policy' => 'privacy-policy.php',
    'terms'          => 'terms.php',
];

function search_page_text(string $file): array
{
    $src = (string) @file_get_contents(__DIR__ . '/' . $file);
    preg_match('/\$page_title\s*=\s*\'([^\']*)\'/', $src, $t);
    preg_match('/\$meta_description\s*=\s*\'([^\']*)\'/', $src, $d);
    // Body = everything after the nav include
    $pos  = strpos($src, "includes/nav.php';");
    $body = $pos === false ? $src : substr($src, $pos);
    $body = preg_replace(['#<\?(php|=).*?\?>#s', '#<(script|style|svg)\b.*?</\1>#si', '#<!--.*?-->#s'], ' ', $body);
    $body = preg_replace('#<(/?(h[1-6]|p|li|div|section|td|th|br))\b[^>]*>#i', ' . ', $body);
    $body = html_entity_decode(strip_tags($body), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $body = trim(preg_replace(['/(\s*\.\s*){2,}/', '/\s+/'], [' . ', ' '], $body), ' .');
    $title = $t[1] ?? $file;
    return [
        'title' => trim(explode('|', $title)[0]) ?: $title,
        'desc'  => $d[1] ?? '',
        'body'  => $body,
    ];
}

function search_run(string $q): array
{
    $terms = array_values(array_filter(preg_split('/\s+/', mb_strtolower($q)), fn($w) => mb_strlen($w) >= 2));
    if (!$terms) return [];
    $results = [];
    foreach (SEARCH_PAGES as $slug => $file) {
        if (!is_file(__DIR__ . '/' . $file)) continue;
        $p = search_page_text($file);
        $title = mb_strtolower($p['title']); $desc = mb_strtolower($p['desc']); $body = mb_strtolower($p['body']);
        $score = 0; $allFound = true;
        foreach ($terms as $w) {
            $hits = substr_count($title, $w) * 10 + substr_count($desc, $w) * 4 + substr_count($body, $w);
            if ($hits === 0) $allFound = false;
            $score += $hits;
        }
        if ($score === 0) continue;
        if ($allFound) $score *= 2;   // pages that contain every word rank first
        $results[] = ['slug' => $slug, 'title' => $p['title'], 'snippet' => search_snippet($p['body'], $terms, $p['desc']), 'score' => $score];
    }
    usort($results, fn($a, $b) => $b['score'] <=> $a['score']);
    return array_slice($results, 0, 10);
}

function search_snippet(string $body, array $terms, string $fallback): string
{
    $lower = mb_strtolower($body); $at = false;
    foreach ($terms as $w) {
        $i = mb_strpos($lower, $w);
        if ($i !== false && ($at === false || $i < $at)) $at = $i;
    }
    if ($at === false) return htmlspecialchars($fallback);
    $start = max(0, $at - 80);
    $text  = ($start > 0 ? '…' : '') . trim(mb_substr($body, $start, 220)) . '…';
    $html  = htmlspecialchars($text);
    $pattern = '/(' . implode('|', array_map(fn($w) => preg_quote(htmlspecialchars($w), '/'), $terms)) . ')/iu';
    return preg_replace($pattern, '<mark>$1</mark>', $html);
}

$q       = mb_substr(trim((string) ($_GET['q'] ?? '')), 0, 100);
$results = $q !== '' ? search_run($q) : [];
$qh      = htmlspecialchars($q, ENT_QUOTES, 'UTF-8');

$page_title       = ($q !== '' ? "Search: {$q}" : 'Search') . ' | Mark Attendance';
$meta_description = 'Search the Mark Attendance website.';
$canonical_url    = SITE_URL . '/search';
$noindex          = true;   // search result pages should not appear in Google
$current_page     = 'search';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="page-body" id="main-content">
  <section class="page-hero page-hero-compact">
    <div class="container">
      <h1>Search</h1>
      <form class="search-form search-form-page" action="<?= SITE_BASE ?>/search" method="get" role="search">
        <label for="page-search" class="sr-only">Search Mark Attendance</label>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="search" id="page-search" name="q" value="<?= $qh ?>" placeholder="Search features, pricing, FAQs…" required minlength="2" autofocus>
        <button type="submit" class="btn btn-primary btn-sm">Search</button>
      </form>
    </div>
  </section>

  <section class="section search-results-section">
    <div class="container search-results">
      <?php if ($q === ''): ?>
        <p class="search-count">Type a word or phrase above, for example <a href="?q=pricing">pricing</a>, <a href="?q=leave">leave</a> or <a href="?q=payroll">payroll</a>.</p>
      <?php elseif (!$results): ?>
        <p class="search-count" role="status">No results for “<strong><?= $qh ?></strong>”.</p>
        <p>Try a different word, or <a href="<?= SITE_BASE ?>/contact">ask our team</a> — we reply within 1 business day.</p>
      <?php else: ?>
        <p class="search-count" role="status"><?= count($results) ?> page<?= count($results) === 1 ? '' : 's' ?> found for “<strong><?= $qh ?></strong>”</p>
        <ol class="search-list">
          <?php foreach ($results as $r): ?>
          <li class="search-item">
            <a href="<?= SITE_BASE ?>/<?= $r['slug'] ?>" class="search-item-title"><?= htmlspecialchars($r['title']) ?></a>
            <span class="search-item-url"><?= htmlspecialchars(preg_replace('#^https?://#', '', SITE_URL)) ?>/<?= $r['slug'] ?></span>
            <p><?= $r['snippet'] ?></p>
          </li>
          <?php endforeach; ?>
        </ol>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

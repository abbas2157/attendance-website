<?php
/**
 * XML sitemap, served at /sitemap.xml (see .htaccess).
 * Lists every page in SEO_PAGES except those set to "Hide from Google" in /admin/seo.
 * lastmod = the newer of the page file and its last SEO edit.
 */
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/seo.php';

$meta = db_safe(fn() => seo_all_meta(), []);
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', "\n";
foreach (SEO_PAGES as $path => [$file]) {
    if (!empty($meta[$path]['noindex'])) {
        continue;
    }
    $edited  = strtotime($meta[$path]['updated_at'] ?? '') ?: 0;
    $lastmod = date('Y-m-d', max($edited, (int) @filemtime(__DIR__ . '/' . $file)));
    $priority = $path === '/' ? '1.0' : (in_array($path, ['/privacy-policy', '/terms'], true) ? '0.3' : '0.8');
    echo '  <url><loc>', htmlspecialchars(SITE_URL . $path), '</loc><lastmod>', $lastmod, '</lastmod><priority>', $priority, "</priority></url>\n";
}
echo '</urlset>', "\n";

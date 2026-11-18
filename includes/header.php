<?php
/**
 * includes/header.php
 * Outputs DOCTYPE → </head><body> plus the skip link, page loader and scroll-progress bar.
 *
 * Expected variables (set in each page file before including this):
 *   $page_title        string  — <title> and OG/Twitter title
 *   $meta_description  string  — <meta description>
 *   $canonical_url     string  — <link rel="canonical">
 *   $og_description    string  — og:description (falls back to $meta_description)
 *   $og_image          string  — og:image URL (defaults to assets/og/<current_page>.jpg)
 *   $twitter_description string — twitter:description
 *   $twitter_image     string  — twitter:image URL
 *   $noindex           bool    — emit noindex robots tag (only for utility pages like search)
 *   $json_ld           string  — raw JSON-LD content (without <script> tags)
 *   $current_page      string  — page slug, used for nav highlighting and the default OG image
 */

require_once __DIR__ . '/config.php';

// Default OG image: per-page image if one exists, otherwise the home image
$og_slug = $current_page ?? 'home';
if (!is_file(dirname(__DIR__) . "/assets/og/{$og_slug}.jpg")) {
    $og_slug = 'home';
}

// Defaults (null coalescing assignment — PHP 7.4+)
$page_title          ??= 'Mark Attendance | Face Recognition Attendance System';
$meta_description    ??= '';
$canonical_url       ??= SITE_URL . '/';
$og_description      ??= $meta_description;
$og_image            ??= SITE_URL . "/assets/og/{$og_slug}.jpg";
$twitter_description ??= $og_description;
$twitter_image       ??= $og_image;
$noindex             ??= false;
$json_ld             ??= null;

// SEO edits saved in /admin/seo override the defaults above (silently skipped if the DB is down).
require_once __DIR__ . '/seo.php';
$seo = seo_page_meta(seo_path_for($current_page ?? ''));
if (isset($seo['title']))       { $page_title = $seo['title']; }
if (isset($seo['description'])) { $meta_description = $og_description = $twitter_description = $seo['description']; }
if (isset($seo['og_image']))    { $og_image = $twitter_image = str_starts_with($seo['og_image'], '/') ? SITE_URL . $seo['og_image'] : $seo['og_image']; }
if (isset($seo['schema_json'])) { $json_ld = $seo['schema_json'] === '' ? null : $seo['schema_json']; }
if (!empty($seo['noindex']))    { $noindex = true; }

// HTML-safe output helper — used below with short echo tag
$e = fn(string $s): string => htmlspecialchars($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if ($noindex): ?><meta name="robots" content="noindex, follow"><?php endif; ?>
  <?php if (GOOGLE_SITE_VERIFICATION !== ''): ?><meta name="google-site-verification" content="<?= $e(GOOGLE_SITE_VERIFICATION) ?>"><?php endif; ?>
  <meta name="theme-color" content="#662D91">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Font CSS loads without blocking the first paint: text shows in the system font, then swaps to Inter -->
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>
  <link rel="stylesheet" href="<?= asset('/css/style.css') ?>">
  <?php // Favicon: the file uploaded in /admin/settings, or the default SVG
  $fav     = SITE_FAVICON !== '' && is_file(dirname(__DIR__) . SITE_FAVICON) ? SITE_FAVICON : '/assets/favicon.svg';
  $favType = str_ends_with($fav, '.svg') ? 'image/svg+xml' : (str_ends_with($fav, '.png') ? 'image/png' : 'image/x-icon'); ?>
  <link rel="icon" href="<?= asset($fav) ?>" type="<?= $favType ?>">
  <link rel="apple-touch-icon" href="<?= SITE_BASE ?>/assets/apple-touch-icon.png">
  <link rel="canonical" href="<?= $e($canonical_url) ?>">
  <title><?= $e($page_title) ?></title>
  <meta name="description" content="<?= $e($meta_description) ?>">

  <!-- Open Graph (link previews on WhatsApp, Facebook, LinkedIn, Slack…) -->
  <meta property="og:title"       content="<?= $e($page_title) ?>">
  <meta property="og:description" content="<?= $e($og_description) ?>">
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?= $e($canonical_url) ?>">
  <meta property="og:image"       content="<?= $e($og_image) ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt"   content="<?= $e($page_title) ?>">
  <meta property="og:site_name"   content="<?= SITE_NAME ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= $e($page_title) ?>">
  <meta name="twitter:description" content="<?= $e($twitter_description) ?>">
  <meta name="twitter:image"       content="<?= $e($twitter_image) ?>">

  <?php if (!empty($json_ld)): ?>
  <script type="application/ld+json">
  <?= $json_ld ?>
  </script>
  <?php endif; ?>
  <script>document.documentElement.classList.add('js');</script>
</head>
<body>
<a href="#main-content" class="skip-link">Skip to content</a>
<div class="page-loader" id="page-loader" aria-hidden="true"><span class="page-loader-ring"></span></div>
<div class="scroll-progress" id="scroll-progress" aria-hidden="true"></div>

<?php
/**
 * includes/header.php
 * Outputs DOCTYPE → </head><body>
 *
 * Expected variables (set in each page file before including this):
 *   $page_title        string  — <title> and OG/Twitter title
 *   $meta_description  string  — <meta description>
 *   $canonical_url     string  — <link rel="canonical">
 *   $og_description    string  — og:description (falls back to $meta_description)
 *   $og_image          string  — og:image URL
 *   $twitter_description string — twitter:description
 *   $twitter_image     string  — twitter:image URL
 *   $noindex           bool    — emit noindex,nofollow robots tag
 *   $json_ld           string  — raw JSON-LD content (without <script> tags)
 */

// ── Auto-detect base path ──────────────────────────────────────
// Works for both Laragon virtual host (attendance-website.test → base = '')
// and subdirectory access (localhost/attendance-website → base = '/attendance-website').
if (!defined('SITE_BASE')) {
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $dir    = rtrim(dirname($script), '/');
    define('SITE_BASE', ($dir === '' || $dir === '.') ? '' : $dir);
}

// Defaults (nullsafe coalescing assignment — PHP 7.4+)
$page_title          ??= 'Mark Attendance | Face Recognition Attendance System';
$meta_description    ??= '';
$canonical_url       ??= 'https://www.markattendance.com/';
$og_description      ??= $meta_description;
$og_image            ??= 'https://www.markattendance.com/assets/og-image.jpg';
$twitter_description ??= $og_description;
$twitter_image       ??= $og_image;
$noindex             ??= false;
$json_ld             ??= null;

// HTML-safe output helper — used below with short echo tag
$e = fn(string $s): string => htmlspecialchars($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if ($noindex): ?><meta name="robots" content="noindex, nofollow"><?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= SITE_BASE ?>/css/style.css">
  <link rel="icon" href="<?= SITE_BASE ?>/assets/favicon.svg" type="image/svg+xml">
  <link rel="canonical" href="<?= $e($canonical_url) ?>">
  <title><?= $e($page_title) ?></title>
  <meta name="description" content="<?= $e($meta_description) ?>">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= $e($page_title) ?>">
  <meta property="og:description" content="<?= $e($og_description) ?>">
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?= $e($canonical_url) ?>">
  <meta property="og:image"       content="<?= $e($og_image) ?>">
  <meta property="og:site_name"   content="Mark Attendance">

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
</head>
<body>

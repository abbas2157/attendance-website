<?php
/**
 * includes/nav.php
 * Site-wide navigation, search panel + mobile drawer.
 * Uses $current_page (slug string) set in each page file for active-state highlighting.
 * Uses SITE_BASE constant (defined in config.php) for portable href paths.
 */

$cp = $current_page ?? '';

$nav_links = [
    'features'      => 'Features',
    'how-it-works'  => 'How It Works',
    'industries'    => 'Industries',
    'mobile-app'    => 'Mobile App',
    'about'         => 'About',
    'pricing'       => 'Pricing',
    'contact'       => 'Contact',
];

$b = SITE_BASE; // shorthand
$search_icon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>';
?>

<nav class="nav" id="nav" aria-label="Main navigation">
  <div class="container">
    <div class="nav-inner">
      <a href="<?= $b ?>/" class="nav-logo" aria-label="Mark Attendance – Home">
        <picture>
          <source srcset="<?= $b ?>/assets/logo.webp" type="image/webp">
          <img src="<?= $b ?>/assets/logo.png" alt="Mark Attendance" class="nav-logo-img" width="104" height="160">
        </picture>
      </a>
      <div class="nav-links">
        <?php foreach ($nav_links as $slug => $label): ?>
        <a href="<?= $b ?>/<?= $slug ?>"<?= $cp === $slug ? ' class="active" aria-current="page"' : '' ?>><?= $label ?></a>
        <?php endforeach; ?>
      </div>
      <div class="nav-actions">
        <button class="nav-search-btn" id="search-toggle" aria-label="Search the site" aria-expanded="false" aria-controls="search-panel">
          <?= $search_icon ?>
        </button>
        <?php if (APP_LOGIN_URL !== ''): ?>
        <a href="<?= htmlspecialchars(APP_LOGIN_URL) ?>" class="btn btn-outline btn-sm">Log In</a>
        <?php endif; ?>
        <a href="<?= $b ?>/contact#demo" class="btn btn-primary btn-sm">Get Free Demo</a>
        <button class="hamburger" id="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-drawer">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </div>
  <div class="search-panel" id="search-panel" hidden>
    <div class="container">
      <form class="search-form" action="<?= $b ?>/search" method="get" role="search">
        <label for="nav-search" class="sr-only">Search Mark Attendance</label>
        <?= $search_icon ?>
        <input type="search" id="nav-search" name="q" placeholder="Search features, pricing, FAQs…" autocomplete="off" required minlength="2">
        <button type="submit" class="btn btn-primary btn-sm">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="nav-drawer" id="nav-drawer" aria-label="Mobile navigation">
  <form class="search-form search-form-drawer" action="<?= $b ?>/search" method="get" role="search">
    <label for="drawer-search" class="sr-only">Search Mark Attendance</label>
    <?= $search_icon ?>
    <input type="search" id="drawer-search" name="q" placeholder="Search the site…" autocomplete="off" required minlength="2">
  </form>
  <a href="<?= $b ?>/"<?= $cp === 'home' ? ' class="active" aria-current="page"' : '' ?>>Home</a>
  <?php foreach ($nav_links as $slug => $label): ?>
  <a href="<?= $b ?>/<?= $slug ?>"<?= $cp === $slug ? ' class="active" aria-current="page"' : '' ?>><?= $label ?></a>
  <?php endforeach; ?>
  <?php if (APP_LOGIN_URL !== ''): ?>
  <a href="<?= htmlspecialchars(APP_LOGIN_URL) ?>">Log In</a>
  <?php endif; ?>
  <a href="<?= $b ?>/contact#demo" class="btn btn-primary">Get Free Demo</a>
</div>

<?php
/**
 * includes/nav.php
 * Site-wide navigation + mobile drawer.
 * Uses $current_page (slug string) set in each page file for active-state highlighting.
 * Uses SITE_BASE constant (defined in header.php) for portable href paths.
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
?>

<nav class="nav" id="nav" aria-label="Main navigation">
  <div class="container">
    <div class="nav-inner">
      <a href="<?= $b ?>/" class="nav-logo" aria-label="Mark Attendance – Home">
        <img src="<?= $b ?>/assets/logo.png" alt="Mark Attendance" class="nav-logo-img">
      </a>
      <nav class="nav-links" aria-label="Site pages">
        <?php foreach ($nav_links as $slug => $label): ?>
        <a href="<?= $b ?>/<?= $slug ?>"<?= $cp === $slug ? ' class="active" aria-current="page"' : '' ?>><?= $label ?></a>
        <?php endforeach; ?>
      </nav>
      <div class="nav-actions">
        <a href="<?= $b ?>/contact" class="btn btn-outline btn-sm">Log In</a>
        <a href="<?= $b ?>/contact#demo" class="btn btn-primary btn-sm">Get Free Demo</a>
        <button class="hamburger" id="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-drawer">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </div>
</nav>
<div class="nav-drawer" id="nav-drawer" aria-label="Mobile navigation">
  <a href="<?= $b ?>/"<?= $cp === 'home' ? ' class="active"' : '' ?>>Home</a>
  <?php foreach ($nav_links as $slug => $label): ?>
  <a href="<?= $b ?>/<?= $slug ?>"<?= $cp === $slug ? ' class="active"' : '' ?>><?= $label ?></a>
  <?php endforeach; ?>
  <a href="<?= $b ?>/contact#demo" class="btn btn-primary">Get Free Demo</a>
</div>

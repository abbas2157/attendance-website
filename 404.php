<?php
http_response_code(404);
$page_title       = 'Page Not Found | Mark Attendance';
$meta_description = 'The page you were looking for could not be found.';
$canonical_url    = 'https://markattendance.io/';
$noindex          = true;
$current_page     = '404';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="page-body" id="main-content">
  <section class="page-hero not-found">
    <div class="container">
      <p class="not-found-code" aria-hidden="true">404</p>
      <h1>We couldn't find that page</h1>
      <p>The link may be old or mistyped. Try searching, or head back to the home page.</p>
      <form class="search-form search-form-page" action="<?= SITE_BASE ?>/search" method="get" role="search">
        <label for="nf-search" class="sr-only">Search Mark Attendance</label>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="search" id="nf-search" name="q" placeholder="Search the site…" required minlength="2">
        <button type="submit" class="btn btn-primary btn-sm">Search</button>
      </form>
      <div class="not-found-links">
        <a href="<?= SITE_BASE ?>/" class="btn btn-primary">Go to Home</a>
        <a href="<?= SITE_BASE ?>/contact" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

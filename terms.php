<?php
$page_title       = 'Terms of Service | Mark Attendance';
$meta_description = 'The terms that apply when you use the Mark Attendance website, request a demo or contact our team.';
$canonical_url    = 'https://markattendance.io/terms';
$current_page     = 'terms';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="page-body" id="main-content">
  <section class="page-hero page-hero-compact">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= SITE_BASE ?>/">Home</a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">Terms of Service</span>
      </nav>
      <h1>Terms of Service</h1>
      <p>Last updated: 18 October 2026</p>
    </div>
  </section>

  <section class="section">
    <div class="container legal">
      <p>These terms apply to your use of the website at <strong>markattendance.io</strong>, which is operated by Mark Attendance, Lahore, Pakistan. By using the website you agree to them. Your use of the Mark Attendance app, dashboard and paid plans is governed by the separate agreement or order form you sign with us. If that agreement conflicts with these terms, the agreement wins.</p>

      <h2>1. Information on this website</h2>
      <p>We try to keep the content on this website accurate and up to date, including features, plan limits and prices. It is provided for general information only and may change without notice. Prices and plan details are confirmed in your quote or order form.</p>

      <h2>2. Acceptable use</h2>
      <p>You agree not to:</p>
      <ul>
        <li>use the website for anything unlawful, or to send spam through our forms;</li>
        <li>try to gain unauthorised access to the website, its servers or any connected system;</li>
        <li>interfere with the website's normal operation, for example by overloading it or introducing malware;</li>
        <li>copy or scrape the website's content in bulk.</li>
      </ul>

      <h2>3. Intellectual property</h2>
      <p>The Mark Attendance name, logo, website design, text and graphics belong to us or our licensors. You may view and share pages for personal or internal business use, but you may not reproduce them for commercial purposes without our written permission.</p>

      <h2>4. Links to other websites</h2>
      <p>The website may link to other websites, such as app stores, WhatsApp or social networks. We are not responsible for their content or privacy practices.</p>

      <h2>5. Free demos and trials</h2>
      <p>Demos and free trials are offered at our discretion and may be changed or withdrawn at any time. Any trial terms we confirm to you in writing take priority over this section.</p>

      <h2>6. Disclaimer</h2>
      <p>The website is provided “as is”. To the extent the law allows, we make no warranties about it and are not liable for any loss arising from your use of it, or from relying on its content.</p>

      <h2>7. Privacy</h2>
      <p>Our <a href="<?= SITE_BASE ?>/privacy-policy">Privacy Policy</a> explains how we handle information you send us through the website.</p>

      <h2>8. Governing law</h2>
      <p>These terms are governed by the laws of Pakistan, and the courts of Lahore have jurisdiction over any dispute about them.</p>

      <h2>9. Changes</h2>
      <p>We may update these terms from time to time. The date at the top of this page shows when they last changed.</p>

      <h2>10. Contact</h2>
      <p>Questions about these terms? Email <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a>.</p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

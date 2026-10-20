<?php
$page_title       = 'Privacy Policy | Mark Attendance';
$meta_description = 'How Mark Attendance collects, uses and protects information submitted through this website, including cookies and contact-form data.';
$canonical_url    = 'https://markattendance.io/privacy-policy';
$current_page     = 'privacy-policy';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="page-body" id="main-content">
  <section class="page-hero page-hero-compact">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= SITE_BASE ?>/">Home</a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">Privacy Policy</span>
      </nav>
      <h1>Privacy Policy</h1>
      <p>Last updated: 18 October 2026</p>
    </div>
  </section>

  <section class="section">
    <div class="container legal">
      <p>This policy explains what information Mark Attendance (“we”, “us”) collects when you visit <strong>markattendance.io</strong> or contact us, and how we use it. It covers this website only. Data processed inside the Mark Attendance app and dashboard for our customers is covered by the customer agreement for that service.</p>

      <h2>1. Information we collect</h2>
      <ul>
        <li><strong>Contact form:</strong> your name, email address and message, plus your company and phone number if you give them.</li>
        <li><strong>Campaign information:</strong> if you arrived through an ad or a tracked link, we record the campaign tags in that link (such as <code>utm_source</code> and <code>utm_campaign</code>), the first page you landed on, and the referring website. These are saved with your form submission.</li>
        <li><strong>WhatsApp, email and phone:</strong> if you contact us through these channels, we receive whatever you send us and your contact details on that service.</li>
        <li><strong>Technical data:</strong> our web server keeps standard logs (IP address, browser type, pages requested and time) for security and troubleshooting.</li>
      </ul>

      <h2>2. How we use it</h2>
      <ul>
        <li>To reply to your enquiry, arrange a demo or give you a quote.</li>
        <li>To understand which marketing campaigns bring people to our website.</li>
        <li>To keep the website secure and prevent spam and abuse.</li>
      </ul>
      <p>We do not sell your personal information. We do not use your contact-form details for marketing emails unless you ask us to.</p>

      <h2 id="cookies">3. Cookies and similar storage</h2>
      <p>When you first visit, a banner lets you choose which cookies we use.</p>
      <ul>
        <li><strong>Essential (always on):</strong> your browser's local storage remembers your cookie choice and keeps campaign tags for your visit so they can be attached to a form you send. Nothing here is shared with third parties.</li>
        <li><strong>Analytics (only if you choose “Accept all”):</strong> if we use Google Analytics, it sets cookies that measure visits and page views in aggregate. Google's handling of this data is described in <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
      </ul>
      <p>To change your choice, <button type="button" class="link-btn" data-cookie-reset>reopen the cookie settings</button>, or clear this site's data in your browser.</p>

      <h2>4. Who we share it with</h2>
      <p>We share information only with service providers who help us run this website and respond to you, such as our web host, our email provider and (if you accept analytics) Google. They may use it only to provide their service to us. We may also disclose information if the law requires it.</p>

      <h2>5. How long we keep it</h2>
      <p>We keep enquiries for as long as we need them to deal with your request and any business relationship that follows, and then for up to 24 months. Server logs are kept for a shorter period. You can ask us to delete your enquiry at any time.</p>

      <h2>6. Security</h2>
      <p>The website is served over HTTPS, and form submissions are stored in a location that cannot be reached from the web. No method of transmission or storage is completely secure, but we take reasonable steps to protect your information.</p>

      <h2>7. Your choices and rights</h2>
      <p>You can ask us what information we hold about you, or ask us to correct or delete it, by emailing <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a>. We will reply within 30 days.</p>

      <h2>8. Children</h2>
      <p>This website is meant for businesses and is not directed at children under 16.</p>

      <h2>9. Changes to this policy</h2>
      <p>If we change this policy, we will update the date at the top of this page.</p>

      <h2>10. Contact us</h2>
      <p>Mark Attendance, Lahore, Pakistan<br>
        Email: <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a><br>
        Phone: <a href="tel:<?= CONTACT_PHONE_E164 ?>"><?= CONTACT_PHONE ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

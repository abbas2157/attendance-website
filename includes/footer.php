<?php $b = SITE_BASE; ?>
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="footer-brand-logo">
          <div class="logo-icon" aria-hidden="true">
            <svg viewBox="0 0 20 20" fill="none"><path d="M3 10L8 15L17 5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <span><span class="logo-mark">Mark</span> Attendance</span>
        </div>
        <p>Smart face recognition attendance management for offices, factories, warehouses, and businesses of all sizes. Be on time.</p>
        <div class="footer-dl" aria-label="Download the app">
          <?= store_badge('play', 'footer-dl-btn') ?>
          <?= store_badge('apple', 'footer-dl-btn') ?>
        </div>
      </div>

      <div class="footer-col">
        <h5>Product</h5>
        <ul>
          <li><a href="<?= $b ?>/features">Features</a></li>
          <li><a href="<?= $b ?>/how-it-works">How It Works</a></li>
          <li><a href="<?= $b ?>/mobile-app">Mobile App</a></li>
          <li><a href="<?= $b ?>/pricing">Pricing</a></li>
          <li><a href="<?= $b ?>/contact#demo">Free Demo</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Company</h5>
        <ul>
          <li><a href="<?= $b ?>/about">About Us</a></li>
          <li><a href="<?= $b ?>/industries">Industries</a></li>
          <li><a href="<?= $b ?>/contact">Contact</a></li>
          <li><a href="<?= $b ?>/privacy-policy">Privacy Policy</a></li>
          <li><a href="<?= $b ?>/terms">Terms of Service</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Contact</h5>
        <div class="f-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a>
          <button type="button" class="copy-btn copy-btn-dark" data-copy="<?= CONTACT_EMAIL ?>" aria-label="Copy email address">Copy</button>
        </div>
        <div class="f-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          <a href="tel:<?= CONTACT_PHONE_E164 ?>"><?= CONTACT_PHONE ?></a>
          <button type="button" class="copy-btn copy-btn-dark" data-copy="<?= CONTACT_PHONE ?>" aria-label="Copy phone number">Copy</button>
        </div>
        <div class="f-contact-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span><?= htmlspecialchars(CONTACT_ADDRESS) ?></span>
        </div>
      </div>
    </div>

    <hr class="footer-hr">

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Mark Attendance. All rights reserved. <em>Be on time.</em></p>
      <?php $social = social_links('f-soc'); if ($social !== ''): ?>
      <div class="f-social" aria-label="Social media links"><?= $social ?></div>
      <?php endif; ?>
    </div>
  </div>
</footer>

<!-- Floating actions: WhatsApp + back to top -->
<a href="<?= htmlspecialchars(whatsapp_url()) ?>" class="wa-float" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
  <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"><path d="M16.04 3C9.4 3 4 8.38 4 15.01c0 2.12.56 4.19 1.62 6.01L4 29l8.17-1.58a12.04 12.04 0 003.87.64h.01C22.68 28.06 28 22.68 28 16.05 28 9.4 22.68 3 16.04 3zm0 22.9h-.01a9.9 9.9 0 01-5.05-1.38l-.36-.21-4.85.94.97-4.71-.24-.38a9.86 9.86 0 01-1.52-5.15c0-5.47 4.46-9.92 9.95-9.92 2.66 0 5.15 1.04 7.03 2.92a9.85 9.85 0 012.91 7.02c0 5.48-4.46 9.87-9.83 9.87zm5.44-7.4c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48a9 9 0 01-1.66-2.07c-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.49s1.07 2.89 1.22 3.09c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.69.62.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35z"/></svg>
  <span class="wa-float-label">Chat with us</span>
</a>
<button type="button" class="back-to-top" id="back-to-top" aria-label="Back to top">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<!-- Cookie banner (shown by main.js until the visitor chooses) -->
<div class="cookie-banner" id="cookie-banner" role="region" aria-label="Cookie notice" hidden>
  <p>We use essential cookies to run this site and, with your permission, analytics cookies to understand how it's used. <a href="<?= $b ?>/privacy-policy#cookies">Learn more</a></p>
  <div class="cookie-actions">
    <button type="button" class="btn btn-outline btn-sm" data-cookie="essential">Essential only</button>
    <button type="button" class="btn btn-primary btn-sm" data-cookie="all">Accept all</button>
  </div>
</div>

<div class="toast" id="toast" role="status" aria-live="polite"></div>

<script>window.SITE = { base: <?= json_encode($b) ?>, ga4: <?= json_encode(GA4_MEASUREMENT_ID) ?>, email: <?= json_encode(CONTACT_EMAIL) ?> };</script>
<script src="<?= asset('/js/main.js') ?>" defer></script>
</body>
</html>

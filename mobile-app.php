<?php
$page_title          = 'Mobile App | Mark Attendance – Android & iOS Attendance App';
$meta_description    = 'The Mark Attendance app for Android and iOS is coming soon. Clock in with your face at your site — geofenced, verified in seconds, every attempt logged.';
$canonical_url       = 'https://markattendance.io/mobile-app';
$og_description      = 'The Mark Attendance app for Android and iOS is coming soon. Clock in with your face at your site — geofenced, verified in seconds, every attempt logged.';
$twitter_description = 'The Mark Attendance app for Android and iOS is coming soon. Clock in with your face at your site — geofenced, verified in seconds, every attempt logged.';
$current_page        = 'mobile-app';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "MobileApplication",
    "name": "Mark Attendance",
    "description": "Smart face recognition attendance management app for Android and iOS. Mark, manage, and monitor attendance anywhere, anytime.",
    "url": "https://markattendance.io/mobile-app",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": ["Android", "iOS"],
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "USD"
    },
    "author": {
      "@type": "Organization",
      "name": "Mark Attendance",
      "url": "https://markattendance.io"
    },
    "featureList": [
      "Face-Verified Check-In and Check-Out",
      "Geofenced Site Detection",
      "Leave Requests and Approvals",
      "Attendance History",
      "Fast Staff Enrollment",
      "Light and Dark Themes"
    ]
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- ── Page Body ────────────────────────────────────────────── -->
<main class="page-body" id="main-content">

  <!-- ══════════════════════════════════════════════════════════
       1. PAGE HERO — Dark App Section
  ══════════════════════════════════════════════════════════════ -->
  <section class="app-hero" aria-labelledby="app-hero-heading">
    <div class="container">
      <div class="app-hero-grid">

        <!-- Left: Content -->
        <div class="app-hero-content">
          <span class="tag light reveal d1">Mobile App</span>
          <h2 id="app-hero-heading" class="reveal d2">Attendance in Your Pocket</h2>
          <p class="reveal d2">The Mark Attendance app, coming soon to Android and iOS, will bring face recognition attendance to your phone or tablet. Mark, manage, and monitor — anywhere, anytime.</p>

          <!-- Download Badges -->
          <div class="app-badges reveal d3">
            <?= store_badge('play', 'app-badge') ?>
            <?= store_badge('apple', 'app-badge') ?>
          </div>

          <!-- Bullet Points -->
          <ul class="app-bullets reveal d4" aria-label="App highlights">
            <li class="app-bullet">
              <span class="bullet-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              One-tap face check-in and check-out
            </li>
            <li class="app-bullet">
              <span class="bullet-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              Geofenced — knows when you're on site
            </li>
            <li class="app-bullet">
              <span class="bullet-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              Apply for leave in a tap
            </li>
            <li class="app-bullet">
              <span class="bullet-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              Your last 30 days, always visible
            </li>
            <li class="app-bullet">
              <span class="bullet-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              Every attempt logged with match confidence
            </li>
            <li class="app-bullet">
              <span class="bullet-check" aria-hidden="true">
                <svg viewBox="0 0 12 12" fill="none"><path d="M2 6l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
              Works on Android 8+ and iOS 13+
            </li>
          </ul>
        </div>

        <!-- Right: Phone Mockups — real app screenshots -->
        <div class="phones-pair reveal d3" aria-hidden="true">
          <div class="phone-card sec">
            <div class="phone-card-inner">
              <img class="phone-card-shot" src="<?= SITE_BASE ?>/assets/app-screens/home.webp" alt="" width="760" height="1648" fetchpriority="high">
            </div>
          </div>
          <div class="phone-card pri">
            <div class="phone-card-inner">
              <img class="phone-card-shot" src="<?= SITE_BASE ?>/assets/app-screens/checked-in.webp" alt="" width="760" height="1648" fetchpriority="high">
            </div>
          </div>
        </div><!-- /phones-pair -->
      </div><!-- /app-hero-grid -->
    </div><!-- /container -->
  </section>


  <!-- ══════════════════════════════════════════════════════════
       2. APP FEATURES SECTION
  ══════════════════════════════════════════════════════════════ -->
  <section class="section" aria-labelledby="app-features-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">App Capabilities</span>
        <h2 id="app-features-heading">What You Can Do in the App</h2>
        <p>Check in with your face, see your month, request leave, and enrol new staff — right from your phone.</p>
      </div>

      <div class="features-grid">

        <!-- 1 -->
        <article class="feat-card reveal d1">
          <div class="feat-icon p" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="5"/><path d="M3 20c0-4 4-7 9-7s9 3 9 7"/><path d="M9 8l2 2 4-4" stroke-width="1.8"/></svg>
          </div>
          <h3>One-Tap Face Scan</h3>
          <p>Enter your attendance code, look at the camera, done. The frame is verified against your own enrolled samples — never the whole workforce.</p>
        </article>

        <!-- 2 -->
        <article class="feat-card reveal d2">
          <div class="feat-icon b" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <h3>Geofenced Sites</h3>
          <p>The app confirms you're inside a company warehouse or premises before the camera even opens. Each site sets its own radius.</p>
        </article>

        <!-- 3 -->
        <article class="feat-card reveal d3">
          <div class="feat-icon o" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 6l5 6-5 6"/><path d="M23 6l-5 6 5 6"/><line x1="12" y1="3" x2="12" y2="21"/></svg>
          </div>
          <h3>Leave in a Tap</h3>
          <p>Prove it's you with a quick face scan, pick a date, a paid or unpaid type, and a reason. HR decides from the web dashboard.</p>
        </article>

        <!-- 4 -->
        <article class="feat-card reveal d1">
          <div class="feat-icon c" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
          </div>
          <h3>My Attendance</h3>
          <p>Your last 30 days at a glance — days present, hours worked, and every check-in and check-out, including HR corrections.</p>
        </article>

        <!-- 5 -->
        <article class="feat-card reveal d2">
          <div class="feat-icon p" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3>Enrol Staff in a Minute</h3>
          <p>Admins add employees right from the phone: three live face samples, an optional one with glasses, and they're ready to clock in.</p>
        </article>

        <!-- 6 -->
        <article class="feat-card reveal d3">
          <div class="feat-icon b" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><rect x="2" y="7" width="6" height="10" rx="1"/><rect x="16" y="7" width="6" height="10" rx="1"/></svg>
          </div>
          <h3>Shared Device or Own Phone</h3>
          <p>One app for the shared device at the gate or each employee's own phone. A single company code links a device to your organization.</p>
        </article>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════════════════════
       3. PLATFORM REQUIREMENTS
  ══════════════════════════════════════════════════════════════ -->
  <section class="section section-alt" aria-labelledby="platform-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">Compatibility</span>
        <h2 id="platform-heading">Works on Your Device</h2>
        <p>The Mark Attendance app is built for modern Android and iOS devices. Minimal requirements, maximum performance.</p>
      </div>

      <div class="platform-grid">

        <!-- Android -->
        <div class="platform-card reveal d1">
          <div class="platform-header">
            <div class="platform-icon android" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="#3DDC84" width="28" height="28"><path d="M6 18c0 .55.45 1 1 1h1v3.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V19h2v3.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V19h1c.55 0 1-.45 1-1V8H6v10zm-2.5-9C2.67 9 2 9.67 2 10.5v7c0 .83.67 1.5 1.5 1.5S5 18.33 5 17.5v-7C5 9.67 4.33 9 3.5 9zm17 0c-.83 0-1.5.67-1.5 1.5v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-7c0-.83-.67-1.5-1.5-1.5zm-4.97-5.84l1.3-1.3c.2-.2.2-.51 0-.71-.2-.2-.51-.2-.71 0l-1.48 1.48A5.84 5.84 0 0012 2c-.96 0-1.86.23-2.66.63L7.85 1.15c-.2-.2-.51-.2-.71 0-.2.2-.2.51 0 .71l1.31 1.31A5.983 5.983 0 006 8h12c0-1.99-.97-3.75-2.47-4.84zM10 6H9V5h1v1zm5 0h-1V5h1v1z"/></svg>
            </div>
            <div>
              <h3>Android</h3>
              <p class="platform-sub">Coming soon to Google Play</p>
            </div>
          </div>
          <ul class="req-list" aria-label="Android requirements">
            <li class="req-item">
              <div class="req-icon purple" aria-hidden="true">&#128242;</div>
              <div>
                <div class="req-label">OS Version</div>
                <div class="req-val">Android 8.0 (Oreo) or higher</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon blue" aria-hidden="true">&#129520;</div>
              <div>
                <div class="req-label">RAM</div>
                <div class="req-val">2 GB minimum (4 GB recommended)</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon orange" aria-hidden="true">&#128247;</div>
              <div>
                <div class="req-label">Camera</div>
                <div class="req-val">Front camera, 5 MP or higher</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon coral" aria-hidden="true">&#128190;</div>
              <div>
                <div class="req-label">Storage</div>
                <div class="req-val">80 MB free space</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon green" aria-hidden="true">&#128274;</div>
              <div>
                <div class="req-label">Permissions</div>
                <div class="req-val">Camera, Location (optional), Notifications</div>
              </div>
            </li>
          </ul>
        </div>

        <!-- iOS -->
        <div class="platform-card reveal d2">
          <div class="platform-header">
            <div class="platform-icon apple" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="#1C1C1E" width="28" height="28"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
            </div>
            <div>
              <h3>iOS (iPhone &amp; iPad)</h3>
              <p class="platform-sub">Coming soon to the App Store</p>
            </div>
          </div>
          <ul class="req-list" aria-label="iOS requirements">
            <li class="req-item">
              <div class="req-icon purple" aria-hidden="true">&#128242;</div>
              <div>
                <div class="req-label">OS Version</div>
                <div class="req-val">iOS 13.0 or higher</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon blue" aria-hidden="true">&#129520;</div>
              <div>
                <div class="req-label">Device</div>
                <div class="req-val">iPhone 7 or newer, iPad (6th gen+)</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon orange" aria-hidden="true">&#128247;</div>
              <div>
                <div class="req-label">Camera</div>
                <div class="req-val">TrueDepth or standard front camera</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon coral" aria-hidden="true">&#128190;</div>
              <div>
                <div class="req-label">Storage</div>
                <div class="req-val">90 MB free space</div>
              </div>
            </li>
            <li class="req-item">
              <div class="req-icon green" aria-hidden="true">&#128274;</div>
              <div>
                <div class="req-label">Permissions</div>
                <div class="req-val">Camera, Face ID (optional), Notifications</div>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>


  <?php /* App screenshots slider + lightbox (shared with the home page) */ ?>
  <?php require __DIR__ . '/includes/app-screens.php'; ?>


  <!-- ══════════════════════════════════════════════════════════
       5. DOWNLOAD CTA SECTION
  ══════════════════════════════════════════════════════════════ -->
  <section class="cta-band" aria-labelledby="cta-download-heading">
    <div class="container">
      <?php if (apps_live()): ?>
      <h2 id="cta-download-heading" class="reveal">Download Free. Start Today.</h2>
      <p class="reveal d1">Available on Android and iOS. No credit card required.</p>
      <?php else: ?>
      <h2 id="cta-download-heading" class="reveal">Coming Soon to Android &amp; iOS.</h2>
      <p class="reveal d1">Want early access? <a href="<?= SITE_BASE ?>/contact?subject=demo#demo" class="cta-inline-link">Book a free demo</a> and we'll set your team up first.</p>
      <?php endif; ?>
      <div class="dl-badges reveal d2">
        <?= store_badge('play', 'dl-badge') ?>
        <?= store_badge('apple', 'dl-badge') ?>
      </div>
    </div>
  </section>

</main>


<!-- ── Footer ───────────────────────────────────────────────── -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>

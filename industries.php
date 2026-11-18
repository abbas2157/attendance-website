<?php
$page_title          = 'Industries | Attendance for Offices, Factories & Warehouses';
$meta_description    = 'Mark Attendance serves offices, factories & mills, warehouses, and all businesses. Smart face recognition attendance tailored to every industry.';
$canonical_url       = 'https://markattendance.io/industries';
$og_description      = 'Mark Attendance serves offices, factories & mills, warehouses, and all businesses. Smart face recognition attendance tailored to every industry.';
$twitter_description = 'Mark Attendance serves offices, factories & mills, warehouses, and all businesses. Smart face recognition attendance tailored to every industry.';
$current_page        = 'industries';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Mark Attendance",
    "url": "https://markattendance.io",
    "logo": "https://markattendance.io/assets/icon-512.png",
    "description": "Smart face recognition attendance management system serving offices, factories, mills, warehouses, and businesses of all sizes.",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+92-306-4164077",
      "contactType": "customer service",
      "email": "info@markattendance.io",
      "areaServed": "PK",
      "availableLanguage": ["English", "Urdu"]
    },
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Lahore",
      "addressCountry": "PK"
    },
    "sameAs": []
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- Main content -->
  <main class="page-body" id="main-content">

    <!-- 1. PAGE HERO -->
    <section class="page-hero" aria-label="Industries hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?= SITE_BASE ?>/">Home</a>
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M4.5 2.5L7.5 6L4.5 9.5" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span aria-current="page">Industries</span>
        </nav>
        <span class="tag">Industries</span>
        <h1>Attendance Management for Every Industry</h1>
        <p>From corporate offices to factory floors — Mark Attendance adapts to how your organisation works.</p>
      </div>
    </section>

    <!-- 2. INDUSTRIES OVERVIEW -->
    <section class="section" aria-labelledby="industries-overview-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="tag">Who We Serve</span>
          <h2 id="industries-overview-heading">Built for Every Work Environment</h2>
          <p>Whether you run a small office or a multi-site factory, Mark Attendance is designed to fit your operational reality.</p>
        </div>
        <div class="ind-grid ind-grid-lg" role="list">

          <!-- Offices -->
          <article class="ind-card v-purple reveal d1" role="listitem">
            <div class="ic" aria-hidden="true">🏢</div>
            <h3>Offices</h3>
            <p>Manage employee punctuality, hybrid work schedules, and multi-department reporting in one place.</p>
            <a href="#offices" class="more" aria-label="Learn more about attendance for offices">
              Learn more
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7.5 4.5L10 7l-2.5 2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </article>

          <!-- Factories & Mills -->
          <article class="ind-card v-blue reveal d2" role="listitem">
            <div class="ic" aria-hidden="true">🏭</div>
            <h3>Factories &amp; Mills</h3>
            <p>Rugged attendance tracking for shift workers with overtime, safety compliance, and worker ID management.</p>
            <a href="#factories" class="more" aria-label="Learn more about attendance for factories and mills">
              Learn more
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7.5 4.5L10 7l-2.5 2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </article>

          <!-- Warehouses -->
          <article class="ind-card v-orange reveal d3" role="listitem">
            <div class="ic" aria-hidden="true">📦</div>
            <h3>Warehouses</h3>
            <p>Track workforce across large spaces with multi-entry-point detection and real-time floor visibility.</p>
            <a href="#warehouses" class="more" aria-label="Learn more about attendance for warehouses">
              Learn more
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7.5 4.5L10 7l-2.5 2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </article>

          <!-- All Businesses -->
          <article class="ind-card v-coral reveal d4" role="listitem">
            <div class="ic" aria-hidden="true">💼</div>
            <h3>All Businesses</h3>
            <p>Flexible and scalable — from small teams to large multi-site workforces. Grows with you.</p>
            <a href="#businesses" class="more" aria-label="Learn more about attendance for all businesses">
              Learn more
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7.5 4.5L10 7l-2.5 2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </article>

        </div>
      </div>
    </section>

    <!-- 3a. INDUSTRY DETAIL — OFFICES (text-left) -->
    <section class="section section-alt" id="offices" aria-labelledby="offices-heading">
      <div class="container">
        <div class="ind-detail-grid">

          <!-- Text Side -->
          <div class="ind-detail-text reveal">
            <span class="tag">Corporate</span>
            <h2 id="offices-heading">Perfect for Corporate Offices</h2>
            <p>Streamline how your HR team manages attendance across departments, floors, and hybrid teams. Mark Attendance gives office managers a complete, real-time picture of workforce presence — without the paperwork.</p>
            <ul class="ind-benefits" aria-label="Office solution benefits">
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-purple" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Flexible shift scheduling for staggered and fixed-hour offices</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-purple" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Remote and hybrid work tracking with location-aware check-in</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-purple" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Department-level reporting and real-time head-count analytics</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-purple" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Seamless HR system integration via REST API and CSV export</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-purple" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Visitor management support with temporary access logging</span>
              </li>
            </ul>
          </div>

          <!-- Visual Side -->
          <div class="ind-detail-visual reveal d2">
            <div class="ind-visual-card vc-purple" aria-hidden="true">
              <div class="ind-big-emoji">🏢</div>
              <div class="ind-visual-label">Corporate Office</div>
              <div class="ind-visual-sublabel">Hybrid &amp; On-Site Workforce</div>
              <div class="ind-visual-pills">
                <span class="ind-v-pill pp">Hybrid Tracking</span>
                <span class="ind-v-pill pb">HR Integration</span>
                <span class="ind-v-pill pp">Dept Reports</span>
                <span class="ind-v-pill pb">Visitor Logs</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 3b. INDUSTRY DETAIL — FACTORIES & MILLS (text-right / visual-left) -->
    <section class="section" id="factories" aria-labelledby="factories-heading">
      <div class="container">
        <div class="ind-detail-grid reverse">

          <!-- Visual Side (left on desktop) -->
          <div class="ind-detail-visual reveal d1">
            <div class="ind-visual-card vc-blue" aria-hidden="true">
              <div class="ind-big-emoji anim-delay-06">🏭</div>
              <div class="ind-visual-label">Factory &amp; Mill Floor</div>
              <div class="ind-visual-sublabel">Multi-Shift Industrial Workforce</div>
              <div class="ind-visual-pills">
                <span class="ind-v-pill pb">Shift Rotation</span>
                <span class="ind-v-pill pp">Overtime Logs</span>
                <span class="ind-v-pill pb">Safety Compliance</span>
                <span class="ind-v-pill pp">Bulk Enroll</span>
              </div>
            </div>
          </div>

          <!-- Text Side (right on desktop) -->
          <div class="ind-detail-text reveal d2">
            <span class="tag">Industrial</span>
            <h2 id="factories-heading">Built for Factory Floors</h2>
            <p>Factory and mill environments demand robust, high-volume attendance tools. Mark Attendance is engineered to handle large shift rotations, night hours, and compliance requirements without missing a beat.</p>
            <ul class="ind-benefits" aria-label="Factory solution benefits">
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-blue" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Multi-shift rotation management with automatic handover tracking</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-blue" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Overtime and night-shift tracking with accurate hour calculations</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-blue" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Worker safety compliance logs linked to attendance events</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-blue" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Rugged device support for harsh industrial environments</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-blue" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Bulk enrollment for large workforces via spreadsheet or ID card import</span>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- 3c. INDUSTRY DETAIL — WAREHOUSES (text-left) -->
    <section class="section section-alt" id="warehouses" aria-labelledby="warehouses-heading">
      <div class="container">
        <div class="ind-detail-grid">

          <!-- Text Side -->
          <div class="ind-detail-text reveal">
            <span class="tag">Logistics</span>
            <h2 id="warehouses-heading">Visibility Across Every Bay</h2>
            <p>Warehouses operate around the clock across large, multi-zone spaces. Mark Attendance gives logistics managers real-time visibility of every worker, at every entry point, across every shift — all from one dashboard.</p>
            <ul class="ind-benefits" aria-label="Warehouse solution benefits">
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-orange" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Multi-gate entry and exit tracking across all access points</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-orange" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Forklift operator time logging and shift assignment records</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-orange" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Contractor and temporary worker management with time-bound access</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-orange" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Zone-level attendance visibility for large multi-bay facilities</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-orange" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Integration with WMS systems for unified operations reporting</span>
              </li>
            </ul>
          </div>

          <!-- Visual Side -->
          <div class="ind-detail-visual reveal d2">
            <div class="ind-visual-card vc-orange" aria-hidden="true">
              <div class="ind-big-emoji anim-delay-03">📦</div>
              <div class="ind-visual-label">Warehouse &amp; Logistics</div>
              <div class="ind-visual-sublabel">Multi-Gate, Multi-Zone Tracking</div>
              <div class="ind-visual-pills">
                <span class="ind-v-pill po">Multi-Gate</span>
                <span class="ind-v-pill pc">Zone Visibility</span>
                <span class="ind-v-pill po">WMS Integration</span>
                <span class="ind-v-pill pc">Contractors</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 3d. INDUSTRY DETAIL — ALL BUSINESSES (text-right / visual-left) -->
    <section class="section" id="businesses" aria-labelledby="businesses-heading">
      <div class="container">
        <div class="ind-detail-grid reverse">

          <!-- Visual Side (left on desktop) -->
          <div class="ind-detail-visual reveal d1">
            <div class="ind-visual-card vc-coral" aria-hidden="true">
              <div class="ind-big-emoji anim-delay-09">💼</div>
              <div class="ind-visual-label">All Business Types</div>
              <div class="ind-visual-sublabel">Startup to Enterprise, Cloud-Native</div>
              <div class="ind-visual-pills">
                <span class="ind-v-pill pc">Any Team Size</span>
                <span class="ind-v-pill po">Multi-Branch</span>
                <span class="ind-v-pill pc">Cloud-Native</span>
                <span class="ind-v-pill po">24/7 Support</span>
              </div>
            </div>
          </div>

          <!-- Text Side (right on desktop) -->
          <div class="ind-detail-text reveal d2">
            <span class="tag">Flexible</span>
            <h2 id="businesses-heading">Scales With Your Business</h2>
            <p>From a small retail shop to a large multi-site enterprise, Mark Attendance is built to flex to your scale. No on-premise hardware. No infrastructure headaches. Just a platform that grows alongside your organisation.</p>
            <ul class="ind-benefits" aria-label="All business solution benefits">
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-coral" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Scales from small teams to large multi-site workforces without reconfiguration</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-coral" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Multi-branch centralised control from a single admin dashboard</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-coral" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Role-based access for managers, HR, and branch supervisors</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-coral" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Cloud-native — no on-premise hardware, no IT maintenance required</span>
              </li>
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-coral" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>24/7 customer support with dedicated onboarding assistance</span>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. KEY FACTS -->
    <div class="stats-bar" role="region" aria-label="Key product facts">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="n" data-count="2" data-suffix=" min" aria-label="About 2 minutes to enrol an employee">2 min</div>
            <div class="l">To Enrol an Employee</div>
          </div>
          <div class="stat-item">
            <div class="n" data-count="1" data-suffix=" day" aria-label="Set up in 1 day">1 day</div>
            <div class="l">To Set Up</div>
          </div>
          <div class="stat-item">
            <div class="n" data-count="100" data-suffix="%" aria-label="100 percent of attempts logged for audit">100%</div>
            <div class="l">Attempts Logged</div>
          </div>
          <div class="stat-item">
            <div class="n" data-count="24" data-suffix="/7" aria-label="24/7 support">24/7</div>
            <div class="l">Support</div>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. WHAT EACH INDUSTRY GETS -->
    <section class="section section-alt" aria-labelledby="industry-benefits-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="tag">At a Glance</span>
          <h2 id="industry-benefits-heading">What Mark Attendance Solves for You</h2>
          <p>The everyday attendance problems we designed Mark Attendance to fix, by type of workplace.</p>
        </div>
        <div class="testi-grid" role="list">

          <!-- Offices -->
          <article class="testi-card reveal d1" role="listitem">
            <h3>Offices</h3>
            <p>Automated daily reports for HR instead of chasing attendance sheets across floors and departments, with shift scheduling for fixed and staggered hours.</p>
          </article>

          <!-- Factories & Mills -->
          <article class="testi-card reveal d2" role="listitem">
            <h3>Factories &amp; Mills</h3>
            <p>Multi-shift rotations, overtime, and night hours tracked automatically — and every check-in is tied to a face, so nobody can sign in for a colleague.</p>
          </article>

          <!-- Warehouses -->
          <article class="testi-card reveal d3" role="listitem">
            <h3>Warehouses</h3>
            <p>Entry and exit tracking across multiple gates, contractor time logs, and zone-level visibility in one dashboard — every gate geofenced to its own premises.</p>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. CTA BANNER -->
    <section class="cta-band" aria-labelledby="industries-cta-heading">
      <div class="container">
        <h2 id="industries-cta-heading">Your Industry. Your Rules. Our Platform.</h2>
        <p>Get a customised demo for your specific use case.</p>
        <div class="cta-btns">
          <button class="btn btn-ghost btn-lg" data-action="watch-demo" aria-label="Watch an industry demo video">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
            Watch Industry Demo
          </button>
          <a href="<?= SITE_BASE ?>/contact#demo" class="btn btn-ghost btn-lg">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            Talk to an Expert
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
$page_title          = 'Industries | Mark Attendance – Attendance for Offices, Factories & Warehouses';
$meta_description    = 'Mark Attendance serves offices, factories & mills, warehouses, and all businesses. Smart face recognition attendance tailored to every industry.';
$canonical_url       = 'https://www.markattendance.com/industries';
$og_description      = 'Mark Attendance serves offices, factories & mills, warehouses, and all businesses. Smart face recognition attendance tailored to every industry.';
$og_image            = 'https://www.markattendance.com/assets/og-image.png';
$twitter_description = 'Mark Attendance serves offices, factories & mills, warehouses, and all businesses. Smart face recognition attendance tailored to every industry.';
$twitter_image       = 'https://www.markattendance.com/assets/og-image.png';
$noindex             = true;
$current_page        = 'industries';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Mark Attendance",
    "url": "https://www.markattendance.com",
    "logo": "https://www.markattendance.com/assets/favicon.svg",
    "description": "Smart face recognition attendance management system serving offices, factories, mills, warehouses, and businesses of all sizes.",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+92-300-0000000",
      "contactType": "customer service",
      "email": "info@markattendance.com",
      "areaServed": "PK",
      "availableLanguage": ["English", "Urdu"]
    },
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Lahore",
      "addressCountry": "PK"
    },
    "sameAs": [
      "https://www.facebook.com/markattendance",
      "https://twitter.com/markattendance",
      "https://www.linkedin.com/company/markattendance"
    ]
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- Main content -->
  <main class="page-body">

    <!-- 1. PAGE HERO -->
    <section class="page-hero" aria-label="Industries hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
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
          <p>Whether you manage a 10-person office or a 5,000-employee factory, Mark Attendance has a solution tailored to your operational reality.</p>
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
            <p>Flexible and scalable — from a 10-person startup to a 5,000-employee enterprise. Grows with you.</p>
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
                <span class="ind-v-pill pc">5–50,000 Staff</span>
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
            <p>From a 5-person retail shop to a 50,000-employee enterprise, Mark Attendance flexes to fit your scale. No on-premise hardware. No infrastructure headaches. Just a platform that grows alongside your organisation.</p>
            <ul class="ind-benefits" aria-label="All business solution benefits">
              <li class="ind-benefit">
                <span class="ind-benefit-check bg-coral" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span>Scales from 5 to 50,000 employees without any reconfiguration</span>
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

    <!-- 4. USE CASE STATS -->
    <div class="stats-bar" role="region" aria-label="Industry deployment statistics">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="n" data-count="50" aria-label="50 factory clients">50+</div>
            <div class="l">Factory Clients</div>
          </div>
          <div class="stat-item">
            <div class="n" data-count="120" aria-label="120 office deployments">120+</div>
            <div class="l">Office Deployments</div>
          </div>
          <div class="stat-item">
            <div class="n" data-count="80" aria-label="80 warehouse sites">80+</div>
            <div class="l">Warehouse Sites</div>
          </div>
          <div class="stat-item">
            <div class="n" data-count="99.8" aria-label="99.8 percent accuracy">99.8%</div>
            <div class="l">% Accuracy</div>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. CLIENT TESTIMONIALS -->
    <section class="section section-alt" aria-labelledby="testimonials-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="tag">Client Stories</span>
          <h2 id="testimonials-heading">Trusted Across Industries</h2>
          <p>Hear from the people who run attendance for offices, factories, and warehouses every day.</p>
        </div>
        <div class="testi-grid" role="list">

          <!-- Testimonial 1 — Office -->
          <article class="testi-card reveal d1" role="listitem">
            <div class="testi-stars" aria-label="5 out of 5 stars">
              <span aria-hidden="true">★★★★★</span>
            </div>
            <p class="testi-text">"Mark Attendance transformed how we manage hybrid work in our corporate office. Our HR team now gets automated daily reports — no more chasing attendance sheets across three floors."</p>
            <div class="testi-author">
              <div class="testi-av" aria-hidden="true">AK</div>
              <div>
                <div class="testi-name">Aisha Khan</div>
                <div class="testi-role">HR Manager · Tech Solutions Pvt. Ltd. — Corporate Office</div>
              </div>
            </div>
          </article>

          <!-- Testimonial 2 — Factory -->
          <article class="testi-card reveal d2" role="listitem">
            <div class="testi-stars" aria-label="5 out of 5 stars">
              <span aria-hidden="true">★★★★★</span>
            </div>
            <p class="testi-text">"We run three shifts across a 500-worker textile mill. Mark Attendance handles all our shift rotations and overtime tracking in real time. Safety compliance logs alone saved us hours of weekly admin."</p>
            <div class="testi-author">
              <div class="testi-av" aria-hidden="true">TR</div>
              <div>
                <div class="testi-name">Tariq Rehman</div>
                <div class="testi-role">Operations Manager · Crescent Textile Mills — Factory Floor</div>
              </div>
            </div>
          </article>

          <!-- Testimonial 3 — Warehouse -->
          <article class="testi-card reveal d3" role="listitem">
            <div class="testi-stars" aria-label="5 out of 5 stars">
              <span aria-hidden="true">★★★★★</span>
            </div>
            <p class="testi-text">"With 8 entry gates and over 300 workers, our warehouse was a nightmare to track manually. Mark Attendance gave us zone-level visibility and contractor time logs in a single dashboard. Outstanding."</p>
            <div class="testi-author">
              <div class="testi-av" aria-hidden="true">SB</div>
              <div>
                <div class="testi-name">Sara Baig</div>
                <div class="testi-role">Logistics Supervisor · FastFlow Warehousing — Warehouse Facility</div>
              </div>
            </div>
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
          <a href="/contact#demo" class="btn btn-ghost btn-lg">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            Talk to an Expert
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>

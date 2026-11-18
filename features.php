<?php
$page_title          = 'Features | Mark Attendance – Face Recognition Attendance';
$meta_description    = 'Explore Mark Attendance features: face-verified check-in, geofenced sites, a live attendance monitor, leave management, CSV and PDF exports, and a full audit trail.';
$canonical_url       = 'https://markattendance.io/features';
$og_description      = 'Explore Mark Attendance features: face-verified check-in, geofenced sites, a live attendance monitor, leave management, CSV and PDF exports, and a full audit trail.';
$twitter_description = 'Explore Mark Attendance features: face-verified check-in, geofenced sites, a live attendance monitor, leave management, CSV and PDF exports, and a full audit trail.';
$current_page        = 'features';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Mark Attendance",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Android, iOS, Web",
    "url": "https://markattendance.io/features",
    "description": "Face recognition attendance management system for offices, factories, warehouses, and businesses of all sizes.",
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "USD",
      "description": "Free demo available"
    },
    "featureList": [
      "Face-Verified Check-In",
      "Live Attendance Monitor",
      "Reports and CSV Export",
      "Leave Management",
      "Multi-Location Support",
      "Encrypted Storage and Backups",
      "Roles and Granular Permissions",
      "Spoof-Resistant Scanning",
      "Payroll-Ready Exports",
      "Geofenced Check-In",
      "Attendance Rules",
      "Audit Log and Compliance"
    ]
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- Main content -->
  <main class="page-body" id="main-content">

    <!-- 1. PAGE HERO -->
    <section class="page-hero" aria-label="Features hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?= SITE_BASE ?>/">Home</a>
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M4.5 2.5L7.5 6L4.5 9.5" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span aria-current="page">Features</span>
        </nav>
        <span class="tag">Features</span>
        <h1>Powerful Features for Modern Attendance Management</h1>
        <p>Everything your organisation needs — face-verified check-in, geofenced sites, live monitoring, leave approvals, and exports.</p>
      </div>
    </section>

    <!-- 2. CORE FEATURES -->
    <section class="section" aria-labelledby="core-features-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="tag">Core Features</span>
          <h2 id="core-features-heading">What Makes Mark Attendance Different</h2>
        </div>
        <div class="features-grid" role="list">

          <!-- Card 1: Face Recognition Engine (purple) -->
          <article class="feat-card reveal d1" role="listitem">
            <div class="feat-icon p" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/><circle cx="12" cy="12" r="3"/></svg>
            </div>
            <h3>Face-Verified Check-In</h3>
            <p>Verification, not identification: each scan is matched on the server against that employee's own enrolled samples. Anything ambiguous is rejected, not guessed.</p>
          </article>

          <!-- Card 2: Real-Time Dashboard (blue) -->
          <article class="feat-card reveal d2" role="listitem">
            <div class="feat-icon b" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            </div>
            <h3>Live Attendance Monitor</h3>
            <p>A wall view that refreshes itself: who's on duty, who completed their shift, and who's missing a punch — across all locations.</p>
          </article>

          <!-- Card 3: Automated Reporting (orange) -->
          <article class="feat-card reveal d3" role="listitem">
            <div class="feat-icon o" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <h3>Reports &amp; Exports</h3>
            <p>Attendance records and working-time summaries for any date range, exported to CSV — plus a PDF report of employees who never marked or went quiet.</p>
          </article>

          <!-- Card 4: Shift & Leave Management (coral) -->
          <article class="feat-card reveal d1" role="listitem">
            <div class="feat-icon c" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <h3>Leave Management</h3>
            <p>Paid and unpaid leave types you define. Employees request from the app with a face check; HR approves or rejects with a reason on record.</p>
          </article>

          <!-- Card 5: Multi-Location Support (purple) -->
          <article class="feat-card reveal d2" role="listitem">
            <div class="feat-icon p" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <h3>Multi-Location Support</h3>
            <p>Offices, factory floors, and warehouse sites in one dashboard — each site geofenced with its own radius.</p>
          </article>

          <!-- Card 6: Cloud Sync & Backup (blue) -->
          <article class="feat-card reveal d3" role="listitem">
            <div class="feat-icon b" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0018 9h-1.26A8 8 0 103 16.3"/></svg>
            </div>
            <h3>Encrypted &amp; Backed Up</h3>
            <p>Data is encrypted and stored centrally with automatic backups. Only numeric face templates are kept — never photos. Access from any browser.</p>
          </article>

        </div>
      </div>
    </section>

    <!-- 3. ADVANCED FEATURES -->
    <section class="section section-alt" aria-labelledby="advanced-features-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="tag">Advanced Capabilities</span>
          <h2 id="advanced-features-heading">Built for Enterprise Scale</h2>
        </div>
        <div class="features-grid" role="list">

          <!-- Card 7: Admin Role Management (orange) -->
          <article class="feat-card reveal d1" role="listitem">
            <div class="feat-icon o" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <h3>Roles &amp; Granular Permissions</h3>
            <p>Define your own roles and grant permissions one by one — who may view, edit, enrol, correct, or export, at every step.</p>
          </article>

          <!-- Card 8: Anti-Spoofing Technology (coral) -->
          <article class="feat-card reveal d2" role="listitem">
            <div class="feat-icon c" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3>Spoof-Resistant Scanning</h3>
            <p>Live camera only — gallery photos are never accepted. On-device checks catch closed eyes and odd head poses, and the server rejects ambiguous matches.</p>
          </article>

          <!-- Card 9: Payroll Integration (purple) -->
          <article class="feat-card reveal d3" role="listitem">
            <div class="feat-icon p" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
            </div>
            <h3>Payroll-Ready Exports</h3>
            <p>Attendance records and working-time summaries export to CSV, ready for your payroll process — no retyping from register books.</p>
          </article>

          <!-- Card 10: Geofenced Check-In (blue) -->
          <article class="feat-card reveal d1" role="listitem">
            <div class="feat-icon b" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
            </div>
            <h3>Geofenced Check-In</h3>
            <p>GPS places the device inside a company site before marking — 35 m radius by default, tunable per site, and relaxable per organization.</p>
          </article>

          <!-- Card 11: Custom Notifications (orange) -->
          <article class="feat-card reveal d2" role="listitem">
            <div class="feat-icon o" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
            </div>
            <h3>Attendance Rules</h3>
            <p>Decide which teams may mark attendance where — rules by warehouse, department, and premises type, plus manual corrections with reasons.</p>
          </article>

          <!-- Card 12: Audit Log & Compliance (coral) -->
          <article class="feat-card reveal d3" role="listitem">
            <div class="feat-icon c" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
            </div>
            <h3>Audit Log &amp; Compliance</h3>
            <p>Full audit trail of every attendance event, admin action, and system change. Ideal for compliance and HR disputes.</p>
          </article>

        </div>
      </div>
    </section>

    <!-- 4. FEATURE COMPARISON TABLE -->
    <section class="section" aria-labelledby="comparison-heading">
      <div class="container">
        <div class="section-header reveal">
          <h2 id="comparison-heading">Feature Availability by Plan</h2>
        </div>
        <div class="table-wrap reveal d1" role="region" aria-label="Feature comparison table">
          <table class="feat-table">
            <caption class="sr-only">Feature availability across Starter, Business, and Enterprise plans</caption>
            <thead>
              <tr>
                <th scope="col">Feature</th>
                <th scope="col">Starter</th>
                <th scope="col" class="plan-th-highlight">Business</th>
                <th scope="col">Enterprise</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Face Recognition</td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td class="plan-col-highlight">
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
              <tr>
                <td>Employees</td>
                <td>Up to 50</td>
                <td class="plan-col-highlight">Up to 500</td>
                <td>Unlimited</td>
              </tr>
              <tr>
                <td>Locations</td>
                <td>1</td>
                <td class="plan-col-highlight">Up to 5</td>
                <td>Unlimited</td>
              </tr>
              <tr>
                <td>Mobile App</td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td class="plan-col-highlight">
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
              <tr>
                <td>Automated Reports</td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td class="plan-col-highlight">
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
              <tr>
                <td>Shift Management</td>
                <td><span class="dash-icon" aria-label="Not included">&mdash;</span></td>
                <td class="plan-col-highlight">
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
              <tr>
                <td>API Access</td>
                <td><span class="dash-icon" aria-label="Not included">&mdash;</span></td>
                <td class="plan-col-highlight">
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
              <tr>
                <td>Custom Branding</td>
                <td><span class="dash-icon" aria-label="Not included">&mdash;</span></td>
                <td class="plan-col-highlight"><span class="dash-icon" aria-label="Not included">&mdash;</span></td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
              <tr>
                <td>Dedicated Support</td>
                <td><span class="dash-icon" aria-label="Not included">&mdash;</span></td>
                <td class="plan-col-highlight"><span class="dash-icon" aria-label="Not included">&mdash;</span></td>
                <td>
                  <span class="check-icon" aria-label="Included">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- 5. CTA BANNER -->
    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">See Every Feature in Action</h2>
        <p>Book a free 30-minute live demo. No commitment required.</p>
        <div class="cta-btns">
          <button class="btn btn-ghost btn-lg" data-action="watch-demo" aria-label="Watch a product demo video">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
            Watch Demo
          </button>
          <a href="<?= SITE_BASE ?>/contact#demo" class="btn btn-ghost btn-lg">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Free Demo
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>

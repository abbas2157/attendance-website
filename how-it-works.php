<?php
$page_title          = 'How It Works | Mark Attendance – Face Recognition Attendance';
$meta_description    = 'Learn how Mark Attendance works in 4 simple steps: register faces, scan to mark, auto-record, view reports. Up and running in under a day.';
$canonical_url       = 'https://markattendance.io/how-it-works';
$og_description      = 'Learn how Mark Attendance works in 4 simple steps: register faces, scan to mark, auto-record, view reports. Up and running in under a day.';
$twitter_description = 'Learn how Mark Attendance works in 4 simple steps: register faces, scan to mark, auto-record, view reports. Up and running in under a day.';
$current_page        = 'how-it-works';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Mark Attendance",
    "url": "https://markattendance.io",
    "description": "Face recognition attendance management system for offices, factories, warehouses, and businesses of all sizes.",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Android, iOS, Web",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "USD",
      "price": "0",
      "description": "Free demo available"
    },
    "featureList": [
      "Face recognition check-in",
      "Real-time attendance dashboard",
      "Automated reporting",
      "Cloud data storage",
      "Mobile app support"
    ]
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- ── Page Body ────────────────────────────────────────────── -->
<main class="page-body" id="main-content">

  <!-- 1. PAGE HERO -->
  <section class="page-hero" aria-label="Page introduction">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= SITE_BASE ?>/">Home</a>
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M4.5 2.5L7.5 6L4.5 9.5" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span aria-current="page">How It Works</span>
      </nav>
      <span class="tag reveal">How It Works</span>
      <h1 class="reveal d1">Up and Running in Under a Day</h1>
      <p class="reveal d2">Mark Attendance is designed to be simple. Four steps from setup to live attendance tracking.</p>
    </div>
  </section>

  <!-- 2. STEPS OVERVIEW -->
  <section class="section" aria-labelledby="steps-heading">
    <div class="container">
      <div class="section-header reveal">
        <h2 id="steps-heading">Four Simple Steps to Smarter Attendance</h2>
        <p>No IT team needed. No complicated integrations. Just plug in, enroll your team, and start tracking.</p>
      </div>

      <div class="steps-wrap">
        <div class="steps-line" aria-hidden="true"></div>
        <div class="steps-grid">

          <!-- Step 1 -->
          <div class="step reveal d1">
            <div class="step-circle">
              <span class="step-n" aria-label="Step 1">1</span>
              <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-purple">
                <circle cx="16" cy="11" r="5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M6 27c0-5.523 4.477-10 10-10s10 4.477 10 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M22 7l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3>Register Faces</h3>
            <p>Create employee profiles in the dashboard. Each employee looks at the camera for 5 seconds. The system captures multiple angles automatically. Bulk import tools available.</p>
          </div>

          <!-- Step 2 -->
          <div class="step reveal d2">
            <div class="step-circle">
              <span class="step-n" aria-label="Step 2">2</span>
              <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-blue">
                <rect x="5" y="5" width="9" height="9" rx="2" stroke="currentColor" stroke-width="2"/>
                <rect x="18" y="5" width="9" height="9" rx="2" stroke="currentColor" stroke-width="2"/>
                <rect x="5" y="18" width="9" height="9" rx="2" stroke="currentColor" stroke-width="2"/>
                <path d="M18 21h3m0 0h3m-3 0v-3m0 3v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <h3>Scan to Mark</h3>
            <p>Employees walk up to any enrolled device. The system identifies their face in under a second and marks attendance. No touching, no cards, no PINs.</p>
          </div>

          <!-- Step 3 -->
          <div class="step reveal d3">
            <div class="step-circle">
              <span class="step-n" aria-label="Step 3">3</span>
              <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-orange">
                <path d="M16 4v4M16 24v4M4 16h4M24 16h4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="16" cy="16" r="7" stroke="currentColor" stroke-width="2"/>
                <path d="M13 16l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3>Auto-Record</h3>
            <p>Every check-in and check-out is timestamped, geotagged, and stored securely in the cloud. Data is instantly available on the dashboard.</p>
          </div>

          <!-- Step 4 -->
          <div class="step reveal d4">
            <div class="step-circle">
              <span class="step-n" aria-label="Step 4">4</span>
              <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-coral">
                <rect x="4" y="6" width="24" height="20" rx="3" stroke="currentColor" stroke-width="2"/>
                <path d="M4 12h24" stroke="currentColor" stroke-width="2"/>
                <path d="M10 18h4M10 22h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M22 17l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3>View Reports</h3>
            <p>Access real-time dashboards from any browser or the mobile app. Generate reports, schedule email delivery, and export for payroll.</p>
          </div>

        </div><!-- /steps-grid -->
      </div><!-- /steps-wrap -->
    </div>
  </section>

  <!-- 3. DETAILED STEP CARDS -->
  <section class="section section-alt" aria-labelledby="detail-heading">
    <div class="container">
      <div class="section-header reveal">
        <h2 id="detail-heading">Every Step, in Detail</h2>
        <p>From the moment you sign up to the moment you pull your first payroll report — here is exactly what happens at each stage.</p>
      </div>

      <!-- Card 1: Register Faces -->
      <div class="step-detail-card reveal">
        <div class="step-detail-text">
          <span class="step-tag">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><circle cx="7" cy="7" r="6" stroke="white" stroke-width="1.5"/><path d="M4.5 7l1.5 1.5 3-3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Step 1
          </span>
          <h3>Register Faces — Build Your Employee Directory</h3>
          <p>Setting up your workforce takes minutes, not hours. Our guided enrollment wizard walks each employee through the face capture process with zero technical knowledge required.</p>
          <ul class="step-detail-list" role="list">
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Dashboard-based profile creation — name, department, shift, and role in one form</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>5-second face capture collects multiple angles automatically for higher accuracy</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Bulk CSV import for existing employee databases — skip manual entry</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Re-enrollment reminder if lighting conditions or appearance change significantly</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Facial data is encrypted at rest — never stored as a raw image</span>
            </li>
          </ul>
        </div>
        <div class="step-visual step-visual-1" aria-hidden="true">
          <div class="sv-inner">
            <div class="sv-icon-wrap sv-icon-1">
              <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22" cy="16" r="7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/><path d="M8 38c0-7.732 6.268-14 14-14s14 6.268 14 14" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/><path d="M30 10l3 3 6-6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="sv-pill sv-pill-purple">
              <svg viewBox="0 0 14 14" fill="none"><path d="M2 7l2.5 2.5 7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Face Captured Successfully
            </span>
            <div class="sv-mini-cards">
              <div class="sv-mini-card">
                <span class="sv-mini-label">Enrolled Today</span>
                <div class="sv-num">48</div>
                employees
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Avg Enroll Time</span>
                <div class="sv-num">2m</div>
                per person
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Face Samples</span>
                <div class="sv-num">3+</div>
                per employee
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Bulk Import</span>
                <div class="sv-num">CSV</div>
                supported
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2: Scan to Mark (reversed) -->
      <div class="step-detail-card reverse reveal">
        <div class="step-detail-text">
          <span class="step-tag step-tag-blue">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><circle cx="7" cy="7" r="6" stroke="white" stroke-width="1.5"/><path d="M4.5 7l1.5 1.5 3-3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Step 2
          </span>
          <h3>Scan to Mark — Touchless, Instant Check-In</h3>
          <p>Your employees simply walk past the device. Recognition happens in under one second — no tapping, no cards, no queues. The experience is completely frictionless for everyone on site.</p>
          <ul class="step-detail-list" role="list">
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Verified in seconds against the employee's own enrolled samples</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Works on any Android tablet, dedicated kiosk, or door-mounted screen</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Multiple devices per site — no limit on simultaneous check-in points</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Audio and visual confirmation keeps employees informed in real time</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Every attempt — accepted or rejected — is logged with its match confidence</span>
            </li>
          </ul>
        </div>
        <div class="step-visual step-visual-2" aria-hidden="true">
          <div class="sv-inner">
            <div class="sv-icon-wrap sv-icon-2">
              <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="7" y="7" width="13" height="13" rx="2.5" stroke="currentColor" stroke-width="2.2"/><rect x="24" y="7" width="13" height="13" rx="2.5" stroke="currentColor" stroke-width="2.2"/><rect x="7" y="24" width="13" height="13" rx="2.5" stroke="currentColor" stroke-width="2.2"/><path d="M24 30h5m0 0h5m-5 0v-5m0 5v5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            </div>
            <span class="sv-pill sv-pill-blue">
              <svg viewBox="0 0 14 14" fill="none"><path d="M7 1v6l3.5 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Verified in seconds
            </span>
            <div class="sv-mini-cards">
              <div class="sv-mini-card">
                <span class="sv-mini-label">Match Threshold</span>
                <div class="sv-num">Strict</div>
                ambiguity rejected
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Hardware Needed</span>
                <div class="sv-num">Any</div>
                Android/Kiosk
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Simultaneous Users</span>
                <div class="sv-num">Unlim.</div>
                no limits
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Geofence</span>
                <div class="sv-num">35m</div>
                per-site radius
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3: Auto-Record -->
      <div class="step-detail-card reveal">
        <div class="step-detail-text">
          <span class="step-tag step-tag-orange">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><circle cx="7" cy="7" r="6" stroke="white" stroke-width="1.5"/><path d="M4.5 7l1.5 1.5 3-3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Step 3
          </span>
          <h3>Auto-Record — Every Second Accounted For</h3>
          <p>The moment a face is matched, a complete attendance record is created automatically. No admin entry, no paperwork, no possibility of human error in the time log.</p>
          <ul class="step-detail-list" role="list">
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Precise timestamp with millisecond accuracy — check-in and check-out logged separately</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Geotagging records which device and physical location the scan occurred at</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>End-to-end encrypted cloud storage with automated daily backups</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Instant manager notifications for late arrivals, absences, or unrecognised faces</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Full audit trail — every event is immutable and timestamped for compliance</span>
            </li>
          </ul>
        </div>
        <div class="step-visual step-visual-3" aria-hidden="true">
          <div class="sv-inner">
            <div class="sv-icon-wrap sv-icon-3">
              <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 6v6M22 32v6M6 22h6M32 22h6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/><circle cx="22" cy="22" r="10" stroke="currentColor" stroke-width="2.2"/><path d="M18 22l3 3 6-6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="sv-pill sv-pill-orange">
              <svg viewBox="0 0 14 14" fill="none"><path d="M7 2v5l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Record Saved — 09:02:47 AM
            </span>
            <div class="sv-mini-cards">
              <div class="sv-mini-card">
                <span class="sv-mini-label">Storage</span>
                <div class="sv-num">Cloud</div>
                encrypted
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Backup Frequency</span>
                <div class="sv-num">Daily</div>
                automated
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Data Retention</span>
                <div class="sv-num">5 yrs</div>
                configurable
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Notifications</span>
                <div class="sv-num">Live</div>
                push &amp; email
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4: View Reports (reversed) -->
      <div class="step-detail-card reverse reveal">
        <div class="step-detail-text">
          <span class="step-tag step-tag-coral">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><circle cx="7" cy="7" r="6" stroke="white" stroke-width="1.5"/><path d="M4.5 7l1.5 1.5 3-3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Step 4
          </span>
          <h3>View Reports — Insights at Your Fingertips</h3>
          <p>Your dashboard updates in real time. Whether you are reviewing yesterday's latecomers or building a monthly payroll summary, every data point is already there waiting for you.</p>
          <ul class="step-detail-list" role="list">
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Real-time attendance dashboard accessible from any browser or mobile device</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Scheduled email delivery — daily, weekly, or monthly reports straight to your inbox</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>One-click export to Excel, PDF, or CSV — ready for payroll and HR systems</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Department and shift filtering — drill down by team, location, or date range</span>
            </li>
            <li>
              <span class="chk" aria-hidden="true"><svg viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <span>Absence and overtime alerts help managers act before issues escalate</span>
            </li>
          </ul>
        </div>
        <div class="step-visual step-visual-4" aria-hidden="true">
          <div class="sv-inner">
            <div class="sv-icon-wrap sv-icon-4">
              <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="8" width="34" height="28" rx="3.5" stroke="currentColor" stroke-width="2.2"/><path d="M5 16h34" stroke="currentColor" stroke-width="2.2"/><path d="M13 25h6M13 31h12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/><path d="M29 24l3 3 6-6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="sv-pill sv-pill-coral">
              <svg viewBox="0 0 14 14" fill="none"><path d="M2 10l3-3 2.5 2.5L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Report Ready — June 2025
            </span>
            <div class="sv-mini-cards">
              <div class="sv-mini-card">
                <span class="sv-mini-label">Export Formats</span>
                <div class="sv-num">3</div>
                XLS · PDF · CSV
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Dashboard</span>
                <div class="sv-num">Live</div>
                real-time
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Auto Email</span>
                <div class="sv-num">Yes</div>
                scheduled
              </div>
              <div class="sv-mini-card">
                <span class="sv-mini-label">Mobile Access</span>
                <div class="sv-num">iOS</div>
                &amp; Android
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- 4. SETUP TIMELINE -->
  <section class="section" aria-labelledby="timeline-heading">
    <div class="container">
      <div class="section-header reveal">
        <h2 id="timeline-heading">From Signup to Live in 24 Hours</h2>
        <p>Most teams are fully operational within a single working day. Here is the typical setup journey from account creation to live attendance tracking.</p>
      </div>

      <div class="timeline-wrap">
        <div class="timeline-track" aria-hidden="true">
          <div class="timeline-track-fill"></div>
        </div>

        <div class="timeline-grid">

          <!-- Milestone 1 -->
          <div class="tl-step reveal d1">
            <div class="tl-node c1" aria-hidden="true">
              <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4" y="6" width="18" height="16" rx="2" stroke="white" stroke-width="1.8"/><path d="M9 6V4M17 6V4M4 11h18" stroke="white" stroke-width="1.8" stroke-linecap="round"/></svg>
            </div>
            <div class="tl-badge">Day 0</div>
            <div class="tl-time">5 minutes</div>
            <h4>Account Setup</h4>
            <p>Sign up, add your company details, and configure your first admin user. Billing is optional at this stage — the demo is free.</p>
          </div>

          <!-- Milestone 2 -->
          <div class="tl-step reveal d2">
            <div class="tl-node c2" aria-hidden="true">
              <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="5" width="20" height="16" rx="3" stroke="white" stroke-width="1.8"/><circle cx="13" cy="13" r="3.5" stroke="white" stroke-width="1.8"/><path d="M3 9h20" stroke="white" stroke-width="1.8"/></svg>
            </div>
            <div class="tl-badge">Day 0</div>
            <div class="tl-time">15 minutes</div>
            <h4>Device Setup</h4>
            <p>Install the Mark Attendance app on any Android tablet or kiosk. Connect it to your account with a one-time QR pairing code.</p>
          </div>

          <!-- Milestone 3 -->
          <div class="tl-step reveal d3">
            <div class="tl-node c3" aria-hidden="true">
              <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="13" cy="10" r="4" stroke="white" stroke-width="1.8"/><path d="M5 22c0-4.418 3.582-8 8-8s8 3.582 8 8" stroke="white" stroke-width="1.8" stroke-linecap="round"/><path d="M19 7l2 2 3-3" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="tl-badge">Day 0 – 1</div>
            <div class="tl-time">~2 min per person</div>
            <h4>Employee Enrollment</h4>
            <p>Each employee stands in front of the device for 5 seconds. Use bulk CSV import to pre-load existing HR data alongside the face capture.</p>
          </div>

          <!-- Milestone 4 -->
          <div class="tl-step reveal d4">
            <div class="tl-node c4" aria-hidden="true">
              <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l5 5 11-11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="tl-badge">Day 1</div>
            <div class="tl-time">You're live</div>
            <h4>Go Live</h4>
            <p>Attendance tracking begins automatically. Your dashboard populates in real time and managers receive their first daily report by end of shift.</p>
          </div>

        </div>
      </div><!-- /timeline-wrap -->
    </div>
  </section>

  <!-- 5. FAQ SECTION -->
  <section class="section section-alt" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">Common Questions</span>
        <h2 id="faq-heading">Questions About Getting Started</h2>
        <p>Answers to common questions about getting started with Mark Attendance.</p>
      </div>

      <div class="faq-list" role="list">

        <!-- FAQ 1 -->
        <div class="faq-item reveal d1" role="listitem">
          <div class="faq-q" aria-expanded="false">
            <h4>How long does initial setup take for a team of 50 people?</h4>
            <span class="faq-btn" aria-hidden="true">
              <svg viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </span>
          </div>
          <div class="faq-a" role="region">
            <p>For a 50-person team, expect roughly 2 hours total. Account and device setup takes under 20 minutes. Employee enrollment runs at about 2 minutes per person, so with a single device you can enroll 50 people in under 2 hours. With two enrollment stations running in parallel that drops to around 50 minutes. Most teams can be fully live on day one.</p>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item reveal d2" role="listitem">
          <div class="faq-q" aria-expanded="false">
            <h4>What happens if an employee's face is not recognised?</h4>
            <span class="faq-btn" aria-hidden="true">
              <svg viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </span>
          </div>
          <div class="faq-a" role="region">
            <p>If recognition fails — for example due to a significant change in appearance, poor lighting, or the employee simply not being enrolled — the device displays a friendly prompt and logs an unrecognised attempt. The employee can then check in manually via a PIN fallback, and a manager is notified in real time. We recommend a brief re-enrollment if the same employee consistently fails recognition.</p>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item reveal d3" role="listitem">
          <div class="faq-q" aria-expanded="false">
            <h4>What hardware do I need to get started?</h4>
            <span class="faq-btn" aria-hidden="true">
              <svg viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </span>
          </div>
          <div class="faq-a" role="region">
            <p>Any Android tablet running Android 8.0 or above with a front-facing camera of 5 MP or higher will work out of the box. You do not need proprietary hardware — a standard consumer tablet mounted near your entrance is sufficient for most use cases. For larger facilities or access control integration we offer dedicated kiosk units with IR cameras that perform better in low-light environments. Our team can recommend the right hardware for your site during the free demo.</p>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item reveal d4" role="listitem">
          <div class="faq-q" aria-expanded="false">
            <h4>What support is available if I run into problems during setup?</h4>
            <span class="faq-btn" aria-hidden="true">
              <svg viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </span>
          </div>
          <div class="faq-a" role="region">
            <p>Every new customer receives a dedicated onboarding session — a live video walkthrough with one of our support engineers who stays with you until your first employees are enrolled and the dashboard is showing live data. Beyond that, we offer chat and email support Monday through Saturday, a detailed help centre with step-by-step guides, and priority phone support for Business and Enterprise plans. We also offer optional on-site setup visits for large deployments.</p>
          </div>
        </div>

      </div><!-- /faq-list -->
    </div>
  </section>

  <!-- 6. CTA BANNER -->
  <section class="cta-band" aria-labelledby="cta-heading">
    <div class="container">
      <h2 class="reveal" id="cta-heading">Start Tracking Attendance Today</h2>
      <p class="reveal d1">Get a free demo and see how easy setup really is.</p>
      <div class="cta-btns reveal d2">
        <button class="btn btn-ghost btn-lg" data-action="watch-demo" aria-label="Watch a demo video">
          <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="1.6"/><path d="M8 7l6 3-6 3V7z" fill="currentColor"/></svg>
          Watch Demo
        </button>
        <a href="<?= SITE_BASE ?>/contact#demo" class="btn btn-ghost btn-lg">
          <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M2 10C2 5.58 5.58 2 10 2s8 3.58 8 8-3.58 8-8 8-8-3.58-8-8z" stroke="currentColor" stroke-width="1.6"/><path d="M10 6v4l3 2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Get Free Demo
        </a>
      </div>
    </div>
  </section>

</main>

<!-- ── Footer ──────────────────────────────────────────────── -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>

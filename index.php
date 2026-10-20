<?php
$page_title          = 'Mark Attendance | Face Recognition Attendance System';
$meta_description    = 'Mark Attendance is a smart face recognition attendance system for offices, factories & warehouses. Contactless, accurate and real-time.';
$canonical_url       = 'https://markattendance.io/';
$og_description      = 'Smart face recognition attendance management. Accurate, contactless, real-time tracking for businesses of all sizes.';
$twitter_description = 'Smart face recognition attendance for offices, factories, warehouses.';
$current_page        = 'home';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://markattendance.io/#organization",
        "name": "Mark Attendance",
        "url": "https://markattendance.io/",
        "logo": "https://markattendance.io/assets/icon-512.png",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+92-306-4164077",
          "contactType": "customer support",
          "areaServed": "PK",
          "availableLanguage": "English"
        },
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Lahore",
          "addressCountry": "PK"
        },
        "sameAs": []
      },
      {
        "@type": "SoftwareApplication",
        "@id": "https://markattendance.io/#app",
        "name": "Mark Attendance",
        "operatingSystem": "Android, iOS, Web",
        "applicationCategory": "BusinessApplication",
        "description": "Smart face recognition attendance management system for offices, factories, and warehouses. Contactless, accurate, real-time.",
        "url": "https://markattendance.io/",
        "offers": {
          "@type": "Offer",
          "price": "0",
          "priceCurrency": "USD",
          "description": "Free demo available"
        },
        "publisher": {
          "@id": "https://markattendance.io/#organization"
        }
      },
      {
        "@type": "FAQPage",
        "@id": "https://markattendance.io/#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How accurate is the face recognition?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our system achieves 99.8% accuracy using deep learning algorithms trained on diverse datasets. It works reliably in varied lighting conditions, with glasses, masks partially worn, and at different angles."
            }
          },
          {
            "@type": "Question",
            "name": "Is my employees' biometric data secure?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. All biometric data is encrypted using AES-256 before storage and is never shared with third parties. Data is stored on secure cloud servers with regular backups and complies with local data protection regulations."
            }
          },
          {
            "@type": "Question",
            "name": "Can it work without an internet connection?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The mobile app supports offline mode — attendance is recorded locally and synced automatically when the connection is restored. The web dashboard requires an internet connection."
            }
          },
          {
            "@type": "Question",
            "name": "How long does it take to enroll employees?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Enrolling a single employee takes less than 2 minutes. For bulk enrollment, we provide on-site setup assistance. Most organisations are fully enrolled within a day."
            }
          },
          {
            "@type": "Question",
            "name": "Does it integrate with payroll software?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. We export attendance data in standard formats (CSV, Excel, PDF) compatible with most payroll systems. Custom API integration is available on the Business and Enterprise plans."
            }
          },
          {
            "@type": "Question",
            "name": "What devices does it support?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The system works on any device with a front-facing camera — smartphones, tablets, laptops, or dedicated kiosks. We support Android 8+, iOS 13+, and modern web browsers."
            }
          }
        ]
      }
    ]
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="page-body">
  <main id="main-content">

    <!-- ===================== HERO ===================== -->
    <section class="hero" aria-label="Hero section">
      <div class="container">
        <div class="hero-grid">

          <!-- Left Content -->
          <div class="hero-content">
            <div class="hero-live" aria-label="Live tracking status">
              <span class="pulse-dot" aria-hidden="true"></span>
              Live &middot; Real-Time Tracking
            </div>
            <h1>Mark Attendance with <span class="accent">Face Recognition</span><br>Be on Time.</h1>
            <p class="hero-sub">The smart, contactless attendance management system built for offices, factories, and warehouses. Accurate identification in under a second.</p>
            <div class="hero-btns">
              <a href="<?= SITE_BASE ?>/contact#demo" class="btn btn-primary" aria-label="Get a free demo of Mark Attendance">Get a Free Demo</a>
              <a href="<?= SITE_BASE ?>/mobile-app" class="btn btn-outline" aria-label="Download the Mark Attendance app">Download the App</a>
            </div>
            <div class="hero-trust" aria-label="Key statistics">
              <div class="hero-trust-item">
                <strong>~2 min</strong>
                <span>To Enrol an Employee</span>
              </div>
              <div class="hero-trust-sep" aria-hidden="true"></div>
              <div class="hero-trust-item">
                <strong>99.8%</strong>
                <span>Recognition Accuracy</span>
              </div>
              <div class="hero-trust-sep" aria-hidden="true"></div>
              <div class="hero-trust-item">
                <strong>1 day</strong>
                <span>To Set Up</span>
              </div>
            </div>
          </div>

          <!-- Right Phone Visual -->
          <div class="hero-visual" aria-hidden="true">
            <div class="phone-outer">
              <div class="phone-body">
                <div class="phone-screen">
                  <div class="phone-notch"></div>
                  <div class="face-ring">
                    <span class="face-emoji">&#128522;</span>
                  </div>
                  <div class="scan-line"></div>
                  <div class="phone-status-badge">&#10003; Verified</div>
                  <div class="phone-user">Ahmed Khan</div>
                  <div class="phone-time">09:02 AM &middot; Check-In</div>
                  <div class="phone-dot-row" aria-hidden="true">
                    <span class="phone-dot"></span>
                    <span class="phone-dot"></span>
                    <span class="phone-dot"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="float-card float-card-1" aria-label="247 employees present today">
              &#9989; 247 Present Today
            </div>
            <div class="float-card float-card-2" aria-label="Scan time 0.8 seconds">
              &#9889; 0.8s Scan Time
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===================== STATS BAR ===================== -->
    <section class="stats-bar" aria-label="Key performance statistics">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item reveal d1">
            <strong class="stat-num" data-count="2" data-suffix=" min" aria-label="About 2 minutes to enrol an employee">0</strong>
            <span>To Enrol an Employee</span>
          </div>
          <div class="stat-item reveal d2">
            <strong class="stat-num" data-count="99.8" data-suffix="%" aria-label="99.8 percent accuracy">0</strong>
            <span>Accuracy</span>
          </div>
          <div class="stat-item reveal d3">
            <strong class="stat-num" data-count="1" data-suffix=" day" aria-label="Set up in 1 day">0</strong>
            <span>To Set Up</span>
          </div>
          <div class="stat-item reveal d4">
            <strong class="stat-num" data-count="24" data-suffix="/7" aria-label="24/7 support">0</strong>
            <span>Support</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ===================== FEATURES ===================== -->
    <section class="section section-alt" id="features" aria-labelledby="features-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">Features</span>
          <h2 id="features-heading">Everything You Need for Accurate Attendance</h2>
          <p>A complete attendance management platform built for modern businesses. Powerful features, simple to use.</p>
        </div>
        <div class="features-grid">

          <article class="feat-card reveal d1" aria-label="Face Recognition feature">
            <div class="feat-icon feat-icon-p" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 3H5a2 2 0 00-2 2v4"/>
                <path d="M15 3h4a2 2 0 012 2v4"/>
                <path d="M9 21H5a2 2 0 01-2-2v-4"/>
                <path d="M15 21h4a2 2 0 002-2v-4"/>
                <circle cx="12" cy="10" r="3"/>
                <path d="M8 17c0-2.21 1.79-4 4-4s4 1.79 4 4"/>
              </svg>
            </div>
            <h3>Face Recognition</h3>
            <p>Contactless biometric identification with 99.8% accuracy. Works in varied lighting and angles.</p>
          </article>

          <article class="feat-card reveal d2" aria-label="Real-Time Tracking feature">
            <div class="feat-icon feat-icon-b" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12,6 12,12 16,14"/>
              </svg>
            </div>
            <h3>Real-Time Tracking</h3>
            <p>Live dashboard showing who's in, who's out, and who's late — updated every second.</p>
          </article>

          <article class="feat-card reveal d3" aria-label="Automated Reports feature">
            <div class="feat-icon feat-icon-o" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                <polyline points="14,2 14,8 20,8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10,9 9,9 8,9"/>
              </svg>
            </div>
            <h3>Automated Reports</h3>
            <p>Daily, weekly, and monthly attendance reports generated automatically and emailed to managers.</p>
          </article>

          <article class="feat-card reveal d1" aria-label="Shift and Late Tracking feature">
            <div class="feat-icon feat-icon-c" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
                <path d="M8 14h.01"/>
                <path d="M12 14h.01"/>
                <path d="M16 14h.01"/>
              </svg>
            </div>
            <h3>Shift &amp; Late Tracking</h3>
            <p>Define shifts, grace periods, and overtime rules. Automatically flag late arrivals and early departures.</p>
          </article>

          <article class="feat-card reveal d2" aria-label="Multi-Location feature">
            <div class="feat-icon feat-icon-p" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/>
                <circle cx="12" cy="10" r="3"/>
              </svg>
            </div>
            <h3>Multi-Location</h3>
            <p>Manage attendance across multiple offices, warehouses, or factory floors from a single dashboard.</p>
          </article>

          <article class="feat-card reveal d3" aria-label="Secure Cloud Sync feature">
            <div class="feat-icon feat-icon-b" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
            </div>
            <h3>Secure Cloud Sync</h3>
            <p>All data is encrypted and synced to the cloud in real time. Accessible anytime, anywhere.</p>
          </article>

        </div>
      </div>
    </section>

    <!-- ===================== HOW IT WORKS ===================== -->
    <section class="section" id="how-it-works" aria-labelledby="hiw-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">How It Works</span>
          <h2 id="hiw-heading">Up and Running in Minutes</h2>
          <p>Getting started is fast and simple. No complex hardware — just a device with a camera and you're ready.</p>
        </div>
        <div class="steps-wrap">
          <div class="steps-line" aria-hidden="true"></div>
          <div class="steps-grid">

            <div class="step reveal d1">
              <div class="step-circle" aria-hidden="true">
                <span class="step-n">1</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                  <path d="M16 3.13a4 4 0 010 7.75"/>
                </svg>
              </div>
              <h3>Register</h3>
              <p>Admin registers employee faces via the app or web dashboard. Takes under 2 minutes per person.</p>
            </div>

            <div class="step reveal d2">
              <div class="step-circle" aria-hidden="true">
                <span class="step-n">2</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 3H5a2 2 0 00-2 2v4"/>
                  <path d="M15 3h4a2 2 0 012 2v4"/>
                  <path d="M9 21H5a2 2 0 01-2-2v-4"/>
                  <path d="M15 21h4a2 2 0 002-2v-4"/>
                  <circle cx="12" cy="12" r="3"/>
                </svg>
              </div>
              <h3>Scan &amp; Mark</h3>
              <p>Employee walks up to a device, face is scanned, attendance marked automatically.</p>
            </div>

            <div class="step reveal d3">
              <div class="step-circle" aria-hidden="true">
                <span class="step-n">3</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12,6 12,12 16,14"/>
                </svg>
              </div>
              <h3>Auto-Record</h3>
              <p>Check-in and check-out times are recorded instantly with timestamps and location.</p>
            </div>

            <div class="step reveal d4">
              <div class="step-circle" aria-hidden="true">
                <span class="step-n">4</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                  <polyline points="14,2 14,8 20,8"/>
                  <line x1="16" y1="13" x2="8" y2="13"/>
                  <line x1="16" y1="17" x2="8" y2="17"/>
                  <polyline points="10,9 9,9 8,9"/>
                </svg>
              </div>
              <h3>View Reports</h3>
              <p>Access real-time dashboards and download detailed reports anytime.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- ===================== INDUSTRIES ===================== -->
    <section class="section section-alt" id="industries" aria-labelledby="industries-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">Industries</span>
          <h2 id="industries-heading">Built for Every Workplace</h2>
          <p>From small offices to large industrial complexes — Mark Attendance adapts to your environment.</p>
        </div>
        <div class="ind-grid">

          <article class="ind-card v-purple reveal d1" aria-label="Offices industry">
            <div class="ind-ic" aria-hidden="true">&#127970;</div>
            <h3>Offices</h3>
            <p>Track employee punctuality, manage shifts, and automate payroll-ready reports for corporate offices.</p>
            <a href="<?= SITE_BASE ?>/industries#offices" class="more" aria-label="Learn more about Mark Attendance for offices">Learn more &rarr;</a>
          </article>

          <article class="ind-card v-blue reveal d2" aria-label="Factories and Mills industry">
            <div class="ind-ic" aria-hidden="true">&#127981;</div>
            <h3>Factories &amp; Mills</h3>
            <p>Ruggedised attendance for factory floors with shift rotation, overtime tracking, and worker safety compliance.</p>
            <a href="<?= SITE_BASE ?>/industries#factories" class="more" aria-label="Learn more about Mark Attendance for factories and mills">Learn more &rarr;</a>
          </article>

          <article class="ind-card v-orange reveal d3" aria-label="Warehouses industry">
            <div class="ind-ic" aria-hidden="true">&#128230;</div>
            <h3>Warehouses</h3>
            <p>Real-time workforce visibility across large warehouse spaces with multi-entry-point tracking.</p>
            <a href="<?= SITE_BASE ?>/industries#warehouses" class="more" aria-label="Learn more about Mark Attendance for warehouses">Learn more &rarr;</a>
          </article>

          <article class="ind-card v-coral reveal d4" aria-label="All businesses industry">
            <div class="ind-ic" aria-hidden="true">&#128188;</div>
            <h3>All Businesses</h3>
            <p>From startups to enterprises — scalable attendance management that grows with your organisation.</p>
            <a href="<?= SITE_BASE ?>/industries#businesses" class="more" aria-label="Learn more about Mark Attendance for all businesses">Learn more &rarr;</a>
          </article>

        </div>
      </div>
    </section>

    <!-- ===================== MOBILE APP ===================== -->
    <section class="app-section" id="mobile-app" aria-labelledby="app-heading">
      <div class="container">
        <div class="app-grid">

          <!-- Left Content -->
          <div class="app-content">
            <span class="section-tag light">Mobile App</span>
            <h2 id="app-heading">Take Attendance on the Go</h2>
            <p>Our mobile app brings the full power of Mark Attendance to your pocket. Whether you're in the office, on the factory floor, or managing a remote site, you stay in control.</p>
            <div class="app-badges" aria-label="Download the app">
              <?= store_badge('play', 'app-badge') ?>
              <?= store_badge('apple', 'app-badge') ?>
            </div>
            <div class="app-bullets" aria-label="App features list">
              <div class="app-bullet">
                <span class="bullet-check" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg></span>
                Mark attendance from any Android or iOS device
              </div>
              <div class="app-bullet">
                <span class="bullet-check" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg></span>
                Works offline — syncs when connected
              </div>
              <div class="app-bullet">
                <span class="bullet-check" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg></span>
                Admin dashboard with live stats
              </div>
              <div class="app-bullet">
                <span class="bullet-check" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg></span>
                Push notifications for late arrivals
              </div>
              <div class="app-bullet">
                <span class="bullet-check" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg></span>
                Secure biometric login
              </div>
            </div>
          </div>

          <!-- Right Phones Pair -->
          <div class="app-visual" aria-hidden="true">
            <div class="phones-pair">
              <div class="phone-card sec">
                <div class="phone-card-inner">
                  <div class="phone-card-screen">
                    <div class="phone-card-notch"></div>
                    <div class="mini-header">
                      <span class="mini-title">Attendance</span>
                      <span class="mini-dot"></span>
                    </div>
                    <div class="mini-rows">
                      <div class="mini-row">
                        <span class="mini-row-n">Ali Hassan</span>
                        <span class="mini-row-s">In</span>
                      </div>
                      <div class="mini-row">
                        <span class="mini-row-n">Sara Malik</span>
                        <span class="mini-row-s">In</span>
                      </div>
                      <div class="mini-row">
                        <span class="mini-row-n">Usman Raza</span>
                        <span class="mini-row-s" style="color:#f59e0b">Late</span>
                      </div>
                      <div class="mini-row">
                        <span class="mini-row-n">Fatima Noor</span>
                        <span class="mini-row-s" style="color:#f87171">Out</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="phone-card pri">
                <div class="phone-card-inner">
                  <div class="phone-card-screen">
                    <div class="phone-card-notch"></div>
                    <div class="mini-header">
                      <span class="mini-title">Face Scan</span>
                      <span class="mini-dot"></span>
                    </div>
                    <div class="mini-face">&#128522;</div>
                    <div class="mini-name">Ahmed Khan</div>
                    <div class="mini-status">&#10003; Recognised</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===================== WHY MARK ATTENDANCE ===================== -->
    <section class="section section-alt" aria-labelledby="why-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">Why Mark Attendance</span>
          <h2 id="why-heading">Why Teams Choose Mark Attendance</h2>
          <p>A new, Lahore-built attendance platform designed around the problems Pakistani workplaces face every day.</p>
        </div>
        <div class="testi-grid">

          <article class="testi-card reveal d1" aria-label="No buddy-punching">
            <h3>No More Buddy-Punching</h3>
            <p>Attendance is tied to each employee's face, so nobody can sign in for a colleague. No cards, no PINs, no register books to falsify.</p>
          </article>

          <article class="testi-card reveal d2" aria-label="Set up in a day">
            <h3>Set Up in a Day</h3>
            <p>Enrolling an employee takes about 2 minutes, and most organisations can be fully set up in under a day. No complex hardware — just a device with a camera.</p>
          </article>

          <article class="testi-card reveal d3" aria-label="Works offline">
            <h3>Works Offline</h3>
            <p>Weak connectivity at the gate or on the factory floor? Attendance is recorded locally and synced automatically when the connection is restored.</p>
          </article>

        </div>
      </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="section" id="faq" aria-labelledby="faq-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">FAQ</span>
          <h2 id="faq-heading">Frequently Asked Questions</h2>
          <p>Everything you need to know about Mark Attendance. Can't find an answer? <a href="<?= SITE_BASE ?>/contact">Contact us</a>.</p>
        </div>
        <div class="faq-list" role="list">

          <div class="faq-item reveal d1" role="listitem">
            <div class="faq-q">
              <h4>How accurate is the face recognition?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="faq-a-1" aria-label="Toggle answer: How accurate is the face recognition?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="faq-a-1" hidden>
              <p>Our system achieves 99.8% accuracy using deep learning algorithms trained on diverse datasets. It works reliably in varied lighting conditions, with glasses, masks partially worn, and at different angles.</p>
            </div>
          </div>

          <div class="faq-item reveal d2" role="listitem">
            <div class="faq-q">
              <h4>Is my employees' biometric data secure?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="faq-a-2" aria-label="Toggle answer: Is my employees' biometric data secure?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="faq-a-2" hidden>
              <p>Yes. All biometric data is encrypted using AES-256 before storage and is never shared with third parties. Data is stored on secure cloud servers with regular backups and complies with local data protection regulations.</p>
            </div>
          </div>

          <div class="faq-item reveal d3" role="listitem">
            <div class="faq-q">
              <h4>Can it work without an internet connection?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="faq-a-3" aria-label="Toggle answer: Can it work without an internet connection?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="faq-a-3" hidden>
              <p>The mobile app supports offline mode — attendance is recorded locally and synced automatically when the connection is restored. The web dashboard requires an internet connection.</p>
            </div>
          </div>

          <div class="faq-item reveal d4" role="listitem">
            <div class="faq-q">
              <h4>How long does it take to enroll employees?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="faq-a-4" aria-label="Toggle answer: How long does it take to enroll employees?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="faq-a-4" hidden>
              <p>Enrolling a single employee takes less than 2 minutes. For bulk enrollment, we provide on-site setup assistance. Most organisations are fully enrolled within a day.</p>
            </div>
          </div>

          <div class="faq-item reveal d1" role="listitem">
            <div class="faq-q">
              <h4>Does it integrate with payroll software?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="faq-a-5" aria-label="Toggle answer: Does it integrate with payroll software?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="faq-a-5" hidden>
              <p>Yes. We export attendance data in standard formats (CSV, Excel, PDF) compatible with most payroll systems. Custom API integration is available on the Business and Enterprise plans.</p>
            </div>
          </div>

          <div class="faq-item reveal d2" role="listitem">
            <div class="faq-q">
              <h4>What devices does it support?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="faq-a-6" aria-label="Toggle answer: What devices does it support?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="faq-a-6" hidden>
              <p>The system works on any device with a front-facing camera — smartphones, tablets, laptops, or dedicated kiosks. We support Android 8+, iOS 13+, and modern web browsers.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===================== CTA BAND ===================== -->
    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <div class="cta-band-inner reveal">
          <h2 id="cta-heading">Ready to Eliminate Attendance Fraud?</h2>
          <p>Be one of the first businesses in Pakistan to switch to contactless attendance. Get set up in under a day.</p>
          <div class="cta-btns">
            <button class="btn btn-ghost" data-action="watch-demo" aria-label="Watch a demo of Mark Attendance">Watch Demo</button>
            <a href="<?= SITE_BASE ?>/contact#demo" class="btn btn-outline-white" aria-label="Get a free demo of Mark Attendance">Get Free Demo</a>
          </div>
        </div>
      </div>
    </section>

  </main>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

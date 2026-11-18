<?php
$page_title          = 'About Us | Mark Attendance – Our Mission & Story';
$meta_description    = 'Learn about Mark Attendance — our mission to make attendance accurate, contactless, and effortless for every organisation in Pakistan and beyond.';
$canonical_url       = 'https://markattendance.io/about';
$og_description      = 'Learn about Mark Attendance — our mission to make attendance accurate, contactless, and effortless for every organisation in Pakistan and beyond.';
$twitter_description = 'Learn about Mark Attendance — our mission to make attendance accurate, contactless, and effortless for every organisation in Pakistan and beyond.';
$current_page        = 'about';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://markattendance.io/#organization",
    "name": "Mark Attendance",
    "url": "https://markattendance.io/",
    "logo": "https://markattendance.io/assets/icon-512.png",
    "description": "Mark Attendance is a smart face recognition attendance management platform for offices, factories, warehouses, and businesses of all sizes.",
    "foundingLocation": {
      "@type": "Place",
      "name": "Lahore, Pakistan"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+92-306-4164077",
      "email": "info@markattendance.io",
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
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="page-body" id="main-content">

  <!-- 1. PAGE HERO -->
  <section class="page-hero page-hero--dark" aria-labelledby="about-hero-heading">
    <div class="container">
      <span class="tag reveal">About Us</span>
      <h1 id="about-hero-heading" class="reveal delay-1">Making Attendance Accurate, Contactless &amp; Effortless</h1>
      <p class="reveal delay-2">We're on a mission to eliminate attendance fraud and manual tracking for every organisation — big or small.</p>
    </div>
  </section>

  <!-- 2. MISSION SECTION -->
  <section class="section" aria-labelledby="mission-heading">
    <div class="container">
      <div class="mission-grid">
        <div class="mission-text reveal">
          <h2 id="mission-heading">Why We Built This</h2>
          <p>Manual attendance systems are broken. Register books get falsified, buddy-punching quietly inflates payroll, and HR teams spend more time correcting records than supporting people. For factories, warehouses, and offices across Pakistan, this wasn't a minor inconvenience — it was a serious operational drain.</p>
          <p>We built Mark Attendance because face recognition technology had matured to the point where it could actually solve the problem — not just in theory, but in real-world environments with shift workers, varying lighting, and high throughput at the gate. Each check-in is verified in seconds against that employee's own enrolled samples — never the whole workforce — and every attempt is logged with its confidence score.</p>
          <p>Our vision is to become the attendance backbone for every organisation in Pakistan and South Asia. We believe that when payroll is accurate, trust between employers and employees improves. When managers have real-time visibility, they can lead better. Accurate attendance is not a back-office function — it's the foundation of a fair workplace.</p>
        </div>
        <div class="reveal delay-2">
          <div class="stats-card" aria-label="Key facts">
            <div class="stat-item">
              <div class="stat-num">Lahore</div>
              <div class="stat-label">Headquarters, Pakistan</div>
            </div>
            <hr class="stat-divider">
            <div class="stat-item">
              <div class="stat-num">Android &amp; iOS</div>
              <div class="stat-label">Mobile Apps Coming Soon</div>
            </div>
            <hr class="stat-divider">
            <div class="stat-item">
              <div class="stat-num">100%</div>
              <div class="stat-label">Verification Attempts Logged for Audit</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. VALUES SECTION -->
  <section class="section section-alt" aria-labelledby="values-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">Our Values</span>
        <h2 id="values-heading">What We Stand For</h2>
      </div>
      <div class="values-grid">
        <div class="value-card reveal delay-1">
          <span class="value-icon" aria-hidden="true">&#127919;</span>
          <h3>Accuracy First</h3>
          <p>We obsess over recognition accuracy. Every algorithm update is benchmarked against real-world conditions before release.</p>
        </div>
        <div class="value-card reveal delay-2">
          <span class="value-icon" aria-hidden="true">&#128274;</span>
          <h3>Privacy by Design</h3>
          <p>Only numeric face templates are stored — never photos. Employee data is encrypted and never sold or shared. Privacy controls are built in from day one, not bolted on.</p>
        </div>
        <div class="value-card reveal delay-3">
          <span class="value-icon" aria-hidden="true">&#129309;</span>
          <h3>Customer Success</h3>
          <p>We measure our success by your success. Dedicated onboarding, responsive support, and regular check-ins come standard.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. STORY SECTION -->
  <section class="section" aria-labelledby="story-heading">
    <div class="container">
      <div class="story-grid">
        <!-- Timeline -->
        <div class="reveal">
          <nav class="timeline" aria-label="Where we are and what's next">
            <div class="timeline-item">
              <div class="timeline-year">Where we started</div>
              <h4>Built in Lahore, Pakistan</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2026 &middot; Launch</div>
              <h4>Web Dashboard &amp; Face-Recognition Check-In</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">Next</div>
              <h4>Android &amp; iOS Apps</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">Then</div>
              <h4>Payroll Integrations</h4>
            </div>
          </nav>
        </div>
        <!-- Story text -->
        <div class="story-text reveal delay-2">
          <h2 id="story-heading">Our Story</h2>
          <p>Mark Attendance is a new company, built in Lahore by a small team of engineers who saw how much time, money, and trust is lost to unreliable attendance records. Register books, punch cards, and PINs are easy to cheat and slow to reconcile — and HR teams end up paying the price.</p>
          <p>We are launching in 2026 with a web dashboard and face-verified check-in designed for the realities of Pakistani workplaces: shift workers, multiple geofenced locations, and shared devices at the gate. Every verification attempt is logged for audit, and attendance records export to CSV for your payroll process.</p>
          <p>Our Android and iOS apps are coming soon, and we are shaping the roadmap around feedback from the first organisations that work with us. If you'd like to be one of them, we'd love to hear from you. Our north star is simple: make attendance the one thing organisations never have to worry about.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. TEAM SECTION -->
  <section class="section section-alt" aria-labelledby="team-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">Our Team</span>
        <h2 id="team-heading">A Small Team in Lahore</h2>
        <p>We're a small, focused team of engineers based in Lahore, building Mark Attendance full-time. Have a question about the product or want to talk to the people building it? <a href="<?= SITE_BASE ?>/contact">Get in touch</a>.</p>
      </div>
    </div>
  </section>

  <!-- 6. CTA BANNER -->
  <section class="cta-band" aria-labelledby="about-cta-heading">
    <div class="container">
      <div class="cta-band-inner reveal">
        <h2 id="about-cta-heading">Want to Know More? Let's Talk.</h2>
        <p>We'd love to show you what Mark Attendance can do for your organisation.</p>
        <div class="cta-band-actions">
          <a href="<?= SITE_BASE ?>/contact" class="btn btn-ghost">Contact Us</a>
          <a href="<?= SITE_BASE ?>/contact#demo" class="btn btn-ghost">Get Free Demo</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

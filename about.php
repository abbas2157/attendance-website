<?php
$page_title          = 'About Us | Mark Attendance – Our Mission & Story';
$meta_description    = 'Learn about Mark Attendance — our mission to make attendance accurate, contactless, and effortless for every organisation in Pakistan and beyond.';
$canonical_url       = 'https://www.markattendance.com/about';
$og_description      = 'Learn about Mark Attendance — our mission to make attendance accurate, contactless, and effortless for every organisation in Pakistan and beyond.';
$og_image            = 'https://www.markattendance.com/assets/og-image.png';
$twitter_description = 'Learn about Mark Attendance — our mission to make attendance accurate, contactless, and effortless for every organisation in Pakistan and beyond.';
$twitter_image       = 'https://www.markattendance.com/assets/og-image.png';
$noindex             = true;
$current_page        = 'about';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://www.markattendance.com/#organization",
    "name": "Mark Attendance",
    "url": "https://www.markattendance.com/",
    "logo": "https://www.markattendance.com/assets/favicon.svg",
    "description": "Mark Attendance is a smart face recognition attendance management platform for offices, factories, warehouses, and businesses of all sizes.",
    "foundingDate": "2020",
    "foundingLocation": {
      "@type": "Place",
      "name": "Lahore, Pakistan"
    },
    "founder": [
      {
        "@type": "Person",
        "name": "Ahmad Raza",
        "jobTitle": "Chief Executive Officer"
      }
    ],
    "employee": [
      {
        "@type": "Person",
        "name": "Ahmad Raza",
        "jobTitle": "CEO"
      },
      {
        "@type": "Person",
        "name": "Sara Khan",
        "jobTitle": "CTO"
      },
      {
        "@type": "Person",
        "name": "Usman Ali",
        "jobTitle": "Head of Product"
      },
      {
        "@type": "Person",
        "name": "Fatima Malik",
        "jobTitle": "Head of Sales"
      }
    ],
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+92-300-0000000",
      "email": "info@markattendance.com",
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

<main class="page-body">

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
          <p>Manual attendance systems are broken. Register books get falsified, buddy-punching costs companies thousands of hours each year, and HR teams spend more time correcting records than supporting people. For factories, warehouses, and offices across Pakistan, this wasn't a minor inconvenience — it was a serious operational drain.</p>
          <p>We built Mark Attendance because face recognition technology had matured to the point where it could actually solve the problem — not just in theory, but in real-world environments with shift workers, varying lighting, masks, and high throughput at the gate. Our system processes each recognition in under a second, works offline when connectivity is weak, and syncs automatically when it's restored.</p>
          <p>Our vision is to become the attendance backbone for every organisation in Pakistan and South Asia. We believe that when payroll is accurate, trust between employers and employees improves. When managers have real-time visibility, they can lead better. Accurate attendance is not a back-office function — it's the foundation of a fair workplace.</p>
        </div>
        <div class="reveal delay-2">
          <div class="stats-card" aria-label="Key metrics">
            <div class="stat-item">
              <div class="stat-num">200+</div>
              <div class="stat-label">Organisations Using Mark Attendance</div>
            </div>
            <hr class="stat-divider">
            <div class="stat-item">
              <div class="stat-num">10,000+</div>
              <div class="stat-label">Employees Tracked Every Day</div>
            </div>
            <hr class="stat-divider">
            <div class="stat-item">
              <div class="stat-num">99.7%</div>
              <div class="stat-label">Face Recognition Accuracy Rate</div>
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
          <p>Employee biometric data is encrypted and never sold or shared. Privacy controls are built in from day one, not bolted on.</p>
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
          <nav class="timeline" aria-label="Company milestones">
            <div class="timeline-item">
              <div class="timeline-year">2020</div>
              <h4>Founded in Lahore</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2021</div>
              <h4>First Factory Deployment</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2022</div>
              <h4>Mobile App Launched</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2023</div>
              <h4>200+ Organisations Onboarded</h4>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">2024</div>
              <h4>10,000+ Employees Tracked Daily</h4>
            </div>
          </nav>
        </div>
        <!-- Story text -->
        <div class="story-text reveal delay-2">
          <h2 id="story-heading">Our Story</h2>
          <p>Mark Attendance was founded in 2020 in Lahore by a small team of engineers and business operators who had experienced firsthand how much time, money, and trust was eroded by unreliable attendance records. What started as a pilot project for a single textile factory grew rapidly as word spread that the system genuinely worked — under harsh lighting, with workers in PPE, at the scale of hundreds of check-ins per shift.</p>
          <p>By 2022 we had launched our mobile app and expanded into offices, schools, and healthcare facilities. Our engineering team grew, our recognition models improved, and we began building the broader HR-adjacent features — shift scheduling, leave management, automated payroll-ready exports — that our customers were asking for. Each new feature was shaped by real feedback from HR managers and factory supervisors on the ground.</p>
          <p>Today we serve organisations from five-person startups to multi-site manufacturers with thousands of employees. We are headquartered in Lahore and are actively expanding across Pakistan and into the wider South Asian market. Our north star has never changed: make attendance the one thing organisations never have to worry about.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. TEAM SECTION -->
  <section class="section section-alt" aria-labelledby="team-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">Leadership</span>
        <h2 id="team-heading">Meet the Team</h2>
      </div>
      <div class="team-grid">
        <div class="team-card reveal delay-1">
          <div class="team-av" aria-hidden="true">AR</div>
          <h3>Ahmad Raza</h3>
          <div class="team-role">CEO</div>
          <p>Entrepreneur with 10+ years in workforce technology.</p>
        </div>
        <div class="team-card reveal delay-2">
          <div class="team-av" aria-hidden="true">SK</div>
          <h3>Sara Khan</h3>
          <div class="team-role">CTO</div>
          <p>Computer vision engineer, ex-Google AI.</p>
        </div>
        <div class="team-card reveal delay-3">
          <div class="team-av" aria-hidden="true">UA</div>
          <h3>Usman Ali</h3>
          <div class="team-role">Head of Product</div>
          <p>UX designer passionate about simplifying HR workflows.</p>
        </div>
        <div class="team-card reveal delay-4">
          <div class="team-av" aria-hidden="true">FM</div>
          <h3>Fatima Malik</h3>
          <div class="team-role">Head of Sales</div>
          <p>Enterprise sales specialist with deep HR industry knowledge.</p>
        </div>
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
          <a href="/contact" class="btn btn-ghost">Contact Us</a>
          <a href="/contact#demo" class="btn btn-ghost">Get Free Demo</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

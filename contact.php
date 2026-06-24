<?php
$page_title          = 'Contact Us | Mark Attendance – Get a Free Demo';
$meta_description    = 'Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support. We reply within 24 hours.';
$canonical_url       = 'https://www.markattendance.com/contact';
$og_description      = 'Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support. We reply within 24 hours.';
$og_image            = 'https://www.markattendance.com/assets/og-image.png';
$twitter_description = 'Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support. We reply within 24 hours.';
$twitter_image       = 'https://www.markattendance.com/assets/og-image.png';
$noindex             = true;
$current_page        = 'contact';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "@id": "https://www.markattendance.com/contact",
    "name": "Contact Mark Attendance",
    "url": "https://www.markattendance.com/contact",
    "description": "Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support.",
    "breadcrumb": {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.markattendance.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Contact",
          "item": "https://www.markattendance.com/contact"
        }
      ]
    },
    "mainEntity": {
      "@type": "Organization",
      "@id": "https://www.markattendance.com/#organization",
      "name": "Mark Attendance",
      "url": "https://www.markattendance.com/",
      "logo": "https://www.markattendance.com/assets/favicon.svg",
      "email": "info@markattendance.com",
      "telephone": "+92-300-0000000",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Lahore",
        "addressCountry": "PK"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+92-300-0000000",
        "email": "info@markattendance.com",
        "contactType": "customer support",
        "areaServed": "PK",
        "availableLanguage": "English",
        "hoursAvailable": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "09:00",
          "closes": "18:00"
        }
      }
    }
  }
JSONLD;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="page-body">
  <main id="main-content">

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero" aria-labelledby="contact-hero-heading">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">Contact</span>
        </nav>
        <span class="section-tag">Get in Touch</span>
        <h1 id="contact-hero-heading">Let's Talk — We're Here to Help</h1>
        <p>Book a free demo, ask about pricing, or just say hello. Our team responds within 24 hours.</p>
      </div>
    </section>

    <!-- ===================== CONTACT SECTION ===================== -->
    <section class="section" id="demo" aria-labelledby="contact-section-heading">
      <div class="container">
        <div class="contact-grid">

          <!-- LEFT: Contact Info -->
          <div class="contact-info reveal">
            <h2 id="contact-section-heading">Reach Out to Our Team</h2>
            <p>Whether you're ready to buy, just exploring, or need technical help — reach out and we'll get back to you fast.</p>

            <div class="contact-detail">
              <div class="cd-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </div>
              <div>
                <div class="cd-lbl">Email</div>
                <div class="cd-val"><a href="mailto:info@markattendance.com">info@markattendance.com</a></div>
              </div>
            </div>

            <div class="contact-detail">
              <div class="cd-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
              </div>
              <div>
                <div class="cd-lbl">Phone</div>
                <div class="cd-val"><a href="tel:+923000000000">+92 300 0000000</a></div>
              </div>
            </div>

            <div class="contact-detail">
              <div class="cd-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div>
                <div class="cd-lbl">Location</div>
                <div class="cd-val">Lahore, Pakistan</div>
              </div>
            </div>

            <div class="social-row" aria-label="Social media links">
              <a href="#" class="soc-btn" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                </svg>
              </a>
              <a href="#" class="soc-btn" aria-label="Twitter/X">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
              </a>
              <a href="#" class="soc-btn" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                  <circle cx="4" cy="4" r="2"/>
                </svg>
              </a>
              <a href="#" class="soc-btn" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                </svg>
              </a>
            </div>

            <div class="reply-note" role="note" aria-label="Response time note">
              <span class="reply-dot" aria-hidden="true"></span>
              We typically reply within 1 business day.
            </div>
          </div>

          <!-- RIGHT: Contact Form -->
          <div class="form-card reveal d2" role="region" aria-labelledby="contact-form-heading">
            <h3 id="contact-form-heading">Send Us a Message</h3>

            <form id="contact-form" novalidate aria-describedby="form-instructions">
              <p id="form-instructions" class="reply-note form-note-top">
                <span class="reply-dot" aria-hidden="true"></span>
                Fields marked with * are required.
              </p>

              <div class="form-row">
                <div class="form-group" id="group-name">
                  <label for="field-name">Full Name <span aria-hidden="true">*</span></label>
                  <input
                    type="text"
                    id="field-name"
                    name="name"
                    placeholder="Your full name"
                    required
                    aria-required="true"
                    aria-describedby="error-name"
                    autocomplete="name"
                  >
                  <span class="field-error" id="error-name" role="alert">Please enter your full name.</span>
                </div>
                <div class="form-group" id="group-email">
                  <label for="field-email">Email Address <span aria-hidden="true">*</span></label>
                  <input
                    type="email"
                    id="field-email"
                    name="email"
                    placeholder="you@company.com"
                    required
                    aria-required="true"
                    aria-describedby="error-email"
                    autocomplete="email"
                  >
                  <span class="field-error" id="error-email" role="alert">Please enter a valid email address.</span>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="field-company">Company</label>
                  <input
                    type="text"
                    id="field-company"
                    name="company"
                    placeholder="Your company name"
                    autocomplete="organization"
                  >
                </div>
                <div class="form-group">
                  <label for="field-phone">Phone Number</label>
                  <input
                    type="tel"
                    id="field-phone"
                    name="phone"
                    placeholder="+92 300 0000000"
                    autocomplete="tel"
                  >
                </div>
              </div>

              <div class="form-group" id="group-subject">
                <label for="field-subject">How can we help? <span aria-hidden="true">*</span></label>
                <select
                  id="field-subject"
                  name="subject"
                  required
                  aria-required="true"
                  aria-describedby="error-subject"
                >
                  <option value="" disabled selected>Select an option...</option>
                  <option value="demo">Request a Demo</option>
                  <option value="pricing">Pricing Enquiry</option>
                  <option value="support">Technical Support</option>
                  <option value="partnership">Partnership</option>
                  <option value="general">General Question</option>
                </select>
                <span class="field-error" id="error-subject" role="alert">Please select how we can help.</span>
              </div>

              <div class="form-group" id="group-message">
                <label for="field-message">Message <span aria-hidden="true">*</span></label>
                <textarea
                  id="field-message"
                  name="message"
                  placeholder="Tell us about your organisation and what you're looking for..."
                  required
                  aria-required="true"
                  aria-describedby="error-message"
                ></textarea>
                <span class="field-error" id="error-message" role="alert">Please enter a message.</span>
              </div>

              <button type="submit" class="btn btn-primary btn-full" aria-label="Submit contact form">
                Send Message &rarr;
              </button>
            </form>

            <div id="form-success" class="form-success" role="status" aria-live="polite">
              <div class="check-icon" aria-hidden="true">&#9989;</div>
              <h3>Message Sent!</h3>
              <p>Thank you for reaching out. We'll get back to you within 1 business day.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===================== DEMO REQUEST SECTION ===================== -->
    <section class="section section-alt" aria-labelledby="demo-section-heading">
      <div class="container">
        <div class="demo-grid">

          <!-- Left: Text -->
          <div class="reveal">
            <span class="section-tag">Free Demo</span>
            <h2 id="demo-section-heading">Book a Live Demo</h2>
            <p>See Mark Attendance in action with a personalised 30-minute live walkthrough. Our team will demonstrate the face recognition engine in real time, walk you through the admin dashboard and reports, and show you the mobile app — all tailored to your industry and team size.</p>
            <p class="demo-note">No technical knowledge required. No commitment. Just a conversation to see if we're a good fit.</p>
            <ul class="demo-list">
              <li class="demo-list-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#662D91" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                30-minute focused session — no fluff
              </li>
              <li class="demo-list-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#662D91" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                Live face recognition shown on a real device
              </li>
              <li class="demo-list-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#662D91" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                Q&amp;A session tailored to your questions
              </li>
              <li class="demo-list-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#662D91" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                Customised for your industry and workforce size
              </li>
            </ul>
          </div>

          <!-- Right: Demo Card -->
          <div class="demo-card reveal d2">
            <h3>What's Included in the Demo</h3>
            <p>A comprehensive walkthrough designed so you leave with a clear picture of how Mark Attendance fits into your workflow.</p>
            <div class="demo-includes" role="list" aria-label="Demo inclusions">

              <div class="demo-item" role="listitem">
                <div class="demo-check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg>
                </div>
                Live face recognition demonstration
              </div>

              <div class="demo-item" role="listitem">
                <div class="demo-check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg>
                </div>
                Dashboard and reporting walkthrough
              </div>

              <div class="demo-item" role="listitem">
                <div class="demo-check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg>
                </div>
                Mobile app showcase
              </div>

              <div class="demo-item" role="listitem">
                <div class="demo-check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg>
                </div>
                Pricing discussion
              </div>

              <div class="demo-item" role="listitem">
                <div class="demo-check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20,6 9,17 4,12"/></svg>
                </div>
                Q&amp;A with our team
              </div>

            </div>
            <a href="#demo" class="btn btn-primary btn-full" aria-label="Book a free live demo">Book Demo Now</a>
          </div>

        </div>
      </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="section" aria-labelledby="contact-faq-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">FAQ</span>
          <h2 id="contact-faq-heading">Common Questions</h2>
          <p>Quick answers to the most common questions about getting in touch and booking a demo.</p>
        </div>

        <div class="faq-list" role="list">

          <div class="faq-item reveal d1" role="listitem">
            <div class="faq-q">
              <h4>How quickly will you respond to my message?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="cfaq-a-1" aria-label="Toggle answer: How quickly will you respond to my message?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="cfaq-a-1" hidden>
              <p>We respond to all enquiries within 1 business day. For urgent matters, call us directly.</p>
            </div>
          </div>

          <div class="faq-item reveal d2" role="listitem">
            <div class="faq-q">
              <h4>Is the demo really free?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="cfaq-a-2" aria-label="Toggle answer: Is the demo really free?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="cfaq-a-2" hidden>
              <p>Yes, completely free. No obligation, no credit card required.</p>
            </div>
          </div>

          <div class="faq-item reveal d3" role="listitem">
            <div class="faq-q">
              <h4>Do you offer on-site demos?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="cfaq-a-3" aria-label="Toggle answer: Do you offer on-site demos?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="cfaq-a-3" hidden>
              <p>Yes, we offer on-site demonstrations for enterprise clients in major Pakistani cities.</p>
            </div>
          </div>

          <div class="faq-item reveal d4" role="listitem">
            <div class="faq-q">
              <h4>What time zones do you support?</h4>
              <button class="faq-btn" aria-expanded="false" aria-controls="cfaq-a-4" aria-label="Toggle answer: What time zones do you support?">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </button>
            </div>
            <div class="faq-a" id="cfaq-a-4" hidden>
              <p>Our primary support hours are 9am–6pm PKT (UTC+5). Emergency support is available 24/7 for Enterprise clients.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===================== MAP PLACEHOLDER ===================== -->
    <section class="section section-alt" aria-labelledby="map-section-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-tag">Our Location</span>
          <h2 id="map-section-heading">Find Us in Lahore</h2>
          <p>We're based in Lahore, Pakistan. Enterprise clients can arrange on-site visits and demonstrations.</p>
        </div>

        <div class="map-placeholder reveal" role="img" aria-label="Map placeholder for Lahore, Pakistan location">
          <div class="map-pin-label">
            &#128205; Lahore, Pakistan &mdash; [Map will be embedded here]
          </div>
          <address class="map-address">
            Mark Attendance HQ<br>
            Lahore, Punjab, Pakistan<br>
            <a href="mailto:info@markattendance.com" class="map-link">info@markattendance.com</a>
            &nbsp;&middot;&nbsp;
            <a href="tel:+923000000000" class="map-link">+92 300 0000000</a>
          </address>
        </div>
      </div>
    </section>

  </main>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

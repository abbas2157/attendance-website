<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/contact-handler.php';
$form = contact_form_state();   // handles POST (JSON reply or redirect) before any output
$fv   = fn(string $k): string => htmlspecialchars($form['values'][$k] ?? '', ENT_QUOTES, 'UTF-8');
$ferr = fn(string $k): string => isset($form['errors'][$k]) ? ' has-error' : '';

$page_title          = 'Contact Us | Mark Attendance – Get a Free Demo';
$meta_description    = 'Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support. We reply within 1 business day.';
$canonical_url       = 'https://markattendance.io/contact';
$og_description      = 'Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support. We reply within 1 business day.';
$twitter_description = 'Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support. We reply within 1 business day.';
$current_page        = 'contact';
$json_ld = <<<'JSONLD'
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "@id": "https://markattendance.io/contact",
    "name": "Contact Mark Attendance",
    "url": "https://markattendance.io/contact",
    "description": "Contact the Mark Attendance team. Get a free demo, ask about pricing, or request technical support.",
    "breadcrumb": {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://markattendance.io/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Contact",
          "item": "https://markattendance.io/contact"
        }
      ]
    },
    "mainEntity": {
      "@type": "Organization",
      "@id": "https://markattendance.io/#organization",
      "name": "Mark Attendance",
      "url": "https://markattendance.io/",
      "logo": "https://markattendance.io/assets/icon-512.png",
      "email": "info@markattendance.io",
      "telephone": "+92-306-4164077",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Lahore",
        "addressCountry": "PK"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+92-306-4164077",
        "email": "info@markattendance.io",
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
          <a href="<?= SITE_BASE ?>/">Home</a>
          <span aria-hidden="true">/</span>
          <span aria-current="page">Contact</span>
        </nav>
        <span class="section-tag">Get in Touch</span>
        <h1 id="contact-hero-heading">Let's Talk — We're Here to Help</h1>
        <p>Book a free demo, ask about pricing, or just say hello. Our team responds within 1 business day.</p>
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
                <div class="cd-val">
                  <a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a>
                  <button type="button" class="copy-btn" data-copy="<?= CONTACT_EMAIL ?>" aria-label="Copy email address">Copy</button>
                </div>
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
                <div class="cd-val">
                  <a href="tel:<?= CONTACT_PHONE_E164 ?>"><?= CONTACT_PHONE ?></a>
                  <button type="button" class="copy-btn" data-copy="<?= CONTACT_PHONE ?>" aria-label="Copy phone number">Copy</button>
                </div>
              </div>
            </div>

            <div class="contact-detail">
              <div class="cd-icon" aria-hidden="true">
                <svg viewBox="0 0 32 32" fill="currentColor"><path d="M16.04 3C9.4 3 4 8.38 4 15.01c0 2.12.56 4.19 1.62 6.01L4 29l8.17-1.58a12.04 12.04 0 003.87.64h.01C22.68 28.06 28 22.68 28 16.05 28 9.4 22.68 3 16.04 3zm0 22.9h-.01a9.9 9.9 0 01-5.05-1.38l-.36-.21-4.85.94.97-4.71-.24-.38a9.86 9.86 0 01-1.52-5.15c0-5.47 4.46-9.92 9.95-9.92 2.66 0 5.15 1.04 7.03 2.92a9.85 9.85 0 012.91 7.02c0 5.48-4.46 9.87-9.83 9.87z"/></svg>
              </div>
              <div>
                <div class="cd-lbl">WhatsApp</div>
                <div class="cd-val"><a href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Chat with us on WhatsApp</a></div>
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

            <?php $social = social_links("soc-btn"); if ($social !== ""): ?>
            <div class="social-row" aria-label="Social media links"><?= $social ?></div>
            <?php endif; ?>

            <div class="reply-note" role="note" aria-label="Response time note">
              <span class="reply-dot" aria-hidden="true"></span>
              We typically reply within 1 business day.
            </div>
          </div>

          <!-- RIGHT: Contact Form -->
          <div class="form-card reveal d2" role="region" aria-labelledby="contact-form-heading">
            <h3 id="contact-form-heading">Send Us a Message</h3>

            <form id="contact-form" action="<?= SITE_BASE ?>/contact" method="post" novalidate aria-describedby="form-instructions"<?= $form['sent'] ? ' hidden' : '' ?>>
              <p id="form-instructions" class="reply-note form-note-top">
                <span class="reply-dot" aria-hidden="true"></span>
                Fields marked with * are required.
              </p>

              <div class="form-alert" id="form-alert" role="alert" tabindex="-1"<?= $form['error'] ? '' : ' hidden' ?>>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <span id="form-alert-text"><?= htmlspecialchars($form['error'] ?? '') ?></span>
              </div>

              <div class="form-row">
                <div class="form-group<?= $ferr('name') ?>" id="group-name">
                  <label for="field-name">Full Name <span aria-hidden="true">*</span></label>
                  <input
                    type="text"
                    id="field-name"
                    name="name"
                    placeholder="Your full name"
                    value="<?= $fv('name') ?>"
                    required
                    minlength="2"
                    maxlength="100"
                    aria-required="true"
                    aria-describedby="error-name"
                    autocomplete="name"
                  >
                  <span class="field-error" id="error-name"><?= $form['errors']['name'] ?? 'Please enter your full name.' ?></span>
                </div>
                <div class="form-group<?= $ferr('email') ?>" id="group-email">
                  <label for="field-email">Email Address <span aria-hidden="true">*</span></label>
                  <input
                    type="email"
                    id="field-email"
                    name="email"
                    placeholder="you@company.com"
                    value="<?= $fv('email') ?>"
                    required
                    maxlength="254"
                    aria-required="true"
                    aria-describedby="error-email"
                    autocomplete="email"
                  >
                  <span class="field-error" id="error-email"><?= $form['errors']['email'] ?? 'Please enter a valid email address.' ?></span>
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
                    value="<?= $fv('company') ?>"
                    maxlength="120"
                    autocomplete="organization"
                  >
                </div>
                <div class="form-group<?= $ferr('phone') ?>" id="group-phone">
                  <label for="field-phone">Phone Number</label>
                  <input
                    type="tel"
                    id="field-phone"
                    name="phone"
                    placeholder="+92 300 1234567"
                    value="<?= $fv('phone') ?>"
                    maxlength="30"
                    pattern="\+?[0-9 \(\)\-]{7,20}"
                    aria-describedby="error-phone"
                    autocomplete="tel"
                  >
                  <span class="field-error" id="error-phone"><?= $form['errors']['phone'] ?? 'Please enter a valid phone number, e.g. +92 300 1234567.' ?></span>
                </div>
              </div>

              <div class="form-group<?= $ferr('subject') ?>" id="group-subject">
                <label for="field-subject">How can we help? <span aria-hidden="true">*</span></label>
                <select
                  id="field-subject"
                  name="subject"
                  required
                  aria-required="true"
                  aria-describedby="error-subject"
                >
                  <option value="" disabled<?= $fv('subject') === '' ? ' selected' : '' ?>>Select an option...</option>
                  <?php foreach (CONTACT_SUBJECTS as $key => $label): ?>
                  <option value="<?= $key ?>"<?= $fv('subject') === $key ? ' selected' : '' ?>><?= $label ?></option>
                  <?php endforeach; ?>
                </select>
                <span class="field-error" id="error-subject"><?= $form['errors']['subject'] ?? 'Please select how we can help.' ?></span>
              </div>

              <div class="form-group<?= $ferr('message') ?>" id="group-message">
                <label for="field-message">Message <span aria-hidden="true">*</span></label>
                <textarea
                  id="field-message"
                  name="message"
                  placeholder="Tell us about your organisation and what you're looking for..."
                  required
                  minlength="10"
                  maxlength="5000"
                  aria-required="true"
                  aria-describedby="error-message"
                ><?= $fv('message') ?></textarea>
                <span class="field-error" id="error-message"><?= $form['errors']['message'] ?? 'Please enter a message (at least 10 characters).' ?></span>
              </div>

              <!-- Spam trap: hidden from people, bots fill it in -->
              <div class="hp-field" aria-hidden="true">
                <label for="field-website">Leave this empty</label>
                <input type="text" id="field-website" name="website" tabindex="-1" autocomplete="off">
              </div>
              <!-- Campaign tracking — filled by main.js from stored UTM parameters -->
              <?php foreach (TRACKING_FIELDS as $key): ?>
              <input type="hidden" name="<?= $key ?>" data-track="<?= $key ?>">
              <?php endforeach; ?>

              <button type="submit" class="btn btn-primary btn-full">
                <span class="btn-label">Send Message &rarr;</span>
                <span class="btn-spinner" aria-hidden="true"></span>
              </button>
            </form>

            <div id="form-success" class="form-success" role="status" aria-live="polite" tabindex="-1"<?= $form['sent'] ? ' style="display:block"' : '' ?>>
              <div class="success-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <h3>Message Sent!</h3>
              <p>Thank you for reaching out. We'll get back to you within 1 business day.</p>
              <p class="form-success-alt">Need a faster answer? <a href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Message us on WhatsApp</a>.</p>
              <button type="button" class="btn btn-outline btn-sm" id="form-reset">Send another message</button>
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

        <div class="map-placeholder reveal">
          <div class="map-pin-label">
            &#128205; Lahore, Pakistan
          </div>
          <a href="https://www.google.com/maps/search/?api=1&amp;query=Lahore%2C+Pakistan" class="btn btn-outline btn-sm map-open" target="_blank" rel="noopener">Open in Google Maps</a>
          <address class="map-address">
            Mark Attendance HQ<br>
            Lahore, Punjab, Pakistan<br>
            <a href="mailto:info@markattendance.io" class="map-link">info@markattendance.io</a>
            &nbsp;&middot;&nbsp;
            <a href="tel:<?= CONTACT_PHONE_E164 ?>" class="map-link"><?= CONTACT_PHONE ?></a>
          </address>
        </div>
      </div>
    </section>

  </main>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * includes/app-screens.php
 * "App Screens" slider + lightbox gallery (real screenshots from assets/app-screens/).
 * Used on the home page and the mobile-app page. Include it once per page —
 * js/main.js binds the slider, dots, autoplay and lightbox automatically.
 */
?>
  <!-- ══════════════════════════════════════════════════════════
       APP SCREENSHOTS — slider + lightbox gallery
  ══════════════════════════════════════════════════════════════ -->
  <section class="section" aria-labelledby="screenshots-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="tag">App Screens</span>
        <h2 id="screenshots-heading">Designed for Simplicity</h2>
        <p>Real screens from the Mark Attendance app — clean and intuitive, so your team can use it from day one.</p>
      </div>

      <div class="app-slider reveal d1">
        <button type="button" class="slider-arrow prev" aria-label="Previous screenshots">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>
        </button>

        <div class="app-shots">

        <!-- Screen 1: Home / Location -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: Home and location screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/home.webp" alt="Mark Attendance home screen showing the date, time, and a location card confirming the employee is inside the Main Warehouse premises" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">Home &amp; Location</span>
            <span class="screenshot-caption-sub">Knows when you're on site</span>
          </figcaption>
        </figure>

        <!-- Screen 2: Face Scan -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: Face scan screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/face-scan.webp" alt="Face scan screen with a camera oval and site badge, verifying the employee in seconds" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">Face Scan</span>
            <span class="screenshot-caption-sub">Verified in seconds</span>
          </figcaption>
        </figure>

        <!-- Screen 3: Check-in Confirmed -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: Check-in confirmation screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/checked-in.webp" alt="Check-in confirmation screen showing the employee name, check-in time, warehouse, and match confidence" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">Check-in Confirmed</span>
            <span class="screenshot-caption-sub">Time, site, and who was recognised</span>
          </figcaption>
        </figure>

        <!-- Screen 4: My Attendance -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: My attendance screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/attendance-history.webp" alt="My Attendance screen listing days present, hours worked, and each day's check-in and check-out times" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">My Attendance</span>
            <span class="screenshot-caption-sub">Your month at a glance</span>
          </figcaption>
        </figure>

        <!-- Screen 5: Apply for Leave -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: Apply for leave screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/apply-leave.webp" alt="Apply for Leave screen with a date picker, paid and unpaid leave types, and a reason field" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">Apply for Leave</span>
            <span class="screenshot-caption-sub">One tap — HR decides on the web</span>
          </figcaption>
        </figure>

        <!-- Screen 6: Enrol Staff -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: Enrol staff screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/enrol-staff.webp" alt="Add Employee screen capturing three live face samples to enrol a new staff member" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">Enrol Staff</span>
            <span class="screenshot-caption-sub">Three photos and they're ready</span>
          </figcaption>
        </figure>

        <!-- Screen 7: Themes & Settings -->
        <figure class="app-shot">
          <button type="button" class="app-shot-frame" aria-label="View larger: Theme settings screen">
            <img src="<?= SITE_BASE ?>/assets/app-screens/themes.webp" alt="Settings screen with light and dark theme options plus camera and location permissions" width="760" height="1648" loading="lazy">
          </button>
          <figcaption>
            <span class="screenshot-caption">Light or Dark</span>
            <span class="screenshot-caption-sub">Follows your phone, or your pick</span>
          </figcaption>
        </figure>

        </div><!-- /app-shots -->

        <button type="button" class="slider-arrow next" aria-label="Next screenshots">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg>
        </button>
      </div><!-- /app-slider -->

      <div class="slider-dots" aria-label="Screenshot navigation"></div>

      <!-- Lightbox (opens when a screenshot is tapped) -->
      <div class="lightbox" id="lightbox" hidden role="dialog" aria-modal="true" aria-label="Screenshot viewer">
        <button type="button" class="lightbox-btn lightbox-close" aria-label="Close viewer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
        <button type="button" class="lightbox-btn lightbox-prev" aria-label="Previous screenshot">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <figure>
          <img id="lightbox-img" src="" alt="">
          <figcaption id="lightbox-cap"></figcaption>
        </figure>
        <button type="button" class="lightbox-btn lightbox-next" aria-label="Next screenshot">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg>
        </button>
      </div>
    </div>
  </section>

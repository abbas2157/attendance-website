/* ============================================================
   MARK ATTENDANCE — main.js
   ============================================================ */

/* ── Sticky Nav ─────────────────────────────────────────── */
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav?.classList.toggle('scrolled', window.scrollY > 20);
});

/* ── Mobile Menu ────────────────────────────────────────── */
const hamburger = document.getElementById('hamburger');
const drawer    = document.getElementById('nav-drawer');
hamburger?.addEventListener('click', () => {
  const open = drawer.classList.toggle('open');
  hamburger.classList.toggle('open', open);
  hamburger.setAttribute('aria-expanded', open);
  document.body.style.overflow = open ? 'hidden' : '';
});
// Close on outside click
document.addEventListener('click', e => {
  if (drawer?.classList.contains('open') && !nav?.contains(e.target)) {
    drawer.classList.remove('open');
    hamburger?.classList.remove('open');
    document.body.style.overflow = '';
  }
});

/* ── Active Nav Link ────────────────────────────────────── */
// PHP already sets class="active" server-side; this handles any JS-only edge cases.
(function markActiveLink() {
  const path = location.pathname.replace(/\/$/, '') || '/';
  document.querySelectorAll('.nav-links a, .nav-drawer a').forEach(a => {
    const href = (a.getAttribute('href') || '').replace(/\/$/, '') || '/';
    if (href === path) {
      a.classList.add('active');
      a.setAttribute('aria-current', 'page');
    }
  });
})();

/* ── Scroll Reveal ──────────────────────────────────────── */
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('on');
      observer.unobserve(e.target);
    }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

/* ── Animated Counters ──────────────────────────────────── */
function animateCount(el) {
  const target = parseFloat(el.dataset.count);
  const suffix = el.dataset.suffix || '';
  const isDecimal = String(target).includes('.');
  const duration = 1800;
  const start = performance.now();
  const run = now => {
    const pct = Math.min((now - start) / duration, 1);
    const ease = 1 - Math.pow(1 - pct, 3);
    const val = target * ease;
    el.textContent = (isDecimal ? val.toFixed(1) : Math.round(val)) + suffix;
    if (pct < 1) requestAnimationFrame(run);
  };
  requestAnimationFrame(run);
}
const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      animateCount(e.target);
      counterObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(el => counterObserver.observe(el));

/* ── FAQ Accordion ──────────────────────────────────────── */
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    // Close all
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  });
});
// Keyboard support
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.setAttribute('role', 'button');
  btn.setAttribute('tabindex', '0');
  btn.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); btn.click(); }
  });
});

/* ── Contact Form ───────────────────────────────────────── */
const form = document.getElementById('contact-form');
form?.addEventListener('submit', e => {
  e.preventDefault();
  const btn = form.querySelector('[type=submit]');
  btn.disabled = true;
  btn.textContent = 'Sending…';
  // Simulate submission (replace with real endpoint)
  setTimeout(() => {
    form.style.display = 'none';
    document.getElementById('form-success')?.style.setProperty('display', 'block');
  }, 1200);
});

/* ── Smooth scroll for anchor links ────────────────────── */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    const offset = 80;
    const top = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top, behavior: 'smooth' });
    // Close mobile menu if open
    drawer?.classList.remove('open');
    hamburger?.classList.remove('open');
    document.body.style.overflow = '';
  });
});

/* ── Video / Demo modal placeholder ────────────────────── */
document.querySelectorAll('[data-action="watch-demo"]').forEach(btn => {
  btn.addEventListener('click', () => {
    alert('Demo video coming soon! Contact us for a live walkthrough.');
  });
});

/* ── Logo Image Injection ───────────────────────────────
   When assets/logo.png exists, replaces the SVG placeholder
   in every nav and footer with the real logo image.
   Place your logo at: website/assets/logo.png
   ─────────────────────────────────────────────────────── */
(function injectLogo() {
  const LOGO = '/assets/logo.png';
  const probe = new Image();
  probe.onload = function () {
    // Nav logos
    document.querySelectorAll('.nav-logo').forEach(el => {
      el.innerHTML = `<img src="${LOGO}" alt="Mark Attendance" class="nav-logo-img">`;
    });
    // Footer logos — targets both footer-brand-logo divs and plain footer logo links
    document.querySelectorAll(
      '.footer-brand-logo, .footer-brand > a[href="index.html"], .footer-brand > a[aria-label]'
    ).forEach(el => {
      if (el.tagName === 'A') {
        el.innerHTML = `<img src="${LOGO}" alt="Mark Attendance" class="footer-logo-img">`;
      } else {
        el.innerHTML = `<img src="${LOGO}" alt="Mark Attendance" class="footer-logo-img">`;
      }
    });
  };
  probe.src = LOGO;
})();

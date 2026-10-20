/* ============================================================
   MARK ATTENDANCE — main.js
   ============================================================ */

const SITE = window.SITE || { base: '', ga4: '', email: 'info@markattendance.com' };
const store = {
  get(k) { try { return JSON.parse(localStorage.getItem(k)); } catch (e) { return null; } },
  set(k, v) { try { localStorage.setItem(k, JSON.stringify(v)); } catch (e) { /* private mode */ } },
};
const track = (name, params) => { if (typeof window.gtag === 'function') window.gtag('event', name, params || {}); };

/* ── Page loader ────────────────────────────────────────── */
// Script is deferred, so the DOM is ready here — hide the loader straight away.
const loader = document.getElementById('page-loader');
if (loader) {
  loader.classList.add('done');
  setTimeout(() => loader.remove(), 500);
}

/* ── Scroll: sticky nav, progress bar, back-to-top ─────── */
const nav      = document.getElementById('nav');
const progress = document.getElementById('scroll-progress');
const toTop    = document.getElementById('back-to-top');
let ticking = false;
function onScroll() {
  const y   = window.scrollY;
  const max = document.documentElement.scrollHeight - window.innerHeight;
  nav?.classList.toggle('scrolled', y > 20);
  if (progress) progress.style.transform = `scaleX(${max > 0 ? Math.min(y / max, 1) : 0})`;
  toTop?.classList.toggle('show', y > 600);
  ticking = false;
}
window.addEventListener('scroll', () => {
  if (!ticking) { ticking = true; requestAnimationFrame(onScroll); }
}, { passive: true });
onScroll();

toTop?.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
  document.getElementById('main-content')?.focus({ preventScroll: true });
});

/* ── Mobile Menu ────────────────────────────────────────── */
const hamburger = document.getElementById('hamburger');
const drawer    = document.getElementById('nav-drawer');
function setMenu(open) {
  if (!drawer || !hamburger) return;
  drawer.classList.toggle('open', open);
  hamburger.classList.toggle('open', open);
  hamburger.setAttribute('aria-expanded', String(open));
  hamburger.setAttribute('aria-label', open ? 'Close navigation menu' : 'Open navigation menu');
  document.body.style.overflow = open ? 'hidden' : '';
  if (open) drawer.querySelector('a, input')?.focus({ preventScroll: true });
}
hamburger?.addEventListener('click', () => setMenu(!drawer.classList.contains('open')));
// Close on outside click (the drawer sits outside <nav>, so check both)
document.addEventListener('click', e => {
  if (drawer?.classList.contains('open') && !nav?.contains(e.target) && !drawer.contains(e.target)) setMenu(false);
});
drawer?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setMenu(false)));
window.addEventListener('resize', () => {
  if (window.innerWidth > 768 && drawer?.classList.contains('open')) setMenu(false);
});

/* ── Search panel ───────────────────────────────────────── */
const searchToggle = document.getElementById('search-toggle');
const searchPanel  = document.getElementById('search-panel');
function setSearch(open) {
  if (!searchPanel || !searchToggle) return;
  searchPanel.hidden = !open;
  searchToggle.setAttribute('aria-expanded', String(open));
  if (open) searchPanel.querySelector('input')?.focus();
}
searchToggle?.addEventListener('click', () => setSearch(searchPanel.hidden));

/* ── Escape closes whatever is open ─────────────────────── */
document.addEventListener('keydown', e => {
  if (e.key !== 'Escape') return;
  if (drawer?.classList.contains('open')) { setMenu(false); hamburger?.focus(); }
  if (searchPanel && !searchPanel.hidden) { setSearch(false); searchToggle?.focus(); }
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
if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('on');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
} else {
  document.querySelectorAll('.reveal').forEach(el => el.classList.add('on'));
}

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
if ('IntersectionObserver' in window) {
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        animateCount(e.target);
        counterObserver.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-count]').forEach(el => counterObserver.observe(el));
}

/* ── FAQ Accordion ──────────────────────────────────────── */
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.setAttribute('role', 'button');
  btn.setAttribute('tabindex', '0');
  btn.setAttribute('aria-expanded', 'false');
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    // Close all
    document.querySelectorAll('.faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.faq-q')?.setAttribute('aria-expanded', 'false');
    });
    if (!isOpen) { item.classList.add('open'); btn.setAttribute('aria-expanded', 'true'); }
  });
  // Keyboard support
  btn.addEventListener('keydown', e => {
    if (btn.tagName !== 'BUTTON' && (e.key === 'Enter' || e.key === ' ')) { e.preventDefault(); btn.click(); }
  });
});

/* ── UTM tracking ───────────────────────────────────────── */
// First-touch attribution: the campaign that first brought the visitor is kept for 30 days
// and sent with the contact form, so every lead shows where it came from.
const UTM_KEYS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
const UTM_TTL  = 30 * 24 * 60 * 60 * 1000;
const attribution = (function captureUtm() {
  const params = new URLSearchParams(location.search);
  const saved  = store.get('ma_attribution');
  const fresh  = saved && Date.now() - saved.ts < UTM_TTL ? saved : null;
  const incoming = {};
  UTM_KEYS.forEach(k => { const v = params.get(k); if (v) incoming[k] = v.slice(0, 200); });
  if (params.get('gclid')) {   // Google Ads auto-tagging
    incoming.utm_source = incoming.utm_source || 'google';
    incoming.utm_medium = incoming.utm_medium || 'cpc';
  }

  if (fresh && !Object.keys(incoming).length) return fresh;
  if (fresh && fresh.utm_source) return fresh;          // keep first campaign touch
  const data = Object.assign({}, incoming, {
    landing_page: location.pathname + location.search,
    referrer: document.referrer && !document.referrer.includes(location.host) ? document.referrer.slice(0, 300) : '',
    ts: Date.now(),
  });
  store.set('ma_attribution', data);
  return data;
})();
document.querySelectorAll('[data-track]').forEach(input => {
  input.value = attribution[input.dataset.track] || '';
});
// Tag WhatsApp chats with the campaign too
document.querySelectorAll('a[href^="https://wa.me/"]').forEach(a => {
  if (attribution.utm_source) {
    const url = new URL(a.href);
    const ref = [attribution.utm_source, attribution.utm_campaign].filter(Boolean).join(' / ');
    url.searchParams.set('text', (url.searchParams.get('text') || '') + ` [ref: ${ref}]`);
    a.href = url.toString();
  }
  a.addEventListener('click', () => track('contact_whatsapp', { link_url: a.href }));
});

/* ── Contact Form ───────────────────────────────────────── */
const form = document.getElementById('contact-form');
if (form) {
  const success = document.getElementById('form-success');
  const alertBox = document.getElementById('form-alert');
  const alertText = document.getElementById('form-alert-text');
  const submitBtn = form.querySelector('[type=submit]');
  const rules = {
    name:    v => v.trim().length >= 2 || 'Please enter your full name.',
    email:   v => /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()) || 'Please enter a valid email address.',
    phone:   v => !v.trim() || /^\+?[0-9 ()\-]{7,20}$/.test(v.trim()) || 'Please enter a valid phone number, e.g. +92 300 1234567.',
    subject: v => !!v || 'Please select how we can help.',
    message: v => v.trim().length >= 10 || 'Please enter a message (at least 10 characters).',
  };
  const fieldOf = name => form.elements[name];

  function setFieldError(name, msg) {
    const field = fieldOf(name);
    const group = field?.closest('.form-group');
    const err   = document.getElementById('error-' + name);
    if (!field || !group) return;
    group.classList.toggle('has-error', !!msg);
    group.classList.toggle('is-valid', !msg && field.value.trim() !== '');
    field.setAttribute('aria-invalid', msg ? 'true' : 'false');
    if (msg && err) err.textContent = msg;
  }
  function validateField(name) {
    const res = rules[name](fieldOf(name).value);
    setFieldError(name, res === true ? '' : res);
    return res === true;
  }
  function showAlert(msg) {
    if (!alertBox) return;
    alertText.textContent = msg;
    alertBox.hidden = !msg;
    if (msg) alertBox.focus();
  }
  function setLoading(on) {
    submitBtn.disabled = on;
    submitBtn.classList.toggle('is-loading', on);
    submitBtn.setAttribute('aria-busy', String(on));
  }

  // Validate on blur; once a field has shown an error, re-check it as the user types
  Object.keys(rules).forEach(name => {
    const field = fieldOf(name);
    if (!field) return;
    field.addEventListener('blur', () => { if (field.value.trim() !== '' || field.closest('.has-error')) validateField(name); });
    field.addEventListener(field.tagName === 'SELECT' ? 'change' : 'input', () => {
      if (field.closest('.has-error')) validateField(name);
    });
  });

  // Pre-select the topic from ?subject=demo (used by "Watch Demo" buttons)
  const preset = new URLSearchParams(location.search).get('subject');
  if (preset && fieldOf('subject')?.querySelector(`option[value="${CSS.escape(preset)}"]`)) fieldOf('subject').value = preset;

  form.addEventListener('submit', async e => {
    e.preventDefault();
    showAlert('');
    const invalid = Object.keys(rules).filter(name => fieldOf(name) && !validateField(name));
    if (invalid.length) {
      showAlert(invalid.length === 1 ? 'Please fix the highlighted field.' : `Please fix the ${invalid.length} highlighted fields.`);
      fieldOf(invalid[0]).focus();
      return;
    }

    setLoading(true);
    try {
      const res  = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
      const data = await res.json().catch(() => ({ ok: false, message: 'Unexpected server response.' }));
      if (!data.ok) {
        Object.entries(data.errors || {}).forEach(([name, msg]) => setFieldError(name, msg));
        showAlert(data.message || 'Something went wrong. Please try again.');
        const firstBad = Object.keys(data.errors || {})[0];
        if (firstBad) fieldOf(firstBad)?.focus();
        return;
      }
      track('generate_lead', { form: 'contact', topic: fieldOf('subject').value });
      form.hidden = true;
      success.style.display = 'block';
      success.focus();
    } catch (err) {
      showAlert(`We couldn't reach the server. Check your connection and try again, or email us at ${SITE.email}.`);
    } finally {
      setLoading(false);
    }
  });

  document.getElementById('form-reset')?.addEventListener('click', () => {
    form.reset();
    form.querySelectorAll('.form-group').forEach(g => g.classList.remove('has-error', 'is-valid'));
    document.querySelectorAll('[data-track]').forEach(i => { i.value = attribution[i.dataset.track] || ''; });
    success.style.display = 'none';
    form.hidden = false;
    fieldOf('name').focus();
    if (location.search.includes('sent=1')) history.replaceState(null, '', location.pathname);
  });
}

/* ── Password visibility toggle ─────────────────────────── */
// Applies automatically to every password field on the site (e.g. a future login form).
document.querySelectorAll('input[type="password"]').forEach(input => {
  const wrap = document.createElement('div');
  wrap.className = 'password-wrap';
  input.parentNode.insertBefore(wrap, input);
  wrap.appendChild(input);
  const btn = document.createElement('button');
  btn.type = 'button';
  btn.className = 'password-toggle';
  btn.setAttribute('aria-label', 'Show password');
  btn.setAttribute('aria-pressed', 'false');
  btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>';
  btn.addEventListener('click', () => {
    const show = input.type === 'password';
    input.type = show ? 'text' : 'password';
    btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
    btn.setAttribute('aria-pressed', String(show));
    btn.classList.toggle('on', show);
    input.focus();
  });
  wrap.appendChild(btn);
});

/* ── Copy buttons ───────────────────────────────────────── */
const toast = document.getElementById('toast');
let toastTimer;
function showToast(msg) {
  if (!toast) return;
  toast.textContent = msg;
  toast.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove('show'), 2200);
}
async function copyText(text) {
  try {
    await navigator.clipboard.writeText(text);
    return true;
  } catch (e) {
    // Fallback for older Safari / non-HTTPS
    const ta = document.createElement('textarea');
    ta.value = text; ta.setAttribute('readonly', ''); ta.style.position = 'fixed'; ta.style.opacity = '0';
    document.body.appendChild(ta); ta.select();
    let ok = false;
    try { ok = document.execCommand('copy'); } catch (err) { ok = false; }
    ta.remove();
    return ok;
  }
}
document.querySelectorAll('[data-copy]').forEach(btn => {
  btn.addEventListener('click', async () => {
    const ok = await copyText(btn.dataset.copy);
    showToast(ok ? `Copied: ${btn.dataset.copy}` : 'Could not copy — please select the text manually.');
    if (!ok) return;
    const label = btn.textContent;
    btn.textContent = 'Copied ✓';
    btn.classList.add('copied');
    setTimeout(() => { btn.textContent = label; btn.classList.remove('copied'); }, 2000);
  });
});

/* ── Smooth scroll for in-page anchor links ────────────── */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const id = a.getAttribute('href');
    if (id === '#' || id === '#main-content') return;
    const target = document.querySelector(id);
    if (!target) return;
    e.preventDefault();
    const offset = (nav?.offsetHeight || 80) + 10;
    const top = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top, behavior: 'smooth' });
    history.pushState(null, '', id);
    setMenu(false);
  });
});

/* ── "Watch Demo" buttons → book a live demo ───────────── */
document.querySelectorAll('[data-action="watch-demo"]').forEach(btn => {
  btn.addEventListener('click', () => {
    location.href = `${SITE.base}/contact?subject=demo#demo`;
  });
});

/* ── Cookie banner + consent-gated analytics ───────────── */
const banner = document.getElementById('cookie-banner');
function loadAnalytics() {
  if (!SITE.ga4 || window.gtag) return;
  const s = document.createElement('script');
  s.async = true;
  s.src = `https://www.googletagmanager.com/gtag/js?id=${encodeURIComponent(SITE.ga4)}`;
  document.head.appendChild(s);
  window.dataLayer = window.dataLayer || [];
  window.gtag = function () { window.dataLayer.push(arguments); };
  window.gtag('js', new Date());
  window.gtag('config', SITE.ga4);
}
function setConsent(choice) {
  store.set('ma_consent', { choice, ts: Date.now() });
  if (banner) banner.hidden = true;
  document.body.classList.remove('has-cookie-banner');
  if (choice === 'all') loadAnalytics();
}
function openBanner() {
  if (!banner) return;
  banner.hidden = false;
  document.body.classList.add('has-cookie-banner');
}
const consent = store.get('ma_consent');
if (consent?.choice === 'all') loadAnalytics();
else if (!consent) openBanner();
banner?.querySelectorAll('[data-cookie]').forEach(btn => btn.addEventListener('click', () => setConsent(btn.dataset.cookie)));
document.querySelectorAll('[data-cookie-reset]').forEach(btn => btn.addEventListener('click', openBanner));

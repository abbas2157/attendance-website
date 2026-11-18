<?php
/**
 * includes/config.php
 * Site-wide settings. Edit values here — every page reads from this file.
 * Leave a URL empty ('') and the matching link is hidden or shown as "Coming soon".
 */

// ── Auto-detect base path ──────────────────────────────────────
// Works for both a virtual host / live domain (base = '')
// and subdirectory access (localhost/attendance-website → base = '/attendance-website').
if (!defined('SITE_BASE')) {
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $dir    = rtrim(dirname($script), '/');
    define('SITE_BASE', ($dir === '' || $dir === '.') ? '' : $dir);
}

date_default_timezone_set('Asia/Karachi');

// ── Server-specific settings (database, admin login) ──────────
// Copy includes/config.local.example.php to includes/config.local.php (git-ignored) and fill it in.
if (is_file(__DIR__ . '/config.local.php')) {
    require __DIR__ . '/config.local.php';
}
// MySQL / MariaDB: contact queries and SEO edits. Defaults match a stock XAMPP install;
// tables are created automatically on first use (includes/db.php).
defined('DB_HOST') || define('DB_HOST', '127.0.0.1');
defined('DB_PORT') || define('DB_PORT', 3306);
defined('DB_NAME') || define('DB_NAME', 'u388951733_mark_atten');
defined('DB_USER') || define('DB_USER', 'u388951733_mark_atten');
defined('DB_PASS') || define('DB_PASS', 'e2*I!ctxIZ');
// Admin dashboard (/admin). Store only a password_hash() — never the plain password.
// Empty hash = login disabled. Set one with: php tools/set-admin-password.php
defined('ADMIN_USERNAME')      || define('ADMIN_USERNAME', 'admin');
defined('ADMIN_PASSWORD_HASH') || define('ADMIN_PASSWORD_HASH', '');
defined('ADMIN_DISPLAY_NAME')  || define('ADMIN_DISPLAY_NAME', 'Mark Attendance Admin');

// ── Site ───────────────────────────────────────────────────────
const SITE_URL  = 'https://markattendance.io';   // no trailing slash
const SITE_NAME = 'Mark Attendance';

// ── Contact details ───────────────────────────────────────────
const CONTACT_EMAIL   = 'info@markattendance.io';
const CONTACT_PHONE   = '+92 306 4164077';               // shown on the site
const CONTACT_PHONE_E164 = '+923064164077';              // used in tel: links
const WHATSAPP_NUMBER = '923064164077';                  // digits only, with country code
const WHATSAPP_TEXT   = "Hi Mark Attendance, I'd like to know more about your attendance system.";

// Contact-form submissions are emailed here and saved in the admin dashboard (/admin/queries).
const FORM_RECIPIENT  = 'abbas8156@gmail.com';
// "From" address for form emails — must be a mailbox on YOUR domain or many hosts reject it.
const FORM_FROM       = 'no-reply@markattendance.io';

// SMTP for form emails (PHPMailer). Put the real values in includes/config.local.php.
// SMTP_HOST empty = fall back to PHP mail().
defined('SMTP_HOST')   || define('SMTP_HOST', 'smtp.hostinger.com');
defined('SMTP_PORT')   || define('SMTP_PORT', 465);
defined('SMTP_SECURE') || define('SMTP_SECURE', 'ssl');   // 'tls' (STARTTLS, port 587), 'ssl' (port 465) or ''
defined('SMTP_USER')   || define('SMTP_USER', 'info@markattendance.io');
defined('SMTP_PASS')   || define('SMTP_PASS', 'yeep-wrmt-d0cm-pkne');
// Optional: send "From" this address instead of FORM_FROM. Gmail and most SMTP providers
// require it to be the authenticated account (or a verified alias). Empty = use FORM_FROM.
defined('SMTP_FROM')   || define('SMTP_FROM', 'info@markattendance.io');

// ── Web app login (empty = "Log In" button hidden) ────────────
const APP_LOGIN_URL = '';

// ── App stores (empty = badge shows "Coming soon") ────────────
const PLAY_STORE_URL = '';
const APP_STORE_URL  = '';

// ── Social profiles (empty = icon hidden) ─────────────────────
const SOCIAL_LINKS = [
    'facebook'  => '',
    'twitter'   => '',
    'linkedin'  => '',
    'instagram' => '',
];

// ── Google ─────────────────────────────────────────────────────
// Search Console → Add property → "HTML tag" method → paste only the content="…" value.
const GOOGLE_SITE_VERIFICATION = '';
// Google Analytics 4 Measurement ID (e.g. 'G-XXXXXXXXXX'). Loads only after cookie consent.
const GA4_MEASUREMENT_ID = 'G-TB9N4NXGJT';

// ── Helpers ────────────────────────────────────────────────────
function whatsapp_url(string $text = WHATSAPP_TEXT): string
{
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode($text);
}

function apps_live(): bool
{
    return PLAY_STORE_URL !== '' || APP_STORE_URL !== '';
}

/**
 * App-store badge. Renders a link when the store URL is set,
 * otherwise a non-clickable "Coming soon" badge.
 * $class: app-badge | dl-badge | footer-dl-btn
 */
function store_badge(string $store, string $class): string
{
    $stores = [
        'play'  => [PLAY_STORE_URL, 'Get it on', 'Google Play',
                    '<path d="M3.18 23.76a2 2 0 001.94-.22l12.1-7.05-3.03-3.03-11.01 10.3zm-1.6-21.27C1.22 2.9 1 3.4 1 4.05v15.9c0 .65.22 1.15.58 1.56l.08.08L11.03 12v-.21L1.66 2.4l-.08.09zM20.1 10.27l-2.77-1.61-3.38 3.34 3.38 3.34 2.79-1.63c.8-.46.8-1.98-.02-2.44zM5.12.46L17.22 7.5l-3.02 3.02L3.18.22A2 2 0 005.12.46z"/>'],
        'apple' => [APP_STORE_URL, 'Download on the', 'App Store',
                    '<path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>'],
    ];
    [$url, $sub, $name, $path] = $stores[$store];
    $icon  = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">' . $path . '</svg>';
    if ($url !== '') {
        return '<a href="' . htmlspecialchars($url) . '" class="' . $class . '" target="_blank" rel="noopener" aria-label="Download on ' . $name . '">'
             . $icon . '<span><span class="badge-sub">' . $sub . '</span><span class="badge-name">' . $name . '</span></span></a>';
    }
    return '<span class="' . $class . ' is-soon" aria-label="' . $name . ' app coming soon">'
         . $icon . '<span><span class="badge-sub">Coming soon to</span><span class="badge-name">' . $name . '</span></span></span>';
}

/** Social icon links — only profiles with a URL in SOCIAL_LINKS are rendered. */
function social_links(string $class): string
{
    $icons = [
        'facebook'  => ['Facebook',  '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>'],
        'twitter'   => ['Twitter/X', '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>'],
        'linkedin'  => ['LinkedIn',  '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>'],
        'instagram' => ['Instagram', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>'],
    ];
    $html = '';
    foreach (SOCIAL_LINKS as $key => $url) {
        if ($url === '' || !isset($icons[$key])) continue;
        $html .= '<a href="' . htmlspecialchars($url) . '" class="' . $class . '" target="_blank" rel="noopener" aria-label="' . $icons[$key][0] . '">' . $icons[$key][1] . '</a>';
    }
    return $html;
}

/** Cache-busting URL for a local asset, e.g. asset('/css/style.css') → /css/style.css?v=1729260000 */
function asset(string $path): string
{
    $file = dirname(__DIR__) . $path;
    $v    = is_file($file) ? filemtime($file) : '1';
    return SITE_BASE . $path . '?v=' . $v;
}

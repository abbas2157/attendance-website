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
defined('DB_NAME') || define('DB_NAME', 'mark_attendance');
defined('DB_USER') || define('DB_USER', 'root');
defined('DB_PASS') || define('DB_PASS', '');
// Admin dashboard (/admin). Store only a password_hash() — never the plain password.
// Empty hash = login disabled. Set one with: php tools/set-admin-password.php
defined('ADMIN_USERNAME')      || define('ADMIN_USERNAME', 'admin');
defined('ADMIN_PASSWORD_HASH') || define('ADMIN_PASSWORD_HASH', '');
defined('ADMIN_DISPLAY_NAME')  || define('ADMIN_DISPLAY_NAME', 'Mark Attendance Admin');

// ── Site ───────────────────────────────────────────────────────
const SITE_URL  = 'https://markattendance.io';   // no trailing slash
const SITE_NAME = 'Mark Attendance';

// ── Dynamic settings (editable in /admin/settings) ────────────
// The values below are only DEFAULTS: once a value is saved in the admin dashboard,
// the saved value wins (ma_settings table) — including an intentionally empty one.
require_once __DIR__ . '/settings.php';

// ── Contact details ───────────────────────────────────────────
define('CONTACT_EMAIL',   site_setting('contact_email', 'info@markattendance.io'));
define('CONTACT_PHONE',   site_setting('contact_phone', '+92 306 4164077'));          // shown on the site
define('CONTACT_PHONE_E164', '+' . preg_replace('/\D+/', '', CONTACT_PHONE));         // used in tel: links
define('CONTACT_ADDRESS', site_setting('contact_address', 'Lahore, Pakistan'));
define('WHATSAPP_NUMBER', site_setting('whatsapp_number', '923064164077'));           // digits only, with country code
define('WHATSAPP_TEXT',   site_setting('whatsapp_text', "Hi Mark Attendance, I'd like to know more about your attendance system."));

// Contact-form submissions are emailed here and saved in the admin dashboard (/admin/queries).
define('FORM_RECIPIENT', site_setting('form_recipient', 'abbas8156@gmail.com'));
// "From" address for form emails — must be a mailbox on YOUR domain or many hosts reject it.
const FORM_FROM       = 'no-reply@markattendance.io';

// SMTP for form emails (PHPMailer). Put the real values in includes/config.local.php.
// SMTP_HOST empty = fall back to PHP mail().
defined('SMTP_HOST')   || define('SMTP_HOST', '');
defined('SMTP_PORT')   || define('SMTP_PORT', 587);
defined('SMTP_SECURE') || define('SMTP_SECURE', 'tls');   // 'tls' (STARTTLS, port 587), 'ssl' (port 465) or ''
defined('SMTP_USER')   || define('SMTP_USER', '');
defined('SMTP_PASS')   || define('SMTP_PASS', '');
// Optional: send "From" this address instead of FORM_FROM. Gmail and most SMTP providers
// require it to be the authenticated account (or a verified alias). Empty = use FORM_FROM.
defined('SMTP_FROM')   || define('SMTP_FROM', '');

// ── Web app login (empty = "Log In" button hidden) ────────────
define('APP_LOGIN_URL', site_setting('app_login_url', ''));

// ── App stores (empty = badge shows "Coming soon") ────────────
define('PLAY_STORE_URL', site_setting('play_store_url', ''));
define('APP_STORE_URL',  site_setting('app_store_url', ''));

// ── Social profiles (empty = icon hidden) ─────────────────────
define('SOCIAL_LINKS', [
    'facebook'  => site_setting('social_facebook', ''),
    'twitter'   => site_setting('social_twitter', ''),
    'linkedin'  => site_setting('social_linkedin', ''),
    'instagram' => site_setting('social_instagram', ''),
    'youtube'   => site_setting('social_youtube', ''),
    'tiktok'    => site_setting('social_tiktok', ''),
    'telegram'  => site_setting('social_telegram', ''),
]);

// ── Google ─────────────────────────────────────────────────────
// Search Console → Add property → "HTML tag" method → paste only the content="…" value.
define('GOOGLE_SITE_VERIFICATION', site_setting('google_site_verification', ''));
// Google Analytics 4 Measurement ID (e.g. 'G-XXXXXXXXXX'). Loads only after cookie consent.
define('GA4_MEASUREMENT_ID', site_setting('ga4_id', 'G-TB9N4NXGJT'));

// ── Favicon (uploaded in /admin/settings; empty = assets/favicon.svg) ──
define('SITE_FAVICON', site_setting('favicon_path', ''));

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
        'youtube'   => ['YouTube',   '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.5 6.19a3.02 3.02 0 00-2.12-2.14C19.5 3.55 12 3.55 12 3.55s-7.5 0-9.38.5A3.02 3.02 0 00.5 6.19 31.6 31.6 0 000 12a31.6 31.6 0 00.5 5.81 3.02 3.02 0 002.12 2.14c1.88.5 9.38.5 9.38.5s7.5 0 9.38-.5a3.02 3.02 0 002.12-2.14A31.6 31.6 0 0024 12a31.6 31.6 0 00-.5-5.81zM9.6 15.6V8.4L15.83 12 9.6 15.6z"/></svg>'],
        'tiktok'    => ['TikTok',    '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1.04-.1z"/></svg>'],
        'telegram'  => ['Telegram',  '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M21.94 4.35c.3-1.2-.86-2.2-2-1.73L2.73 9.84c-1.26.51-1.17 2.33.13 2.72l4.42 1.33 1.65 5.25c.3.97 1.54 1.26 2.25.53l2.34-2.4 4.3 3.15c.92.68 2.23.17 2.46-.95l1.66-15.12zM9.37 13.2l8.6-5.44c.23-.14.46.17.27.35l-7.1 6.47c-.25.23-.41.54-.46.87l-.24 1.8c-.03.24-.37.26-.44.03l-.93-3c-.1-.35.04-.72.3-1.08z"/></svg>'],
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

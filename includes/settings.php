<?php
/**
 * includes/settings.php
 * Site settings stored in ma_settings (names prefixed 'site_'), editable in /admin/settings.
 *
 * config.php defines the public constants (CONTACT_EMAIL, PLAY_STORE_URL, …) from these
 * values: site_setting($key, $default) returns the saved value when one exists — even an
 * intentionally empty one — and the hard-coded default from config.php otherwise.
 * Public pages must keep working when the database is down, so reads go through db_safe().
 */

require_once __DIR__ . '/db.php';

/** name => value for every saved site setting (without the 'site_' prefix). */
function site_settings(): array
{
    static $cache = null;
    if ($cache === null) {
        $rows  = db_safe(fn() => db_all("SELECT name, value FROM ma_settings WHERE name LIKE 'site\\_%'"), []);
        $cache = [];
        foreach ($rows as $r) {
            $cache[substr($r['name'], strlen('site_'))] = $r['value'];
        }
    }
    return $cache;
}

/** Saved value for $key; $default when it was never saved. A saved empty value counts as a value. */
function site_setting(string $key, string $default = ''): string
{
    $all = site_settings();
    return array_key_exists($key, $all) ? $all[$key] : $default;
}

/**
 * Editable settings for the /admin/settings form, grouped into cards:
 * group => [icon, title, intro, fields], field => [label, type, placeholder, help].
 * Types: url | email | text | textarea | digits | ga4.
 */
function site_setting_fields(): array
{
    return [
        'apps' => ['phone', 'Mobile app & login links', 'Paste the store links when the app is published — every download badge on the site turns into a real link. Empty = the badge shows "Coming soon".', [
            'play_store_url' => ['Google Play link', 'url', 'https://play.google.com/store/apps/details?id=…', 'Used by every "Google Play" badge (home, mobile app page, footer).'],
            'app_store_url'  => ['App Store link', 'url', 'https://apps.apple.com/app/…', 'Used by every "App Store" badge.'],
            'app_login_url'  => ['Web app login link', 'url', 'https://app.markattendance.io', 'Shows a "Log In" button in the navigation. Empty = button hidden.'],
        ]],
        'contact' => ['mail', 'Contact details', 'Shown in the footer, on the contact page, and used by the WhatsApp chat button.', [
            'contact_email'   => ['Public email', 'email', 'info@markattendance.io', 'Shown on the site with a mailto: link.'],
            'contact_phone'   => ['Phone (as shown)', 'text', '+92 306 4164077', 'The tel: link is derived automatically from the digits.'],
            'whatsapp_number' => ['WhatsApp number', 'digits', '923064164077', 'Digits only, with country code — used by the floating WhatsApp button.'],
            'whatsapp_text'   => ['WhatsApp pre-filled message', 'textarea', '', 'The first message visitors see when the chat opens.'],
            'contact_address' => ['Address / location', 'text', 'Lahore, Pakistan', 'Shown in the footer and on the contact page.'],
            'form_recipient'  => ['Form submissions go to', 'email', 'you@example.com', 'Contact-form messages are emailed here (and saved under Queries).'],
        ]],
        'social' => ['share', 'Social media', 'Full profile links. Icons appear in the footer and on the contact page only for profiles with a link.', [
            'social_facebook'  => ['Facebook', 'url', 'https://facebook.com/…', ''],
            'social_twitter'   => ['Twitter / X', 'url', 'https://x.com/…', ''],
            'social_linkedin'  => ['LinkedIn', 'url', 'https://linkedin.com/company/…', ''],
            'social_instagram' => ['Instagram', 'url', 'https://instagram.com/…', ''],
        ]],
        'google' => ['globe', 'Google', 'Analytics and Search Console.', [
            'ga4_id'                   => ['GA4 Measurement ID', 'ga4', 'G-XXXXXXXXXX', 'Google Analytics 4. Loads only after the visitor accepts cookies. Empty = analytics off.'],
            'google_site_verification' => ['Search Console verification', 'text', 'Abc123…', 'From Search Console → HTML tag method — paste only the content="…" value.'],
        ]],
    ];
}

/** Current effective value of each editable field (saved value, else config default). */
function site_setting_current(): array
{
    return [
        'play_store_url'  => PLAY_STORE_URL,
        'app_store_url'   => APP_STORE_URL,
        'app_login_url'   => APP_LOGIN_URL,
        'contact_email'   => CONTACT_EMAIL,
        'contact_phone'   => CONTACT_PHONE,
        'whatsapp_number' => WHATSAPP_NUMBER,
        'whatsapp_text'   => WHATSAPP_TEXT,
        'contact_address' => CONTACT_ADDRESS,
        'form_recipient'  => FORM_RECIPIENT,
        'social_facebook'  => SOCIAL_LINKS['facebook'],
        'social_twitter'   => SOCIAL_LINKS['twitter'],
        'social_linkedin'  => SOCIAL_LINKS['linkedin'],
        'social_instagram' => SOCIAL_LINKS['instagram'],
        'ga4_id'                   => GA4_MEASUREMENT_ID,
        'google_site_verification' => GOOGLE_SITE_VERIFICATION,
    ];
}

/** Validate one field value by type. Returns the cleaned value, or null with $error set. */
function site_setting_clean(string $label, string $type, string $value, ?string &$error): ?string
{
    $value = trim($value);
    if ($value === '') {
        return '';
    }
    switch ($type) {
        case 'url':
            if (!preg_match('#^https?://\S+$#', $value)) {
                $error = $label . ' must be a full link starting with https:// — nothing was saved.';
                return null;
            }
            return mb_substr($value, 0, 300);
        case 'email':
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $error = $label . ' is not a valid email address — nothing was saved.';
                return null;
            }
            return mb_substr($value, 0, 254);
        case 'digits':
            $digits = preg_replace('/[\s()+\-]/', '', $value);
            if (!preg_match('/^[0-9]{8,15}$/', $digits)) {
                $error = $label . ' must be 8–15 digits with the country code (e.g. 923001234567) — nothing was saved.';
                return null;
            }
            return $digits;
        case 'ga4':
            $value = strtoupper($value);
            if (!preg_match('/^G-[A-Z0-9]{4,16}$/', $value)) {
                $error = $label . ' must look like G-XXXXXXXXXX — nothing was saved.';
                return null;
            }
            return $value;
        case 'textarea':
            return mb_substr($value, 0, 500);
        default: // text
            return mb_substr(preg_replace('/\s+/u', ' ', $value), 0, 300);
    }
}

/**
 * Handle the favicon file input / reset checkbox. On success $values['favicon_path'] is set
 * when something changed. Returns true on success; false with $error set.
 */
function site_setting_favicon(array $files, array $post, array &$values, ?string &$error): bool
{
    $root    = dirname(__DIR__);
    $current = site_setting('favicon_path', '');
    $removeOld = function () use ($root, $current): void {
        if ($current !== '' && str_starts_with($current, '/assets/uploads/') && is_file($root . $current)) {
            @unlink($root . $current);
        }
    };

    if (!empty($post['favicon_reset'])) {
        $removeOld();
        $values['favicon_path'] = '';
        return true;
    }

    $f = $files['favicon_file'] ?? null;
    if (!$f || ($f['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
        return true; // nothing uploaded — keep as is
    }
    if ($f['error'] !== UPLOAD_ERR_OK) {
        $error = 'The favicon upload failed (error ' . (int) $f['error'] . '). Please try again — nothing was saved.';
        return false;
    }
    if ((int) $f['size'] > 512 * 1024) {
        $error = 'The favicon must be under 512 KB — nothing was saved.';
        return false;
    }
    $ext     = strtolower(pathinfo((string) $f['name'], PATHINFO_EXTENSION));
    $allowed = [
        'svg' => ['image/svg+xml', 'image/svg', 'text/plain', 'text/xml', 'application/xml'],
        'png' => ['image/png'],
        'ico' => ['image/x-icon', 'image/vnd.microsoft.icon', 'image/x-ico', 'application/ico', 'application/octet-stream'],
    ];
    if (!isset($allowed[$ext])) {
        $error = 'The favicon must be an .svg, .png or .ico file — nothing was saved.';
        return false;
    }
    $mime = (string) (new finfo(FILEINFO_MIME_TYPE))->file($f['tmp_name']);
    if (!in_array($mime, $allowed[$ext], true)) {
        $error = 'That file does not look like a valid ' . strtoupper($ext) . ' image — nothing was saved.';
        return false;
    }

    $dir = $root . '/assets/uploads';
    if (!is_dir($dir) && !@mkdir($dir, 0755, true)) {
        $error = 'Could not create the assets/uploads folder — check folder permissions.';
        return false;
    }
    $name = 'favicon-' . time() . '.' . $ext; // new name each time, so browsers refetch it
    if (!move_uploaded_file($f['tmp_name'], $dir . '/' . $name)) {
        $error = 'Could not save the uploaded favicon — check folder permissions.';
        return false;
    }
    $removeOld();
    $values['favicon_path'] = '/assets/uploads/' . $name;
    return true;
}

/** Save the /admin/settings form. Returns true on success; false with $error set. */
function site_settings_save(array $post, array $files, ?string &$error): bool
{
    $values = [];
    foreach (site_setting_fields() as [, , , $fields]) {
        foreach ($fields as $key => [$label, $type]) {
            $clean = site_setting_clean($label, $type, (string) ($post[$key] ?? ''), $error);
            if ($clean === null) {
                return false;
            }
            $values[$key] = $clean;
        }
    }
    if (!site_setting_favicon($files, $post, $values, $error)) {
        return false;
    }

    try {
        $stmt = db()->prepare('REPLACE INTO ma_settings (name, value) VALUES (?, ?)');
        foreach ($values as $key => $value) {
            $stmt->execute(['site_' . $key, $value]);
        }
    } catch (PDOException $e) {
        error_log('site_settings_save: ' . $e->getMessage());
        $error = 'Could not save to the database. Please try again.';
        return false;
    }
    return true;
}

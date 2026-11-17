<?php
/**
 * includes/contact-handler.php
 * Handles POSTs from the contact form on contact.php.
 *
 * - Validates fields server-side (the JS validation is only a convenience).
 * - Saves every lead to the database (shown in /admin/queries); falls back to data/submissions.csv
 * if the database is unavailable, so nothing is lost.
 * - Emails FORM_RECIPIENT via SMTP (PHPMailer) when SMTP_HOST is set, otherwise PHP mail().
 * - Replies with JSON for fetch() requests, or Post/Redirect/Get for plain form posts.
 */

require_once __DIR__ . '/db.php';

const CONTACT_SUBJECTS = [
    'demo'        => 'Request a Demo',
    'pricing'     => 'Pricing Enquiry',
    'support'     => 'Technical Support',
    'partnership' => 'Partnership',
    'general'     => 'General Question',
];
const TRACKING_FIELDS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'landing_page', 'referrer'];
const RATE_LIMIT_MAX    = 5;    // submissions…
const RATE_LIMIT_WINDOW = 600;  // …per 10 minutes per IP

/**
 * Returns the form state for rendering:
 *   ['values' => [...], 'errors' => [field => message], 'sent' => bool, 'error' => ?string]
 */
function contact_form_state(): array
{
    $state = ['values' => [], 'errors' => [], 'sent' => isset($_GET['sent']), 'error' => null];
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
        return $state;
    }

    $wantsJson = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json');
    $result    = contact_process($_POST);

    if ($wantsJson) {
        http_response_code($result['ok'] ? 200 : ($result['status'] ?? 422));
        header('Content-Type: application/json; charset=utf-8');
        header('Cache-Control: no-store');
        echo json_encode([
            'ok'      => $result['ok'],
            'errors'  => (object) $result['errors'],
            'message' => $result['message'],
        ]);
        exit;
    }
    if ($result['ok']) {
        header('Location: ' . SITE_BASE . '/contact?sent=1#contact-form-heading', true, 303);
        exit;
    }
    $state['values'] = $result['values'];
    $state['errors'] = $result['errors'];
    $state['error']  = $result['message'];
    return $state;
}

function contact_process(array $in): array
{
    $clean = fn($key, $max) => mb_substr(trim(str_replace(["\r", "\0"], '', (string) ($in[$key] ?? ''))), 0, $max);
    $v = [
        'name'    => $clean('name', 100),
        'email'   => $clean('email', 254),
        'company' => $clean('company', 120),
        'phone'   => $clean('phone', 30),
        'subject' => $clean('subject', 20),
        'message' => $clean('message', 5000),
    ];
    $fail = fn(array $errors, string $msg, int $status = 422) =>
        ['ok' => false, 'errors' => $errors, 'message' => $msg, 'values' => $v, 'status' => $status];

    // Honeypot: real visitors never see or fill this field. Pretend success for bots.
    if (($in['website'] ?? '') !== '') {
        return ['ok' => true, 'errors' => [], 'message' => 'Thanks!', 'values' => []];
    }

    $errors = [];
    if (mb_strlen($v['name']) < 2)                         $errors['name']    = 'Please enter your full name.';
    if (!filter_var($v['email'], FILTER_VALIDATE_EMAIL))    $errors['email']   = 'Please enter a valid email address.';
    if ($v['phone'] !== '' && !preg_match('/^\+?[0-9 ()\-]{7,20}$/', $v['phone']))
                                                            $errors['phone']   = 'Please enter a valid phone number, e.g. +92 300 1234567.';
    if (!isset(CONTACT_SUBJECTS[$v['subject']]))            $errors['subject'] = 'Please select how we can help.';
    if (mb_strlen($v['message']) < 10)                      $errors['message'] = 'Please enter a message (at least 10 characters).';
    if ($errors) {
        return $fail($errors, 'Please fix the highlighted fields and try again.');
    }

    if (!contact_rate_ok()) {
        return $fail([], 'Too many messages sent from your connection. Please wait a few minutes, or email us at ' . CONTACT_EMAIL . '.', 429);
    }

    $tracking = [];
    foreach (TRACKING_FIELDS as $key) {
        $tracking[$key] = $clean($key, 300);
    }

    // Database first (shows in /admin/queries); CSV only as a fallback so no lead is lost.
    $id     = contact_save_db($v, $tracking);
    $saved  = $id !== null || contact_save_csv($v, $tracking);
    $mailed = contact_send_mail($v, $tracking, $id);
    if ($id !== null && $mailed) {
        db_safe(fn() => db_query('UPDATE ma_queries SET emailed = 1 WHERE id = ?', [$id]));
    }
    if (!$saved && !$mailed) {
        return $fail([], 'Sorry, your message could not be sent. Please email us at ' . CONTACT_EMAIL . ' or message us on WhatsApp.', 500);
    }
    return ['ok' => true, 'errors' => [], 'message' => "Thank you for reaching out. We'll get back to you within 1 business day.", 'values' => []];
}

function contact_data_dir(): string
{
    $dir = dirname(__DIR__) . '/data';
    if (!is_dir($dir)) {
        @mkdir($dir, 0750, true);
    }
    return $dir;
}

function contact_rate_ok(): bool
{
    $dir = contact_data_dir() . '/ratelimit';
    if (!is_dir($dir)) @mkdir($dir, 0750, true);
    $file = $dir . '/' . hash('sha256', $_SERVER['REMOTE_ADDR'] ?? 'unknown');
    $now  = time();
    $hits = is_file($file) ? array_filter(array_map('intval', file($file, FILE_IGNORE_NEW_LINES)), fn($t) => $t > $now - RATE_LIMIT_WINDOW) : [];
    if (count($hits) >= RATE_LIMIT_MAX) {
        return false;
    }
    $hits[] = $now;
    @file_put_contents($file, implode("\n", $hits), LOCK_EX);
    return true;
}

/** Insert into ma_queries; returns the new id, or null if the database is unavailable. */
function contact_save_db(array $v, array $tracking): ?int
{
    return db_safe(function () use ($v, $tracking) {
        $cols = array_merge(['created_at', 'name', 'email', 'company', 'phone', 'subject', 'message'], TRACKING_FIELDS);
        $vals = array_merge([date('Y-m-d H:i:s')], array_values($v), array_values($tracking));
        db_query('INSERT INTO ma_queries (' . implode(', ', $cols) . ') VALUES (' . rtrim(str_repeat('?, ', count($cols)), ', ') . ')', $vals);
        return (int) db()->lastInsertId();
    }, null);
}

function contact_save_csv(array $v, array $tracking): bool
{
    $file  = contact_data_dir() . '/submissions.csv';
    $isNew = !is_file($file);
    $fh    = @fopen($file, 'a');
    if (!$fh) return false;
    flock($fh, LOCK_EX);
    if ($isNew) {
        fputcsv($fh, array_merge(['date', 'name', 'email', 'company', 'phone', 'subject', 'message'], TRACKING_FIELDS));
    }
    // Prefix cells that Excel would treat as formulas (plain phone numbers like +92… are left alone)
    $safe = fn($s) => preg_match('/^[=+\-@\t]/', $s) && !preg_match('/^\+?[0-9 ()\-]+$/', $s) ? "'" . $s : $s;
    $row  = array_map($safe, array_merge([date('Y-m-d H:i:s')], array_values($v), array_values($tracking)));
    $ok   = fputcsv($fh, $row) !== false;
    flock($fh, LOCK_UN);
    fclose($fh);
    return $ok;
}

function contact_send_mail(array $v, array $tracking, ?int $id = null): bool
{
    $subject = 'Website enquiry: ' . CONTACT_SUBJECTS[$v['subject']] . ' — ' . $v['name'];
    $lines = [
        'Name:    ' . $v['name'],
        'Email:   ' . $v['email'],
        'Company: ' . ($v['company'] ?: '—'),
        'Phone:   ' . ($v['phone'] ?: '—'),
        'Topic:   ' . CONTACT_SUBJECTS[$v['subject']],
        '',
        $v['message'],
        '',
        '— Tracking —',
    ];
    foreach ($tracking as $k => $val) {
        if ($val !== '') $lines[] = str_pad($k . ':', 14) . $val;
    }
    if ($id !== null) {
        $lines[] = '';
        $lines[] = 'Open in dashboard: ' . SITE_URL . '/admin/queries/' . $id;
    }
    $error = null;
    $ok = send_site_mail(FORM_RECIPIENT, $subject, implode("\n", $lines), $v['email'], $v['name'], $error);
    if (!$ok) {
        @error_log(date('c') . " mail failed for submission from {$v['email']}: {$error}\n", 3, contact_data_dir() . '/mail-errors.log');
    }
    return $ok;
}

/**
 * Send a plain-text email. Uses SMTP via PHPMailer when SMTP_HOST is set, otherwise PHP mail().
 * $error receives a short reason on failure.
 */
function send_site_mail(string $to, string $subject, string $body, string $replyTo = '', string $replyName = '', ?string &$error = null): bool
{
    $from = SMTP_HOST !== '' && SMTP_FROM !== '' ? SMTP_FROM : FORM_FROM;

    if (SMTP_HOST === '') {
        $headers = [
            'From: ' . SITE_NAME . ' Website <' . $from . '>',
            'Content-Type: text/plain; charset=UTF-8',
            'X-Mailer: PHP',
        ];
        if ($replyTo !== '') $headers[] = 'Reply-To: ' . $replyTo;   // validated by FILTER_VALIDATE_EMAIL — no header injection
        $ok = @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));
        if (!$ok) $error = 'mail() returned false' . (($e = error_get_last()) ? ': ' . $e['message'] : '');
        return $ok;
    }

    require_once __DIR__ . '/lib/PHPMailer/Exception.php';
    require_once __DIR__ . '/lib/PHPMailer/PHPMailer.php';
    require_once __DIR__ . '/lib/PHPMailer/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->Port       = (int) SMTP_PORT;
        $mail->SMTPAuth   = SMTP_USER !== '';
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = SMTP_SECURE;            // '' = plain, but PHPMailer still upgrades via STARTTLS when offered
        $mail->Timeout    = 15;
        $mail->CharSet    = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
        if (defined('SMTP_DEBUG') && SMTP_DEBUG) $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;

        $mail->setFrom($from, SITE_NAME . ' Website');
        $mail->addAddress($to);
        if ($replyTo !== '') $mail->addReplyTo($replyTo, $replyName);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->isHTML(false);
        return $mail->send();
    } catch (PHPMailer\PHPMailer\Exception $e) {
        $error = $mail->ErrorInfo ?: $e->getMessage();
        return false;
    }
}

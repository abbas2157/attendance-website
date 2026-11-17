<?php
/**
 * Send a test email using the site's mail settings (SMTP if SMTP_HOST is set, else PHP mail()).
 *
 *   php tools/test-mail.php                 (sends to FORM_RECIPIENT)
 *   php tools/test-mail.php you@example.com
 *   php tools/test-mail.php --debug         (prints the SMTP conversation)
 *
 * Command line only — the tools/ folder is blocked from the web in .htaccess.
 */
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit("Run this from the command line.\n");
}

$args = array_slice($argv, 1);
// Prints the SMTP conversation (password is sent base64-encoded; don't paste this output publicly).
define('SMTP_DEBUG', in_array('--debug', $args, true));

$_SERVER['SCRIPT_NAME'] = '/index.php';
require dirname(__DIR__) . '/includes/config.php';
require dirname(__DIR__) . '/includes/contact-handler.php';

$to = current(array_filter($args, fn($a) => $a !== '--debug')) ?: FORM_RECIPIENT;

if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
    exit("Not a valid email address: {$to}\n");
}

echo SMTP_HOST !== ''
    ? 'Using SMTP ' . SMTP_HOST . ':' . SMTP_PORT . ' (' . (SMTP_SECURE ?: 'no encryption') . ') as ' . (SMTP_USER ?: 'no auth') . "\n"
    : "SMTP_HOST is empty — using PHP mail()\n";
echo "Sending test email to {$to} …\n";

$error = null;
$ok = send_site_mail(
    $to,
    SITE_NAME . ' — test email ' . date('Y-m-d H:i:s'),
    "This is a test email from tools/test-mail.php.\n\nIf you can read this, the contact form can send email.",
    '',
    '',
    $error
);

echo $ok ? "Sent. Check the inbox (and spam folder) of {$to}.\n" : "FAILED: {$error}\n";
exit($ok ? 0 : 1);

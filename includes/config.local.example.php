<?php
/**
 * Server-specific settings. Copy to includes/config.local.php (git-ignored) and fill in.
 * Anything defined here overrides the defaults in includes/config.php.
 */

// Database (create an empty MySQL database + user in your hosting panel first).
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_NAME', 'your_database');
define('DB_USER', 'your_user');
define('DB_PASS', 'your_password');

// Admin dashboard login (/admin). Generate the hash with:
//   php tools/set-admin-password.php            (writes it into this file for you)
// or: php -r "echo password_hash('your-new-password', PASSWORD_DEFAULT);"
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD_HASH', '');

// SMTP for contact-form emails. Leave SMTP_HOST empty to use PHP mail() instead.
// Test with: php tools/test-mail.php
//
// Gmail: turn on 2-Step Verification, create an App Password (myaccount.google.com/apppasswords),
//        host smtp.gmail.com, port 587, secure 'tls', user = the Gmail address, pass = the app password.
// cPanel hosting: create a mailbox (e.g. no-reply@yourdomain), host mail.yourdomain,
//        port 465 + 'ssl' (or 587 + 'tls'), user = full mailbox address.
define('SMTP_HOST', '');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define('SMTP_USER', '');
define('SMTP_PASS', '');
define('SMTP_FROM', '');   // empty = FORM_FROM; with Gmail set this to SMTP_USER

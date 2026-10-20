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

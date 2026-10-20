<?php
/**
 * Set (or change) the admin dashboard password.
 *
 *   php tools/set-admin-password.php
 *
 * Prompts for a password, then writes its hash into includes/config.local.php
 * (creating the file from config.local.example.php if needed). The plain password is never stored.
 * Command line only — the tools/ folder is blocked from the web in .htaccess.
 */
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit("Run this from the command line.\n");
}

$root    = dirname(__DIR__);
$local   = $root . '/includes/config.local.php';
$example = $root . '/includes/config.local.example.php';

echo "New admin password (min 10 characters): ";
if (DIRECTORY_SEPARATOR === '/') system('stty -echo');
$password = trim((string) fgets(STDIN));
if (DIRECTORY_SEPARATOR === '/') { system('stty echo'); echo "\n"; }
if (mb_strlen($password) < 10) {
    exit("Too short — use at least 10 characters. Nothing was changed.\n");
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$src  = is_file($local) ? file_get_contents($local) : file_get_contents($example);
$line = "define('ADMIN_PASSWORD_HASH', " . var_export($hash, true) . ");";
$src  = preg_match("/define\('ADMIN_PASSWORD_HASH',.*?\);/", $src)
    ? preg_replace("/define\('ADMIN_PASSWORD_HASH',.*?\);/", str_replace('$', '\\$', $line), $src)
    : rtrim($src) . "\n" . $line . "\n";
file_put_contents($local, $src);

echo "Saved to includes/config.local.php. Log in at /admin with username '" . (preg_match("/define\('ADMIN_USERNAME',\s*'([^']*)'/", $src, $m) ? $m[1] : 'admin') . "'.\n";

<?php /** Shared <head> for admin pages. Expects $pageTitle. */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= e($pageTitle) ?> · Mark Attendance Admin</title>
    <?php // Same favicon logic as the public site (includes/header.php)
    $favAdmin = SITE_FAVICON !== '' && is_file(dirname(__DIR__, 2) . SITE_FAVICON) ? SITE_FAVICON : '/assets/favicon.svg';
    $favAdminType = str_ends_with($favAdmin, '.svg') ? 'image/svg+xml' : (str_ends_with($favAdmin, '.png') ? 'image/png' : 'image/x-icon'); ?>
    <link rel="icon" href="<?= asset($favAdmin) ?>" type="<?= $favAdminType ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="<?= asset('/css/admin.css') ?>">
</head>

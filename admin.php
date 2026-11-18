<?php
/**
 * Admin dashboard front controller (/admin, /admin/queries, /admin/seo, …).
 * .htaccess routes every /admin* URL here.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/contact-handler.php';   // CONTACT_SUBJECTS
require_once __DIR__ . '/includes/admin/functions.php';

admin_session_start();
header('X-Robots-Tag: noindex, nofollow');
header('Cache-Control: no-store');
header('X-Frame-Options: DENY');

$path      = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$adminPath = substr($path, strlen(SITE_BASE . '/admin'));
$adminPath = '/' . trim((string) $adminPath, '/');
$method    = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// --- Public routes -----------------------------------------------------------
if ($adminPath === '/login') {
    if (admin_user()) {
        redirect('/admin');
    }
    $error = null;
    $username = '';
    if ($method === 'POST') {
        $username = trim((string) ($_POST['username'] ?? ''));
        if (!csrf_valid($_POST['csrf'] ?? '')) {
            $error = 'Your session expired. Please try again.';
        } elseif (admin_locked_out()) {
            $error = 'Too many failed attempts. Please wait 15 minutes and try again.';
        } elseif (admin_attempt_login($username, (string) ($_POST['password'] ?? ''))) {
            redirect('/admin');
        } else {
            $error = 'Incorrect username or password.';
        }
    }
    include __DIR__ . '/includes/admin/views/login.php';
    return;
}

// --- Everything below requires a signed-in admin -----------------------------
if (!admin_user()) {
    redirect('/admin/login');
}

if ($adminPath === '/logout' && $method === 'POST') {
    if (csrf_valid($_POST['csrf'] ?? '')) {
        admin_logout();
    }
    redirect('/admin/login');
}

try {
    db();
} catch (Throwable $e) {
    error_log('Admin DB: ' . $e->getMessage());
    $queries = [];
    $view = 'db-error';
    $pageTitle = 'Database not connected';
    include __DIR__ . '/includes/admin/layout.php';
    return;
}

// --- Actions (POST, then redirect) ---------------------------------------------
if (preg_match('#^/queries/(\d+)/(status|notes|delete)$#', $adminPath, $m) && $method === 'POST') {
    $id = (int) $m[1];
    if (csrf_valid($_POST['csrf'] ?? '')) {
        if ($m[2] === 'status' && isset(QUERY_STATUSES[$_POST['status'] ?? ''])) {
            admin_set_query_status($id, $_POST['status']);
        } elseif ($m[2] === 'notes') {
            db_query('UPDATE ma_queries SET notes = ? WHERE id = ?', [mb_substr(trim((string) ($_POST['notes'] ?? '')), 0, 5000), $id]);
            redirect('/admin/queries/' . $id . '?saved=1');
        } elseif ($m[2] === 'delete') {
            db_query('DELETE FROM ma_queries WHERE id = ?', [$id]);
            redirect('/admin/queries?deleted=1');
        }
    }
    redirect('/admin/queries/' . $id);
}

if ($adminPath === '/queries/export') {
    $rows = admin_queries();
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="mark-attendance-queries-' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    fwrite($out, "\xEF\xBB\xBF"); // UTF-8 BOM so Excel shows Urdu/special characters correctly
    $cols = ['id', 'created_at', 'status', 'name', 'email', 'company', 'phone', 'subject', 'message', 'notes', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'landing_page', 'referrer'];
    fputcsv($out, $cols);
    $safe = fn($s) => preg_match('/^[=+\-@\t]/', (string) $s) && !preg_match('/^\+?[0-9 ()\-]+$/', (string) $s) ? "'" . $s : $s;
    foreach ($rows as $r) {
        $r['subject'] = subject_label($r['subject']);
        fputcsv($out, array_map(fn($c) => $safe($r[$c] ?? ''), $cols));
    }
    exit;
}

$queries  = admin_queries();
$newCount = count(array_filter($queries, fn($q) => $q['status'] === 'new'));

// --- Pages -----------------------------------------------------------------
if ($adminPath === '/') {
    $view = 'dashboard';
    $pageTitle = 'Dashboard';
} elseif ($adminPath === '/queries') {
    $view = 'queries';
    $pageTitle = 'Queries';
} elseif (preg_match('#^/queries/(\d+)$#', $adminPath, $m) && ($query = admin_find_query((int) $m[1]))) {
    // Opening a new query marks it as read.
    if ($query['status'] === 'new') {
        admin_set_query_status((int) $query['id'], 'read');
        $query['status'] = 'read';
        $newCount = max(0, $newCount - 1);
    }
    $view = 'query';
    $pageTitle = 'Query from ' . $query['name'];
} elseif ($adminPath === '/settings') {
    $error = null;
    if ($method === 'POST') {
        if (!csrf_valid($_POST['csrf'] ?? '')) {
            $error = 'Your session expired. Please try again.';
        } elseif (site_settings_save($_POST, $_FILES, $error)) {
            redirect('/admin/settings?saved=1');
        }
    }
    $view = 'settings';
    $pageTitle = 'Site Settings';
} elseif ($adminPath === '/seo') {
    $view = 'seo';
    $pageTitle = 'SEO';
} elseif ($adminPath === '/seo/edit' && isset(SEO_PAGES[$seoPath = (string) ($_GET['path'] ?? '')])) {
    $error = null;
    $posted = null;
    if ($method === 'POST') {
        if (!csrf_valid($_POST['csrf'] ?? '')) {
            $error = 'Your session expired. Please try again.';
        } elseif (seo_save($seoPath, $_POST, $error)) {
            redirect('/admin/seo/edit?path=' . rawurlencode($seoPath) . '&saved=1');
        }
        $posted = $_POST;
    }
    $view = 'seo-edit';
    $pageTitle = 'SEO: ' . SEO_PAGES[$seoPath][1];
} else {
    http_response_code(404);
    $view = 'not-found';
    $pageTitle = 'Page not found';
}

include __DIR__ . '/includes/admin/layout.php';

<div class="card"><div class="empty">
    <span class="empty-icon stat-icon-warn"><?= admin_icon('alert') ?></span>
    <h3>Can't connect to the database</h3>
    <p class="muted">Check the DB_HOST, DB_NAME, DB_USER and DB_PASS values in <code>includes/config.local.php</code>
        (copy <code>includes/config.local.example.php</code> if it doesn't exist). The website itself keeps working, and new
        enquiries are still emailed to <?= e(FORM_RECIPIENT) ?> and saved to <code>data/submissions.csv</code> until the database is back.</p>
</div></div>

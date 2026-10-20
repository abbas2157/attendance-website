<?php
/** All queries with search and filters. Expects $queries. */
$search  = trim((string) ($_GET['q'] ?? ''));
$subject = (string) ($_GET['subject'] ?? '');
$status  = (string) ($_GET['status'] ?? '');

$rows = array_values(array_filter($queries, function ($q) use ($search, $subject, $status) {
    if ($subject !== '' && $q['subject'] !== $subject) return false;
    if ($status !== '' && $q['status'] !== $status) return false;
    if ($search !== '') {
        $haystack = implode(' ', [$q['name'], $q['email'], $q['company'], $q['phone'], $q['message']]);
        if (mb_stripos($haystack, $search) === false) return false;
    }
    return true;
}));
$filtered = $search !== '' || $subject !== '' || $status !== '';
if ($filtered) {
    $emptyTitle = 'No matching queries';
    $emptyText  = 'Try a different search or clear the filters.';
}
?>
<?php if (isset($_GET['deleted'])): ?>
<p class="notice notice-ok" role="status"><?= admin_icon('check') ?> Query deleted.</p>
<?php endif; ?>
<div class="card">
    <form class="filters" method="get" action="<?= url('/admin/queries') ?>">
        <label class="input-wrap grow"><?= admin_icon('search') ?><input type="search" name="q" value="<?= e($search) ?>" placeholder="Search name, email, company, phone or message" aria-label="Search"></label>
        <select name="subject" aria-label="Topic">
            <option value="">All topics</option>
<?php foreach (CONTACT_SUBJECTS as $value => $label): ?>
            <option value="<?= e($value) ?>"<?= $subject === $value ? ' selected' : '' ?>><?= e($label) ?></option>
<?php endforeach; ?>
        </select>
        <select name="status" aria-label="Status">
            <option value="">All statuses</option>
<?php foreach (QUERY_STATUSES as $value => $label): ?>
            <option value="<?= e($value) ?>"<?= $status === $value ? ' selected' : '' ?>><?= e($label) ?></option>
<?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
<?php if ($filtered): ?>
        <a href="<?= url('/admin/queries') ?>" class="btn btn-ghost">Clear</a>
<?php endif; ?>
        <a href="<?= url('/admin/queries/export') ?>" class="btn btn-ghost" title="Download all queries as a CSV file for Excel"><?= admin_icon('download') ?> Export CSV</a>
    </form>
    <p class="result-count muted"><?= count($rows) ?> of <?= count($queries) ?> <?= count($queries) === 1 ? 'query' : 'queries' ?></p>
    <?php include __DIR__ . '/_table.php'; ?>
</div>

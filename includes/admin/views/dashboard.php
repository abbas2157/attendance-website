<?php
/** Dashboard overview. Expects $queries, $newCount. */
$weekAgo = strtotime('-7 days');
$bySubject = [];
$bySource = [];
foreach ($queries as $q) {
    $label = subject_label($q['subject']);
    $bySubject[$label] = ($bySubject[$label] ?? 0) + 1;
    $src = $q['utm_source'] !== '' ? $q['utm_source'] : (($host = parse_url($q['referrer'], PHP_URL_HOST)) ? $host : 'Direct / unknown');
    $bySource[$src] = ($bySource[$src] ?? 0) + 1;
}
arsort($bySubject);
arsort($bySource);
$stats = [
    ['Total queries', count($queries), 'inbox', 'All time'],
    ['New', $newCount, 'sparkle', 'Awaiting a reply'],
    ['This week', count(array_filter($queries, fn($q) => strtotime($q['created_at']) >= $weekAgo)), 'calendar', 'Last 7 days'],
    ['Top topic', $bySubject ? array_key_first($bySubject) : '—', 'tag', $bySubject ? reset($bySubject) . (reset($bySubject) === 1 ? ' query' : ' queries') : 'No data yet'],
];
$rows = array_slice($queries, 0, 6);
$compact = true;
$bars = function (array $data): void {
    if (!$data) {
        echo '<p class="muted pad">No queries yet.</p>';
        return;
    }
    $max = max($data);
    echo '<ul class="bars">';
    foreach (array_slice($data, 0, 6, true) as $label => $count) {
        echo '<li><span class="bar-label">', e($label), '<strong>', $count, '</strong></span>',
             '<span class="bar"><span style="width: ', round($count / $max * 100), '%"></span></span></li>';
    }
    echo '</ul>';
};
?>
<section class="welcome">
    <div>
        <h2>Welcome back</h2>
        <p class="muted">Here’s what’s happening with your website enquiries.</p>
    </div>
    <a href="<?= url('/admin/queries') ?>" class="btn btn-primary">View all queries <?= admin_icon('arrow-right', 'icon icon-sm') ?></a>
</section>

<section class="stats">
<?php foreach ($stats as [$label, $value, $icon, $hint]): ?>
    <div class="card stat">
        <span class="stat-icon"><?= admin_icon($icon) ?></span>
        <div>
            <p class="stat-label"><?= e($label) ?></p>
            <p class="stat-value<?= is_string($value) ? ' stat-value-text' : '' ?>"><?= e((string) $value) ?></p>
            <p class="stat-hint"><?= e($hint) ?></p>
        </div>
    </div>
<?php endforeach; ?>
</section>

<section class="grid-2">
    <div class="card">
        <div class="card-head">
            <h3>Recent queries</h3>
            <a href="<?= url('/admin/queries') ?>" class="link">See all <?= admin_icon('arrow-right', 'icon icon-sm') ?></a>
        </div>
        <?php include __DIR__ . '/_table.php'; ?>
    </div>

    <div class="dash-side">
        <div class="card">
            <div class="card-head"><h3>Queries by topic</h3></div>
            <?php $bars($bySubject); ?>
        </div>
        <div class="card">
            <div class="card-head"><h3>Where they came from</h3></div>
            <?php $bars($bySource); ?>
        </div>
    </div>
</section>

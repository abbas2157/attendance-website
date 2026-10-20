<?php
/** Single query detail. Expects $query. */
$topic    = subject_label($query['subject']);
$waNumber = preg_replace('/\D/', '', $query['phone']);
if (str_starts_with($waNumber, '0')) {
    $waNumber = '92' . substr($waNumber, 1);   // local Pakistani format 03xx → 923xx
}
$firstName = explode(' ', trim($query['name']))[0];
?>
<a href="<?= url('/admin/queries') ?>" class="back-link"><?= admin_icon('arrow-left') ?> All queries</a>

<?php if (isset($_GET['saved'])): ?>
<p class="notice notice-ok" role="status"><?= admin_icon('check') ?> Notes saved.</p>
<?php endif; ?>

<div class="grid-2 detail">
    <div class="detail-main">
        <article class="card">
            <div class="card-head">
                <div class="person">
                    <span class="avatar"><?= e(initials($query['name'])) ?></span>
                    <span><strong><?= e($query['name']) ?></strong><small><?= e(date('l, M j, Y \a\t g:i A', strtotime($query['created_at']))) ?></small></span>
                </div>
                <?= status_badge($query['status']) ?>
            </div>
            <div class="message"><?= nl2br(e($query['message'])) ?></div>
            <div class="card-actions">
                <a class="btn btn-primary" href="mailto:<?= e($query['email']) ?>?subject=<?= rawurlencode('Re: your ' . $topic . ' enquiry — Mark Attendance') ?>&body=<?= rawurlencode("Hi {$firstName},\n\n") ?>"><?= admin_icon('mail') ?> Reply by email</a>
<?php if ($waNumber !== ''): ?>
                <a class="btn btn-ghost" href="https://wa.me/<?= e($waNumber) ?>?text=<?= rawurlencode("Hi {$firstName}, this is Mark Attendance about your {$topic} enquiry.") ?>" target="_blank" rel="noopener"><?= admin_icon('message') ?> WhatsApp</a>
                <a class="btn btn-ghost" href="tel:<?= e(preg_replace('/[^\d+]/', '', $query['phone'])) ?>"><?= admin_icon('phone') ?> Call</a>
<?php endif; ?>
            </div>
        </article>

        <form method="post" action="<?= url('/admin/queries/' . (int) $query['id'] . '/notes') ?>" class="card notes-card">
            <?= csrf_field() ?>
            <div class="card-head"><h3>Internal notes</h3><span class="muted hide-sm">Only visible in the dashboard</span></div>
            <div class="seo-card-body">
                <textarea class="text-input" name="notes" rows="4" placeholder="e.g. Called on Monday — wants a demo for 120 staff, follow up Thursday."><?= e($query['notes'] ?? '') ?></textarea>
                <div class="notes-actions"><button type="submit" class="btn btn-ghost btn-sm"><?= admin_icon('check') ?> Save notes</button></div>
            </div>
        </form>
    </div>

    <aside class="card">
        <div class="card-head"><h3>Details</h3></div>
        <dl class="details">
            <dt>Topic</dt><dd><span class="chip"><?= e($topic) ?></span></dd>
            <dt>Email</dt><dd><a href="mailto:<?= e($query['email']) ?>" class="link break"><?= e($query['email']) ?></a></dd>
            <dt>Phone</dt><dd><?= e($query['phone'] ?: '—') ?></dd>
            <dt>Company</dt><dd><?= e($query['company'] ?: '—') ?></dd>
            <dt>Received</dt><dd><?= e(time_ago($query['created_at'])) ?></dd>
            <dt>Email alert</dt><dd><?= $query['emailed'] ? 'Sent to ' . e(FORM_RECIPIENT) : '<span class="muted">Not sent (mail server unavailable)</span>' ?></dd>
        </dl>
<?php $attribution = query_attribution($query); ?>
        <div class="card-head attribution-head"><h3>Where they came from</h3></div>
<?php if ($attribution): ?>
        <dl class="details">
<?php foreach ($attribution as $label => $value): ?>
            <dt><?= e($label) ?></dt><dd class="break"><?= e($value) ?></dd>
<?php endforeach; ?>
        </dl>
<?php else: ?>
        <p class="muted attribution-none">Direct visit: no campaign tags or referring site were recorded.</p>
<?php endif; ?>
        <form method="post" action="<?= url('/admin/queries/' . (int) $query['id'] . '/status') ?>" class="status-form">
            <?= csrf_field() ?>
            <span class="muted">Status</span>
            <div class="segmented segmented-3" role="radiogroup" aria-label="Status">
<?php foreach (QUERY_STATUSES as $value => $label): ?>
                <label><input type="radio" name="status" value="<?= $value ?>"<?= $query['status'] === $value ? ' checked' : '' ?> onchange="this.form.submit()"><span><?= $label ?></span></label>
<?php endforeach; ?>
            </div>
            <noscript><button type="submit" class="btn btn-ghost btn-sm">Update</button></noscript>
        </form>
        <form method="post" action="<?= url('/admin/queries/' . (int) $query['id'] . '/delete') ?>" class="delete-form">
            <?= csrf_field() ?>
            <button type="submit" class="btn btn-ghost btn-sm btn-danger" data-confirm="Delete this query permanently? This cannot be undone."><?= admin_icon('trash') ?> Delete query</button>
        </form>
    </aside>
</div>

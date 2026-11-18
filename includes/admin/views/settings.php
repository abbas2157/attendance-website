<?php
/**
 * Site settings editor (/admin/settings). Expects $error.
 * Field definitions live in includes/settings.php (site_setting_fields).
 */
$groups  = site_setting_fields();
$current = site_setting_current();
$favicon = SITE_FAVICON !== '' ? SITE_FAVICON : '/assets/favicon.svg';
$isCustomFavicon = SITE_FAVICON !== '';
?>
<section class="welcome">
    <div>
        <h2>Site settings</h2>
        <p class="muted">App store links, contact details, social profiles, Google and the favicon — saved here, live on the website immediately.</p>
    </div>
    <a href="<?= url('/') ?>" class="btn btn-ghost" target="_blank" rel="noopener"><?= admin_icon('external') ?> View website</a>
</section>

<?php if (isset($_GET['saved']) && !$error): ?>
<p class="notice notice-ok" role="status"><?= admin_icon('check') ?> Settings saved and live on the website.</p>
<?php endif; ?>
<?php if ($error): ?>
<p class="alert" role="alert"><?= e($error) ?></p>
<?php endif; ?>

<form method="post" enctype="multipart/form-data" class="settings-form" data-dirty-form>
    <?= csrf_field() ?>

<?php foreach ($groups as [$icon, $title, $intro, $fields]): ?>
    <section class="card seo-card">
        <div class="card-head"><h3><?= admin_icon($icon) ?> <?= e($title) ?></h3></div>
        <div class="settings-grid">
            <p class="muted settings-intro"><?= e($intro) ?></p>
<?php foreach ($fields as $key => [$label, $type, $placeholder, $help]): ?>
            <div class="seo-field<?= $type === 'textarea' ? ' settings-field-full' : '' ?>">
                <div class="field-top"><label for="set-<?= e($key) ?>"><?= e($label) ?></label></div>
<?php if ($type === 'textarea'): ?>
                <textarea class="text-input" id="set-<?= e($key) ?>" name="<?= e($key) ?>" rows="2" maxlength="500" placeholder="<?= e($placeholder) ?>"><?= e($current[$key]) ?></textarea>
<?php else: ?>
                <input class="text-input" id="set-<?= e($key) ?>" type="<?= $type === 'email' ? 'email' : ($type === 'url' ? 'url' : 'text') ?>" name="<?= e($key) ?>" value="<?= e($current[$key]) ?>" placeholder="<?= e($placeholder) ?>" maxlength="300">
<?php endif; ?>
<?php if ($help !== ''): ?>
                <div class="field-foot"><span class="muted"><?= e($help) ?></span></div>
<?php endif; ?>
            </div>
<?php endforeach; ?>
        </div>
    </section>
<?php endforeach; ?>

    <section class="card seo-card">
        <div class="card-head"><h3><?= admin_icon('image') ?> Favicon</h3></div>
        <div class="settings-grid">
            <p class="muted settings-intro">The small icon in the browser tab. SVG, PNG or ICO, square, under 512&nbsp;KB. A new upload is live for visitors right away.</p>
            <div class="favicon-row settings-field-full">
                <span class="favicon-preview"><img src="<?= url($favicon) ?>?v=<?= time() ?>" alt="Current favicon" width="32" height="32"></span>
                <div class="seo-field favicon-field">
                    <div class="field-top"><label for="set-favicon">Upload a new favicon</label></div>
                    <input class="text-input" type="file" id="set-favicon" name="favicon_file" accept=".svg,.png,.ico,image/svg+xml,image/png,image/x-icon">
                    <div class="field-foot"><span class="muted">Currently: <code><?= e($favicon) ?></code><?= $isCustomFavicon ? '' : ' (default)' ?></span></div>
                </div>
            </div>
<?php if ($isCustomFavicon): ?>
            <label class="check-row settings-field-full">
                <input type="checkbox" name="favicon_reset" value="1">
                <span><strong>Remove the uploaded favicon</strong> <span class="muted">and go back to the default icon</span></span>
            </label>
<?php endif; ?>
        </div>
    </section>

    <div class="save-bar">
        <span class="save-state" data-dirty-label>All changes saved</span>
        <a href="<?= url('/admin') ?>" class="btn btn-ghost">Cancel</a>
        <button type="submit" class="btn btn-primary"><?= admin_icon('check') ?> Save settings</button>
    </div>
</form>

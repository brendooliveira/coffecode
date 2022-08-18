<?php $v->layout("_theme"); ?>

<article class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body text-center">
            <h1><?= $data->title; ?></h1>
            <p><?= $data->desc; ?></p>
            <?php if (!empty($data->link)): ?>
                <a class="optin_page_btn gradient gradient-green gradient-hover radius"
                   href="<?= $data->link; ?>" title="<?= $data->linkTitle; ?>"><?= $data->linkTitle; ?></a>
            <?php endif; ?>
        </div>
    </div>
</article>

<?php if (!empty($track)): ?>
    <?php $v->start("scripts"); ?>
    <script>
        fbq('track', '<?= $track->fb;?>');
        gtag('event', 'conversion', {'send_to': '<?= $track->aw;?>'});
    </script>
    <?php $v->end(); ?>
<?php endif; ?>

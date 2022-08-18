<?php

$v->layout("_theme"); ?>

<article class="container">

        <header class="text-center">
            <p class="error">&bull;<?= $error->code; ?>&bull;</p>
            <h1><?= $error->title; ?></h1>
            <p><?= $error->message; ?></p>

            <?php if ($error->link): ?>
                <a class="btn btn-primary"
                   title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
            <?php endif; ?>
        </header>
 
</article>



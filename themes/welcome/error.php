<?php

$v->layout("_theme"); ?>

<article class="container mt-5">

        <header class="text-center">
            <p class="error text-white">&bull;<?= $error->code; ?>&bull;</p>
            <h1 class="text-white"><?= $error->title; ?></h1>
            <p class="text-white"><?= $error->message; ?></p>

            <?php if ($error->link): ?>
                <a class="btn btn-primary"
                   title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
            <?php endif; ?>
        </header>
 
</article>



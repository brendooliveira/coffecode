<?php $v->layout("_theme") ?>

<div class="container mt-5 mb-5">
    <div class="card mt-3">
        <div class="card-body">
            <h2>Bootstrap 5</h2>
            <div class="bg-dark text-white">
                <?= $v->insert("plugins/bootstrap") ?>
            </div>
            
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body"><h2>Dropzone</h2></div>
        <?= $v->insert("plugins/dropzone") ?>
    </div>

    <div class="card mt-3">
        <div class="card-body"><h2>Owl Carousel</h2></div>
        <?= $v->insert("plugins/carousel") ?>
    </div>

    <div class="card mt-3">
        <div class="card-body"><h2>Select2</h2></div>
        <?= $v->insert("plugins/select2") ?>
    </div>

    <div class="card mt-3">
        <div class="card-body"><h2>Magnific Popup</h2></div>
        <?= $v->insert("plugins/magnific-popup") ?>
    </div>

    <div class="card mt-3">
        <div class="card-body"><h2>Bootstrap Icons</h2></div>
            <div class="container">
                <?= $v->insert("plugins/icons") ?>
            </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $head ?>

    <!-- BOOTSTRAP START -->
    <?= bootstrapCss() ?>
    <!-- BOOTSTRAP END -->

    <!-- BOOTSTRAP ICON START -->
    <?= bootstrapIcons() ?>
    <!-- BOOTSTRAP ICON END -->

    <!-- DROPZONE PLUGIN START -->
    <link rel="stylesheet" href="<?= url("/shared/dropzone/min/") ?>dropzone.min.css" />
    <script src="<?= url("/shared/dropzone/min/") ?>dropzone.min.js"></script>
    <!-- DROPZONE PLUGIN END -->

    <!-- OWL CAROUSEL START -->
    <link rel="stylesheet" href="<?= url("/shared/OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.css") ?>">
    <link rel="stylesheet" href="<?= url("/shared/OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.css") ?>">
    <script src="<?= url("/shared/OwlCarousel/docs/assets/vendors/jquery.min.js") ?>"></script>
    <script src="<?= url("/shared/OwlCarousel/docs/assets/owlcarousel/owl.carousel.js")?>"> </script>
    <!-- OWL CAROUSEL END -->

    <!-- FSPHP START -->
    <link rel="stylesheet" href="<?= url("/shared/styles/boot.css"); ?>"/>
    <link rel="stylesheet" href="<?= url("/shared/styles/styles.css"); ?>"/>
    <!-- FSPHP END -->

    <!-- SELCTE2 START -->
    <link href="<?= url("/shared/Select2/select2.min.css"); ?>" rel="stylesheet" />
    <!-- SELCTE2 END -->

    <!-- magnific-popup START -->
    <link href="<?= url("/shared/magnific-popup/magnific-popup.css"); ?>" rel="stylesheet" />
    <!-- magnific-popup END -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;500&display=swap" rel="stylesheet">

    <style>
      .logo
      {
        font-family: 'DynaPuff', cursive;
      }
    </style>
</head>
<body>
    
<div class="ajax_load" style="z-index: 999;">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<div class="ajax_response"><?= flash(); ?></div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand logo" href="<?= url("/") ?>">Coffe Code</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url_back() ?>">HELLO WORD</a>
        </li>
      </ul>
      <div class="d-flex">
        <a href="<?= url("/cadastrar") ?>" class="mx-1 text-decoration-none">Cadastrar</a> / <a href="<?= url("/entrar") ?>" class="mx-1 text-decoration-none">Entrar</a>
      </div>
    </div>
  </div>
</nav>

<?= $v->section("content"); ?>

<!-- OWL CAROUSEL START -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="<?= url("/shared/OwlCarousel/docs/assets/vendors/highlight.js"); ?>"></script>
<script src="<?= url("/shared/OwlCarousel/docs/assets/js/app.js"); ?>"></script>
<!-- OWL CAROUSEL END -->

<!-- BOOTSTRAP START -->
<?= bootstrapJs() ?>
<!-- BOOTSTRAP END -->

<!-- FSPHP START -->
<script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery.form.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery-ui.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery.mask.js"); ?>"></script>
<script src="<?= url("/shared/scripts/tinymce/tinymce.min.js"); ?>"></script>
<!-- FSPHP END -->

<!-- SELCTE2 START -->
<script src="<?= url("/shared/Select2/select2.min.js") ?>"></script>
<!-- SELCTE2 END -->

<!-- magnific-popup START -->
<script src="<?= url("/shared/magnific-popup/magnific-popup.js") ?>"></script>
<!-- magnific-popup END -->
<?= $v->section("scripts"); ?>
</body>
</html>
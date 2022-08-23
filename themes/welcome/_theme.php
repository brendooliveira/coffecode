<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOTSTRAP START -->
    <?= bootstrapCss() ?>
    <!-- BOOTSTRAP END -->

    <!-- BOOTSTRAP ICON START -->
    <?= bootstrapIcons() ?>
    <!-- BOOTSTRAP ICON END -->

    <link rel="stylesheet" href="<?= url("/shared/styles/message.css") ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;500&display=swap" rel="stylesheet">

    <style>
      .logo
      {
        font-family: 'DynaPuff', cursive;
      }
    </style>

    <?= $head ?>
</head>
<body class="bg-dark">

<div class="ajax_load">
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

<!-- BOOTSTRAP START -->
<?= bootstrapJs() ?>
<!-- BOOTSTRAP END -->

<!-- SCRIPTS START -->
<script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery-ui.js"); ?>"></script>
<!-- SCRIPTS END -->

<script src="<?= theme("/assets/script.js") ?>"></script>

<?= $v->section("scripts"); ?>
</body>
</html>
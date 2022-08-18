<?php $v->layout("_theme"); ?>

<div class="container mt-5 mb-5">
<article class="card">
    <div class="card-body">
        <header class="text-center">
            <h1>Recuperar senha</h1>
            <p>Informe seu e-mail para receber um link de recuperação.</p>
        </header>

        <form class="auth_form" data-reset="true" action="<?= url("/recuperar"); ?>" method="post"
              enctype="multipart/form-data">

            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            
                <div>
                    <span class="icon-envelope">Email:</span>
                    <span><a title="Voltar e entrar!" href="<?= url("/entrar"); ?>">Voltar e entrar!</a></span>
                </div>
                <input type="email" name="email" class="form-control mb-3" placeholder="Informe seu e-mail:" required/>
           

            <button class="btn btn-primary">Recuperar</button>
        </form>
    </div>
</article>
</div>
<?php $v->layout("_theme"); ?>

<div class="container mt-5 mb-5">

<article class="card">
    <div class="card-body">
        <header class="text-center">
            <h1>Criar nova senha</h1>
            <p>Informe e repita uma nova senha para recuperar seu acesso.</p>
        </header>

        <form class="auth_form" action="<?= url("/recuperar/resetar"); ?>" method="post"
              enctype="multipart/form-data">
            <input type="hidden" name="code" value="<?= $code; ?>"/>
            <?= csrf_input(); ?>

         
                <div>
                    <span class="icon-envelope">Nova Senha:</span>
                    <span><a title="Voltar e entrar!" href="<?= url("/entrar"); ?>">Voltar e entrar!</a></span>
                </div>
                <input type="password" class="form-control mb-3" name="password" placeholder="Nova senha:" required/>
           

       
                <div class="unlock-alt"><span class="icon-envelope">Repita a nova senha:</span></div>
                <input type="password" class="form-control mb-3" name="password_re" placeholder="Repita a nova senha:" required/>
           

            <button class="btn btn-primary">Alterar Senha</button>
        </form>
    </div>
</article>

</div>
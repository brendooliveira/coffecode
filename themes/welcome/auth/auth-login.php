<?php $v->layout("_theme"); ?>

<div class="container mt-5 mb-5">
    <article class="card">
        <div class="card-body">
            <header class="text-center">
                <h1>Fazer Login</h1>
                <p>Ainda não tem conta? <a title="Cadastre-se!" href="<?= url("/cadastrar"); ?>">Cadastre-se!</a></p>
            </header>

            <form class="auth_form" action="<?= url("/entrar"); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_input(); ?>

                
                    <div><span class="icon-envelope">Email:</span></div>
                    <input type="email" name="email" value="<?= ($cookie ?? null); ?>" class="form-control mb-3" placeholder="Informe seu e-mail:"
                        required/>
                

                
                    <div>
                        <span class="icon-unlock-alt">Senha:</span>
                        <span><a title="Esqueceu a senha?" href="<?= url("/recuperar"); ?>">Esqueceu a senha?</a></span>
                    </div>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Informe sua senha:" required/>
                

                
                    <input type="checkbox" <?= (!empty($cookie) ? "checked" : ""); ?> class="mb-3" name="save"/>
                    <span>Lembrar dados?</span>
                    <br>
                

                    <button class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </article>
</div>
<?php $v->layout("_theme"); ?>

<div class="container mt-5 mb-5">

    <article class="card">
        <div class="card-body">
            <header class="text-center">
                <h1>Cadastre-se</h1>
                <p>Já tem uma conta? <a title="Fazer login!" href="<?= url("/entrar"); ?>">Fazer login!</a></p>
            </header>

            <form class="auth_form" action="<?= url("/cadastrar"); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_input(); ?>

                
                    <div><span>Nome:</span></div>
                    <input type="text" name="first_name" placeholder="Primeiro nome:" class="form-control mb-3" required/>
                

                
                    <div><span>Sobrenome:</span></div>
                    <input type="text" name="last_name" placeholder="Último nome:" class="form-control mb-3" required/>
                

                
                    <div><span>Email:</span></div>
                    <input type="email" name="email" placeholder="Informe seu e-mail:" class="form-control mb-3" required/>
                

                
                    <div><span>Senha:</span></div>
                    <input type="password" name="password" placeholder="Informe sua senha:" class="form-control mb-3" required/>
                

                <button class="btn btn-primary">Criar conta</button>
            </form>
        </div>
    </article>

</div>
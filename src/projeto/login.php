<!DOCTYPE html>
<html lang="en">

<?php include_once '_head.php' ?>

<body>

    <div class="page-login">
        <div class="card-login">
            <form action="login.php" method="post">
                <h2 class="h2-login">Login</h2>
                <p class="p-login">Digite seus dados para acessar</p>
                <input class="campo-login" type="email" placeholder="Digite aqui o seu e-mail" />
                <input class="campo-login" type="password" placeholder="Digite sua senha" />
                <a class="a-login" href="#">Esqueci minha senha</a>
                <button class="botao-login" name="btnAcessar">Acessar</button>
                <p class="p-login">Ainda não tem uma conta? <a class="a-login" href="cadastro.php">Crie uma conta agora!</a></p>
            </form>
        </div>
    </div>

</body>

</html>
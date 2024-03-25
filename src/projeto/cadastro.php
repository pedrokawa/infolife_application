<?php

if(isset($_POST['btnEnviar'])){

    header('location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include_once '_head.php' ?>

<body>

    <div class="page-cadastro">
        <div class="card-cadastro">
            <form action="cadastro.php" method="post">
                <h1 class="h1-cadastro">Cadastro</h1>
                <p>Preencha os campos abaixo com seus dados</p>
                <p class="p-cadastro">Dados pessoais:</p>
                <input class="campo-cadastro" type="text" placeholder="Nome Completo" />
                <input class="campo-cadastro" type="number" placeholder="CPF" />
                <line>
                <label class="label-data-nasc">Data de Nascimento</label>
                <input class="date" type="date" placeholder="Data de Nascimento" />
                </line>
                <input class="campo-cadastro" type="email" placeholder="E-mail" />
                <input class="campo-cadastro" type="password" placeholder="Digite sua senha" />
                <input class="campo-cadastro" type="password" placeholder="Digite a senha novamente" />
                <input class="campo-cadastro" type="tel" placeholder="Telefone de Contato"/>

                <button class="botao-cadastro" name="btnEnviar">Enviar</button>

                <p class="p-login">Já tem uma conta? <a class="a-login" href="login.php">Clique aqui e acesse sua conta!</a></p>
            </form>
        </div>
    </div>
</body>

</html>
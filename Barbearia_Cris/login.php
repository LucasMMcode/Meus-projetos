<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Login - Barbearia</title>

        <link rel='stylesheet' href='Reset_css.css'>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body class="login">
        <div class="page">
<?php
    include("conexao.php");
    include("codlogin.php");?>

    


        <form method="POST" class="formLogin" action="codlogin.php" onsubmit="return isvalid()">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">email:</label>
            <input type="text" name="email" placeholder="Digite seu email" autofocus="true" />
            <label for="senha">Senha</label>
            <input type="password" name="senha"placeholder="Digite seua senha" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Entrar" class="btn" name = "submit"/>
            <a href="cadastro.php">Não possui conta?</a>
        </form>
        </div>
<?php
include "rodape.inc";
?>
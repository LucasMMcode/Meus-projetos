<?php
    include("conexao.php");
    include("codcadastro.php")
    ?>

<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Cadastro-barbearia</title>

        <link rel='stylesheet' href='Reset_css.css'>
        <link rel='stylesheet' href='style.css'>
    </head>
<body>
    
    <body class="login">
        <div class="page">
            <form method="POST" class="formLogin" action="codcadastro.php" onsubmit="return isvalid()">
                <h1>Criar conta</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" required/>
            <label for="senha">Senha</label>
            <input type="password" name="senha"placeholder="Digite sua senha" required/>
            <label for="senhac">Repitir Senha </label>
            <input type="password" name="senhac"placeholder="Repita sua senha" required/>
            <a href="/">Esqueci minha senha</a>
            <input type="submit" name ="submit" value="Criar conta" class="btn" required/>
            <a href="login.php">Possui conta?</a>
        </form>
    </div>



<?php

include "includes/rodape.inc"
?>
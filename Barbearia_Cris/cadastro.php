<?php
include "includes/cabecalho.inc"
?>
<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Agendamento - Barbearia</title>

        <link rel="stylesheet" href="Reset_css.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="login">
    <div class="page">
        <form method="POST" class="formLogin" action="cadastro.php">
            <h1>Criar conta</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="nome">Nome</label>
            <input type="text" name="nome"placeholder="Digite seu Nome" autofocus="true" />
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome" autofocus="true" />
            <label for="telefone">Telefone</label>
            <input type="number" name="telefone"placeholder="Digite seu Telefone" autofocus="true" />
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="senha">Senha</label>
            <input type="password" name="senha"placeholder="Digite seu e-mail" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Criar conta" class="btn" />
            <a href="login.php">Possui conta?</a>
        </form>
    </div>
    <?php

    $nome=$_POST["nome"];
    $sobrenome=$_POST["sobrenome"];
    $telefone=$_POST["telefone"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $erro=false;


    include "includes/rodape.inc"
?>
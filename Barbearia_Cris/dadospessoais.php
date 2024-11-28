<?php
session_start();
include('conexao.php');
include "includes/cabecalho.inc";?>

<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="./img/logo.png">
        <title>Cadastro-barbearia</title>

        <link rel='stylesheet' href='Reset_css.css'>
        <link rel='stylesheet' href='style.css'>
    </head>
<body>
    
    <body class="login">
        <div class="page">
            <form method="POST" class="formLogin" action="coddadospessoais.php" onsubmit="return isvalid()">
                <h1>Dados pessoais</h1>
            <p>Digite os seus dados Passoais para completar o cadastro.</p>
            <label for="nome">Nome</label>
            <input type="text" name="nome"placeholder="Digite seu Nome" autofocus="true" required/>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome" autofocus="true" required/>
            <label for="telefone">Telefone</label>
            <input type="number" name="telefone"placeholder="Digite seu Telefone" autofocus="true" required/>
            <?php if (isset($_SESSION['submit'])) {
            if($_SESSION['categoria']==1){print" <select name='categoria' required='required'>
                <option value=''>Funcionário ou Cliente?</option>
                <option value='funcionarios'>Funcionário</option>
                <option value='cliente'>Cliente</option>
            </select>";}}
            ?>
            <br>
            <input type="submit" name ="submit" value="Finalizar cadastro" class="btn" required/>
            <a href="login.php">Possui conta?</a>
        </form>
    </div>



<?php
include "includes/rodape.inc"
?>
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
            <form method="POST" class="formLogin" action="codcadastro copy.php" onsubmit="return isvalid()">
                <h1>Criar conta</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="nome">Nome</label>
            <input type="text" name="nome"placeholder="Digite seu Nome" autofocus="true" required/>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome" autofocus="true" required/>
            <label for="telefone">Telefone</label>
            <input type="number" name="telefone"placeholder="Digite seu Telefone" autofocus="true" required/>
            <input type="submit" name ="submit" value="Criar conta" class="btn" required/>
            <a href="login.php">Possui conta?</a>
        </form>
    </div>



<?php
include "includes/rodape.inc"
?>
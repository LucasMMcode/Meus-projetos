<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Barbearia Cris</title>

        <link rel="stylesheet" href="Reset_css.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
        <div class="loginimg">
            <?php
        if (isset($_SESSION['submit'])) {if($_SESSION['nome']!=null){ print "<p class='loginnome'>". $_SESSION['nome']." ".$_SESSION['sobrenome']." </p>";
            }}?>
		<a href="login.php"><img src="<?php if (isset($_SESSION['submit'])) {if($_SESSION['nome']==null){echo'img/login.png';}else{echo'img/login2.png';}}else{echo'img/login.png';}?>" width ="60px""></a>
        <a class="sair"href="sair.php">Sair</a></div>
            <div class="caixa">
                <h1 ><img src="img/logo.png" alt="logo da Barbearia Alra" height="160px"></h1>

                <nav>
    	            <ul>
						<?php
                        if (isset($_SESSION['submit'])) {
                        if($_SESSION['classe']==1){
                            echo'<li><a href="tabelahorarios.php">Tabela horários</a></li>';
                            }else{}}
                            ?>
    	                <li><a href="index.php">Home</a></li>
    	                <li><a href="produtos.php">Produtos</a></li>
    	                <li><a href="https://web.whatsapp.com/send?phone=54984005750">Contato</a></li>
    	            </ul>
                </nav>
            </div>
        </header>
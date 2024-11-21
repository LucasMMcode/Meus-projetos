<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="./img/logo.png">
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
		<a href="login.php"><img src="<?php if (isset($_SESSION['submit'])) {if($_SESSION['nome']==null){echo'img/login2.png';}else{echo'img/login.png';}}else{echo'img/login2.png';}?>" width ="60px""></a>
        <?php if (isset($_SESSION['submit'])){echo'<a class="sair"href="sair.php">Sair</a>';}?></div>
            <div class="caixa">
                <h1 ><img src="img/logo.png" alt="logo da Barbearia Alra" height="160px"></h1>

                <nav>
    	            <ul>
						<?php
                        if (isset($_SESSION['submit'])) {
                        if($_SESSION['categoria']==1){
                            echo'<li><a href="tabelahorarios.php">Tabela horários</a></li>';
                            }else{}}
                            ?>
                        <li><a href="produtos.php">produtos</a></li>
    	                  <li><a href="index.php">Home</a></li>
                        <li><a href="cortes.php">cortes</a></li>
    	                

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    	            </ul><ul style="margin-left:50%;margin-top:1%">
                  <li><a href="#whats"><img src="img/whatsapp.png"width="50px"></a></li>
                  <li><a href="#face"><img src="img/facebook.png"width="50px"></a></li>
                  <li><a href="https://www.instagram.com/barbaarao?igsh=MWtnMnllYnhpcjlwMg=="><img src="img/instagram.png"width="50px"></a></li>
                  <li><a href="#gmail"><img src="img/email.png"width="50px"></a></li>
                        <ul>
                </nav>
            </div>
        </header>
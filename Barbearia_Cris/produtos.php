<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="reset_css.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
        <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 450px;
        }
        body {
            background-color: #00763D;
        }
        </style>
    </head>
    <body onload="geraitens();"  style="background-color: white">
    <header>
        <div class="loginimg">
            <?php
	session_start();
             if (isset($_SESSION['submit'])) {if($_SESSION['nome']!=null){ print "<p class='loginnome'>". $_SESSION['nome']." ".$_SESSION['sobrenome']." </p>";
            }}?>
		<a href="login.php"><img src="<?php if (isset($_SESSION['submit'])) {if($_SESSION['nome']==null){echo'img/login2.png';}else{echo'img/login.png';}}else{echo'img/login2.png';}?>" width ="60px""></a>
        <a class="sair"href="sair.php">Sair</a></div>
            <div class="caixa">
                <h1 ><img src="img/logo.png" alt="logo da Barbearia Alra" height="160px"></h1>

                <nav>
    	            <ul>
						<?php
                        if (isset($_SESSION['submit'])) {
                        if($_SESSION['categoria']==1){
                            echo'<li><a href="tabelahorarios.php">Tabela horários</a></li>
                        <li><a href="produtos.php">produtos</a></li>';
                            }else{}}
                            ?>
    	                <li><a href="index.php">Home</a></li>
                        <li><a href="cortes.php">cortes</a></li>
    	                <li class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Contato</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="https://web.whatsapp.com/send?phone=54984005750">whatsapp</a>
    <a href="#facebook">Facebook</a>
    <a href="https://www.instagram.com/barbaarao?igsh=MWtnMnllYnhpcjlwMg==">instagram</a>
    <a href="#email">email</a>
  </div>
</li>

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
    	            </ul>
                </nav>
            </div>
        </header>

        
        <main class="areaprodutos">
            <ul class="produtos" id="geraitens"></ul>
        </main>

        <footer>
            <img src="img/logo1.png" alt="logo da barbearia" >
            <p class="copyright">&copy; Copyright Barbearia - 2019</p>
        </footer>
    </body>
</html>
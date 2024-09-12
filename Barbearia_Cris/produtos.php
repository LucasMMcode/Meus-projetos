<?php 
session_start();?>
<?php
include "includes/cabecalho.inc"
logado(){
    echo  '<script>
               '// window.location.href = "login.php";
                .'alert("clicou")
            </script>';
}
?>

        <main>
            <ul class="produtos">
            <?php
                        if (isset($_SESSION['submit'])) {
                            echo'<a href="agendamento.php">';}?><li>
                    <h2> Cabelo </h2>
                    <img src="img/cabelo.jpg">
                    <p class="Descrição"> Na tesoura ou máquina, como o cliente preferir </p>
                    <p class="Preço"> R$ 25,00 </p>
                </li><?php
                        if (isset($_SESSION['submit'])) {
                            echo'</a>';}?>
                <?php
                        if (isset($_SESSION['submit'])) {
                            echo'<a href="agendamento.php">';}?><li>
                    <h2> Barba </h2>
                    <img src="img/barba.jpg">
                    <p class="Descrição"> Corte e desenhoo profisional de barba </p>
                    <p class="Preço"> R$ 18,00 </p>
                </li><?php
                        if (isset($_SESSION['submit'])) {
                            echo'</a>';}?>
                <?php
                        if (isset($_SESSION['submit'])) {
                            echo'<a href="agendamento.php">';}?><li>
                    <h2> Cabelo + Barba </h2>
                    <img src="img/cabelo+barba.jpg">
                    <p class="Descrição"> Pacote comppleto de cabelo e barba </p>
                    <p class="Preço"> R$ 35,00 </p>
                </li><?php
                        if (isset($_SESSION['submit'])) {
                            echo'</a>';}?>
                            <button onclick="logado()">Agendar</button>
            </ul>
        </main>

<?php
include "includes/rodape.inc"
?>
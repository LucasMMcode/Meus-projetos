<?php 
session_start();?>
<?php
include "includes/cabecalho.inc";
?>

<h1 class="titulo-principal" style="margin:0 0 0"> ESOLHA SEU CORTE</h1>

<main>
    <ul class="produtos">
        <?php
                if (isset($_SESSION['submit'])) {
                    echo'<a href="agendamento.php">';} else{ echo'<a href="" id="item1">';}?><li>
            <h2> Cabelo </h2>
            <img src="img/cabelo.jpg">
            <p class="Descrição"> Na tesoura ou máquina, como o cliente preferir </p>
            <p class="Preço"> R$ 25,00 </p>
        </li></a>
        <?php
                if (isset($_SESSION['submit'])) {
                    echo'<a href="agendamento.php">';} else{ echo'<a href="" id="item2">';}?><li>
            <h2> Barba </h2>
            <img src="img/barba.jpg">
            <p class="Descrição"> Corte e desenhoo profisional de barba </p>
            <p class="Preço"> R$ 18,00 </p>
        </li></a>
        <?php
                if (isset($_SESSION['submit'])) {
                    echo'<a href="agendamento.php">';} else{ echo'<a href="" id="item3">';}?><li>
            <h2> Cabelo + Barba </h2>
            <img src="img/cabelo+barba.jpg">
            <p class="Descrição"> Pacote comppleto de cabelo e barba </p>
            <p class="Preço"> R$ 35,00 </p>
        </li></a>
        <script>
// Seleciona os elementos da lista desejados
var item1 = document.getElementById('item1');
var item2 = document.getElementById('item2');
var item3 = document.getElementById('item3');

// Adiciona eventos onClick a cada item
item1.addEventListener('click', function() {
    alert('Logue antes de fazer o agendamento');
});

item2.addEventListener('click', function() {
    alert('Logue antes de fazer o agendamento');
});

item3.addEventListener('click', function() {
    alert('Logue antes de fazer o agendamento');
});
</script>
    </ul>
</main>

<?php
include "includes/rodape.inc"
?>
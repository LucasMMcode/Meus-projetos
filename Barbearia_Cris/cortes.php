<?php 
session_start();?>
<?php
include "includes/cabecalho.inc";
?>

<h1 class="titulo-principal" style="margin:0 0 0"> ESOLHA SEU CORTE</h1>

<main>
    <ul class="cortes">
        <?php
                    if (isset($_SESSION['submit'])) {
                        echo'<a href="agendamento.php?escolha=0" id="1item">';} else{ echo'<a href="" id="item1">';}?><li><form style="margin:0;">
                <h2> Cabelo </h2>
                <img src="img/cabelo.jpg" width=250px height=250px>
                <p class="Descrição"> Na tesoura ou máquina, como o cliente preferir </p>
                <p class="Preço"> R$ 30,00 </p></form>
            </li></a>
        <?php
                    if (isset($_SESSION['submit'])) {
                        echo'<a href="agendamento.php?escolha=1" id="2item">';} else{ echo'<a href="" id="item2">';}?><li><form style="margin:0;">
                <h2> Barba </h2>
                <img src="img/barba.jpg" width=250px height=250px>
                <p class="Descrição"> Corte e desenhoo profisional de barba </p>
                <p class="Preço"> R$ 20,00 </p></form>
            </li></a>
        <?php
                    if (isset($_SESSION['submit'])) {
                        echo'<a href="agendamento.php?escolha=2" id="3item">';} else{ echo'<a href="" id="item3">';}?><li><form style="margin:0;">
                <h2> Cabelo + Barba </h2>
                <img src="img/cabelo+barba.jpg" width=250px height=250px>
                <p class="Descrição"> Pacote completo de cabelo e barba </p>
                <p class="Preço"> R$ 50,00 </p></form>
            </li></a>
        <script>
// Seleciona os elementos da lista desejados
var item1 = document.getElementById('item1');
var item2 = document.getElementById('item2');
var item3 = document.getElementById('item3');
var iten1 = document.getElementById('1item');
var iten2 = document.getElementById('2item');
var iten3 = document.getElementById('3item');


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
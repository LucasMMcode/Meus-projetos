<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"
?>

        
        <main class="areaprodutos">
        <?php


        if (isset($_SESSION['submit'])) {
        if($_SESSION['categoria']==1){
                            echo'<button class="cadastrap"><a href="cadastrap.php">Adicionar produtos</a></button>';
                            echo "<form action='produtos.php' method='POST'>";}else{}}
                            ?>

            <ul class="produtos" id="geraitens"><?php
            $sql = "SELECT * FROM produtos";
            $result = $conn->query($sql);
            $idproduto= array();
            $nome= array();
            $caminhoimg= array();
            $preco= array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {	
                $idproduto[] = $row["IdProduto"];
                $nome[] = $row["Nome"];
                $preco[] = $row["Preco"];
                $caminhoimg[] = $row["Caminhoimg"];
                }
            }

            if (isset($_POST['submit'])) {
              for($i=0;$i<count($idproduto);$i++){
                $postid[$i+1] = $_POST[$i+1];
                $idpost = $postid[$i+1];
                $produtoid =$idproduto[$i];
                $sql = "UPDATE `produtos` SET `Existe`=$idpost WHERE IdProduto = $produtoid";
                $result = $conn->query($sql);
              }
            }

            $sql = "SELECT Existe FROM produtos";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {	
                $existe[] = $row["Existe"];
                }
            }


            for($i=0;$i<count($idproduto);$i++){
              if($existe[$i]==1 ||isset($_SESSION['submit']) && $_SESSION['categoria']==1){
                echo '<li>';
                if (isset($_SESSION['submit'])) {
                  if($_SESSION['categoria']==1){echo'<button id="myBtn'.$i.'" type="button">abrir modal</button>';}}
              echo'<h2>'.' '.$nome[$i].' </h2>
              <img style="object-fit: cover;" src="img/'.$caminhoimg[$i].'"width=250px height=250px>
              <p class="Descrição"> '.$nome[$i].'</p>
              <p class="Preço"> '.$preco[$i].' </p>';

              if (isset($_SESSION['submit'])) {
                if($_SESSION['categoria']==1){
                  echo'<p>Você deseja que este produto apareça</p>';
                  echo'<select name="'.$idproduto[$i].'">
                    <option value="1"';if($existe[$i]) {echo 'selected';}echo'>Sim</option>
                    <option value="0"';if(!$existe[$i]) {echo 'selected';}echo'>Não</option>
                  </select>';
                }
              }
              echo'</li>';
              echo '<script>
var btn'.$i.' = document.getElementById("myBtn'.$i.'");

btn'.$i.'.onclick = function() {
  modal.style.display = "block";
}
</script>';
            
            
            }
            }
            if (isset($_SESSION['submit'])) {
              if($_SESSION['categoria']==1){
                echo '<input class="enviar"type="submit" name="submit">';
                echo '</form>';
              }
            }
          ?>
          <!-- The Modal -->
          <div id="myModal" class="modal">
          
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Some text in the Modal..</p>
            </div>
          </div></ul>
        </main><script>

// Get the modal
var modal = document.getElementById("myModal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    <footer>
    <img src="img/logo1.png" alt="logo da barbearia" >
    <p class="copyright">&copy; Copyright Barbearia - 2019</p>
</footer>
    </body>

</html>
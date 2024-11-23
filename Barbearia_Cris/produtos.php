<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"
?>

        
        <main class="areaprodutos">
        <?php
        if (isset($_POST['submite'])) {
          $nome=$_POST["nomep"];
          $preco=$_POST["preco"];
          $id=$_POST["idp"];
          $sql = "UPDATE `produtos` SET `Nome`='$nome',`Preco`='$preco' WHERE IdProduto = $id";
              $result = $conn->query($sql);
        }

        if (isset($_SESSION['submit'])) {
        if($_SESSION['categoria']==1){
                            echo'<button class="cadastrap"><a href="cadastrap.php">Adicionar produtos</a></button>';}else{}}
                            ?>

            <ul class="produtos" id="geraitens"><?php
            if (isset($_SESSION['submit'])) {
              if($_SESSION['categoria']==1){
                                  echo "<form action='produtos.php' method='POST'>";}else{}}
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
                  if($_SESSION['categoria']==1){echo'<button id="myBtn" class="myBtn btn" type="button">Editar</button>';}}
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
            
            
            }
            }
            if (isset($_SESSION['submit'])) {
              if($_SESSION['categoria']==1){
                echo '<input class="enviar"type="submit" name="submit">';
                echo '</form>';?>
                <script>
                // Get the modal
                var modal = document.getElementsByClassName("modal");
                
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")
              
                var btn = document.getElementsByClassName("myBtn");


                </script>
                
                <?php
                for($i=0;$i<count($idproduto);$i++){
                  echo      '<div>
                  
                          <!-- The Modal -->
                          <div id="myModal'.$i.'" class="modal">
                          
                            <!-- Modal content -->
                            <div class="modal-content">
                              <span class="close">&times;</span>
                  
    <form style="padding-left: 30px;" method="POST" action="produtos.php" enctype="multipart/form-data">
    <input type="hidden" value ="'.$idproduto[$i].'" name="idp">

                    <label for="nomep"> Nome do produto (coloque até 15 caractéres)</label>
                    <input class="input-padrão" name="nomep"type="text" id="nomep" required minlength="1" maxlength="15" value="'.$nome[$i].'">
    
                    <label for="preco"> Preço (use XX,XX)</label>
                    <input class="input-padrão" name="preco" type="text" id="preco" required value="'.$preco[$i].' ">
                    
                    <br>
    
                    <input class="enviar" name="submite" type="submit" value="Editar">
                </form>
                            </div>
                          </div>
                          ';}
                    echo '<script>';
                          for($i=0;$i<count($idproduto);$i++){
                            echo'
                            btn['.$i.'].onclick = function() {
                    modal['.$i.'].style.display = "block";
                  }';}
                  for($i=0;$i<count($idproduto);$i++){
                echo'
                  span['.$i.'].onclick = function() {
                    modal['.$i.'].style.display = "none";
                  }';}
              }
            }
          ?></script>
          <script>    
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script></div> </ul>
        </main>
  
    <footer>
    <img src="img/logo1.png" alt="logo da barbearia" >
    <p class="copyright">&copy; Copyright Barbearia - 2019</p>
</footer>
    </body>

</html>
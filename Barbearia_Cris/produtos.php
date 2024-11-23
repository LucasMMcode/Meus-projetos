<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"
?>

        
        <main class="areaprodutos">
        <?php
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
            
            
            }
            }
            if (isset($_SESSION['submit'])) {
              if($_SESSION['categoria']==1){
                echo '<input class="enviar"type="submit" name="submit">';
                echo '</form>';
                for($i=0;$i<count($idproduto);$i++){
                  echo      '<div>
                  <style>
                #myModal'.$i.'{
                display: none; /* Hidden by default */}
                /* The Modal (background) */
                .modal'.$i.' {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    padding-top: 50px; /* Location of the box */
                    left: 0;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                  } 
                  
                  /* Modal Content */
                  .modal-content'.$i.' {
                    background-color: #fefefe;
                    margin: auto;
                    padding: 1%;
                    border: 1px solid #888;
                    width: 80%;
                  }
                  
                  /* The Close Button */
                  .close'.$i.' {
                    color: #aaaaaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                  }
                  
                  .close'.$i.':hover,
                  .close'.$i.':focus {
                    color: #000;
                    text-decoration: none;
                    cursor: pointer;
                  }</style>
                  
                          <!-- The Modal -->
                          <div id="myModal'.$i.'" class="modal'.$i.'">
                          
                            <!-- Modal content -->
                            <div class="modal-content'.$i.'">
                              <span class="close'.$i.'">&times;</span>
                              <p>Some text in the Modal..</p>
                            </div>
                          </div>
                          <script>
                  // Get the modal
                  var modal'.$i.' = document.getElementById("myModal'.$i.'");
                
                  // Get the <span> element that closes the modal
                  var span'.$i.' = document.getElementsByClassName("close'.$i.'")
                
                  var btn'.$i.' = document.getElementById("myBtn'.$i.'");
                
                  btn'.$i.'.onclick = function() {
                    modal'.$i.'.style.display = "block";
                  }['.$i.'];
                
                
                  // When the user clicks on <span> (x), close the modal
                  span'.$i.'.onclick = function() {
                    modal'.$i.'.style.display = "none";
                  }
                
                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event'.$i.') {
                    if (event'.$i.'.target == modal'.$i.') {
                      modal'.$i.'.style.display = "none";
                    }
                  }
                  </script></div>';}
              }
            }
          ?><?php   
          
  ?></ul>
        </main>
  
    <footer>
    <img src="img/logo1.png" alt="logo da barbearia" >
    <p class="copyright">&copy; Copyright Barbearia - 2019</p>
</footer>
    </body>

</html>
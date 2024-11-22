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
                            echo "<form action='produtos.php' method='GET'>";}else{}}
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
                $existe[] = $row["Existe"];
                }
            }
            
            if (isset($_POST['submit'])) {
              for($i=0;$i<count($idproduto);$i++){
                $postid[$i+1] = $_GET[$i+1];
              }
            }

            
            for($i=0;$i<count($idproduto);$i++){
              if (!isset($_POST['submit'])){ if($_GET[$i+1])echo $_GET[$i+1];}else{echo '0';}
              echo '<a><li><h2>'.' '.$nome[$i].' </h2>
              <img style="object-fit: cover;" src="img/'.$caminhoimg[$i].'"width=250px height=250px>
              <p class="Descrição"> '.$nome[$i].'</p>
              <p class="Preço"> '.$preco[$i].' </p>';

              if (isset($_SESSION['submit'])) {
                if($_SESSION['categoria']==1){
                  echo'<input type="checkbox" name="'.$idproduto[$i].'" value="1"'; if($existe[$i]){echo 'checked >';}else{echo'>';}
                }
              }
              echo'</li></a>';
            }
            if (isset($_SESSION['submit'])) {
              if($_SESSION['categoria']==1){
                echo '<input type="submit">';
                echo "</form>";
              }
            }
          ?></ul>
        </main>

        <footer>
            <img src="img/logo1.png" alt="logo da barbearia" >
            <p class="copyright">&copy; Copyright Barbearia - 2019</p>
        </footer>
    </body>
</html>
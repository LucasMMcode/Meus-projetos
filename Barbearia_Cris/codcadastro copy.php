
<?php
session_start();
    include('conexao.php');
        if (isset($_POST['submit'])) {
            
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];

        $sql2 = "select idusuario from usuario ";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {	
                $idcliente = $row["idusuario"];
            }
        }

        $sql = "INSERT INTO cliente (idusuario, Nome,Sobrenome,Telefone) VALUES (\"$idcliente++\",\"$nome\",\"$sobrenome\",\"$telefone\");";
        $result = mysqli_query($conn, $sql);
            
                echo'<script>
                window.location.href = "login.php";
                alert("cadastro feito pode logar")
                </script>';
            
        }


    
    ?>

<?php
session_start();
    include('conexao.php');
        if (isset($_POST['submit'])) {
            
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];


        $sql2 = "SELECT idusuario FROM usuario ORDER BY `idusuario`; ";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {	
                $idusuario = $row["idusuario"];
            }
        }

        if(isset($_POST['categoria'])){
        $categoria = $_POST['categoria'];}   
        else{$categoria = 'cliente';}

        if($categoria == 'cliente'){$idcategoria = 2;} else if($categoria == 'funcionarios'){$idcategoria=1;}

        $sql = "INSERT INTO $categoria (idusuario, Nome,Sobrenome,Telefone) VALUES (\"$idusuario\",\"$nome\",\"$sobrenome\",\"$telefone\");";
        $result = mysqli_query($conn, $sql);
        
        $sql = "UPDATE `usuario` SET `idcategoria`='$idcategoria' where `idusuario` = '$idusuario'";
        $result = mysqli_query($conn, $sql);
                echo'<script>
                '.'alert("cadastro feito pode logar")
                '.'window.location.href = "login.php";'
                .'</script>';
        }
    ?>
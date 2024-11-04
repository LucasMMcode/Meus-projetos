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
                echo $idusuario  . "<br>";
            }
        }
        if(isset($_POST['categoria'])){
        echo $_POST['categoria']  . "<br>";
        $categoria = $_POST['categoria'];
        echo $categoria  . "<br>";;}   
        else{$categoria = 'cliente';}

        if($categoria == 'cliente'){$idcategoria = 2;} else if($categoria == 'funcionarios'){$idcategoria=1;}

        $sql = "INSERT INTO $categoria (idusuario, Nome,Sobrenome,Telefone) VALUES (\"$idusuario\",\"$nome\",\"$sobrenome\",\"$telefone\");";
        $result = mysqli_query($conn, $sql);
        echo $sql  . "<br>";
        $sql = "UPDATE `usuario` SET `idcategoria`='$idcategoria' where `idusuario` = '$idusuario'";
        echo $sql  . "<br>";
        $result = mysqli_query($conn, $sql);
                echo'<script>
                '.'alert("cadastro feito pode logar")
                '.'window.location.href = "login.php";'
                .'</script>';
        }
    ?>

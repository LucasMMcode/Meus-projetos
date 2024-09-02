
<?php
session_start();
    include('conexao.php');
    if (isset($_POST['submit'])) {
        
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhac = $_POST['senhac'];

        $sql2 = "select * from usuario where email = '$email'";
        $result2 = mysqli_query($conn, $sql2);  
        $row = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result2);  
        $sql = "INSERT INTO usuario VALUES (\"$nome\",\"$sobrenome\",\"$telefone\",\"$email\",\"$senha\",2);";
        $result = mysqli_query($conn, $sql);  
        if($senha==$senhac){
            if($count==1){
            echo  '<script>
            window.location.href = "cadastro.php";
            alert("cadastro failed. usuario existente!!")
            </script>';
            }
            else{
                echo'<script>
                window.location.href = "login.php";
                alert("cadastro feito pode logar")
                </script>';
            }
        }

        else{
            echo'<script>
            window.location.href = "cadastro.php";
            alert("senha e senha repedida são diferentes")
            </script>';
        }

    }
    ?>

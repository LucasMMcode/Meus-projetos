
<?php
session_start();
    include('conexao.php');
        if (isset($_POST['submit'])) {
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhac = $_POST['senhac'];

        $sql2 = "select * from usuario where email = '$email'";
        $result2 = mysqli_query($conn, $sql2);  
        $row = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result2);
        if($senha==$senhac){
            if($count==1){
            echo  '<script>
            window.location.href = "cadastro.php";
            alert("cadastro failed. usuario existente!!")
            </script>';
            }
            else{
                $sql = "INSERT INTO usuario (Email,Senha,idcategoria) VALUES (\"$email\",\"$senha\",1);";
                $result = mysqli_query($conn, $sql);
                echo'<script>
                window.location.href = "cadastro copy.php";
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

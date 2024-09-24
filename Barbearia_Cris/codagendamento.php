
<?php
session_start();
    include('conexao.php');    
        if (isset($_POST['submit'])) {
            
        $email = $_POST['email'];
        $mensagem = $_POST['mensagen'];
        $dia = $_POST['dia'];
        $horario = $_POST['horario'];

        $sql2 = "select idusuario from usuario ";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {	
                $idusuario = $row["idusuario"];
            }
        }

        $sql = "INSERT INTO agendamentos (idusuario, email, descrição, dia, hora) VALUES (\"$idusuario\",\"$email\",\"$mensagem\",\"$dia\",\"$horario\");";
        $result = mysqli_query($conn, $sql);
            
                echo'<script>
                '.'window.location.href = "index.php";'.
                'alert("cadastro feito pode logar")
                </script>';
            
        }
    ?>


<?php
session_start();
    include('conexao.php');    
        if (isset($_POST['submit'])) {
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagen'];
            $telefone = $_POST['telefone'];
            $dia = $_POST['dia'];
            $horario = $_POST['horario'];

            $sql2 = "SELECT idusuario FROM usuario WHERE Email= '$email'";
            echo $sql2;
            $result2 = mysqli_query($conn, $sql2);
            if ($result2->num_rows > 0) {
                while ($row = $result2->fetch_assoc()) {
                    $idusuario = $row["idusuario"];
                    echo $idusuario ."<br>";
                }
            }

            $sql3 = "SELECT dia, hora from agendamentos where hora ='$horario' and dia = '$dia'";
            echo $horario."<br>" . $dia."<br>".$nome."<br>".$email."<br>".$mensagem."<br>".$telefone;
            $result3 = mysqli_query($conn, $sql3);
            $row = mysqli_fetch_array($result3, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result3);
            if($count==0){
                
                $sql = "INSERT INTO agendamentos (telefone,idusuario, nome, descrição, dia, hora) VALUES (\"$telefone\",\"$idusuario\",\"$nome\",\"$mensagem\",\"$dia\",\"$horario\");";
                $result = mysqli_query($conn, $sql);
                    
                echo'<script>
                '.'window.location.href = "index.php";'.
                'alert("agendamento feito")
                </script>';
                    
            }
            else {
                echo'<script>
                '.'window.location.href = "agendamento.php";'.
                'alert("horário indisponivel")
                </script>';
            }
        }
    ?>

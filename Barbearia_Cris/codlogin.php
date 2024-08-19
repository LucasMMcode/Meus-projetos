
<?php
    include('conexao.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = "select * from login where email = '$email' and senha = '$senha'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        

        if($count == 1 ){
            
            if($senha=="lucas01lo"){header("Location: index1.php");}
            else{header("Location: index2.php");}
        }
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid email or password! ")
                    </script>';
        }
        
    }

    ?>

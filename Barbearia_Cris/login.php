<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <title>Login - Barbearia</title>

        <link rel='stylesheet' href='Reset_css.css'>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body class="login">
        <div class="page">
<?php
session_start();
    include('conexao.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT usuario.Email, usuario.Senha, usuario.Classeid, 
        cliente.Nome, cliente.Sobrenome, cliente.Telefone 
        FROM usuario JOIN cliente ON usuario.idcliente = cliente.idcliente WHERE Email = '$email';";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

        if($count == 1 ){
        }
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid email or password! ")
                    </script>';
        }
    }
        ?>

        <form method="POST" class="formLogin" action="index.php" onsubmit="return isvalid()">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">email:</label>
            <input type="text" name="email" placeholder="Digite seu email" autofocus="true" required/>
            <label for="senha">Senha</label>
            <input type="password" name="senha"placeholder="Digite seua senha" required/>
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Entrar" class="btn" name = "submit"/>
            <a href="cadastro.php">Não possui conta?</a>
        </form>
        </div>
<?php
include "includes/rodape.inc";
?>
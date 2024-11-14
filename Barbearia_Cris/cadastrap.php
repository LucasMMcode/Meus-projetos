<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"
?>

<main>
<form style="padding-left: 30px;" method="POST" action="codagendamento.php">
                <label for="nomesobrenome"> Nome do produto </label>
                <input class="input-padrão" name="nome"type="text" id="nomesobrenome" value="<?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'];?>"required>

                <label for="email"> Preço </label>
                <input class="input-padrão" name="email" type="email" id="email" required value="<?php echo $_SESSION['email']?>">
                
                <label for="telefone"> Imagem </label>
                <input class="input-padrão" name="telefone" type="tel" id="telefone" required value="<?php echo $_SESSION['telefone']?>"> 
                
                <label for="mensagem"> Nome do arquivo </label>
                <input class="input-padrão" name="mensagen" id="mensagem" required> </input>

                <br>

                <input class="enviar" name="submit" type="submit" value="Agendar">
            </form>

        </main>

<?php
include "includes/rodape.inc"
?>
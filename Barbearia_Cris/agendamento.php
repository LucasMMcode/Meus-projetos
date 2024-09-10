<?php
session_start();
include "includes/cabecalho.inc"
?>

<main>
        <form style="padding-left: 30px;" action="codagendamento.php">
                <label for="nomesobrenome"> Nome e sobrenome </label>
                <input class="input-padrão" type="text" id="nomesobrenome" value="<?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'];?>"required>

                <label for="email"> Email </label>
                <input class="input-padrão" type="email" id="email" required value="<?php echo $_SESSION['email']?>">
                
                <label for="telefone"> Telefone </label>
                <input class="input-padrão" type="tel" id="telefone" required value="<?php echo $_SESSION['telefone']?>"> 

                <label for="mensagem"> Mensagem </label>
                <textarea class="input-padrão" cols="70" rows="10" id="mensagem" required> </textarea>

                <fieldset>
                    <legend> Que dia e horário prefere ser atendido </legend>
                    <input type="date" id="dia"> <input type="time" id="hora">
                </fieldset>
    
                <br>

                <input class="enviar" type="submit" value="Agendar">
            </form>

        </main>

<?php
include "includes/rodape.inc"
?>
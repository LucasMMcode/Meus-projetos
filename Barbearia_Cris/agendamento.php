<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc";

$escolha=0;
    $escolha=$_GET["escolha"];

?>


<main>
        <form style="padding-left: 30px;" method="POST" action="codagendamento.php">
                <label for="nomesobrenome"> Nome e sobrenome </label>
                <input class="input-padrão" name="nome"type="text" id="nomesobrenome" value="<?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'];?>"required>

                <label for="email"> Email </label>
                <input class="input-padrão" name="email" type="email" id="email" required value="<?php echo $_SESSION['email']?>">
                
                <label for="telefone"> Telefone </label>
                <input class="input-padrão" name="telefone" type="tel" id="telefone" required value="<?php echo $_SESSION['telefone']?>"> 
                
                <label for="mensagem"> Tipo de corte </label>
                <select name="corte" id="corte">
                    <option value="Cabelo" <?php if($escolha == 0){echo 'selected';}?>>Cabelo R$30,00</option>
                    <option value="Barba" <?php if($escolha == 1){echo 'selected';}?>>Barba R$20,00</option>
                    <option value="Barba+Cabelo" <?php if($escolha == 2){echo 'selected';}?>>Barba+Cabelo R$50,00</option>
                </select>
                <br>
                <br>

                <fieldset>
                    <legend> Que dia e horário prefere ser atendido </legend>
                    <input type="date" name="dia" id="dia">
                    <script>
                    const picker = document.getElementById('dia');
                    picker.addEventListener('input', function(e){
                    var day = new Date(this.value).getUTCDay();
                    if([7,0 ].includes(day)){
                        e.preventDefault();
                        this.value = '';
                        alert('Não trabalhamos em domingo');
                    }
                    });</script>
                    <select id="horario" name="horario">
                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">18:30</option>
                        <option value="19:30">18:30</option>
                        <option value="20:00">18:30</option>
                        <option value="20:30">18:30</option>
                        <option value="21:00">18:30</option>
                        <option value="21:30">18:30</option>
                        <option value="22:00">18:30</option>
                    </select>
                    
                </fieldset>
    
                <br>

                <input class="enviar" name="submit" type="submit" value="Agendar">
            </form>

        </main>

<?php
include "includes/rodape.inc"
?>
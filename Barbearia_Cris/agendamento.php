<?php
include "cabecalho.inc"
?>

<main>
        <form style="padding-left: 30px;">
                <label for="nomesobrenome"> Nome e sobrenome </label>
                <input class="input-padrão" type="text" id="nomesobrenome" required>

                <label for="email"> Email </label>
                <input class="input-padrão" type="email" id="email" required placeholder="seuemail@dominio.com">
                
                <label for="telefone"> Telefone </label>
                <input class="input-padrão" type="tel" id="telefone" required placeholder="(XX) XXXXX-XXXX"> 

                <label for="mensagem"> Mensagem </label>
                <textarea class="input-padrão" cols="70" rows="10" id="mensagem" required> </textarea>

                <fieldset>
                    <legend> Que dia e horário prefere ser atendido </legend>
                    <input type="date">
                    <select>
                        <option> 8:00 </option>
                        <option> 8:30 </option>
                        <option> 9:00 </option>                        
                    </select>
                </fieldset>
    
                <br>

                <input class="enviar" type="submit" value="Agendar">
            </form>

        </main>

<?php
include "rodape.inc"
?>
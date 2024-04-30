<?php
include "includes/cabecalho.inc"
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
                    <legend> Como Prefere nosso contato? </legend>
                    <label class="radio" for="radio-email"> <input class="radio" type="radio" name="contato" value="email" id="radio-email" > Email </label>

                    <label class="radio" for="radio-telefone"> <input class="radio" type="radio" name="contato" value="email" id="radio-telefone"> Telefone </label>

                    <label class="radio" for="radio-whatsapp"> <input class="radio" type="radio" name="contato" value="email" id="radio-whatsapp" checked >Whatsapp </label>
                </fieldset>

                <fieldset>
                    <legend> Qual Horário prefere ser atendido </legend>
                    <select>
                        <option> Manhã </option>
                        <option> Tarde </option>
                        <option> Noite </option>   
                    </select>
                </fieldset>

                <label class="checkbox"> <input type="checkbox" checked> Gostaria de receber nossas novidades por email? </label>

                <input class="enviar" type="submit" value="Enviar Formulário">
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Horrários</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Segunda</td>
                        <td> 8h ~ 20h </td>
                    </tr>
                    <tr>
                        <td>Quarta</td>
                        <td> 8h ~ 20h </td>
                    </tr>
                    <tr>
                        <td>Sexta</td>
                        <td> 8h ~ 20h </td>
                </tr>
                </tbody>
            </table>

        </main>

<?php
include "includes/rodape.inc"
?>
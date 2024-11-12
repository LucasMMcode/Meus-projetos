<?php
session_start();
include "conexa.php";
include "includes/cabecalho.inc"
?>

<main>
        <form style="padding-left: 30px;" method="POST" action="codagendamento.php">
                <label for="nomesobrenome"> Nome e sobrenome </label>
                <input class="input-padrão" name="nome"type="text" id="nomesobrenome" value="<?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'];?>"required>

                <label for="email"> Email </label>
                <input class="input-padrão" name="email" type="email" id="email" required value="<?php echo $_SESSION['email']?>">
                
                <label for="telefone"> Telefone </label>
                <input class="input-padrão" name="telefone" type="tel" id="telefone" required value="<?php echo $_SESSION['telefone']?>"> 
                
                <label for="mensagem"> Mensagem </label>
                <input class="input-padrão" name="mensagen" id="mensagem" required> </input>

                <fieldset>
                    <legend> Que dia e horário prefere ser atendido </legend>
                    <input type="date" name="dia" id="dia">
                    <!--
                    <select id="hora" name="hora">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                    </select>

                    <select id="minutos" name="minutos">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                    </select>-->
                
                    <select id="horario" name="horario">
                        <option value="07:00">07:00</option>
                        <option value="07:30">07:30</option>
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
                    </select>
                <br> <!--<table style="border: none;">
        <tr>
            <th colspan="6" class="thhorario">Horário</th>
            </tr>
                    <?php/*
        $horarioInicial = strtotime('08:00');
        $horarioFinal = strtotime('19:00');
        $intervalo = 30 * 60; // Intervalo de 30 minutos em segundos

        $horarioAtual = $horarioInicial;
        $colunas= 1;
        
        while ($horarioAtual <= $horarioFinal) {
            $horario = date('H:i', $horarioAtual);
            if($colunas%8 == 0){ echo "<tr>";}
            echo '<td class ="tdhorario"><button type="submit" id= "#slecthora" name="horario" value="' . $horario . '">' . $horario . '</button> </td> ' ;
            $horarioAtual += $intervalo;
            if($colunas%7 == 0){ $colunas= 0;echo "</tr>";}
            $colunas++;
        }
        */?>
        </table>-->
                </fieldset>
    
                <br>

                <input class="enviar" name="submit" type="submit" value="Agendar">
            </form>

        </main>

<?php
include "includes/rodape.inc"
?>
<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"
?>

<main>
    <form style="padding-left: 30px;" method="POST" action="upload.php" enctype="multipart/form-data">
                    <label for="nomep"> Nome do produto (coloque até 15 caractéres)</label>
                    <input class="input-padrão" name="nomep"type="text" id="nomep" required minlength="1" maxlength="15">
    
                    <label for="preco"> Preço (use XX.XX)</label>
                    <input class="input-padrão" name="preco" type="text" id="preco" required>
                    
                    <label for="imagem"> Imagem (use arquivos .png)</label>
                    <input class="input-padrão" name="imagem" type="file" id="imagem" required> 
                    
                    <label for="nomearquivo"> Nome do arquivo (use o nome a cima)</label>
                    <input class="input-padrão" name="nomearquivo" id="nomearquivo" required placeholder="produto.png"> </input>
    
                    <br>
    
                    <input class="enviar" name="submit" type="submit" value="Cadastrar">
                </form>
    
            </main>

<?php
include "includes/rodape.inc"
?>
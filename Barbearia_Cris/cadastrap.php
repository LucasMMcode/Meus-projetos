<?php
session_start();
include "conexao.php";
include "includes/cabecalho.inc"
?>

<main>
    <form style="padding-left: 30px;" method="POST" action="upload.php" enctype="multipart/form-data">
                    <label for="nomep"> Nome do produto </label>
                    <input class="input-padrão" name="nomep"type="text" id="nomep" required>
    
                    <label for="preco"> Preço </label>
                    <input class="input-padrão" name="preco" type="text" id="preco" required placeholder="XX.XX">
                    
                    <label for="imagem"> Imagem (use arquivos .png)</label>
                    <input class="input-padrão" name="imagem" type="file" id="imagem" required> 
                    
                    <label for="nomearquivo"> Nome do arquivo </label>
                    <input class="input-padrão" name="nomearquivo" id="nomearquivo" required placeholder="produto.png"> </input>
    
                    <br>
    
                    <input class="enviar" name="submit" type="submit" value="Cadastrar">
                </form>
    
            </main>

<?php
include "includes/rodape.inc"
?>
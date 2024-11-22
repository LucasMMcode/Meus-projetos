<?php
	session_start();
include "conexao.php";
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sql = "SELECT * FROM usuario  WHERE Email = '$email' and Senha ='$senha';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	$_SESSION['categoria'] = $row["idcategoria"];
		}
	}
	if ($_SESSION['categoria']==1){
		$_SESSION['categoria']="funcionarios";}else{
		$_SESSION['categoria']="cliente";}
	$categoria=$_SESSION['categoria'];
	$sql2 = "SELECT * FROM $categoria JOIN usuario ON $categoria.idusuario = usuario.idusuario WHERE usuario.Email = '$email';";
	//echo $sql2 . "<br>";
	$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while ($row = $result2->fetch_assoc()) {	
			$_SESSION['submit'] = $_POST['submit'];
			$_SESSION['nome'] = $row["nome"];
			$_SESSION['sobrenome'] =$row["sobrenome"];
			$_SESSION['telefone'] =$row["telefone"];
			$_SESSION['email'] =$row["email"];
			$_SESSION['senha'] =$row["senha"];
			$_SESSION['categoria'] = $row["idcategoria"];

			//echo "Nome: " . $_SESSION["nome"].
			//"<br> Sobrenome: " . $_SESSION["sobrenome"]. 
			//"<br> Telefone: " . $_SESSION["telefone"]. 
			//"<br> Email: " . $_SESSION["email"]. 
			//"<br> Senha: " . $_SESSION["senha"].
			//"<br> idcategoria: " . $row["idcategoria"]."<br> <br>";
			
			}
			//$_SESSION['usuario'] = 'joao123';
			//echo $_SESSION['usuario'];
		}
        else{  
            echo  '<script>
                        '.'window.location.href = "login.php";'
                        .'alert("Login failed. Invalid email or password! ")'
                    .'</script>';
        }
		if($_SESSION['categoria'] == "1"){
			print "
			<script>
				alert('Olá adm')
			</script>";
		}else{
			print "
			<script>
				alert('Olá usuario')
			</script>";}
}
include "includes/cabecalho.inc";
?>
	<main>
		<section class="principal">
			<h2 class="titulo-principal">Biografia</h2>

			<img class="utensilios" src="img/utensilios.png" alt="Utensilios de um Barbeiro">

			<p class="biografia"> A Barbearia Barba de Arão nasceu em 2024 unindo a vontade de empreender e de proporcionar uma experiência excelente ao cliente no que se refere a beleza masculina. Trabalhamos com corte de cabelo e barba e venda de produtos especializados para o cuidado masculino. 
			</p>
		</section>

		<section class="mapa">
			<h3 class="titulo-principal"> Nosso Estabelecimento </h3>
			<p> Nosso estabelecimento está localizado no coração da cidade. </p>

			<div class="mapa-conteudo">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.5618453622797!2d-51.18870842516966!3d-29.17758129162079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ea3890d808821%3A0x9e14bac434df289e!2sBarbearia%20Barba%20de%20Ar%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1724411895669!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>

		<section class="beneficios">
			<h3 class="titulo-principal">Beneficios</h3>

			<div class="conteudo-beneficios">
				<ul class="lista-beneficios">
					<li class="itens">Atendimento Especializado </li>
					<li class="itens">Espaço diferenciado</li>
					<li class="itens">Localização</li>
					<li class="itens">Profissionais Qualificados</li>
					<li class="itens">Pontualidade</li>
					<li class="itens">Limpeza</li>
					<li class="itens">Venda de produtos</li>
				</ul><img class="imagem-beneficios" src="img/ambiente.png"><br><br><br><br><br>
				<div class="igwrapper"><style>.igwrapper{background:#fff;position:relative}.igwrapper iframe{border:0;position:relative;z-index:2}.igwrapper a{color:rgba(0,0,0,0);position:absolute;left:0;top:0;z-index:0}</style><a href="https://fnfmods.net/fnf-test/">FNF Test</a><script async src="https://www.instagram.com/embed.js"></script><blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/barbaarao?igsh=MWtnMnllYnhpcjlwMg==" data-instgrm-version="14" style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; min-width:326px; padding:0; width:99.375%;width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"></blockquote></div>
			</div>
	</main>

<?php
include "includes/rodape.inc"
?>
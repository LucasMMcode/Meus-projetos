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
	$_SESSION['classe'] = $row["classeid"];
		}
	}
	if ($_SESSION['classe']==1){
		$_SESSION['categoria']="funcionarios";}else{
		$_SESSION['categoria'] ="cliente";}

	$sql2 = "SELECT * FROM $_SESSION['categoria'] JOIN usuario ON $_SESSION['categoria'].idusuario = usuario.idusuario WHERE usuario.Email = '$email';";
	$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
			while ($row = $result2->fetch_assoc()) {	
			//echo "Nome: " . $row["Nome"].
			//"<br> Sobrenome: " . $row["Sobrenome"]. 
			//"<br> Telefone: " . $row["Telefone"]. 
			//"<br> Email: " . $row["Email"]. 
			//"<br> Senha: " . $row["Senha"].
			//"<br> Classeid: " . $row["Classeid"]."<br> <br>";
			
			$_SESSION['submit'] = $_POST['submit'];
			$_SESSION['nome'] = $row["nome"];
			$_SESSION['sobrenome'] =$row["sobrenome"];
			$_SESSION['telefone'] =$row["telefone"];
			$_SESSION['email'] =$row["email"];
			$_SESSION['senha'] =$row["senha"];
			}
			//$_SESSION['usuario'] = 'joao123';
			//echo $_SESSION['usuario'];
		}
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid email or password! ")
                    </script>';
        }
		if($_SESSION['classe'] == "1"){
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
			<h2 class="titulo-principal">Sobre a Barbearia</h2>

			<img class="utensilios" src="img/utensilios.jpg" alt="Utensilios de um Barbeiro">

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor, sem vitae semper tincidunt, metus augue tincidunt ipsum, et feugiat felis libero molestie felis. Vestibulum sodales dui in turpis volutpat, eget consectetur velit semper. Cras consectetur at lacus vitae facilisis. Ut at magna lobortis, venenatis metus euismod, tempor dui. Nam congue ornare ullamcorper. Nunc tincidunt gravida fermentum. Duis blandit tempor ipsum nec tempus. Sed imperdiet facilisis bibendum. Vestibulum viverra eget odio id dictum. Pellentesque id sem feugiat, tristique nunc eu, molestie tortor. Nunc convallis est sit amet odio sagittis pretium sit amet ut arcu. Nam ullamcorper posuere arcu, sit amet congue augue. Mauris volutpat, augue tempus egestas ultrices, purus augue aliquam augue, eget auctor est mauris ut justo.</p>
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
					<li class="itens"> Atendimento aos Clientes </li>
					<li class="itens">Espaço diferenciado</li>
					<li class="itens">Localização</li>
					<li class="itens">Profissionais Qualificados</li>
					<li class="itens">Pontualida</li>
					<li class="itens">Limpeza</li>
				</ul><img class="imagem-beneficios" src="img/Beneficios.jpg">
			</div>
	</main>

<?php
include "includes/rodape.inc"
?>
<?php
include "includes/cabecalho.inc";
include "codlogin.php";
include "codcadastro.php";
echo $GLOBALS['senha']
?>
	<main>
		<section class="principal">
			<h2 class="titulo-principal">Sobre a Barbearia</h2>

			<img class="utensilios" src="img/utensilios.jpg" alt="Utensilios de um Barbeiro">

			<p>Localizada no coração da cidade a <strong>Barbearia</strong> traz para o mercado o que há de melhor para o seu cabelo e barba. Fundada em 2019, a Barbearia já é destaque na cidade e conquista novos clientes a cada dia.</p>

			<p id= "missao"><em>Nossa missão é: <strong>"Proporcionar auto-estima e qualidade de vida aos clientes"</strong>.</em></p>
		
			<p>Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.</p>
		</section>

		<section class="mapa">
			<h3 class="titulo-principal"> Nosso Estabelecimento </h3>
			<p> Nosso estabelecimento está localizado no coração da cidade. </p>

			<div class="mapa-conteudo">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4078407285383!2d-46.63721302479413!3d-23.589701978780393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bd9bb943bf5%3A0x6f642995c970f0fe!2scaelum%20alura!5e0!3m2!1spt-BR!2sbr!4v1685393515376!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
			<div class="video"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/wcVVXUV0YUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>	
	</main>

<?php
include "includes/rodape.inc"
?>
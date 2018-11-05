<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<title>Planos Basico - Anual</title>
	<meta name="generator" content="www.mbmedia.com.br">
	<meta name="description" content="Torne a sua ideais em Digital, com a MBMedia">
	<meta name="keywords" content="desenvolvimento de sites, publicidade e propaganda, gerenciamento de redes sociais, desenvolvimento de site maringá, criação de sites, criar sites, gerenciamento de instagram, gerenciamento de facebook, google adword, facebook ads, site, tecnicas de seo">

	<!-- Open Graph Data -->
	<!-- <meta property="og:type" content="article">
	<meta property="og:title" content="MBMedia - Seu negócio no mundo digital">
	<meta property="og:site_name" content="MBMedia">
	<meta property="og:url" content="https://www.mbmedia.com.br">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:image" content="https://www.mbmedia.com.br/_img/responsivo/rp05.jpg">
	<meta property="og:description" content="Criação de Site e gerenciamenoto de redes sociais com técnicas modernas nos mecanismo de busca">
	<meta property="article:author" content="https://www.facebook.com/MB-Media-287942775393073/?modal=admin_todo_tours">
	<meta property="article:publisher" content="https://www.facebook.com/MB-Media-287942775393073/?modal=admin_todo_tour"> -->


	<link rel="stylesheet" href="../_css/estilo.css">
	<link rel="stylesheet" href="../_css/media-screen.css">
	<link rel="stylesheet" href="../_css/libs/animate.css">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="../_css/materialize.css">   
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<link rel="icon" href="../_img/logo/logo.jpg">
	<meta name="author" content="AllMedia">

</head>
<body>
	<?php include_once('../_includes/navbar-form.php') ?>


		<section id="planos-basico-form" class="bloco">
			

			<div class="row">
				<div class="formulario col s12 m6 offset-m3">
					<div class="col s12 center">
						<h3>Preencha esse formulário que lhe enviaremos o(s) valor(es) conforme solicitado.</h3>						
						<h6>Entraremos em contato o mais rápido possível</h6>
					</div>
					<form method="POST" action="planos-form.php">
						<div>
							<div class="col s12 input-field">
								<input type="text" name="nome" id="name" required class=" white-text" style="letter-spacing: 2px">
								<label for="name">Nome</label>
							</div>

							<div class="col s12 input-field">
								<input type="text" name="empresa" id="empresa" class=" white-text" style="letter-spacing: 2px">
								<label for="name">Empresa</label>
							</div>

							<div class="col s12 input-field">
								<input type="email" name="email" id="e-mail" required class=" white-text" style="letter-spacing: 2px">
								<label for="e-mail">E-mail</label>
							</div>
							<div class="col s12 input-field">
								<input type="text" name="fone" id="phone" required class=" white-text" style="letter-spacing: 2px">
								<label for="phone">Celular</label>
							</div>

							<div class="col s12 input-field">
								<input type="text" name="cidade" id="city" required class=" white-text" style="letter-spacing: 2px">
								<label for="city">Cidade - Estado</label>
							</div>

							<div class="col s12 input-field">
								<input type="text" name="atividade" id="ativ" required class=" white-text" style="letter-spacing: 2px">
								<label for="ativ">Qual o seu ramo de atividade?</label>
							</div>

							<div class="col s12">
							    <p class="white-text">Qual orçamento gostaria receber?</p>
							    <p>
							      <input class="with-gap" name="orcamento" type="radio" id="mes" value="mensal" disabled="disabled" />
							      <label for="mes">Mensal</label><br>
							    	
							      <input class="with-gap" value="trimestral" name="orcamento" type="radio" id="trimestral" disabled="disabled"/>
							      <label for="trimestral">Trimestral</label><br>
							    
							      <input class="with-gap" value="semestral" name="orcamento" type="radio" id="semestral"  disabled="disabled"/>
							      <label for="semestral">Semestral</label><br>

							      <input class="with-gap" value="anual" name="orcamento" type="radio" id="anual"  checked="checked"/>
							      <label for="anual">Anual</label><br>

							    </p>						    
							</div>

							<div class="col s12">
								<p class="white-text">Qual os serviços você deseja?</p>
								 <p>
							      <input type="checkbox" value="Site" name="servicos0" id="site" class="filled-in" checked="checked"/>
							      <label for="site">Site</label><br/>
							 
							      <input type="checkbox" value="Facebook" name="servicos1" id="facebook" class="filled-in" checked="checked"/>
							      <label for="facebook">Facebook</label><br/>
							  
							      <input type="checkbox" value="Instagram" name="servicos2" id="instagram" class="filled-in" checked="checked"/>
							      <label for="instagram">Instagram</label><br/>
							  
							      <input type="checkbox" value="Google-Ads" name="servicos3" id="adword" class="filled-in" disabled="disabled" />
							      <label for="adword">Google Adword</label><br/>
							  
							      <input type="checkbox" name="servicos5" id="comercial" class="filled-in" value="Comercial-Instutucional" disabled="disabled" />

							      <label for="comercial">Comercial Institucional</label>
							    </p>
							</div>

							<div class="input-field col s12" style="margin-top: 55px;">
					            <textarea id="mensagem-form" class="materialize-textarea white-text" name="mensagem" style="letter-spacing: 2px; margin-top: 20px;" placeholder="Olguma outra observação a acrescentar?"></textarea>
					            <label for="mensagem-form">Mensagem</label>
					         </div>

					         <input type="submit" name="enviar" value="Enviar Solicitação" class="btn botao col s12">


							


						</div>
					</form>
				</div>
			</div> 
		</section>
		<?php include_once ('../_includes/footer-form.php') ?>
	
	<script src="../_js/jquery.js"></script>
	<script src="../_js/materialize.js"></script>
	<script src="../_js/wow.js"></script>
	<script src="../_js/jquery.mask.js"></script> 
	<script src="../_js/swiper.min.js"></script> 
	<script>
		$(document).ready(function() {

			$('#phone').mask('(00) 00000-0000');
		});
	</script>
</body>
</html>
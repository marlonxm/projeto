<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<title>MBMedia</title>
	<meta name="generator" content="www.mbmedia.com.br">
	<meta name="description" content="Torne a sua ideais em Digital, com a MBMedia">
	<meta name="keywords" content="desenvolvimento de sites, publicidade e propaganda, gerenciamento de redes sociais, desenvolvimento de site maringá, criação de sites, criar sites, gerenciamento de instagram, gerenciamento de facebook, google adword, facebook ads, site, tecnicas de seo">

	<!-- Open Graph Data -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="MBMedia - Seu negócio no mundo digital">
	<meta property="og:site_name" content="MBMedia">
	<meta property="og:url" content="https://www.mbmedia.com.br">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:image" content="https://www.mbmedia.com.br/_img/responsivo/rp05.jpg">
	<meta property="og:description" content="Criação de Site e gerenciamenoto de redes sociais com técnicas modernas nos mecanismo de busca">
	<meta property="article:author" content="https://www.facebook.com/MB-Media-287942775393073/?modal=admin_todo_tours">
	<meta property="article:publisher" content="https://www.facebook.com/MB-Media-287942775393073/?modal=admin_todo_tour">





	<link rel="stylesheet" href="_css/estilo.css">
	<link rel="stylesheet" href="_css/media-screen.css">
	<link rel="stylesheet" href="_css/libs/animate.css">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="_css/materialize.css">   
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<link rel="icon" href="_img/logo/logo.jpg">
	<meta name="author" content="AllMedia">

	
	<!-- Facebook Pixel Code -->
	<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '249437885750381');
		  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=249437885750381&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	
</head>
<body>
	
	<?php 

		include_once('_includes/navbar.php');

		include_once('_includes/banner.php');

		include_once('_includes/sobre.php');

		include_once('_includes/servicos.php');

		include_once('_includes/planos1.php'); 

		include_once('_includes/contato.php'); 

		include_once('_includes/newsletter.php');

		include_once('_includes/footer.php') ;

	?>
	
	<script src="_js/jquery.js"></script>
	<script src="_js/materialize.js"></script>
	<script src="_js/wow.js"></script>
	<script src="_js/jquery.mask.js"></script> 
	<script src="_js/swiper.min.js"></script> 
	<script>
       	new WOW().init()
	</script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
				closeOnClick: true
			});
			

			$(window).on("scroll", function(){
					if($(window).scrollTop() > 400 ) {
						$('nav').addClass('nav-color');
					} else {
						$('nav').removeClass('nav-color');
					}
				});
			// MENU MOBILI
    		$('select').material_select();
		    $('.scrollspy').scrollSpy({
		    	scrollOffset: 0
		    });
			// MODAL
			$(".modal").modal();
    		$('ul.tabs').tabs('select_tab', 'tab_id');
			$('ul.tabs').tabs();
			$('.collapsible').collapsible();

			$('#cel').mask('(00) 00000-0000');
			$('#tel').mask('(00) 0000-0000');
			$('#whatsnew').mask('(00) 00000-0000');
			$('#phone').mask('(00) 00000-0000');
		});

	</script>

	<?php 
		// Colar na index.php o bloco abaixo 
		if(isset($_GET['status'])): 
			if($_GET['status'] == "sucesso"): 
			echo "<script>Materialize.toast('Enviado com sucesso!', 4000);</script>"; 
				else: 
			echo "<script>Materialize.toast('Erro ao enviar', 4000);</script>"; 
			endif; 
		endif; 
	?>
</body>
</html>
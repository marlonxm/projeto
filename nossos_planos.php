<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<title>MBMedia</title>
	<meta name="generator" content="www.mbmedia.com.br">
	<meta name="description" content="Torne a sua ideais em Digital, com a MBMedia">
	<meta name="keywords" content="desenvolvimento de sites, publicidade e propaganda, gerenciamento de redes sociais, desenvolvimento de site maringá, Criação de Web Sites, criar sites, gerenciamento de instagram, gerenciamento de facebook, google adword, facebook ads, site, tecnicas de seo">

	<!-- Open Graph Data -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="MBMedia - Seu negócio no mundo digital">
	<meta property="og:site_name" content="MBMedia">
	<meta property="og:url" content="https://www.mbmedia.com.br">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:image" content="https://www.mbmedia.com.br/_img/responsivo/rp05.jpg">
	<meta property="og:description" content="Criação de Web Site e gerenciamenoto de redes sociais com técnicas modernas nos mecanismo de busca">
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
	
	<header>


		<div class="navbar-fixed navegacao">
			<nav class="z-depth-0">
			    <div class="nav-wrapper">

			      <h1 class="text-logo">Nome da Empresa - Faça sua marca aparecer para o mundo.</h1>
			      <a href="#" class="brand-logo center hide-on-small-only"><img src="_img/logo/11.png" alt="logo-marca"></a>


			      <a href="#" class="brand-logo left hide-on-med-and-up"><img src="_img/logo/11.png" alt="logo-marca"></a>


			      <a href="#" data-activates="mobile-demo" class="button-collapse btn-menu right"><i class="material-icons">menu</i></a>
              

			      <ul class="left hide-on-med-and-down">
			        <li><a href="index.php#banner" class="text-list">home</a></li>
			        <li><a href="index.php#sobre" class="text-list">sobre</a></li>
			        <li><a href="index.php#servicos" class="text-list">serviços</a></li>
			      </ul>


			       <ul class="right hide-on-med-and-down">
			        <li><a href="index.php#planos" class="text-list">planos</a></li>
			        <li><a href="index.php#newsletter" class="text-list">newsletter</a></li>
			        <li><a href="index.php#contato" class="text-list">contato</a></li>
			      </ul> 
			    </div>
			  </nav>
		</div>		



		<ul class="side-nav" id="mobile-demo">  
      			<img src="_img/logo/11.png" width="33%" style="margin-left: 34%;">

	          <li ><a href="index.php#banner">     		home</a></li>
	          <li ><a href="index.php#sobre">          	sobre</a></li>
	          <li ><a href="index.php#servicos">    	serviços</a></li>    
	          <li ><a href="index.php#planos">    		planos</a></li>
	          <li ><a href="index.php#contato">       	contatos</a></li> 
		</ul> 

</header>

	<section id="nossos-planos" class="bloco">

		<div class="row">


		    <div class="col s12 center">
		      <ul class="tabs center">
		        <li class="tab col s4"><a href="#test1">Básico</a></li>
		        <li class="tab col s4"><a href="#test2">Standart</a></li>
		        <li class="tab col s4"><a href="#test3">Plus</a></li>
		      </ul>
		    </div>

		    <?php include_once('planos/basico.php') ?>
		    <?php include_once('planos/standart.php') ?>
		    <?php include_once('planos/plus.php') ?>
    

 		 </div>


	</section>
			
	

	<?php
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
					if($(window).scrollTop() > 0 ) {
						$('nav').addClass('nav-color');
					} else {
						$('nav').removeClass('nav-color');
					}
				});
			// MENU MOBILI
    		$('ul.tabs').tabs('select_tab', 'tab_id');
			$('ul.tabs').tabs();
			$('.collapsible').collapsible();
		});

	</script>
</body>
</html>
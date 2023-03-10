<!doctype html>
<?php

	define('BASE', 'https://localhost/website-zeus');

	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] === 443 ? "https://" : "http://";

	$page = "{$protocol}{$_SERVER['HTTP_HOST']}".parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$page = str_replace(BASE.'/', '', $page);

	if($page === 'home'){
		
		header('Location: '.BASE);
		die();
		
	}
	if($page === '') $page = 'home';
	if(!file_exists('pages/'.$page.'.php')) $page = 'not-found';

?>
<html>
<head>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, user-scalable=0.5">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="<?=BASE?>/css/style.css?v=<?=time()?>">
<link rel="stylesheet" href="<?=BASE?>/slider/slider.css?v=<?=time()?>">	
<title>Zeus</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?=BASE?>/slider/slider.js?v=<?=time()?>"></script>	
<script src="js/script.js?v=<?=time()?>"></script>
</head>

<body>
	
	<header id="mainHeader">
	
		<div class="topBar accentBg">
		
			<div class="content row">
			
				<div class="row">
				
					<a href="tel:+5516987654321" target="_blank"><i><?php include 'assets/svgs/wpp.svg' ?></i> +55 (16) 98765-4321</a>
					<span>|</span>
					<a href="mailto:contato@zeusagro.com" target="_blank"><i><?php include 'assets/svgs/email.svg' ?></i> contato@zeusagro.com</a>
				
				</div>
				<div class="row">
				
					<b>Acompanhe-nos:</b>
					<a href="#" target="_blank"><?php include 'assets/svgs/facebook.svg' ?></a>
					<a href="#" target="_blank"><?php include 'assets/svgs/instagram.svg' ?></a>
					<a href="#" target="_blank"><?php include 'assets/svgs/linkedin.svg' ?></a>
				
				</div>
			
			</div>
		
		</div>
		<div class="content row">
		
			<a href="<?=BASE?>"><?php include 'assets/svgs/logo.svg' ?></a>
			<nav class="row">
			
				<a href="<?=BASE?>" class="active">HOME</a>
				<a href="<?php if($page !== 'home') echo BASE ?>#centered">SOLUÇÕES</a>
				<a href="<?php if($page !== 'home') echo BASE ?>#video">PORQUE A ZEUS?</a>
				<a href="<?php if($page !== 'home') echo BASE ?>#howTo">SOBRE</a>
				<a href="<?php if($page !== 'home') echo BASE ?>#depositions">CLIENTES</a>
				<a href="<?=BASE?>/blog">BLOG</a>
				<section class="dropdownWrapper">
				
					<span>FALE CONOSCO</span>
					<nav class="dropdown column">
					
						<a href="<?=BASE?>/contato">Entre em contato</a>
						<a href="<?=BASE?>/trabalhe-conosco">Trabalhe conosco</a>
					
					</nav>
				
				</section>
				<span>|</span>
				<a href="#">LOGIN</a>
			
			</nav>
		
		</div>
		
	</header>
	<main id="<?=$page?>">
	
		<?php include 'pages/'.$page.'.php'; ?>
	
	</main>
	<footer id="mainFooter">
	
		<div class="content accentBg column">
		
			<div class="row">
			
				<div class="logo"><?php include 'assets/svgs/logo.svg' ?></div>
				<div class="column">
				
					<address>Av. Princesa Isabel, 275 <br> Uberlândia, MG</address>
					<a href="mailto:zeus@zeus.com.br">zeus@zeus.com.br</a>
				
				</div>
				<div class="column">
				
					<p>Acompanhe nossas <br> redes sociais:</p>
					<div class="row">
						
						<a href="#" target="_blank"><?php include 'assets/svgs/instagram.svg' ?></a>
						<a href="#" target="_blank"><?php include 'assets/svgs/youtube.svg' ?></a>
						<a href="#" target="_blank"><?php include 'assets/svgs/linkedin.svg' ?></a>
						<a href="#" target="_blank"><?php include 'assets/svgs/facebook.svg' ?></a>
					
					</div>

					
				</div>
			
			</div>
			<div class="copy">© ZEUS AGROTECH 2023</div>
			
		</div>
	
	</footer>
	
</body>
</html>
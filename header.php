<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0, width=device-width">
	<link rel="stylesheet" href="<?php 	echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php 	echo get_stylesheet_directory_uri(); ?>/css/jquery.fullpage.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php 	echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php 	echo get_stylesheet_directory_uri(); ?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php 	echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css">
	<link rel="icon" href="<?php 	echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php 	echo get_stylesheet_directory_uri(); ?>/css/transito.css">
	<title>Tránsito de Yarumal</title>
	<?php 	wp_head(); ?>
</head>

<body>

<!--Apertura del div contenedor de todo el sitio (padre)-->
			
<div class="container-fluid padre-sitio pl-0 pr-0" id="fullpage">



<div class="section">

	<header class="container">
		<!--Este div encierrra el encabezado (header)-->
	

	
			<!--Contenedor de imagenes y titulo de cabecera-->
	
			<div class="row d-sm-flex justify-content-sm-center d-lg-flex justify-content-lg-between">
	
				<!--logotipo principal-->
				
				<div class="img-logo col-12 col-sm-4 col-md-3 col-lg-2 d-flex align-items-center justify-content-center mt-2 pb-1 pt-1 justify-content-lg-end mr-lg-0 pr-lg-2">
	
					<a class="text-center p-0 m-0" href="/">
						<img src="<?php 	echo get_stylesheet_directory_uri(); ?>/images/logotipo.png" alt="logotipo">
					</a>
	
				</div>

				<div class="col-12 d-block d-sm-none titulo-movil mb-3 mt-2">
					<h1><?php bloginfo( name ) ?></h1>
				</div>
		
				<!--Titulo del sitio-->
		
				<div class="nombre-sitio col-12 col-sm-8 d-none col-md-8 col-lg-7 d-sm-flex	align-items-center ml-lg-0 pl-lg-0">
	
					<h1 class="" style="padding-bottom: 3px;">
						<?php bloginfo( name ); ?>
					</h1>
	
				</div>
		
				<!--Este div contiene las imagenes secundarias del header (logo alcaldia, escudo)-->
		
				<div class="ml-md-0 contenedor-img col-12 d-sm-none d-lg-flex col-lg-3 d-flex align-items-center pl-lg-0 pr-lg-0">
		
					<div class="img-escudo col-4 ml-lg-0 mr-lg-1 pl-lg-0 pr-lg-1 text-lg-right">
						<img src="<?php 	echo get_stylesheet_directory_uri(); ?>/images/Escudo_yarumal.png" alt="Escudo_yarumal">
					</div>
		
					<div class="img-alcaldia col-8 ml-lg-0 mr-lg-0 pl-lg-0 pr-lg-0">
						<img src="https://www.yarumal.gov.co/alcaldia/templates/alcaldia/img/logo-alcaldia.png" alt="logo-alcaldia">
					</div>
		
				</div>
	
			</div>
	

	
	</header>		

 
<?php 	

include "banner.php"; 
 ?>



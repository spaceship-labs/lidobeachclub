<!DOCTYPE html>
<html ng-app="project" scroll lang="es">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
  <link rel="stylesheet" href="/css/icons.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/owl.transitions.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/owl.theme.css">
	<link rel="stylesheet" href="/css/owl.transitions.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="icon" type="image/ico" href="/favicon.png">

    <title>Lido</title>

</head>



<body>

<div class="header" ng-controller="scrollCTL">

	<div class="cont max-widht-extend">
		<a ng-click="scrollTo('home',$event)" class="logo">
			<img src="/img/Nuevo-logo-lido.png" alt="">
		</a>
		<div class="info"><span>INFO</span> <a href="">+52(984)-803-1090</a> | <a>info@lidobeachclub.mx</a></div>
		<!--<div class="lenguaje">
			<a href="">ING</a><a href="">|</a><a href="">ESP</a>
		</div>-->
		<div class="redes">
			<a href="https://www.instagram.com/lidobeachclub/" target="_blank"><i class="icon-fb"></i></a>
			<a href="https://www.facebook.com/lidobeachclub" target="_blank"><i class="icon-insta"></i></a>
			<a href="https://www.tripadvisor.com/" target="_blank"><i class="icon-tripadvisor"></i></a>
		</div>
		<div class="open-menu">
			<i class="icon-noun_menu_1393450"></i>
		</div>
	</div>
	<div class="cont max-widht-extend">
		<div class="links">
			<a ng-click="scrollTo('home',$event)" class="link"><span>home</span></a>
			<a ng-click="scrollTo('menu',$event)" class="link"><span>menú</span></a>
			<a ng-click="scrollTo('galeria',$event)" class="link"><span>galería</span></a>
			<a ng-click="scrollTo('bodas',$event)" class="link"><span>bodas y eventos</span></a>
			<a ng-click="scrollTo('masajes',$event)" class="link"><span>masajes</span></a>
			<!-- <a download href="/img/menu.pdf" class="link"><span>descargar menú</span></a> -->
			<a href="https://hotelcolibribeach.com/es/inicio/" target="_blank" class="colibri">
				<img src="/img/Colibri-logo-blanco.png" alt="">
			</a>
			<a ng-click="scrollTo('contacto',$event)" class="contacto">
				<span>contacto</span>
			</a>
		</div>
	</div>

</div>

<div class="cerrar-menu"></div>

<div class="global">

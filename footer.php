</div><!--global-->
	
<?php include 'sections/contact.php'; ?>
<?php include 'sections/map.php'; ?>

<div class="footer">
	<div class="max-widht4">
		
		<div class="cont  wow fadeInLeft">
			<img src="/img/Nuevo-logo-lido.png" alt="">
		</div>
		<div class="cont  wow fadeInRight" ng-controller="scrollCTL">
			<a ng-click="scrollTo('home',$event)" class="link"><span>home</span></a>
			<a ng-click="scrollTo('menu',$event)" class="link"><span>menú</span></a>
			<a ng-click="scrollTo('galeria',$event)" class="link"><span>galería</span></a>
			<a ng-click="scrollTo('bodas',$event)" class="link"><span>bodas y eventos</span></a>
			<a ng-click="scrollTo('masajes',$event)" class="link"><span>masajes</span></a>
			<!-- <a download href="/img/menu.pdf" class="link"><span>descargar menú</span></a> -->
			<a ng-click="scrollTo('contacto',$event)" class="link"><span>contacto</span></a>
			<div class="redes">
			
				<a href="https://www.facebook.com/lidobeachclub" target="_blank"><i class="icon-fb"></i></a>
				<a href="https://www.instagram.com/lidobeachclub/" target="_blank"><i class="icon-insta"></i></a>
				<a href="https://www.tripadvisor.com/" target="_blank"><i class="icon-tripadvisor"></i></a>
			</div>
		</div>

	</div>
	<div class="copy">
		<p>©2020 Lido Beach Club</p>
	</div>
</div>

</body>

<?php

if (isset($_POST['nombre'])) {

	/*
	echo $_POST['servicio'].'<br>';
	echo $_POST['nombre'].'<br>';
	echo $_POST['telefono'].'<br>';
	echo $_POST['correo'].'<br>';
	echo $_POST['movil'].'<br>';
	echo $_POST['empresa'].'<br>';
	echo $_POST['mensaje'].'<br>';
	*/
			$contact_email = 'info@hotelcolibribeach.mx';
			$nombre = $_POST["nombre"];
			$telefono = $_POST["telefono"];
			$correo = $_POST["correo"];
			$mensaje = $_POST["mensaje"];


			// Varios destinatarios
			$para  = $contact_email . ', '; // atención a la coma

			// título
			$título = 'Lido Beach';

			// mensaje
			$mensaje = '
			<html>
			<head>
			  <title>Mensaje</title>
			</head>
			<body>
			  	Nombre: '.$nombre.' <br>
				Télefono: '.$telefono.' <br>
				Correo: '.$correo.' <br>
				Mensaje : '.$mensaje.' <br>
			</body>
			</html>
			';

			// Para enviar un correo HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= 'To: Lido Beach <'.$contact_email.'>' . "\r\n";
			$system_email = "info@lidobeachclub.mx";
			$cabeceras .= 'From: Prisaire <'.$system_email.'>' . "\r\n";

			// Enviarlo
			mail($para, $título, $mensaje, $cabeceras);
			echo "<div class='title-men'><i class='icon-cross cerrar-mensaje'></i><h1>Mensaje enviado</h1></div>";
		

}

?>

<?php include("scripts.php") ?>

</html>
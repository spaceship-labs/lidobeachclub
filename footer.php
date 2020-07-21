</div><!--global-->
	
<div id="contacto" class="contacto">
		
	<div class="cont">
		<i class="icon-noun_contact_3106476"></i>
	</div>

	<form method="POST">
			
		<h1 class="title wow fadeInUp">
			contacto
		</h1>

		<p class=" wow fadeInUp"><strong>Escribenos para hacer una reserva o si tienes alguna pregunta </strong></p>
		<p class=" wow fadeInUp" style="font-weight: 600">Playa entre calle 10 y 12, Colonia Centro CP 77710 Playa del Carmen, México interior Hotel Colibri Bach</p>
		<p>INFO <a href="">+52(984)-803-1090</a> | <a>info@lidobeachclub.mx</a></p>

		<div class="max-widht3">
				
			<label class=" wow fadeInLeft">nombre:</label>
			<input type="text" class="input  wow fadeInUp" name="nombre">
			<label class=" wow fadeInLeft">teléfono:</label>
			<input type="text" class="input  wow fadeInUp" name="telefono">
			<label class=" wow fadeInLeft">correo:</label>
			<input type="text" class="input  wow fadeInUp" name="correo">
			<label class=" wow fadeInLeft">mensaje:</label>
			<textarea name="mensaje" id="" cols="30" rows="10" class="input"  wow fadeInUp></textarea>

			<button class="button">
				<span>ENVIAR</span>
			</button>

		</div>

		<img class="image-rigt" src="<?=get_bloginfo('template_directory')?>/img/texturalido3.png" alt="">

	</form>

</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d238618.50389195108!2d-87.0992335!3d20.855352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e4330401cff5f%3A0xf5280c76ac47f216!2sLido%20Bar%20Restaurant!5e0!3m2!1sen!2smx!4v1593029863914!5m2!1sen!2smx" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<div class="footer">
	<div class="max-widht4">
		
		<div class="cont  wow fadeInLeft">
			<img src="<?=get_bloginfo('template_directory')?>/img/logo-lido-verde.png" alt="">
		</div>
		<div class="cont  wow fadeInRight" ng-controller="scrollCTL">
			<a ng-click="scrollTo('home',$event)" class="link"><span>home</span></a>
			<a ng-click="scrollTo('menu',$event)" class="link"><span>menú</span></a>
			<a ng-click="scrollTo('galeria',$event)" class="link"><span>galería</span></a>
			<a ng-click="scrollTo('bodas',$event)" class="link"><span>bodas y eventos</span></a>
			<a ng-click="scrollTo('masajes',$event)" class="link"><span>masajes</span></a>
			<a download href="<?=get_bloginfo('template_directory')?>/img/menu.pdf" class="link"><span>descargar menú</span></a>
			<a ng-click="scrollTo('contacto',$event)" class="link"><span>contacto</span></a>
			<div class="redes">
				<a href="https://www.instagram.com/lidobeachclub/" target="_blank"><i class="icon-fb"></i></a>
				<a href="https://www.facebook.com/lidobeachclub" target="_blank"><i class="icon-insta"></i></a>
				<a href="https://www.tripadvisor.com/" target="_blank"><i class="icon-noun_Owl_1443698"></i></a>
			</div>
		</div>

	</div>
	<div class="copy">
		<p>©2020 Lido Beach Club</p>
	</div>
</div>

</body>

<?php

if ($_POST['nombre']) {

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
			$system_email = "info@hotelcolibribeach.mx";
			$cabeceras .= 'From: Prisaire <'.$system_email.'>' . "\r\n";

			// Enviarlo
			mail($para, $título, $mensaje, $cabeceras);
			echo "<div class='title-men'><i class='icon-cross cerrar-mensaje'></i><h1>Mensaje enviado</h1></div>";
		

}

?>

<?php include("scripts.php") ?>

</html>
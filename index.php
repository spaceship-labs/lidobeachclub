<?php
/* 
Template Name: Home
*/ 
?>
<?php get_header();?>

<div>

	
	<div id="home" class="home">
		
		<div class="cont max-widht1" ng-controller="scrollCTL">
			
			<div class="box">
				<a href="">desayuno -</a>
				<a href="">lunch -</a>
				<a href="">cócteles -</a>
				<a href="">música en vivo -</a>
				<a href="">masaje</a>
			</div>

			<img src="<?=get_bloginfo('template_directory')?>/img/logo-lido-blanco.png" alt="">

			<a ng-click="scrollTo('pointer',$event)" class="scroll-down">
				<i class="icon-noun_scroll-down_2925967"></i>
			</a>

			<div class="servicios">
				
				<div class="conter wow fadeInLeft" data-wow-delay=".5s">
					<i class="icon-noun_Music_1932413"></i>
					<h2>música en vivo</h2>
					<p>Miércoles y fines de semana</p>
				</div>
				<div class="conter wow fadeInUp" data-wow-delay=".5s">
					<i class="icon-noun_Grill_305301"></i>
					<h2>parrillada</h2>
					<p>Sábados y Domingos</p>
				</div>
				<div class="conter wow fadeInRight" data-wow-delay=".5s">
					<i class="icon-noun_Pet-friendly_2677524"></i>
					<h2>pet friendly</h2>
					<p>Aceptamos mascotas con correa en el area de mesas</p>
				</div>

			</div>

		</div>

	</div>

	<div class="slider-home">
		
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoBeachClub_AleksOl_0053.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoBeachClub_AleksOl_0071.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoBeachClub_AleksOl_0081.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoBeachClub_AleksOl_0120.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoBeachClub_HotelColibri_075.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_012.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_049.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_073.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_082.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LidoMAYO17_071.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/Lido_Nov18_009.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/Lido_Nov18_014.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/Lido_Nov18_050.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/Lido_Nov18_111.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/Lido_Nov18_113.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LIDO_SBAC_008.JPG" alt="">
		</div>
		<div class="item">
			<img src="<?=get_bloginfo('template_directory')?>/img/LIDO_SBAC_061.JPG" alt="">
		</div>

	</div>

	<div id="pointer"></div>

	<div id="menu" class="cont-menu">
		
		
		<img class="menu wow fadeInUp" src="<?=get_bloginfo('template_directory')?>/img/header-menu-lido.png" alt="">
		

		<a download href="<?=get_bloginfo('template_directory')?>/img/menu.pdf" class="button wow fadeInUp">
			<span>descargar menú</span>
		</a>

		<!--<img src="<?=get_bloginfo('template_directory')?>/img/lido-textura.png" alt="" class="lido-textura">-->

	</div>

	<div id="galeria" class="galeria max-widht1">
		
		<h1 class="title">
			galería
		</h1>


		<div class="instagram max-widht1" layout="row" ng-controller="instagramCTRL">
			<a ng-repeat="x in images|limitTo:9" href="{{x.link}}" class="image  wow fadeInLeft" target="_blank" style="background: url('{{x.images.low_resolution.url}}');">
				<div class="instagram-hover" layout="row" layout-align="center center">
					<i class="icon-insta"></i>
				</div>
				
			</a>
		</div>

		<div class="button wow fadeInUp">
			<span class="black">ver más</span>
		</div>

	</div>

	<div id="bodas" class="eventos">
		
		<h1 class="title wow fadeInUp">
			bodas y eventos
		</h1>
		
		<p class=" wow fadeInLeft"><strong>En Lido Beach Club nos encantan los festejos por lo que somos expertos en organizar cualquier tipo de festividad.</strong></p>

		<p class=" wow fadeInRight">Pide tu cotización personalizada y envía un correo a info@lidobeachlub.mx. 
		No olvides mencionarnos la fecha, el horario, el tipo de evento, el número de invitados y tus peticiones especiales. </p>

		<div class="slider-eventos max-widht1">
		
			<div class="item">
				<img src="<?=get_bloginfo('template_directory')?>/img/EventosLido_001.JPG" alt="">
			</div>

			<div class="item">
				<img src="<?=get_bloginfo('template_directory')?>/img/EventosLido_004.JPG" alt="">
			</div>

			<div class="item">
				<img src="<?=get_bloginfo('template_directory')?>/img/EventosLido_007.JPG" alt="">
			</div>

			<div class="item">
				<img src="<?=get_bloginfo('template_directory')?>/img/EventosLido_008.JPG" alt="">
			</div>

			<div class="item">
				<img src="<?=get_bloginfo('template_directory')?>/img/EventosLido_014.JPG" alt="">
			</div>

		</div>

		<img src="<?=get_bloginfo('template_directory')?>/img/textura-lido2.png" alt="" class="lido-textura wow fadeInUp">

	</div>

	<div id="masajes" class="masajes">
		
		<h1 class="title wow fadeInUp">
			masaje
		</h1>

		<p class=" wow fadeInLeft"><strong>El masaje relaja, sana y rejuvenece. Aprovecha que en Lido Beach Club tenemos a los mejores masajistas de Playa del Carmen y consiéntete con un masaje a la orilla de la playa</strong></p>

		<p class=" wow fadeInRight">Para reservaciones favor de mandar un correo a info@hotelcolibribeach.mx o contactarnos por teléfono al 9848031090. </p>

		<i class="icon-noun_massage_1938858"></i>

	</div>

	<div class="info-masajes">

		<div class="fotos-masajes max-widht-extend">
			<img src="<?=get_bloginfo('template_directory')?>/img/IMG_0805.jpg" alt="">
			<!--
			<div class="box-slide">
				<div class="row prev"><i class="icon-izq-flecha"></i></div>
				<div class="slider-masajes">
			
					<div class="item">
						<img src="<?=get_bloginfo('template_directory')?>/img/IMG_0805.jpg" alt="">
					</div>

					<div class="item">
						<img src="<?=get_bloginfo('template_directory')?>/img/IMG_0805.jpg" alt="">
					</div>

					<div class="item">
						<img src="<?=get_bloginfo('template_directory')?>/img/IMG_0805.jpg" alt="">
					</div>

					<div class="item">
						<img src="<?=get_bloginfo('template_directory')?>/img/IMG_0805.jpg" alt="">
					</div>

					<div class="item">
						<img src="<?=get_bloginfo('template_directory')?>/img/IMG_0805.jpg" alt="">
					</div>

				</div>
				<div class="row next"><i class="icon-der-flecha"></i></div>
			</div>
			-->
		</div>
		
		<div class="max-widht">
			<h1 class="title2  wow fadeInUp">
				tipos de masaje
			</h1>

			<div class="cont">
				
				<div class="box wow fadeInLeft">
					<h2>|Masaje relajante</h2>
					<p>Sirve para eliminar estrés y tensión. Se aplica en todo el cuerpo con énfasis en la espalda y en la parte baja del cuello de forma lenta, con movimientos pausados y largos, pero con una presión firme y progresiva. Su objetivo es descargar el estrés y la tensión acumulada.</p>
				</div>

				<div class="box wow fadeInLeft">
					<h2>|Masaje Sueco </h2>
					<p>Comienzan con golpes superficiales en el sentido de la circulación de la sangre para calentar los músculos para luego pasar a los tejidos más profundos. Tiene como objetivo la relajación y la eliminación de toxinas.</p>
				</div>

				<div class="box wow fadeInLeft">
					<h2>|Masaje Terapéutico </h2>
					<p>El masaje se centra en la corrección del problema que está causando el dolor del paciente y puede ser usado para tratar varios tipos de trastornos músculo-esqueléticos y sus condiciones.</p>
				</div>


			</div>
			<div class="cont">
				
				<div class="box wow fadeInRight">
					<h2>|Masaje de Tejido Profundo</h2>
					<p>Incluye movimientos lentos y fricción, implica una intensidad más profunda que el masaje normal. Sirve para eliminar las toxinas del cuerpo.</p>
				</div>

				<div class="box wow fadeInRight">
					<h2>|Sobre el sistema muscular</h2>
					<p>Genera un efecto estimulante y aumenta la contractibilidad muscular. Descontracturante, facilita su relajación y elastificante de tejidos.</p>
				</div>

				<div class="box wow fadeInRight">
					<h2>|Sobre el sistema nervioso </h2>
					<p>Acción calmante y analgésica mediante actos reflejos que afectan al sistema nervioso central o por liberación de endorfinas.</p>
				</div>

				<div class="box wow fadeInRight">
					<h2>|Sobre el sistema circulatorio </h2>
					<p>Aumento del flujo arterial, da lugar al enriquecimiento de oxígeno y sustancias nutricias. Favorece el retorno sanguíneo cuando se aplica en sentido centrípeto.</p>
				</div>


			</div>

		</div>

	</div>

	<div class="reviews">
		
		<a href="https://www.tripadvisor.com/" class=" wow fadeInUp" target="_blank">
			<img src="<?=get_bloginfo('template_directory')?>/img/logo-tripadvison.jpg" alt="">
		</a>

		<div class="slide-reviews max-widht1">

			<div class="review item">
				
				<div class="img">
					<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_012.JPG" alt="">
					<p>Marina M</p>
					<p>4 reviews</p>
				</div>
				<div class="info">
					<div class="calificacion">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<p>Reviwed March 22,2020</p>
					</div>
					<h1>Amazing food, incredible service</h1>
					<p class="mensaje">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</div>

			</div>

			<div class="review item">
				
				<div class="img">
					<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_012.JPG" alt="">
					<p>Jon M</p>
					<p>9 reviews</p>
				</div>
				<div class="info">
					<div class="calificacion">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<p>Reviwed March 22,2020</p>
					</div>
					<h1>Cool food, incredible service</h1>
					<p class="mensaje">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</div>

			</div>

			<div class="review item">
				
				<div class="img">
					<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_012.JPG" alt="">
					<p>Marina M</p>
					<p>4 reviews</p>
				</div>
				<div class="info">
					<div class="calificacion">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<p>Reviwed March 22,2020</p>
					</div>
					<h1>Amazing food, incredible service</h1>
					<p class="mensaje">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</div>

			</div>

			<div class="review item">
				
				<div class="img">
					<img src="<?=get_bloginfo('template_directory')?>/img/LidoEnero19_Art_012.JPG" alt="">
					<p>Sonia M</p>
					<p>1 reviews</p>
				</div>
				<div class="info">
					<div class="calificacion">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<p>Reviwed March 22,2020</p>
					</div>
					<h1>Amazing Bed, incredible service</h1>
					<p class="mensaje">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</div>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?> 
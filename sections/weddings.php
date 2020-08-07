<?php 
  $photos = array(
    '/img/EventosLido_001.JPG',
    '/img/EventosLido_004.JPG',
    '/img/EventosLido_007.JPG',
    '/img/EventosLido_008.JPG',
    '/img/EventosLido_014.JPG',
    '/img/8Aniversario_LIDO_004.JPG',
    '/img/8Aniversario_LIDO_012.JPG',
  )
?>
<div id="bodas" class="eventos">
  <h1 class="title wow fadeInUp">
    bodas y eventos
  </h1>
  <p class=" wow fadeInLeft">
    <strong>
      En Lido Beach Club nos encantan los festejos por lo que somos expertos en organizar cualquier tipo de festividad.
    </strong>
  </p>
  <p class=" wow fadeInRight">
    Pide tu cotización personalizada y envía un correo a info@lidobeachlub.mx. <br/>
    No olvides mencionarnos la fecha, el horario, el tipo de evento, el número de invitados y tus peticiones especiales.
  </p>
  <div class="slider-eventos max-widht1">
    <?php foreach($photos as $p){ ?>
    <div class="item">
      <img src="<?php echo $p; ?>" alt="">
    </div>
    <?php } ?>
  </div>
  <!--<img src="/img/textura-lido2.png" alt="" class="lido-textura wow fadeInUp">-->
</div>
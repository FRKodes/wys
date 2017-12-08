<div class="inner-section-banner <?php echo str_replace('/', '', $_SERVER['REQUEST_URI']); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
	
</div>

<div class="container">
	<div class="row">
		<h1 class="col-xs-12 rajdhani">
			BOLSA DE TRABAJO<br>
			<span>ESTAMOS EN CONSTANTE BÚSQUEDA DE TALENTO</span>
		</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<h2 class="col-xs-12 home-title rajdhani mayus bold">CUÉNTANOS QUIEN ERES</h2>

		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<?php the_content(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

			<form method="POST" action="/sendmail" class="footer-contact-form" id="contactForm">
				<div class="form-group"><input type="text" name="nombre" placeholder="*Nombre" class="form-control" data-validate="required"></div>
				<div class="form-group"><input type="text" name="email" placeholder="*Email" class="form-control" data-validate="required|email"></div>
				<div class="form-group"><input type="text" name="telefono" placeholder="Teléfono" class="form-control"></div>
				<div class="form-group"><input type="text" name="area_experiencia" placeholder="*Área experiencia ej. Administración, ventas, etc." class="form-control"></div>
				<div class="form-group"><input type="file" name="cv" placeholder="CV" class="form-control file"></div>
				<div class="form-group">
					<button class="btn btn-primary back-red">Enviar</button>
					<p class="text-danger">Los campos con * son obligatorios</p>
				</div>
				<div class="sent_mail_alert text-center white">
					<b>¡GRACIAS!</b><br><br>
					Tus datos se han enviado con éxito, en breve nos pondremos en contacto contigo.
				</div>
			</form>

	</div>
</div>

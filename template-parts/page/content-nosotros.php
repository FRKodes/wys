<div class="inner-section-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
	
</div>

<div class="container">
	<div class="row">
		<h1 class="col-xs-12 rajdhani">
			MÁS QUE METROS CUADRADOS SUMINISTRADOS <br>
			<span>VEMOS ESPACIOS QUE SE DISFRUTAN</span>
		</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<h2 class="col-xs-12 home-title rajdhani mayus bold">Quiénes somos</h2>

		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<?php the_content(); ?>
		</div>

		<h2 class="col-xs-12 home-title rajdhani mayus bold">Manifiesto</h2>
		
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="video-container">
				<?php the_field('video_manifiesto'); ?>
			</div>
		</div>

		<h2 class="col-xs-12 home-title rajdhani mayus bold">Historia</h2>

		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<?php the_field('historia') ?>
		</div>
	</div>
</div>

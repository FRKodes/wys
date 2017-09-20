<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage WOOD AND STONE
 * @since 1.0
 * @version 1.2
 */
?>
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 social-block">
						<div class="subscribe-form">
							<p class="footer-title">Sucríbete</p>
							<form action="post">
								<div class="form-group">
									<input type="text" placeholder="Tu correo electrónico" class="form-control">
								</div>
								<div class="form-group">
									<button class="btn btn-primary">Recibir Newsletter</button>
								</div>
							</form>
						</div>

						<div class="social-links-container">
							<p class="footer-title">Síguenos</p>
							<ul class="social-links">
								<li><a target="_blank" href="https://www.facebook.com/WoodAndStoneMX" class="icon-facebook"></a></li>
								<li><a target="_blank" href="https://www.instagram.com/woodandstonemx" class="icon-instagram"></a></li>
								<li><a target="_blank" href="https://www.pinterest.com/" class="icon-pinterest"></a></li>
								<li><a target="_blank" href="https://www.youtube.com" class="icon-youtube"></a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
						<p class="footer-title">Contáctanos</p>
						<form action="POST" class="footer-contact-form">
							<div class="form-group"><input type="text" name="nombre" placeholder="Nombre" class="form-control"></div>
							<div class="form-group"><input type="text" name="email" placeholder="Email" class="form-control"></div>
							<div class="form-group"><input type="text" name="telefono" placeholder="Teléfono" class="form-control"></div>
							<div class="form-group">
								<textarea class="form-control" name="comentario" id="comentario" placeholder="Comentario" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-primary">Enviar</button>
							</div>
						</form>
					</div>

					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-0 footer-aux-menu">
						<div class="footer-menu-block"><?php wp_nav_menu( array('theme_location' => 'footer', 'menu_class' => 'footer-menu') ); ?></div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="disclaimer">Desarrollado por <a href="http://www.blueterrier.mx" target="_blank" title="Desarrollado por blue Terrier Studio"><strong>Blue Terrier</strong></a></div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"></script>
</body>
</html>
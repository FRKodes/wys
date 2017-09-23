<?php
/**
 * The template for displaying product detail
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WOOD AND STONE
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="inner-section-banner" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"></div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 detail-texture-container">
						<div class="detail-texture" style="background-image: url(<?php the_field('textura'); ?>)"></div>
					</div>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<?php the_content() ?>
							<?php the_excerpt() ?>
						</div>
				</div>	
			</div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="rajdhani detail-product-title">título producto</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quas vero debitis nisi error enim, lorem ipsum dolor.</p>
					</div>
				</div>

				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold">Piedra natural</h2>
					<div class="col-xs-12 text-center origin">
						<span class="icon-material"></span> <span class="text">Mármol</span>
						<span class="icon-location"></span> <span class="text">Italia</span>
					</div>
					<div class="col-xs-12 text-center used-in">
						<span class="icon-bath"></span>
						<span class="icon-sala"></span>
						<span class="icon-exterior"></span>
						<span class="icon-comedor"></span>
					</div>
				</div>

				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold">Descripción</h2>
					<div class="col-xs-12">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti omnis commodi quidem eveniet officiis quod ipsa recusandae, enim nihil consectetur ab eum at voluptate repellendus, minima explicabo harum eos beatae!
							<br><br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quam excepturi ea temporibus facere nam necessitatibus hic accusamus optio, aperiam rerum laborum sit voluptas amet distinctio esse, voluptate fugit assumenda.
						</p>
					</div>
				</div>

				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold">Inspiración</h2>
					<?php
					$images = get_field('galeria_top');
					$size = 'large'; // (thumbnail, medium, large, full or custom size)

					if( $images ): ?>
					    <div class="gallery-container">
					        <?php foreach( $images as $image ): ?>
					            <div class="gallery-item"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
					        <?php endforeach; ?>
					    </div>
					<?php endif; ?>
				</div>
			</div>

			<div class="container">
				<div class="row">
					
					<div class="col-xs-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, rem a magni eligendi qui dolorum at. Unde reprehenderit, nisi repellendus omnis quas rerum, debitis perferendis doloribus sunt, maiores dicta hic!</p>
					</div>

				</div>

				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold">Combina perfecto con:</h2>
					<div class="col-xs-12 col-sm-6 featured-product" style="background: rgba(black, 0.7)">
						<div class="info-container">
							<div class="alpha-layer">
								<p class="title">Oak Essex</p>
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quo quibusdam.</p>
							</div>
						</div>
						<div class="plus"><a href="#show" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
					</div>
					<div class="col-xs-12 col-sm-6 featured-product one">
						<div class="info-container">
							<div class="alpha-layer">
								<p class="title">Oak Essex</p>
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quo quibusdam.</p>
							</div>
						</div>
						<div class="plus"><a href="#show" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();
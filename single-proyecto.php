<?php
/**
 * The template for displaying project detail
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
					<div class="col-xs-12 col-sm-6 col-md-7">
						<?php
						while ( have_posts() ) : the_post(); ?>
							<h1 class="rajdhani detail-project-title"><?php the_title(); ?></h1>
							<h2 class="rajdhani mayus bold rojo1 subtitle"><?php the_field('subtitulo') ?></h2><?php
						endwhile; // End of the loop.
						?>
					</div>
				</div>

				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold">Proyecto</h2>
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile; // End of the loop. ?>
					</div>
				</div>

				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold">Materiales</h2><?php
					$materiales_usados = get_field('materiales_usados');
					$size = "large";

					if( $materiales_usados ): ?>
					    <div class="materials-gallery-container col-xs-12">
					        <?php foreach( $materiales_usados as $material ): ?>
					        	<div class="item-material-gallery container">
					        		<div class="row">
						        		<div class="col-xs-12 main-image-container" style="background-image: url(<?php echo get_the_post_thumbnail_url($material,'full');?>)"></div>
						        		<div class="col-xs-12 col-sm-3 col-sm-offset-1 product-texture">
						        			<div class="inner-texture" style="background: url(<?php echo get_field( 'textura', $material);?>)"><a class="gris1" href="<?php echo get_the_permalink($material) ?>"></a></div>
						        		</div>
						        		<div class="col-xs-12 col-sm-7">
							        		<div class="product-title rajdhani mayus bold"><p><a class="gris1" href="<?php echo get_the_permalink($material) ?>"><?php echo get_the_title( $material); ?></a></p></div>
							        		<div class="product-excerpt"><p><?php echo get_the_excerpt( $material); ?></p></div>
						        		</div>
					        		</div>
					        	</div>
					        <?php endforeach; ?>
					    </div>
					<?php endif; ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();
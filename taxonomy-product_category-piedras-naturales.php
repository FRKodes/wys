<?php
/**
 * The taxonomy template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WOOD AND STONE
 * @since 1.0
 * @version 1.0
 */

get_header();
$term = get_queried_object(); ?>

<div class="wrap">
	
	<div class="inner-section-banner <?php echo strtolower($term->slug); ?>"></div>
	
	<header class="page-header container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-title rajdhani"><?php echo $term->description; ?></h1>
				<p class="description">Nuestro fuerte, piedra natural. Tenemos más de 120 materiales de línea que van desde los más básicos hasta los Premium.</p>
			</div>
		</div>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<div class="row">
					<h2 class="col-xs-12 home-title rajdhani mayus bold"><?php echo $term->name; ?></h2>
				</div>
			</div>
			<?php

			$args = array(
			    'post_type' => 'product',
			    'product_category' => $term->slug
			);
			$query = new WP_Query( $args );?>

			<div class="container">
				<div class="row">
					
					<?php
					$counter = 0;
					if ($query->have_posts()) {
					        while ( $query->have_posts() ) : $query->the_post();
					        	$counter ++; ?>

								<div class="col-xs-12 col-sm-6 featured-product<?php if($counter%2 == 0) echo ' even'; ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
									<div class="info-container<?php echo " " . $post->post_name; ?>" style="background-image: url(<?php the_field('textura'); ?>)">
										<div class="alpha-layer">
											<p class="title"><?php the_title(); ?></p>
											<div class="description">
												<?php the_excerpt(); ?>
												<p class="text-right"><a class="white bold" href="<?php the_permalink(); ?>">Conoce más</a></p>
											</div>
										</div>
									</div>
									<div class="plus"><a href="#show" data-attibute="<?php echo $post->post_name; ?>" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
								</div>
					         
					        <?php endwhile;
					         
					} // end of check for query having posts
					     
					// use reset postdata to restore orginal query
					wp_reset_postdata(); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
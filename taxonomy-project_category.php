<?php
/**
 * The projects taxonomy template file
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
	<header class="page-header container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-title project-page rajdhani"><?php echo $term->name; ?></h1>
			</div>
		</div>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<div class="row">
					<p class="col-xs-12"><?php echo $term->description; ?></p>
				</div>
			</div>
			<?php

			$args = array(
			    'post_type' => 'proyecto',
			    'project_category' => $term->slug
			);
			$query = new WP_Query( $args );?>

			<div class="container">
				<div class="row">
					
					<?php
					if ($query->have_posts()) {
					        while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-xs-12 col-sm-6 project-item">
									<div class="info-container<?php echo " " . $post->post_name; ?>">
										<h2 class="home-title rajdhani mayus bold"><a class="gris1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<div class="description"><?php the_excerpt(); ?></div>
									</div>
									<div class="inner-project-image-container" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
										<div class="plus"><a href="#show" data-attibute="<?php echo $post->post_name; ?>" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
									</div>
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
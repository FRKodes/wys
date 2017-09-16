<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WOOD AND STONE
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="main-banner-container">
			<?php $query_main_banners = new WP_Query( array('post_type' => 'banner_home', 'posts_per_page' => 5, 'orderby'=> 'order_menu','order'=>'ASC') );
			while ( $query_main_banners->have_posts() ) : $query_main_banners->the_post();?>
				<div class="image main" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
					<a href="<?php the_field('link'); ?>">
						<span class="text-container">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</span>
					</a>
				</div><?php 
			wp_reset_postdata();
			endwhile;?>
		</div>
		
		<div class="container">
			<div class="row">
				<h1 class="col-xs-12 rajdhani">
					Toda la fuerza <br>de la naturaleza<br>
					<span>en el piso de tu hogar</span>
				</h1>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<h2 class="col-xs-12 home-title rajdhani mayus bold">Productos</h2>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
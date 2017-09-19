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
				<div class="col-xs-12 col-sm-6 featured-product one">
					<div class="info-container">
						<div class="alpha-layer">
							<p class="title">Oak Essex</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quo quibusdam.</p>
						</div>
					</div>
					<div class="plus"><a href="#show" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
				</div>
				<div class="col-xs-12 col-sm-6 featured-product even two">
					<div class="info-container">
						<div class="alpha-layer">
							<p class="title">Iron Moss</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="plus"><a href="#show" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
				</div>
				<div class="col-xs-12 col-sm-6 featured-product three">
					<div class="info-container">
						<div class="alpha-layer">
							<p class="title">Nero Zimbawe</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate saepe consequuntur.</p>
						</div>
					</div>
					<div class="plus"><a href="#show" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
				</div>
				<div class="col-xs-12 col-sm-6 featured-product even four">
					<div class="info-container">
						<div class="alpha-layer">
							<p class="title">Strata Argentum</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="plus"><a href="#show" class="icon-plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more.svg" alt="Ver más de este producto"></a></div>
				</div>
			</div>
		</div>

		<div class="container m-top-60">
			<div class="row">
				<h2 class="col-xs-12 home-title rajdhani mayus bold">Promociones</h2>
				<div class="promos-container col-xs-12">
					<div class="item-promo">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-promo-ej.png" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></figure>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
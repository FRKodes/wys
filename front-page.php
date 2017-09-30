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
				<div class="item main" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
					<h2 class="button-text"><a href="<?php the_field('link'); ?>" title=" Ver <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<figure><img src="<?php the_field('imagen_bottom'); ?>" alt="<?php the_title(); ?>"></figure>
				</div><?php 
			wp_reset_postdata();
			endwhile;?>
		</div>
		
		<div class="container m-top-80">
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


				<?php 
				$args = array(
				    'post_type' => 'product',
				    'posts_per_page' => 4,
				    'product_category' => $term->slug
				);
				$query = new WP_Query( $args );
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
						</div><?php 
					endwhile;
				}
				wp_reset_postdata(); ?>
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
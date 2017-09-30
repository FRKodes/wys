<?php
/**
 * The main BLOG template file
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

get_header(); ?>

	<div id="content" class="blog-page-container">
		<?php 
		/*
		 * Get the last published post
		 */
		query_posts('post_type=post&post_status=publish&posts_per_page=1&paged='. get_query_var('paged'));
        if( have_posts() ):?>
        	<section class="container-fluid main-post-container">
        		<div class="row"><?php
					while( have_posts() ): the_post(); ?>
						<article <?php post_class('post-item featured'); ?>>
							<div class="image-container" style="background-image: url(<?php the_post_thumbnail_url( 'large'); ?>)">
								<a href="<?php the_permalink(); ?>"></a>
							</div>
							<div class="post-info col-xs-12 col-lg-10 col-lg-offset-1">
								<h1 class="home-title rajdhani mayus bold"><a class="gris1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p class="published-on"><?php the_date( '', 'Publicado: '); ?></p>
								<div class="excerpt"><?php the_excerpt(__('Continue reading »','example')); ?></div>
								<div class="tags"><?php the_tags('', ' '); ?></div>
							</div>
						</article><?php 
					endwhile;?>	
				</div>
        	</section><?php
		endif; wp_reset_query();

		/*
		 *Getting al the other posts
		*/
        query_posts('post_type=post&offset=1&post_status=publish&posts_per_page=11&paged='. get_query_var('paged'));
        if( have_posts() ): ?>
        	<section class="container">
        		<div class="row"><?php
					while( have_posts() ): the_post(); ?>
						<article <?php post_class('col-xs-12 col-sm-6 post-item'); ?>>
							<div class="image-container col-xs-12" style="background-image: url(<?php the_post_thumbnail_url( 'large'); ?>)">
								<a href="<?php the_permalink(); ?>"></a>
							</div>
							<h2 class="col-xs-12 home-title rajdhani mayus bold"><a class="gris1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="post-info col-xs-12 col-sm-11 col-sm-offset-1">
								<div class="published-on">Publicado: <?php echo the_date(''); ?></div>
								<div class="excerpt"><?php the_excerpt(__('Continue reading »','example')); ?></div>
								<div class="tags"><?php the_tags('', ' '); ?></div>
							</div>
						</article><?php 
						get_the_ID();
					endwhile; ?>
				</div>
        	</section>
			
			<div class="navigation">
				<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
			</div><?php 
		else: ?>
		<div id="post-404" class="noposts">
		    <p><?php _e('Not found.','example'); ?></p>
	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>

	</div><!-- /#content -->

<?php get_footer(); ?>
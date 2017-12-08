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
				<div class="row"><?php
					while ( have_posts() ) : the_post(); ?>
						<h1 class="col-xs-12 rajdhani detail-post-title"><?php the_title(); ?></h1>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<div class="published-on"><?php the_date(); ?></div>
							<div class="share-btn-container"><a class="share-btn" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">Compartir</a></div>
							<div class="post-content"><?php the_content(); ?></div>
						</div><?php
					endwhile;?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();
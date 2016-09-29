<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JpsKmTheme
 */

get_header(); ?>
<div class="slider-bg"><div class="slider-color"><div class="slider-pt"><div class="slider-shadow"><!-- start slider color pt and bg -->
	<div class='slick-page hidden-xs' id="slick-slide-page">
	    <div> <img src="<?php echo get_template_directory_uri() . '/skin/images/Slides/df-kwik-move-removals-slide.jpg'?>"></div>
	</div>	
	<div class="page-quote">
	<div class="quote-col">
		<div class="quote-wrp">
			<div class="removals-quote"><?php echo do_shortcode('[contact-form-7 id="2165" title="Removals-Quote"]');?>
			</div>
		</div>
	</div>
	</div>
</div></div></div></div>
<div class="container"><div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="col-xs-12">
			<header>
				<div class="text-center">
				<?php the_title( '<h1 class="h1 page-title screen-reader-text">', '</h1>' ); ?>
				</div>
			</header>
		</div>
		<div class="col-xs-12 col-md-9">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					 wp_pagenavi();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<div class="col-xs-12 col-md-3">
	<?php
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return;
		}
	?>
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div>
</div></div>
<?php
get_footer();

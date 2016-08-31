<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JpsKmTheme
 */

get_header(); ?>
<?php if ( is_single() ) {?>
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
<?php }else{} ?>
<div class="container"><div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="col-xs-12">
			<header>
				<div class="text-center">
				<h1 class="h1 page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
		</div>
		<div class="col-xs-12 col-md-9">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

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


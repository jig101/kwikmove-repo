<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package JpsKmTheme
 */

get_header(); ?>
<div class="slider-bg"><div class="slider-color"><div class="slider-pt"><div class="slider-shadow"><!-- start slider color pt and bg -->
	<div class='slick-page' id="slick-slide-page">
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
<div class="col-xs-12 col-md-9">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'jpskmtheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			 wp_pagenavi();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	</div>
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

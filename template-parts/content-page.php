<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JpsKmTheme
 */

?>
<div class="page-content">
<div class="container">
<div class="row">
<div class="col-xs-12">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-center pad-20">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jpskmtheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'jpskmtheme' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div></div></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="feature-border-wrap">
				<h3>Get started on your move now!</h3>
				<p>Give us a call or send us your information using the quote form.</p>
			</div>
			<div>
				<a class="btn btn-secondary large" href="http://www.kwikmoveltd.co.uk/contact-us/">Call us: 01293417205</a>  <a class="btn btn-primary large" href="http://www.kwikmoveltd.co.uk/removals-quote-adv/">Advance Removals Quote</a>				
			</div>	
		</div>
	</div>
</div>
</div>
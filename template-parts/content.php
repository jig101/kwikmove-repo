<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JpsKmTheme
 */

?>
<div class="indx-content">
<?php if ( is_single() ) { }else{?>
<div class="col-xs-12 col-sm-5">
	<?php the_post_thumbnail('medium'); ?>
</div>
<?php } ?>
<?php if ( is_single() ) { ?>
	<div class="col-xs-12">
<?php }else {?>
<div class="col-xs-12 col-sm-7">
<?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
			} else {
				the_title( '<h2 class="h3 bold-font color-dark entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		<span class="pull-left">
		</span>
		<span class="pull-left"></span>
		<span class="pull-left"></span>
		<span class="pull-left"></span>	
		<span class="pull-left"><a class="vcard author post-author" href="https://plus.google.com/+KwikmoveltdCoUk">KwikmoveltdCoUk  </a></span>
		<span class="pull-left">&nbsp;&nbsp;|&nbsp;&nbsp;</span>			<?php  printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) );
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php 	if ( is_single() ) { 
				the_content();
		 			}else {
				the_excerpt();
			}
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jpskmtheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //jpskmtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div></div>
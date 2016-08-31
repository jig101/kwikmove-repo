<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JpsKmTheme
 */

get_header(); ?>
<div class="visible-xs">
<div class="container sm-hp-head ">
	<div class="row">
	<div class="col-sm-12">
	       <div class="sm-slide-meta-data">
			<h1 class="h1 bold-font">Stress Free & Affordable Removals Service</h1>
	       <ul>
	       	<li><h3>We offer Home/Resediental, Office/Commercial or Small Man and Van Services</h3></li>
	       	<li><h3>Cost, Friendly & Efficient Service</h3></li>
		    <li><h3>Contact us to find out more</h3></li>
	       	</ul>
	       </div>
	</div>	
	</div>
	</div>
</div>
<div class="slider-bg"><div class="slider-color"><div class="slider-pt"><div class="slider-shadow"><!-- start slider color pt and bg -->
<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9">	
	<div class='slick-hp hidden-xs' id="1-slick-slide-hp">
		<div><?php  echo the_post_thumbnail('full'); ?></div>
	</div>
</div>
	<div class="col-xs-12 col-sm-12 col-md-3">	
	<div class="quote-col">
		<div class="quote-wrp">
			<div class="removals-quote"><?php echo do_shortcode('[contact-form-7 id="2165" title="Removals-Quote"]');?>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
</div></div></div></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="container hp-t-c">
				<div class="row pad-20">
					<div class="col-md-12">
						<div class="feature-border-wrap text-center">
							<div class="h1 home-page-h1">
							Our Services
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="container hp-3f-con">
				<div class="row pad-20">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="three-feature-wrap">
							<div class="three-feature-content">
								<div class="gylp-wrap"><img class="img-circle" src="<?php echo get_template_directory_uri() . '/skin/images/man-with-van-icon.png'?>"></div>
								<div class="h3 bold-font"><a href="http://www.kwikmoveltd.co.uk/office-moves/">Office Moves</a></div>
								<p>Many of our customers have asked us to move their businesses as well as there homes. So we opened KwikMoveltd removals.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="three-feature-wrap">
							<div class="three-feature-content">
								<div class="gylp-wrap"><img class="img-circle" src="<?php echo get_template_directory_uri() . '/skin/images/office-move-icon.png'?>"></div>
								<div class="h3 bold-font"><a href="http://www.kwikmoveltd.co.uk/home-moves/">Home Moves</a></div>
								<p>Moving house is stressful, time consuming and uncertainty. Our friendly and experienced staff at Kwik Move will do all they can to assist and lay to rest your worries and concerns.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="three-feature-wrap">
							<div class="three-feature-content">
								<div class="gylp-wrap"><img class="img-circle" src="<?php echo get_template_directory_uri() . '/skin/images/home-move-icon.png'?>"></div>
								<div class="h3 bold-font"><a href="http://www.kwikmoveltd.co.uk/man-with-a-van/">Man with a Van</a></div>
								<p>Our ever popular Kwik Move Man with a Van removal service takes care of the smaller jobs that need doing without the requirement for our larger removal trucks with removal teams.</p>
							</div>
						</div>
					</div>										
				</div>				
			</div>
<?php
get_footer();

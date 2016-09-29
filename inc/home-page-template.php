<?php
/*
Template Name: Home Layout
*/
get_header(); 

$optionjp = get_option( 'km_home_page_settings' );
?>

<div class="content-bg"><div class="content-color"><div class="content-pt"><div class="content-shadow"><!-- start slider color pt and bg -->
	<div id="primary" class="content-area site-content">
		<main id="main" class="site-main" role="main">
			<div class="container hp-t-c">
				<div class="row pad-20">
					<div class="col-md-12">
						<div class="feature-border-wrap text-center">
							<div class="h1 home-page-h1"><?php echo the_title(); ?>
							</div>
							<h2 class="h2 home-page-h2">HOME &amp; OFFICE MOVE CAN NOT BE MORE EASY WITH KWIKMOVELTD REMOVALS COMPANY</h2>
						</div>
					</div>
				</div>				
			</div>
			<div class="container hp-c-c">
				<div class="row pad-20">
				    <div class="home-content-image hidden-xs hidden-sm col-md-6 text-xs-left text-sm-left text-md-center">
						<a href="<?php esc_url( get_permalink($posts->ID) ); ?>" title="<?php echo $posts->post_title; ?>">
						        <?php echo get_the_post_thumbnail("$posts->ID", "full"); ?>
						</a>			
					</div>
						<?php $posts = get_post( '987' );?>
					<div class="maincontent col-xs-12 col-sm-12 col-md-6 text-left">
						<?php echo $posts->post_content; ?>
						<div class="post-data-wrapper">
							<span>Site Author: <a class="vcard author post-author" href="https://plus.google.com/+KwikmoveltdCoUk">KwikmoveltdCoUk </a> Site Publish Date: <?php echo $posts->post_date;?>
							</span>								
						</div>	
					</div>
				</div>
			</div>
			<div class="container hp-t-c">
				<div class="row pad-20">
					<div class="col-md-12">
						<div class="feature-border-wrap text-center">
							<div class="h1 home-page-h1">
							Removals And Storage Service
							</div>
							<h2 class="h2 home-page-h2">We offer a wide range of removals and storage services to suit your requirements and your budget.</h2>
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

			<div class="home-reviews-con container hidden-xs">
				<div class="row">
					<div class="col-md-12">
						<div class="feature-border-wrap text-center">
							<div class="h1 home-page-h1 text-center">
							EXCELLENT CUSTOMER REVIEWS</div>
							<h2 class="h2 home-page-h2 text-center">ON GOOGLE AND MAJOR REVIEWS SITES</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="home-reviews-bg hidden-xs">
				<div class="home-reviews-con container">
					<div class="row">
						<div class="col-md-12">	
							<div class="mini-container-light">
							<div class="margin-column slick-review">
							<?php $args = array(
							    'numberposts' => 6,
							    'post_type' => 'testimonial',
							    'post_status' => 'publish'
							    );

							    $recent_posts = get_posts( $args, ARRAY_A );

							    foreach ($recent_posts as $p) :
							    ?>
									<div class="latest-review text-center">
										<div class="latest-review-content text-center">	
										<?php  
												$string = $p->post_content;
												echo $string;
										?>								
										</div>
										<div class="latest-review-name">
											<a class="h6 bold-font" href="<?php echo esc_url( get_permalink($p->ID) ); ?>" title="<?php echo $p->post_title; ?>">
											<?php echo $p->post_title; ?></a>
										</div>
									</div>
								<?php
								endforeach;?>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="home-blog-con container">
				<div class="row">
					<div class="col-md-12">
					<div class="feature-border-wrap text-center">
						<div class="h1 home-page-h1 text-center">
							Blog & Special Offers</div>
						</div>
					</div>	
						<div class="mini-container-light">
						<div class="margin-column">
						<?php $args = array(
						    'numberposts' => 3,
						    'post_type' => 'post',
						    'post_status' => 'publish'
						    );

						    $recent_posts = get_posts( $args, ARRAY_A );

						    foreach ($recent_posts as $p) :
						    ?>
								<div class="latest-content col-xs-12 col-sm-4 col-md-4 text-left">
									<div class="blog-img">	
										<a href="<?php echo esc_url( get_permalink($p->ID) ); ?>" title="<?php echo $p->post_title; ?>">
						        		<?php echo get_the_post_thumbnail("$p->ID", "medium", array( 'class' => 'img-responsive thumbnail' )); ?>
						    			</a>		
									</div>
									<div class="text-center">
										<strong><a class="h4 bold-font" href="<?php echo esc_url( get_permalink($p->ID) ); ?>" title="<?php echo $p->post_title; ?>">
										<?php echo $p->post_title; ?></a></strong>
									</div>
									<div class="blog-excerpt text-center">	
									<?php  
											$string = $p->post_excerpt;
											$string = substr($string,0,80);
			     							$string = substr($string,0,strrpos($string," "));
			     							echo $string . "...";
									?>								
									</div>
								</div>
							<?php
							endforeach;?>
								<div class="blog-read-more text-center">	
									<a class="btn btn-primary read-more" href="<?php echo esc_url( get_home_url()); ?>/blog/">More Info</a>
								</div>
							</div>	
						</div>
				</div>
			</div>	
</main></div></div></div></div></div>		
<?php get_footer(); ?>
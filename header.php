<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JpsKmTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
	<div class="ht-bgg"><div class="ht-clo"><div class="ht-ptt"><div class="ht-sdw">
	<div class="container">
	<div class="row">
		<div class="col-xs-9 col-sm-5">
			<div class="logo-container">
				<div class="site-logo">
					<a href="<?php echo esc_url( get_home_url()); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/skin/images/kwikmove-crawley-removal-business-logo.png'  ); ?>"></a>
				</div>
			</div>		
		</div>
			<div class="col-xs-12 col-sm-7 hidden-lg hidden-xs mb-contactInfo text-right">
				<div class="mb-contactInfo-content">
						<div class="md-txt-r content" id="z03">
							<strong><p>Email Us<p></strong>
							<p>admin@kwikmoveltd.co.uk</p>
							<p>kwikmoveltd@gmail.com</p>
						</div>						
						<div class="md-txt-r content" id="z02">
							<strong><p>Call Us<p></strong>
							<p>+447412 622721</p>
							<p>(01293) 417205</p>
						</div>						
						<div class="md-txt-r content" id="z01">
							<strong><p>Opening Hours<p></strong>
							<p>Mon to fri - 09:00  to 19:00 </p>
							<p>sat 08:00  to 16:00 </p>
							<p>sun 10:00 to 14:00</p>
						</div>
					</div>					
				<ul class="nav nav-tabs mb-contactInfo-wrap">
				  <li><a class="action" href="#" data-content="#z01"><strong><span class="h3"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></strong></a></li>
				  <li><a class="action" href="#" data-content="#z02"><strong><span class="h3"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></strong></a></li>
				  <li><a class="action" href="#" data-content="#z03"><strong><span class="h3"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></strong></a></li>
				</ul>

				
			</div>	
			<div class="col-xs-12 col-sm-7 visible-lg mg-top-20">		
				<div class="h-p-w">
						<div class="ic-l">
							<strong><span class="h3"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></strong>
						</div>
						<div class="txt-r">
							<strong><p>Opening Hours<p></strong>
							<p>Mon to fri - 09:00  to 19:00 </p>
							<p>sat 08:00  to 16:00 </p>
							<p>sun 10:00 to 14:00</p>
						</div>						
					</div>	

					<div class="h-p-w">
						<div class="ic-l">
							<strong><span class="h3"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></strong>
						</div>
						<div class="txt-r">
							<strong><p>Call Us<p></strong>
							<p>+447412 622721</p>
							<p>(01293) 417205</p>
						</div>						
					</div>		

					<div class="h-p-w">
						<div class="ic-l">
							<strong><span class="h3"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></strong>
						</div>
						<div class="txt-r">
							<strong><p>Email Us<p></strong>
							<p>admin@kwikmoveltd.co.uk</p>
							<p>kwikmoveltd@gmail.com</p>
						</div>						
					</div>	
				</div>										
			</div>				
<!-- 		<div class="col-xs-3">
			<div class="mb-menu-container"><div class="mb-menu">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="primary-menu">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	        </div>		
	    	</div></div>
	    </div> -->
	</div>
	</div>
	</div></div></div></div>
	<div class="hb-bgg"><div class="hb-clo"><div class="hb-ptt"><div class="hb-sdw">
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
			<nav class="navbar navbar-default">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header ">
				    <div class="mobile-menu-button-container">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>		      
				  	</div>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div id="navbar" class="collapse navbar-collapse lg-nav" ><?php 
							wp_nav_menu( array(
							  'menu' => 'Main',
							  'depth' => 2,
							  'container' => false,
							  'menu_class' => 'nav navbar-nav no-text-shadow',
							  //Process nav menu using our custom nav walker
							  'walker' => new wp_bootstrap_navwalker())
							); ?>
				    </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		</div>
		</div>
	</div></div></div></div>
<!-- 	<div class="container visible-xs visible-sm visible-md">
	<div class="row">
		<div class="col-xs-12 text-center">
			<div class="call-us-btn-container ">
				House or Office Move Call Now! <a class="btn btn-secondary" href="tel:01293417205" role="button" title="CONTACT US ON 01293417205"><span class="red"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 01293417205</span></a>				
			</div>
		</div>
	</div>
	</div> -->
	</header>
	<div id="content" class="site-content">
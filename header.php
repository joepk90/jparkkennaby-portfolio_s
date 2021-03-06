<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jparkkennaby-portfolio_s
 */

$active

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--
<link rel='stylesheet'  href='/portfolio/wp-content/themes/jparkkennaby-portfolio_s/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet'  href='/portfolio/wp-content/themes/jparkkennaby-portfolio_s/css/bootstrap-theme.min.css' type='text/css' media='all' />
-->

<?php wp_head(); ?>
<!-- CHANGE THIS - Stylesheets should be enqueued in functions.php - look at wordpress guide -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'jparkkennaby-portfolio_s' ); ?></a>

	<?php /* <header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; // WPCS: xss ok. ?></p>
			<?php
			endif; ?> 
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jparkkennaby-portfolio_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->*/ ?>
	<div class="content-padding">
		<div id="content" class="container site-content">
			<div class="row">
				<div class="col-sm-4 fixed-sm-above">
					<div id="sidebar">						
						<nav class="navbar navbar-default" role="navigation">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div id="sidebarprofile"></div>
						    <div class="sidebarcontent">
						    	<div class="navbar-header">			    	
						    	
							        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							            <span class="sr-only">Toggle navigation</span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							        </button>
							        <div class="navbar-vertical-brand">
							            <img class="img-responsive img-circle center-block hidden-xs" src="<?php bloginfo('template_directory'); ?>/img/profilephoto100.jpg" />
							            <h1 class="h3 text-center text-left-xs small-xs clear-none-xs margin_top_xs_5 margin-bottom-none-xs">Joe Park-Kennaby</h1>
							            <p class="h4 text-center hidden-xs">Digital Designer and Developer</p>
							            <p class="h5 text-center hidden-xs"><a href="mailto:jparkkennaby@gmail.com">joeparkkennaby@gmail.com</a></p>
							            <p class="h5 text-center hidden-xs"><a href="tel:07588 383610">07588 383610</a></p>
							            <p class="h5 text-center hidden-xs">Old Street, London</p>
							        </div>
						        
						    	</div>
						    	<!-- Collect the nav links, forms, and other content for toggling -->
						    	<div class="collapse navbar-collapse navbar-ex1-collapse">
						    	
							        <ul class="nav navbar-nav">
							            <h2 class="h4 text-left hidden-xs margin_left_15"><a href="/portfolio/">Portfolio</a></h2>
							            <li <?php if ( is_category( '3' ) ) echo 'class="active"' ?>> <a href="/portfolio/category/front-end-development/">Front End Development</a></li>
							            <li <?php if ( is_category( '2' ) ) echo 'class="active"' ?>><a href="/portfolio/category/design/">Design</a></li>
							        </ul>							        
							        <div class="text-center margin_top_15 margin_bottom_15 hidden">
							            <span><a href="www.joe.parkkennaby.com" class="text-center btn btn-sm btn-info" >View My CV</a></span>
							        </div>
						        
						    	</div>
						    </div>
						    <!-- /.navbar-collapse -->
						</nav>
					</div>
					<div class="post-destination"></div>
				</div>

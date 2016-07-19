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
			<nav class="navbar navbar-default" role="navigation">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <div class="navbar-vertical-brand">
          <img class="img-responsive img-circle center-block hidden-xs" src="<?php bloginfo('template_directory'); ?>/img/profilephoto100.jpg"/>
		<h1 class="h3 text-center text-left-xs small-xs clear-none-xs margin_top_xs_5 margin-bottom-none-xs">Joe Park-Kennaby</h1>
        <p class="h4 text-center hidden-xs">Digital Designer</p>
        <p class="h5 text-center hidden-xs"><a href="mailto:jparkkennaby@gmail.com">jparkkennaby@gmail.com</a></p>
        <p class="h5 text-center hidden-xs"><a href="tel:07588 383610">07588 383610</a></p>
        <p class="h5 text-center hidden-xs">Old Street, London</p>
			    </div>
			  </div>

			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			    <h2 class="h4 text-left hidden-xs margin_left_15"><a href="/portfolio/">Portfolio</a></h2>
			      <li> <a href="/portfolio/category/front-end-development/">Front End Development</a></li>
			      <li><a href="/portfolio/category/design/">Design</a></li>
			      <!--<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Action</a></li>
			          <li><a href="#">Another action</a></li>
			          <li><a href="#">Something else here</a></li>
			          <li><a href="#">Separated link</a></li>
			          <li><a href="#">One more separated link</a></li>
			        </ul>
			      </li>-->
			    
			    </ul>
			      <div class="text-center margin_top_15 margin_bottom_15 hidden">
					<a href="www.joe.parkkennaby.com" class="text-center btn btn-sm btn-info" >View My CV</a></span>
					</div>
			     <!--<form class="navbar-form navbar-left" role="search">
			      <div class="form-group">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default">Submit</button>
			    </form>
			     <ul class="nav navbar-nav navbar-right">
			      <li><a href="#">Link</a></li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Action</a></li>
			          <li><a href="#">Another action</a></li>
			          <li><a href="#">Something else here</a></li>
			          <li><a href="#">Separated link</a></li>
			        </ul>
			      </li>
			    </ul>-->
			  </div><!-- /.navbar-collapse -->
			</nav>
			        <!--<h3 class="portfolio">Portfolio</h3>
			        <p class="portfolio">Joe Park-Kennaby's Portfolio</p>
			          <ul>
			            <li>efef</li>
			            <li>eece</li>
			            <li>efe</li>
			            <li>eew</li>-->
			 </div>

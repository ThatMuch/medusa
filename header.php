<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medusa' ); ?></a>

	<header id="masthead" class="site-header row align-items-center" role="banner" style="background-image: url(<?php header_image(); ?>)">
				<button type="button" id="burger-menu" data-toggle="opened" data-target="#site-navigation">
		<svg width="46px" height="30px" viewBox="0 0 46 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
    <title>Menu Icon</title>
    <desc>An icon to display the menu </desc>
    <defs></defs>
    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
        <g transform="translate(3.000000, 2.000000)" stroke-width="6" stroke="#FFFFFF">
            <g id="Group">
                <path d="M0,1 L40,1" id="bar-1"></path>
                <path d="M0,13 L40,13" id="bar-2"></path>
                <path d="M0,25 L40,25" id="bar-3"></path>
            </g>
        </g>
    </g>
</svg>
			</button>
		<div class="site-branding container col">

			<?php
			if ( is_front_page() ) : ?>
				<h1 class="site-title text-center"><?php bloginfo( 'name' ); ?></h1>

			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description text-center"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif;?>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation row align-items-center" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'col', ) ); ?>
		</nav><!-- #site-navigation -->

<div class="bottom-header"><svg width="100%" height="78" viewBox="0 0 100% 78" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <path d="M4.27318146,-3.19744231e-13 L0,-3.19744231e-13 L0,79.3653676 L1440,79.3653676 L1440,-3.19744231e-13 L1430.13036,-3.19744231e-13 C769.081287,169.131289 65.2881047,14.0606124 4.27318146,-1.00024433e-11 Z" id="header-bottom" stroke="none" fill="#FFFFFF" fill-rule="evenodd"></path>
</svg></div>

	</header>
	<!-- #masthead -->
	<main id="main" class="site-main container" role="main">


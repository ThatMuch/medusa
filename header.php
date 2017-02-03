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
	<script src="https://use.fontawesome.com/c9c8175180.js"></script>
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
					<nav id="site-navigation" class="main-navigation row " role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary_menu', 'menu_class' => 'col-12 align-self-center', 'container'=> 'ul' ) ); ?>

	<ul class="col-12 social nav align-self-center justify-content-center">
		<?php if(get_field("github", 'option')):;?><li class="git nav-item "><a href="<?php the_field("github", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>
</a></li><?php endif;?>
		<?php if(get_field("linkedin", 'option')):;?><li class="linkedin nav-item"><a href="<?php the_field("linkedin", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><?php endif;?>
		<?php if(get_field("pinterest", 'option')):;?><li class="pinterest nav-item"><a href="<?php the_field("pinterest", 'option') ;?>" class="nav-link" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i>
</a></li><?php endif;?>
	</ul>

		</nav><!-- #site-navigation -->
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
<img class="bottom-header" src="<?php echo get_template_directory_uri(); ?>/images/bottom.svg" alt="">
	</header>
	<!-- #masthead -->
	<main id="main" class="site-main" role="main">


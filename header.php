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
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/c9c8175180.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medusa' ); ?></a>

	<header id="masthead" class="site-header row align-items-center" role="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-v.png),url(<?php header_image(); ?>)">
		<button id="burger-menu">
			<svg version="1.1" id="burger-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 92 92" style="enable-background:new 0 0 92 92;" xml:space="preserve">
                    <path id="bar-1" d="M77.8,10.5H13.3c-3.7,0-6.7,2.9-6.7,6.5s3,6.5,6.7,6.5h64.6c3.7,0,6.7-2.9,6.7-6.5S81.5,10.5,77.8,10.5z" />
                    <path id="bar-2" d="M77.8,39.5H13.3c-3.7,0-6.7,2.9-6.7,6.5s3,6.5,6.7,6.5h64.6c3.7,0,6.7-2.9,6.7-6.5S81.5,39.5,77.8,39.5z" />
                    <path id="bar-3" d="M77.8,68.5H13.3c-3.7,0-6.7,2.9-6.7,6.5s3,6.5,6.7,6.5h64.6c3.7,0,6.7-2.9,6.7-6.5S81.5,68.5,77.8,68.5z" />
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
		<div class="site-branding container ">

			<?php
			if ( is_front_page() ) : ?>
			<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
			?>

				<?php else : ?>
					<h1 class="site-title text-center"><?php wp_title('')?></h1>
			<?php endif; ?>

		</div><!-- .site-branding -->
		<?php
			if ( is_front_page() ) : ?>
		<a href="#services" class="call-to-action"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.svg" alt=""></a>
		<?php endif;?>
<!--<img class="bottom-header" src="<?php echo get_template_directory_uri(); ?>/images/bottom.svg" alt="">-->

<span class="overlay">
<svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" PreserveAspectRatio="none">
<path fill="#FFFFFF" d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z"
	/>
</svg>
  </span>
	</header>
	<!-- #masthead -->
	<main id="main" class="site-main" role="main">


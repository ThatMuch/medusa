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
<script>

	$(document).ready(function() {
		$('.call-to-action').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			//var nav = $('nav').offset();
			$('html, body').animate( { scrollTop: $(page).offset().top - 85}, speed ); // Go
			return false;
		});
	});
</script>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medusa' ); ?></a>

	<header id="masthead" class="site-header row align-items-center" role="banner" style="background-image: url(<?php header_image(); ?>)">
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
		<div class="site-branding container col">

			<?php
			if ( is_front_page() ) : ?>
				<h1 class="site-title text-center"><?php bloginfo( 'name' ); ?></h1>

				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description text-center"><?php echo $description; /* WPCS: xss ok. */ ?></p>

				<?php endif;?>
				<?php else : ?>
					<h1 class="site-title text-center"><?php wp_title('')?></h1>
			<?php endif; ?>

		</div><!-- .site-branding -->
		<?php
			if ( is_front_page() ) : ?>
		<a href="#contact" class="btn btn-primary call-to-action">Nous contacter</a>
		<?php endif;?>
<img class="bottom-header" src="<?php echo get_template_directory_uri(); ?>/images/bottom.svg" alt="">
	</header>
	<!-- #masthead -->
	<main id="main" class="site-main" role="main">


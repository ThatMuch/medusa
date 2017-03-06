<?php
/**
 * medusa functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medusa
 */

if ( ! function_exists( 'medusa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function wpt_register_js() {
    wp_enqueue_script( 'tether', get_template_directory_uri().'/js/tether.min.js');
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
	wp_register_script('form.min.js', get_template_directory_uri() . '/js/form.min.js');
	wp_register_script('burger-animate.min.js', get_template_directory_uri() . '/js/burger-animate.min.js');
	wp_register_script('animate-header.min.js', get_template_directory_uri() . '/js/animate-header.min.js');
	wp_register_script('scroll.min.js', get_template_directory_uri() . '/js/scroll.min.js');
    wp_enqueue_script('jquery.bootstrap.min');
    wp_enqueue_script('form.min.js');
	wp_enqueue_script('burger-animate.min.js');
	wp_enqueue_script('animate-header.min.js');
	wp_enqueue_script('scroll.min.js');
}
add_action( 'init', 'wpt_register_js' );


function medusa_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on medusa, use a find and replace
	 * to change 'medusa' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'medusa', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'medusa' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'medusa_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'medusa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medusa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medusa_content_width', 640 );
}
add_action( 'after_setup_theme', 'medusa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medusa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'medusa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medusa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Formulaire', 'medusa' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'medusa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'medusa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function medusa_scripts() {
	wp_enqueue_style( 'medusa-style', get_stylesheet_uri() );

	wp_enqueue_script( 'medusa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'medusa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medusa_scripts' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
add_action('init', 'my_custom_init'); function my_custom_init() {
/* notre code PHP pour rajouter les custom post type */
register_post_type(   'equipe',
array(
		'label' => 'Equipe',
		'labels' => array(
		'name' => 'Equipe',
		'singular_name' => 'Membre',
		'all_items' => 'Toute l\'equipe',
		'add_new_item' => 'Ajouter un membre',
		'edit_item' => 'Éditer le membre',
		'new_item' => 'Nouveau membre',
		'view_item' => 'Voir le membre',
		'search_items' => 'Rechercher parmi les membres',
		'not_found' => 'Pas de membres trouvés',
		'not_found_in_trash'=> 'Pas de membre dans la corbeille'
	),
	'public' => true,
	'capability_type' => 'post',
	'supports' => array(
		'title',
		'thumbnail',
	),
) );
register_post_type(   'portfolio',
array(
		'label' => 'Portfolio',
		'labels' => array(
		'name' => 'Portfolio',
		'singular_name' => 'Projet',
		'all_items' => 'Tous les projets',
		'add_new_item' => 'Ajouter un projet',
		'edit_item' => 'Éditer le projet',
		'new_item' => 'Nouveau projet',
		'view_item' => 'Voir le projet',
		'search_items' => 'Rechercher parmi les projets',
		'not_found' => 'Pas de projets trouvés',
		'not_found_in_trash'=> 'Pas de projet dans la corbeille',
	),
	'public' => true,
	'capability_type' => 'post',
	'supports' => array(
		'title',
		'thumbnail',
		//'editor',
	),
	'taxonomies' => array('post_tag' ),
) );

	register_post_type(   'services',
array(
		'label' => 'Services',
		'labels' => array(
		'name' => 'Services',
		'singular_name' => 'Service',
		'all_items' => 'Tous les services',
		'add_new_item' => 'Ajouter un service',
		'edit_item' => 'Éditer le service',
		'new_item' => 'Nouveau service',
		'view_item' => 'Voir le service',
		'search_items' => 'Rechercher parmi les service',
		'not_found' => 'Pas de services trouvés',
		'not_found_in_trash'=> 'Pas de services dans la corbeille'
	),
	'public' => true,
	'capability_type' => 'post',
	'supports' => array(
		'title',
		'editor',
	),
) );
}
/* Authorize SVG files*/
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');


function register_my_menu() {
  register_nav_menu('secondary_menu',__( 'Secondary' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Update Theme
require_once('wp-updates-theme.php');
new WPUpdatesThemeUpdater_1974( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );

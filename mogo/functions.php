<?php
/**
 * mogo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mogo
 */

/*
 * Custom settings page
 */
include_once get_template_directory() . '/inc/settings_page.php';

/*
 * Team post type
 */
include_once get_template_directory() . '/inc/post_type_team.php';

/*
 * Testimonials post type
 */
include_once get_template_directory() . '/inc/post_type_testimonials.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function mogo_setup() {
	/*
	* Make theme available for translation.
	*/
	load_theme_textdomain( 'mogo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Let WordPress manage the document title.
	*/
	add_theme_support( 'title-tag' );

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header menu', 'mogo' ),
		)
	);

	/*
	* Valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

}
add_action( 'after_setup_theme', 'mogo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
//function mogo_content_width() {
//	$GLOBALS['content_width'] = apply_filters( 'mogo_content_width', 640 );
//}
//add_action( 'after_setup_theme', 'mogo_content_width', 0 );

// include custom jQuery
function mogo_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'mogo_include_custom_jquery');

/**
 * Enqueue scripts and styles.
 */
function mogo_scripts() {
	wp_enqueue_script('mogo-fonts-loader', get_template_directory_uri() . '/assets/js/font-loader.js', [], filemtime(get_template_directory() . '/assets/js/all.js'), false);
	wp_enqueue_style('mogo-style', get_template_directory_uri() . '/assets/styles/main_global.css', [], filemtime( get_template_directory() . '/assets/styles/main_global.css' ), 'all');

	wp_enqueue_script('mogo-all', get_template_directory_uri() . '/assets/js/all.js', [], filemtime(get_template_directory() . '/assets/js/all.js'), true);
	wp_enqueue_script('mogo-main', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true);

}
add_action( 'wp_enqueue_scripts', 'mogo_scripts' );

/**
 * Class attributes for the <li>
 */
function mogo_li_class($classes,$item, $args){
	if(isset($args->add_li_class)){
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class','mogo_li_class',1,3);

/**
 * Class attributes for the <a>
 */
function mogo_link_class($atts, $item, $args, $depth) {
	if (empty($atts['class'])) {
		$atts['class'] = 'header_menu_link';
	} else {
		$atts['class'] .= ' header_menu_link';
	}

	return $atts;
}

add_filter('nav_menu_link_attributes', 'mogo_link_class', 10, 4);

/*
* Enable svg doc
*/
function additional_mime_types($mimes)
{
	$mimes['svg'] = 'text/svg';
	$mimes['doc']  = 'application/msword';

	return $mimes;
}
add_filter('upload_mimes', 'additional_mime_types');

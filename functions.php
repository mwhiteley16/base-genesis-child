<?php
/**
 * Functions
 *
 * @package      base-genesis-child
 * @since        1.0.0
 * @author       Matt Whiteley <matt@whiteleydesigns.com>
 * @copyright    Copyright (c) 2014, Matt Whiteley
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
 

// ** Base Child Theme Setup ** //


//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Child Theme Name' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//Ensure jQuery loads
add_action('init', 'mw_load_scripts', 0);
function mw_load_scripts() {
	wp_enqueue_script('jquery');
}

// Add Open Sans Font
add_action( 'wp_enqueue_scripts', 'mw_enqueue_google_fonts' );
function mw_enqueue_google_fonts() {
     wp_enqueue_style( 'google-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,800,600', array(), CHILD_THEME_VERSION );
}

// Edit the header layout
remove_action( 'genesis_header', 'genesis_do_header' );
add_action( 'genesis_header', 'genesis_do_new_header' );
function genesis_do_new_header() {
     get_template_part( 'inc/header' );
}

//Edit the footer layout
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'genesis_do_new_footer' );
function genesis_do_new_footer() {
     get_template_part( 'inc/footer' );
}

//Stop wordpress from wrapping everything in paragraph tags
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//Remove default genesis sidebar
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

//Remove default genesis sidebar
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );
unregister_sidebar( 'footer-1' );
unregister_sidebar( 'footer-2' );
unregister_sidebar( 'footer-3' );

// Adding custom Favicon
//add_filter( 'genesis_pre_load_favicon', 'custom_favicon' );
//function custom_favicon( $favicon_url ) {
//	return 'urltofavicon';
//}

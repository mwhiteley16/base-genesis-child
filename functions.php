<?php
/**
 * Functions
 *
 * @package      base-genesis-child
 * @since        1.0.0
 * @author       Matt Whiteley <matt@whiteleydesigns.com>
 * @copyright    Copyright (c) 2016, Matt Whiteley
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Child Theme Name' );
define( 'CHILD_THEME_URL', 'http://whiteleydesigns.com/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

/* ====================

GENERIC THEME FUNCTIONS

==================== */

//* GENERIC -- Ensure jQuery loads
add_action('init', 'wd_load_scripts', 0);
function wd_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

//* GENERIC -- Register & Enqueue Additional Scripts
//* Used to enqueue a variety of scripts.  Common ones are listed below, simply uncomment the action and the needed scripts to use
//* Add additional scripts as needed
//add_action( 'wp_enqueue_scripts', 'wd_enqueue_lazyload' );
function wd_enqueue_lazyload() {
     //wp_register_script( 'jquery-lazyload', get_stylesheet_directory_uri() . '/js/jquery.lazyload.js', array('jquery'), '1.9.3', true ); // lazyload
	//wp_enqueue_script( 'jquery-lazyload' );
     //wp_register_script( 'font-awesome-cdn', 'https://use.fontawesome.com/c312c6a5ae.js' ); // font awesome (CDN)
	//wp_enqueue_script( 'font-awesome-cdn' );
     //wp_register_script( 'flickity', get_stylesheet_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '1.9.3', true ); // flickity
	//wp_enqueue_script( 'flickity' );
	//wp_register_script('wd-slideshow', get_stylesheet_directory_uri() . '/js/wd-slideshow.js' ); // WD Slideshow
     //wp_enqueue_script( 'wd-slideshow' );
}

//* GENERIC -- Enqueue Google Fonts
//* Enqueue any Google Fonts you need here.  By Default I have Roboto, Lato & Source Sans Pro
//* Be sure to removed un-used fonts to save load time
add_action( 'wp_enqueue_scripts', 'wd_enqueue_google_fonts' );
function wd_enqueue_google_fonts() {
     wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,700italic,700,500italic,400italic,500,300italic,300,100italic,100|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', array(), CHILD_THEME_VERSION );
}

//* GENERIC -- allow SVG uploads and fix back end media styling for SVGs
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
//add_filter('upload_mimes', 'cc_mime_types'); // Uncomment to use
function custom_admin_head() {
  $css = '';
  $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';
  echo '<style type="text/css">'.$css.'</style>';
}
//add_action('admin_head', 'custom_admin_head'); // Uncomment to use

/* ====================

GENESIS FUNCTIONS

==================== */

//* GENESIS -- Removed unused page templates
add_filter( 'theme_page_templates', 'wd_remove_genesis_page_templates' );
function wd_remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}

//* GENESIS -- Remove unused sidebars
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar-alt' );
unregister_sidebar( 'footer-1' );
unregister_sidebar( 'footer-2' );
unregister_sidebar( 'footer-3' );

//* GENESIS -- Register Additional Sidebars
//genesis_register_sidebar(array(
//	'name'=>'Footer Widget',
//	'id' => 'footer-widget',
//	'description' => 'This widget area goes in the footer above the copyright information.  The widgets will be stacked vertically.',
//	'before_widget' => '<div id="%1$s"><div class="widget %2$s">',
//	'after_widget'  => "</div></div>\n",
//	'before_title'  => '<h4><span>',
//	'after_title'   => "</span></h4>\n"
//));

//* GENESIS -- Remove default header and replace with custom header
remove_action( 'genesis_header', 'genesis_do_header' );
add_action( 'genesis_header', 'genesis_do_new_header' );
function genesis_do_new_header() {
     get_template_part( 'sections/header' );
}

//* GENESIS -- Remove default footer and replace with custom footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'genesis_do_new_footer' );
function genesis_do_new_footer() {
     get_template_part( 'sections/footer' );
}

//* GENESIS -- Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'bg_remove_comment_form_allowed_tags' );
function bg_remove_comment_form_allowed_tags( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}

//* GENESIS -- Remove unused layouts
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

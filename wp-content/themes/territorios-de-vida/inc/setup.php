<?php
/**
 * Theme setup.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme capabilities and menus.
 */
function tdv_theme_setup() {
	load_theme_textdomain( 'territorios-de-vida', TDV_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'custom-logo', array(
		'height'      => 120,
		'width'       => 360,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'align-wide' );

	add_editor_style( 'assets/css/main.css' );

	register_nav_menus(
		array(
			'primary' => __( 'Menú principal', 'territorios-de-vida' ),
			'footer'  => __( 'Menú de pie de página', 'territorios-de-vida' ),
		)
	);

	add_image_size( 'tdv-hero', 1920, 1080, true );
	add_image_size( 'tdv-hero-mobile', 900, 1200, true );
	add_image_size( 'tdv-card', 900, 600, true );
	add_image_size( 'tdv-thumb', 600, 400, true );
}
add_action( 'after_setup_theme', 'tdv_theme_setup' );

/**
 * Set max content width for embeds.
 */
function tdv_content_width() {
	$GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'tdv_content_width', 0 );


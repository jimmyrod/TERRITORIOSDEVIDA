<?php
/**
 * Asset loading.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a version from filemtime when possible.
 *
 * @param string $relative Relative theme path.
 * @return string
 */
function tdv_asset_version( $relative ) {
	$path = TDV_THEME_DIR . '/' . ltrim( $relative, '/' );
	return file_exists( $path ) ? (string) filemtime( $path ) : TDV_THEME_VERSION;
}

/**
 * Enqueue theme CSS and JavaScript.
 */
function tdv_enqueue_assets() {
	wp_enqueue_style(
		'tdv-main',
		TDV_THEME_URI . '/assets/css/main.css',
		array(),
		tdv_asset_version( 'assets/css/main.css' )
	);

	wp_enqueue_script(
		'tdv-main',
		TDV_THEME_URI . '/assets/js/main.js',
		array(),
		tdv_asset_version( 'assets/js/main.js' ),
		true
	);
	wp_script_add_data( 'tdv-main', 'defer', true );

	if ( is_front_page() || is_page_template( 'page-templates/page-aedspp.php' ) ) {
		wp_enqueue_script(
			'tdv-map',
			TDV_THEME_URI . '/assets/js/map.js',
			array(),
			tdv_asset_version( 'assets/js/map.js' ),
			true
		);
		wp_script_add_data( 'tdv-map', 'defer', true );
		wp_localize_script(
			'tdv-map',
			'tdvMapConfig',
			array(
				'geojsonBase' => TDV_THEME_URI . '/assets/geojson/',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tdv_enqueue_assets' );


<?php
/**
 * Theme bootstrap for Territorios de Vida.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TDV_THEME_VERSION', '1.0.0' );
define( 'TDV_THEME_DIR', get_template_directory() );
define( 'TDV_THEME_URI', get_template_directory_uri() );

$tdv_includes = array(
	'inc/helpers.php',
	'inc/setup.php',
	'inc/enqueue.php',
	'inc/cpt.php',
	'inc/metaboxes.php',
	'inc/seo.php',
	'inc/security.php',
	'inc/seed-data.php',
);

foreach ( $tdv_includes as $tdv_file ) {
	require_once TDV_THEME_DIR . '/' . $tdv_file;
}


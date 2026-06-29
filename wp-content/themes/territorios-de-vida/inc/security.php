<?php
/**
 * Security-oriented theme defaults.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'wp_generator' );

/**
 * Add conservative headers that are safe for a theme.
 */
function tdv_security_headers() {
	if ( headers_sent() ) {
		return;
	}

	header( 'X-Content-Type-Options: nosniff' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: geolocation=(), microphone=(), camera=()' );
}
add_action( 'send_headers', 'tdv_security_headers' );

/**
 * Disable XML-RPC by default for this institutional theme.
 *
 * @param bool $enabled Current value.
 * @return bool
 */
function tdv_disable_xmlrpc( $enabled ) {
	return false;
}
add_filter( 'xmlrpc_enabled', 'tdv_disable_xmlrpc' );


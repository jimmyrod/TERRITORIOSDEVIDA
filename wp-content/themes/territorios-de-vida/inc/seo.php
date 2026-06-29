<?php
/**
 * Technical SEO and structured data.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Print meta tags and structured data.
 */
function tdv_print_meta_tags() {
	$description = is_front_page()
		? 'Sitio oficial del Consorcio para la Gestión Ambiental del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza. Gobernanza, biodiversidad, transparencia y Plan Estratégico 2026-2029.'
		: wp_strip_all_tags( get_the_excerpt() );

	if ( empty( $description ) ) {
		$description = get_bloginfo( 'description' );
	}

	$title = wp_get_document_title();
	$current_request = isset( $GLOBALS['wp'] ) && isset( $GLOBALS['wp']->request ) ? $GLOBALS['wp']->request : '';
	$url   = is_singular() ? get_permalink() : home_url( add_query_arg( array(), $current_request ) );
	$image = TDV_THEME_URI . '/assets/img/hero-amazonia.jpg';

	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:type" content="' . ( is_singular( 'noticia' ) ? 'article' : 'website' ) . '">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta name="twitter:image" content="' . esc_url( $image ) . '">' . "\n";
}
add_action( 'wp_head', 'tdv_print_meta_tags', 5 );

/**
 * Print JSON-LD.
 */
function tdv_print_schema() {
	$schema = array(
		'@context' => 'https://schema.org',
		'@graph'   => array(
			array(
				'@type'   => 'GovernmentOrganization',
				'@id'     => home_url( '/#organization' ),
				'name'    => 'Consorcio para la Gestión Ambiental del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza',
				'alternateName' => 'Territorios de Vida y Gobernanza de los Pueblos y Nacionalidades de la Provincia de Pastaza',
				'url'     => home_url( '/' ),
				'areaServed' => array(
					'@type' => 'AdministrativeArea',
					'name'  => 'Pastaza, Ecuador',
				),
				'address' => array(
					'@type'           => 'PostalAddress',
					'addressLocality' => 'Puyo',
					'addressRegion'   => 'Pastaza',
					'addressCountry'  => 'EC',
				),
			),
			array(
				'@type' => 'WebSite',
				'@id'   => home_url( '/#website' ),
				'name'  => 'Territorios de Vida',
				'url'   => home_url( '/' ),
				'publisher' => array( '@id' => home_url( '/#organization' ) ),
				'inLanguage' => 'es-EC',
			),
			array(
				'@type' => 'BreadcrumbList',
				'@id'   => home_url( '/#breadcrumbs' ),
				'itemListElement' => array(
					array(
						'@type'    => 'ListItem',
						'position' => 1,
						'name'     => 'Inicio',
						'item'     => home_url( '/' ),
					),
				),
			),
			array(
				'@type' => 'DigitalDocument',
				'name'  => 'Plan Estratégico Institucional PEI 2026-2029',
				'url'   => TDV_THEME_URI . '/assets/documents/PLAN_ESTRATEGICO_INSTITUCIONAL_2026-2029.pdf',
			),
		),
	);

	if ( is_singular( 'noticia' ) ) {
		$schema['@graph'][] = array(
			'@type' => 'NewsArticle',
			'headline' => get_the_title(),
			'datePublished' => get_the_date( DATE_W3C ),
			'dateModified' => get_the_modified_date( DATE_W3C ),
			'mainEntityOfPage' => get_permalink(),
			'publisher' => array( '@id' => home_url( '/#organization' ) ),
		);
	}

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'tdv_print_schema', 20 );

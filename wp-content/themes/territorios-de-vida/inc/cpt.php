<?php
/**
 * Custom post types and taxonomies.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom content types.
 */
function tdv_register_content_types() {
	$post_types = array(
		'noticia' => array(
			'singular' => __( 'Noticia', 'territorios-de-vida' ),
			'plural'   => __( 'Noticias', 'territorios-de-vida' ),
			'icon'     => 'dashicons-megaphone',
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
		),
		'documento_transparencia' => array(
			'singular' => __( 'Documento de transparencia', 'territorios-de-vida' ),
			'plural'   => __( 'Documentos de transparencia', 'territorios-de-vida' ),
			'icon'     => 'dashicons-media-document',
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		),
		'programa_pei' => array(
			'singular' => __( 'Programa PEI', 'territorios-de-vida' ),
			'plural'   => __( 'Programas PEI', 'territorios-de-vida' ),
			'icon'     => 'dashicons-chart-area',
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		),
		'nacionalidad' => array(
			'singular' => __( 'Nacionalidad', 'territorios-de-vida' ),
			'plural'   => __( 'Nacionalidades', 'territorios-de-vida' ),
			'icon'     => 'dashicons-groups',
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
		),
		'miembro_directorio' => array(
			'singular' => __( 'Miembro de directorio', 'territorios-de-vida' ),
			'plural'   => __( 'Miembros de directorio', 'territorios-de-vida' ),
			'icon'     => 'dashicons-id',
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
		),
	);

	foreach ( $post_types as $post_type => $args ) {
		register_post_type(
			$post_type,
			array(
				'labels'       => array(
					'name'               => $args['plural'],
					'singular_name'      => $args['singular'],
					'add_new_item'       => sprintf( __( 'Añadir %s', 'territorios-de-vida' ), $args['singular'] ),
					'edit_item'          => sprintf( __( 'Editar %s', 'territorios-de-vida' ), $args['singular'] ),
					'new_item'           => sprintf( __( 'Nuevo %s', 'territorios-de-vida' ), $args['singular'] ),
					'view_item'          => sprintf( __( 'Ver %s', 'territorios-de-vida' ), $args['singular'] ),
					'search_items'       => sprintf( __( 'Buscar %s', 'territorios-de-vida' ), $args['plural'] ),
					'not_found'          => __( 'No se encontraron contenidos.', 'territorios-de-vida' ),
					'not_found_in_trash' => __( 'No se encontraron contenidos en la papelera.', 'territorios-de-vida' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'menu_icon'    => $args['icon'],
				'show_in_rest' => true,
				'supports'     => $args['supports'],
				'rewrite'      => array(
					'slug'       => str_replace( '_', '-', $post_type ),
					'with_front' => false,
				),
			)
		);
	}
}
add_action( 'init', 'tdv_register_content_types' );

/**
 * Register taxonomies.
 */
function tdv_register_taxonomies() {
	$taxonomies = array(
		'categoria_noticia' => array(
			'post_types' => array( 'noticia' ),
			'singular'   => __( 'Categoría de noticia', 'territorios-de-vida' ),
			'plural'     => __( 'Categorías de noticia', 'territorios-de-vida' ),
			'slug'       => 'categoria-noticia',
		),
		'tipo_documento' => array(
			'post_types' => array( 'documento_transparencia' ),
			'singular'   => __( 'Tipo de documento', 'territorios-de-vida' ),
			'plural'     => __( 'Tipos de documento', 'territorios-de-vida' ),
			'slug'       => 'tipo-documento',
		),
		'eje_estrategico' => array(
			'post_types' => array( 'programa_pei' ),
			'singular'   => __( 'Eje estratégico', 'territorios-de-vida' ),
			'plural'     => __( 'Ejes estratégicos', 'territorios-de-vida' ),
			'slug'       => 'eje-estrategico',
		),
		'tipo_actor' => array(
			'post_types' => array( 'miembro_directorio', 'nacionalidad' ),
			'singular'   => __( 'Tipo de actor', 'territorios-de-vida' ),
			'plural'     => __( 'Tipos de actor', 'territorios-de-vida' ),
			'slug'       => 'tipo-actor',
		),
	);

	foreach ( $taxonomies as $taxonomy => $args ) {
		register_taxonomy(
			$taxonomy,
			$args['post_types'],
			array(
				'labels'            => array(
					'name'          => $args['plural'],
					'singular_name' => $args['singular'],
					'search_items'  => sprintf( __( 'Buscar %s', 'territorios-de-vida' ), $args['plural'] ),
					'all_items'     => sprintf( __( 'Todos los %s', 'territorios-de-vida' ), $args['plural'] ),
					'edit_item'     => sprintf( __( 'Editar %s', 'territorios-de-vida' ), $args['singular'] ),
					'add_new_item'  => sprintf( __( 'Añadir %s', 'territorios-de-vida' ), $args['singular'] ),
				),
				'hierarchical'      => true,
				'public'            => true,
				'show_admin_column' => true,
				'show_in_rest'      => true,
				'rewrite'           => array( 'slug' => $args['slug'] ),
			)
		);
	}
}
add_action( 'init', 'tdv_register_taxonomies' );


<?php
/**
 * Lightweight metaboxes for the custom post types.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Field map by post type.
 *
 * @return array<string,array<string,string>>
 */
function tdv_metabox_field_map() {
	return array(
		'noticia' => array(
			'tdv_fecha'                => __( 'Fecha', 'territorios-de-vida' ),
			'tdv_etiqueta'             => __( 'Etiqueta', 'territorios-de-vida' ),
			'tdv_fuente'               => __( 'Fuente', 'territorios-de-vida' ),
			'tdv_documento_relacionado' => __( 'Documento relacionado', 'territorios-de-vida' ),
		),
		'documento_transparencia' => array(
			'tdv_tipo'             => __( 'Tipo', 'territorios-de-vida' ),
			'tdv_fecha'            => __( 'Fecha', 'territorios-de-vida' ),
			'tdv_archivo_pdf'      => __( 'Archivo PDF o URL', 'territorios-de-vida' ),
			'tdv_anio'             => __( 'Año', 'territorios-de-vida' ),
			'tdv_area_responsable' => __( 'Área responsable', 'territorios-de-vida' ),
			'tdv_estado'           => __( 'Estado', 'territorios-de-vida' ),
		),
		'nacionalidad' => array(
			'tdv_acronimo'      => __( 'Acrónimo', 'territorios-de-vida' ),
			'tdv_organizacion'  => __( 'Organización oficial', 'territorios-de-vida' ),
			'tdv_estado'        => __( 'Estado', 'territorios-de-vida' ),
			'tdv_plan_vida'     => __( 'Plan de Vida', 'territorios-de-vida' ),
			'tdv_territorio'    => __( 'Territorio', 'territorios-de-vida' ),
			'tdv_proyectos'     => __( 'Proyectos', 'territorios-de-vida' ),
		),
		'miembro_directorio' => array(
			'tdv_rol'         => __( 'Rol', 'territorios-de-vida' ),
			'tdv_institucion' => __( 'Institución', 'territorios-de-vida' ),
			'tdv_tipo_actor'  => __( 'Tipo de actor', 'territorios-de-vida' ),
		),
		'programa_pei' => array(
			'tdv_eje'        => __( 'Eje estratégico', 'territorios-de-vida' ),
			'tdv_metas'      => __( 'Metas', 'territorios-de-vida' ),
			'tdv_presupuesto' => __( 'Presupuesto estimado', 'territorios-de-vida' ),
		),
	);
}

/**
 * Register metaboxes.
 */
function tdv_register_metaboxes() {
	foreach ( tdv_metabox_field_map() as $post_type => $fields ) {
		add_meta_box(
			'tdv_details',
			__( 'Datos institucionales', 'territorios-de-vida' ),
			'tdv_render_details_metabox',
			$post_type,
			'normal',
			'default',
			array( 'fields' => $fields )
		);
	}
}
add_action( 'add_meta_boxes', 'tdv_register_metaboxes' );

/**
 * Render metabox fields.
 *
 * @param WP_Post $post Post object.
 * @param array   $box Metabox args.
 */
function tdv_render_details_metabox( $post, $box ) {
	$fields = isset( $box['args']['fields'] ) ? (array) $box['args']['fields'] : array();
	wp_nonce_field( 'tdv_save_details', 'tdv_details_nonce' );
	echo '<div class="tdv-admin-fields">';
	foreach ( $fields as $key => $label ) {
		$value = get_post_meta( $post->ID, $key, true );
		echo '<p><label for="' . esc_attr( $key ) . '"><strong>' . esc_html( $label ) . '</strong></label>';
		echo '<input class="widefat" type="text" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" /></p>';
	}
	echo '</div>';
}

/**
 * Save metaboxes.
 *
 * @param int $post_id Post id.
 */
function tdv_save_details_metabox( $post_id ) {
	if ( ! isset( $_POST['tdv_details_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['tdv_details_nonce'] ) ), 'tdv_save_details' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$post_type = get_post_type( $post_id );
	$field_map = tdv_metabox_field_map();
	if ( ! isset( $field_map[ $post_type ] ) ) {
		return;
	}

	foreach ( $field_map[ $post_type ] as $key => $label ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) );
		}
	}
}
add_action( 'save_post', 'tdv_save_details_metabox' );


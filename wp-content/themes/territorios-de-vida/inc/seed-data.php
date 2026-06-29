<?php
/**
 * Optional seed data. Not executed automatically.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return seed data arrays that administrators can import manually.
 *
 * @return array<string,array<int,array<string,string>>>
 */
function tdv_get_seed_data() {
	return array(
		'nacionalidades' => tdv_nationalities(),
		'documentos'    => tdv_official_documents(),
		'noticias'      => tdv_news_items(),
		'directorio'    => tdv_board_members(),
	);
}


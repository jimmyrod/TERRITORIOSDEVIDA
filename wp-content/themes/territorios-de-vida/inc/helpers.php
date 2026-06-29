<?php
/**
 * Helper functions and static institutional data.
 *
 * @package territorios-de-vida
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return an escaped theme asset URI.
 *
 * @param string $path Relative path inside assets.
 * @return string
 */
function tdv_asset_uri( $path ) {
	return esc_url( TDV_THEME_URI . '/assets/' . ltrim( $path, '/' ) );
}

/**
 * Return an escaped theme document URI.
 *
 * @param string $filename File name inside assets/documents.
 * @return string
 */
function tdv_document_uri( $filename ) {
	return tdv_asset_uri( 'documents/' . ltrim( $filename, '/' ) );
}

/**
 * Render a trusted local SVG icon.
 *
 * @param string $name Icon file name without extension.
 * @param string $class Optional class name.
 * @return string
 */
function tdv_inline_svg( $name, $class = 'tdv-icon' ) {
	$file = TDV_THEME_DIR . '/assets/icons/' . sanitize_file_name( $name ) . '.svg';

	if ( ! file_exists( $file ) ) {
		return '';
	}

	$svg = file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
	if ( false === $svg ) {
		return '';
	}

	$svg = preg_replace( '/<svg\b/', '<svg class="' . esc_attr( $class ) . '" aria-hidden="true" focusable="false"', $svg, 1 );
	return wp_kses(
		$svg,
		array(
			'svg'      => array(
				'class'       => true,
				'aria-hidden' => true,
				'focusable'   => true,
				'viewBox'     => true,
				'fill'        => true,
				'xmlns'       => true,
				'role'        => true,
			),
			'path'     => array(
				'd'               => true,
				'fill'            => true,
				'stroke'          => true,
				'stroke-width'    => true,
				'stroke-linecap'  => true,
				'stroke-linejoin' => true,
			),
			'circle'   => array(
				'cx'           => true,
				'cy'           => true,
				'r'            => true,
				'fill'         => true,
				'stroke'       => true,
				'stroke-width' => true,
			),
			'polyline' => array(
				'points'          => true,
				'fill'            => true,
				'stroke'          => true,
				'stroke-width'    => true,
				'stroke-linecap'  => true,
				'stroke-linejoin' => true,
			),
			'line'     => array(
				'x1'           => true,
				'y1'           => true,
				'x2'           => true,
				'y2'           => true,
				'stroke'       => true,
				'stroke-width' => true,
			),
		)
	);
}

/**
 * Anchor URL for homepage navigation.
 *
 * @param string $anchor Section id.
 * @return string
 */
function tdv_anchor_url( $anchor ) {
	$anchor = sanitize_title( $anchor );
	return is_front_page() ? '#' . $anchor : home_url( '/#' . $anchor );
}

/**
 * Fallback menu used before WordPress menus are assigned.
 *
 * @return array<int,array{label:string,anchor:string}>
 */
function tdv_default_menu_items() {
	return array(
		array( 'label' => __( 'Inicio', 'territorios-de-vida' ), 'anchor' => 'inicio' ),
		array( 'label' => __( 'Quiénes Somos', 'territorios-de-vida' ), 'anchor' => 'quienes-somos' ),
		array( 'label' => __( 'AEDSPP', 'territorios-de-vida' ), 'anchor' => 'aedspp' ),
		array( 'label' => __( 'Programas', 'territorios-de-vida' ), 'anchor' => 'programas' ),
		array( 'label' => __( 'Transparencia', 'territorios-de-vida' ), 'anchor' => 'transparencia' ),
		array( 'label' => __( 'Noticias', 'territorios-de-vida' ), 'anchor' => 'noticias' ),
		array( 'label' => __( 'Contacto', 'territorios-de-vida' ), 'anchor' => 'contacto' ),
	);
}

/**
 * Timeline entries from supplied official brief and PEI.
 *
 * @return array<int,array{year:string,date:string,text:string}>
 */
function tdv_timeline_items() {
	return array(
		array( 'year' => '2015', 'date' => '28/08/2015', 'text' => 'Sesión ordinaria del Consejo Provincial: primer debate Ordenanza N.° 92.' ),
		array( 'year' => '2017', 'date' => '24/02/2017', 'text' => 'Aprobación definitiva Ordenanza N.° 92. Creación del AEDSPP con 2.541.836 ha.' ),
		array( 'year' => '2018', 'date' => '29/03/2018', 'text' => 'Resolución N.° 369-CP-GADPPZ-2018: adhesión del GAD Provincial al Consorcio.' ),
		array( 'year' => '2019', 'date' => '12/02/2019', 'text' => 'Publicación Registro Oficial N.° 763: creación legal del Consorcio CGAAEDSPPz.' ),
		array( 'year' => '2020', 'date' => '06/11/2020', 'text' => 'Acta N.° 01-AG-CGAAEDSPP-2020: se expide el Estatuto del Consorcio.' ),
		array( 'year' => '2021', 'date' => '13/08/2021', 'text' => 'Aprobación del Manual Corporativo y logo institucional del Consorcio.' ),
		array( 'year' => '2022', 'date' => '18/02/2022', 'text' => 'Acuerdo de Entendimiento con 7 Nacionalidades: se conforma el Consejo Plurinacional.' ),
		array( 'year' => '2023', 'date' => '29/03/2023', 'text' => 'Nuevo estatuto aprobado. Aporte anual GAD Provincial: $45.550,44.' ),
		array( 'year' => '2024', 'date' => '10/07/2024', 'text' => 'Nueva imagen pública aprobada: Territorios de Vida y Gobernanza.' ),
		array( 'year' => '2026', 'date' => 'Enero 2026', 'text' => 'Aprobación del Plan Estratégico Institucional PEI 2026-2029.' ),
	);
}

/**
 * Institutional values.
 *
 * @return array<int,array{title:string,text:string,icon:string}>
 */
function tdv_values() {
	return array(
		array( 'title' => 'Honestidad', 'text' => 'Acciones transparentes, sinceras, auténticas, coherentes e integradas, prevaleciendo la verdad y la justicia.', 'icon' => 'document' ),
		array( 'title' => 'Vocación de servicio', 'text' => 'Actitud orientada al servicio, caracterizada por la calidad y oportunidad en la atención a los ciudadanos.', 'icon' => 'hands' ),
		array( 'title' => 'Eficiencia', 'text' => 'Optimización permanente de recursos para maximizar impacto institucional y territorial.', 'icon' => 'chart' ),
		array( 'title' => 'Inclusión', 'text' => 'Participación adecuada de poblaciones relacionadas, especialmente nacionalidades indígenas a través del CLPI.', 'icon' => 'people' ),
		array( 'title' => 'Equidad', 'text' => 'Trato igualitario con especial atención a grupos excluidos, mujeres y nacionalidades indígenas.', 'icon' => 'leaf' ),
	);
}

/**
 * Nationalities data.
 *
 * @return array<int,array<string,string>>
 */
function tdv_nationalities() {
	return array(
		array( 'name' => 'Shiwiar', 'org' => 'Nacionalidad Shiwiar del Ecuador', 'abbr' => 'NASHIE', 'status' => 'Miembro activo', 'color' => 'green' ),
		array( 'name' => 'Shuar', 'org' => 'Federación Shuar de Pastaza', 'abbr' => 'FENASH-P', 'status' => 'Miembro activo', 'color' => 'earth' ),
		array( 'name' => 'Andwa', 'org' => 'Nacionalidad Andwa del Ecuador', 'abbr' => 'NAPE', 'status' => 'Miembro activo', 'color' => 'water' ),
		array( 'name' => 'Sápara', 'org' => 'Nacionalidad Sápara del Ecuador', 'abbr' => 'NASE', 'status' => 'Patrimonio UNESCO 2001. Miembro activo', 'color' => 'gold' ),
		array( 'name' => 'Waorani', 'org' => 'Nacionalidad Waorani del Ecuador', 'abbr' => 'NAWE', 'status' => 'Miembro activo', 'color' => 'orange' ),
		array( 'name' => 'Achuar', 'org' => 'Nacionalidad Achuar del Ecuador', 'abbr' => 'NAE', 'status' => 'Miembro activo', 'color' => 'green' ),
		array( 'name' => 'Kichwa', 'org' => 'Nacionalidad Kichwa de Pastaza', 'abbr' => 'PAKKIRU', 'status' => 'Mayor población. No participa en periodo 2024-2025 según brief.', 'color' => 'earth' ),
	);
}

/**
 * Governance board members.
 *
 * @return array<int,array<string,string>>
 */
function tdv_board_members() {
	return array(
		array( 'role' => 'Presidente del Consorcio', 'name' => 'Mgs. André Mauricio Granda Garrido', 'institution' => 'GAD Provincial de Pastaza, Prefecto' ),
		array( 'role' => 'Directorio', 'name' => 'Lic. Darwin Francisco Tanguila Andy', 'institution' => 'GAD Municipal Intercultural y Plurinacional de Arajuno, Alcalde' ),
		array( 'role' => 'Directorio', 'name' => 'Ing. Rómulo César Castro Wilcapi', 'institution' => 'GAD Municipal de Santa Clara, Alcalde' ),
		array( 'role' => 'Directorio', 'name' => 'Sr. Franklin Ángel Martínez Pilco', 'institution' => 'GAD Parroquial de Veracruz, Presidente' ),
		array( 'role' => 'Directorio', 'name' => 'Sr. Marco Neptalí Santi Vargas', 'institution' => 'GAD Parroquial de Tarqui, Presidente' ),
		array( 'role' => 'Directorio', 'name' => 'Sr. Enrique Atanacio Vargas Vargas', 'institution' => 'GAD Parroquial de Pomona, Presidente' ),
		array( 'role' => 'Directorio', 'name' => 'Ing. Daniela Paola Escobar Torres', 'institution' => 'GAD Parroquial de Fátima, Presidente' ),
		array( 'role' => 'Directorio', 'name' => 'Ing. Luis Fernando Chalán Ordóñez', 'institution' => 'GAD Parroquial de San José, Presidente' ),
		array( 'role' => 'Consejo Consultivo', 'name' => 'Representantes delegados', 'institution' => 'Consejo Plurinacional de Nacionalidades Indígenas de Pastaza' ),
	);
}

/**
 * PEI strategic objectives.
 *
 * @return array<int,array<string,string>>
 */
function tdv_strategic_objectives() {
	return array(
		array(
			'key'     => 'OEI 1',
			'title'   => 'Fortalecer la institucionalidad',
			'text'    => 'Fortalecer la institucionalidad, la capacidad técnica, administrativa y operativa del Consorcio, a fin de garantizar una gestión sostenible del AEDSPP.',
			'meta'    => 'Índice fortalecimiento 40% -> 95%; 100% instrumentos vigentes; >=90% cumplimiento POA anual.',
			'program' => 'Fortalecimiento institucional del Consorcio.',
			'tone'    => 'green',
		),
		array(
			'key'     => 'OEI 2',
			'title'   => 'Formular y ejecutar el Plan de Manejo',
			'text'    => 'Formular, gestionar y ejecutar el Plan de Manejo/Co-gestión del AEDSPPz, Planes de Vida, Gobernanza y Gestión Territorial.',
			'meta'    => '1 Plan Manejo; 2 proyectos STCTEA; 4 perfiles cooperación; 4 proyectos co-ejecutados; 8 eventos.',
			'program' => 'Plan Manejo/MGGT; Proyectos con GADs; Mesa Cooperación Internacional.',
			'tone'    => 'earth',
		),
		array(
			'key'     => 'OEI 3',
			'title'   => 'Garantizar sostenibilidad financiera',
			'text'    => 'Garantizar la sostenibilidad financiera mediante gestión presupuestaria, administración de recursos, control interno y mecanismos financieros.',
			'meta'    => '3 instrumentos digitales; 4 rendiciones CPCCS; >=5 fuentes financiamiento; 2 nuevos GADs; 1 fideicomiso.',
			'program' => 'Gestión presupuestaria; Portafolio proyectos; Sostenibilidad financiera.',
			'tone'    => 'water',
		),
	);
}

/**
 * Budget rows from supplied proposal table.
 *
 * @return array<int,array<string,string>>
 */
function tdv_budget_rows() {
	return array(
		array( 'year' => '2026', 'investment' => '$1.540.144,49', 'current' => '$92.000,00', 'total' => '$1.632.144,49', 'programs' => 'Fortalecimiento institucional, automatización, gestión financiamiento.' ),
		array( 'year' => '2027', 'investment' => '$20.000,00', 'current' => '$92.000,00', 'total' => '$112.000,00', 'programs' => 'Fortalecimiento capacidades gestión pública.' ),
		array( 'year' => '2028', 'investment' => '$1.541.626,96', 'current' => '$92.000,00', 'total' => '$1.633.626,96', 'programs' => 'Fortalecimiento institucional, gestión financiamiento adicional.' ),
		array( 'year' => '2029', 'investment' => '$212.289,66', 'current' => '$92.000,00', 'total' => '$304.289,66', 'programs' => 'Fortalecimiento institucional, cierre portafolio proyectos.' ),
		array( 'year' => 'Total', 'investment' => '$3.314.061,11', 'current' => '$368.000,00', 'total' => '$3.682.061,11', 'programs' => 'Total según tabla de propuesta web. PEI extraído indica $3.662.061,11.' ),
	);
}

/**
 * Official documents for transparency portal.
 *
 * @return array<int,array<string,string>>
 */
function tdv_official_documents() {
	return array(
		array( 'title' => 'Ordenanza N.° 92 - Creación del AEDSPP', 'type' => 'Normativa', 'year' => '2017', 'date' => '24/02/2017', 'file' => 'ORDENANZA_N92_0001.pdf', 'area' => 'GAD Provincial de Pastaza', 'status' => 'Vigente' ),
		array( 'title' => 'Convenio de Creación del Consorcio - Registro Oficial N.° 763', 'type' => 'Convenio', 'year' => '2019', 'date' => '12/02/2019', 'file' => 'Propuesta_Web_v2_Territorios_de_Vida_Pastaza.pdf', 'area' => 'Consorcio GAAEDSPPz', 'status' => 'Referencia web' ),
		array( 'title' => 'Estatuto del Consorcio CGAAEDSPPz', 'type' => 'Estatuto', 'year' => '2020', 'date' => '06/11/2020', 'file' => 'estatuto_consorcio_aedsppz.pdf', 'area' => 'Asamblea General', 'status' => 'Vigente / reformas' ),
		array( 'title' => 'Plan Estratégico Institucional PEI 2026-2029', 'type' => 'Planificación', 'year' => '2026', 'date' => 'Enero 2026', 'file' => 'PLAN_ESTRATEGICO_INSTITUCIONAL_2026-2029.pdf', 'area' => 'Coordinación Técnica', 'status' => 'Vigente' ),
		array( 'title' => 'Brochure Pastaza - Territorios de Vida', 'type' => 'Comunicación', 'year' => '2026', 'date' => '03/07', 'file' => 'brochure_pastaza_3_jul_15h08.pdf', 'area' => 'Comunicación institucional', 'status' => 'Referencia' ),
		array( 'title' => 'Plan Operativo Anual (POA) vigente', 'type' => 'POA', 'year' => '2026', 'date' => 'Por publicar', 'file' => '', 'area' => 'Administración financiera', 'status' => 'TODO validar archivo' ),
		array( 'title' => 'Cédulas presupuestarias E-SIGEF', 'type' => 'Presupuesto', 'year' => '2026', 'date' => 'Por publicar', 'file' => '', 'area' => 'Administración financiera', 'status' => 'TODO validar archivo' ),
		array( 'title' => 'Informes de Rendición de Cuentas CPCCS', 'type' => 'Rendición', 'year' => '2026', 'date' => 'Por publicar', 'file' => '', 'area' => 'Presidencia / Coordinación Técnica', 'status' => 'TODO validar archivo' ),
	);
}

/**
 * Initial news items.
 *
 * @return array<int,array<string,string>>
 */
function tdv_news_items() {
	return array(
		array( 'date' => '12/02/2019', 'title' => 'Creación Legal del Consorcio CGAAEDSPPz', 'summary' => 'Publicación en Registro Oficial N.° 763. Suscriptores: GAD Provincial, 2 Municipios y 5 Juntas Parroquiales.', 'tag' => 'Institucional' ),
		array( 'date' => '18/02/2022', 'title' => 'Conformación del Consejo Plurinacional', 'summary' => 'Acuerdo de Entendimiento con 7 organizaciones de nacionalidades indígenas de Pastaza.', 'tag' => 'Gobernanza' ),
		array( 'date' => '10/11/2021', 'title' => 'Mesa Técnica de Cooperación Internacional', 'summary' => '10 ONGs suscriben acuerdo: NCI, CI, TNC, WWF, WCS, GiZ, ALTROPICO, EcoCiencia, Pachamama e INBAR.', 'tag' => 'Cooperación' ),
		array( 'date' => '10/07/2024', 'title' => 'Nueva Imagen Pública Aprobada', 'summary' => 'El Consejo Plurinacional aprueba Territorios de Vida y Gobernanza de los Pueblos y Nacionalidades de Pastaza.', 'tag' => 'Institucional' ),
		array( 'date' => 'Enero 2026', 'title' => 'Aprobación del PEI 2026-2029', 'summary' => 'Plan Estratégico Institucional firmado por Prefecto y Coordinador Técnico.', 'tag' => 'Planificación' ),
	);
}


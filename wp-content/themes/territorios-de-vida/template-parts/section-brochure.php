<?php
/**
 * Institutional brochure section.
 *
 * @package territorios-de-vida
 */

$member_logos = array(
	array( 'file' => 'member-gobierno-pastaza.png', 'name' => 'Gobierno de Pastaza' ),
	array( 'file' => 'member-arajuno.png', 'name' => 'Gobierno Municipal de Arajuno' ),
	array( 'file' => 'member-santa-clara.png', 'name' => 'Alcaldía de Santa Clara' ),
	array( 'file' => 'member-veracruz.png', 'name' => 'GAD Parroquial Rural de Veracruz' ),
	array( 'file' => 'member-tarqui.png', 'name' => 'GAD Parroquial Rural de Tarqui' ),
	array( 'file' => 'member-pomona.png', 'name' => 'Gobierno Autónomo Descentralizado Parroquial Rural Pomona' ),
	array( 'file' => 'member-fatima.png', 'name' => 'GAD Parroquial de Fátima' ),
	array( 'file' => 'member-san-jose.png', 'name' => 'Gobierno Parroquial San José' ),
);

$partner_logos = array(
	array( 'file' => 'partner-nci.png', 'name' => 'Naturaleza y Cultura Internacional' ),
	array( 'file' => 'partner-ecociencia.png', 'name' => 'EcoCiencia' ),
	array( 'file' => 'partner-wcs.png', 'name' => 'Wildlife Conservation Society' ),
	array( 'file' => 'partner-bosques-para-todos.png', 'name' => 'Bosques para Todos para Siempre' ),
	array( 'file' => 'partner-tnc.png', 'name' => 'The Nature Conservancy' ),
	array( 'file' => 'partner-fundacion-pachamama.png', 'name' => 'Fundación Pachamama' ),
);

$functions = array(
	'Implementar un modelo de gobernanza colaborativa entre Gobiernos Locales y Nacionalidades bajo estándares de diálogo intercultural, consensos y adaptación permanente.',
	'Apoyar a las Nacionalidades en la formulación y co-diseño de instrumentos de planificación de sus territorios.',
	'Presentar propuestas desde la visión local y territorial ante entidades públicas, privadas y organismos de cooperación nacional e internacional.',
	'Articular el territorio mancomunado en los PDOT, Planes de Vida y Modelos de Gestión y Gobernanza Territorial de las Nacionalidades de Pastaza.',
);

$legal_instruments = array(
	'Convenio de creación del Consorcio.',
	'Estatuto del Consorcio.',
	'Acuerdo de Constitución de la Mesa Técnica de Cooperación.',
	'Acuerdo de Constitución del Consejo Plurinacional.',
	'Convenios con NAE (Achuar), NASHIE (Shiwiar), NASE (Sapara), NAPE (Andwa) y FENASH-P (Shuar) para Planes de Vida con la STCTEA.',
	'Acuerdos de colaboración Prefectura Pastaza - Consorcio.',
	'Convenio NCI de transferencia de recursos.',
);

$projects = array(
	array(
		'title' => 'Implementación conjunta Gobierno Provincial - Nacionalidades Indígenas de Pastaza',
		'meta'  => '2021-2023 | $914.892,00 | Socio: PNUD',
		'text'  => 'Reducción de la deforestación de bosques y conservación de ecosistemas naturales de la provincia.',
	),
	array(
		'title' => 'Plan de Implementación REDD+ de la provincia de Pastaza - Ecuador',
		'meta'  => '2021 | $398.035,00 | Socio: PNUD',
		'text'  => 'Proceso provincial orientado a la acción climática, manejo forestal y reducción de emisiones.',
	),
	array(
		'title' => 'Fortalecimiento de la gestión y gobernanza de territorios indígenas del AEDSPP',
		'meta'  => '2024-2025 | $238.000,00 | Socios: WCS, NCI, EcoCiencia',
		'text'  => 'Apoyo al manejo eficiente del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza.',
	),
);

$management = array(
	'Apoyo técnico y operativo para la difusión de modelos de gestión y gobernanza de las Nacionalidades en feria de cooperación internacional y eventos por el Día de las Nacionalidades 2025.',
	'Diseño de iniciativas de producción sostenible libre de deforestación, gestión forestal sostenible, PFNM y maderas livianas entre Gobiernos Locales, productores, comunidades y sector privado.',
	'Gestión de bosques comunitarios Ecuador-Perú 2025. Propuesta por 300.000 euros financiada por AFD.',
	'Planes de Vida y Gobernanza 2024-2025 para Achuar, Shiwiar, Andwa, Sapara y Shuar. Proceso por $2.500.000 con financiamiento STCTEA.',
	'Gestión ante STCTEA para actualizar reglamento, directrices y lineamientos de postulación a Planes de Vida mediante consorcios públicos.',
	'Soporte técnico para el proceso de creación del primer Observatorio de Derechos Colectivos.',
	'Primer foro por el Día de las Nacionalidades de Pastaza: herramientas para la planificación y gestión territorial.',
	'Suscripción de convenios marco con 7 organizaciones no gubernamentales nacionales e internacionales.',
);

$gallery = array(
	array( 'image' => 'brochure-planning', 'title' => 'Planificación territorial', 'text' => 'Trabajo técnico con mapas y acuerdos territoriales.' ),
	array( 'image' => 'brochure-cultural-leadership', 'title' => 'Gobernanza intercultural', 'text' => 'Liderazgo de las Nacionalidades en la orientación territorial.' ),
	array( 'image' => 'brochure-river', 'title' => 'Territorio amazónico', 'text' => 'Ríos, bosques y conectividad ecológica en Pastaza.' ),
	array( 'image' => 'brochure-ceramic', 'title' => 'Patrimonio cultural', 'text' => 'Saberes, símbolos y memorias vivas del territorio.' ),
	array( 'image' => 'brochure-community', 'title' => 'Comunidades', 'text' => 'Participación local e intergeneracional.' ),
	array( 'image' => 'brochure-assembly', 'title' => 'Asambleas y diálogo', 'text' => 'Consensos entre gobiernos, nacionalidades y aliados.' ),
);
?>
<section id="brochure" class="section section--brochure" data-section="brochure">
	<div class="container">
		<header class="section-heading section-heading--split">
			<div>
				<p class="section-kicker"><?php esc_html_e( 'Brochure institucional', 'territorios-de-vida' ); ?></p>
				<h2><?php esc_html_e( 'Territorios de Vida y Gobernanza de las Nacionalidades de Pastaza', 'territorios-de-vida' ); ?></h2>
			</div>
			<p class="section-lede"><?php esc_html_e( 'Contenido incorporado desde el brochure oficial: identidad visual, mapa, fotografías, miembros, aliados, proyectos y gestión 2024-2025.', 'territorios-de-vida' ); ?></p>
		</header>

		<div class="brochure-cover">
			<picture>
				<source srcset="<?php echo esc_url( tdv_asset_uri( 'img/brochure-forest.webp' ) ); ?>" type="image/webp">
				<img src="<?php echo esc_url( tdv_asset_uri( 'img/brochure-forest.jpg' ) ); ?>" width="1700" height="956" alt="<?php esc_attr_e( 'Vista aérea de bosque amazónico usada en el brochure Territorios de Vida.', 'territorios-de-vida' ); ?>">
			</picture>
			<div class="brochure-cover__content">
				<img src="<?php echo esc_url( tdv_asset_uri( 'img/logo-territorios-full.png' ) ); ?>" width="360" height="585" alt="<?php esc_attr_e( 'Territorios de Vida y Gobernanza de las Nacionalidades de Pastaza', 'territorios-de-vida' ); ?>">
			</div>
		</div>

		<div class="brochure-facts" aria-label="<?php esc_attr_e( 'Datos clave del brochure institucional', 'territorios-de-vida' ); ?>">
			<div><strong>2.542.827,72 ha</strong><span><?php esc_html_e( 'Territorios de Vida y Gobernanza de las Nacionalidades.', 'territorios-de-vida' ); ?></span></div>
			<div><strong>94%</strong><span><?php esc_html_e( 'Propiedad de Pueblos y Nacionalidades.', 'territorios-de-vida' ); ?></span></div>
			<div><strong>1.4 billones tCO2</strong><span><?php esc_html_e( 'Almacenamiento aproximado de carbono.', 'territorios-de-vida' ); ?></span></div>
			<div><strong>Yasuní - Tarímiat</strong><span><?php esc_html_e( 'Conectividad entre el Parque Nacional Yasuní y Tarímiat Pujutaí Nunka.', 'territorios-de-vida' ); ?></span></div>
		</div>

		<div class="brochure-map-layout">
			<div>
				<h3><?php esc_html_e( 'Entidad pública para la gestión ambiental del AEDSPPz', 'territorios-de-vida' ); ?></h3>
				<p><?php esc_html_e( 'El Consorcio para la Gestión Ambiental del AEDSPPz es una entidad pública establecida legalmente mediante Registro Oficial del 12 de febrero de 2019.', 'territorios-de-vida' ); ?></p>
				<p><?php esc_html_e( 'Su estructura incluye Gobiernos Locales desde el nivel provincial, cantonal y parroquial, e incorpora a los Gobiernos Territoriales mediante el Consejo Plurinacional de los Pueblos y Nacionalidades de Pastaza.', 'territorios-de-vida' ); ?></p>
				<p><?php esc_html_e( 'El modelo asegura decisiones compartidas, transparencia y rendición de cuentas bajo estándares de consentimiento previo y salvaguardas socioambientales.', 'territorios-de-vida' ); ?></p>
			</div>
			<figure class="brochure-map">
				<img src="<?php echo esc_url( tdv_asset_uri( 'img/brochure-map.png' ) ); ?>" width="1133" height="907" alt="<?php esc_attr_e( 'Mapa de los Territorios de Vida y Gobernanza de las Nacionalidades de Pastaza.', 'territorios-de-vida' ); ?>">
				<figcaption><?php esc_html_e( 'Mapa oficial del brochure: territorios de las Nacionalidades, provincia de Pastaza, áreas protegidas nacionales y Territorios de Vida.', 'territorios-de-vida' ); ?></figcaption>
			</figure>
		</div>

		<div class="brochure-columns">
			<article>
				<p class="section-kicker"><?php esc_html_e( 'Misión', 'territorios-de-vida' ); ?></p>
				<p><?php esc_html_e( 'Impulsar la articulación de las acciones entre los diferentes niveles de gobiernos autónomos descentralizados en común acuerdo con los Pueblos y Nacionalidades, mediante planificación y coordinación de la gestión ambiental, producción sostenible libre de deforestación, equidad de género, combate al cambio climático, bienestar humano y gobernanza territorial.', 'territorios-de-vida' ); ?></p>
			</article>
			<article>
				<p class="section-kicker"><?php esc_html_e( 'Gobernanza', 'territorios-de-vida' ); ?></p>
				<p><?php esc_html_e( 'La Presidencia la ejerce actualmente la Prefectura de Pastaza. Las Nacionalidades deciden y orientan el accionar organizacional y la toma de decisiones sobre sus territorios ancestrales, reconociendo formas como Kawsak Sacha, Cuencas Sagradas, SACRE y otros modelos de gestión territorial.', 'territorios-de-vida' ); ?></p>
			</article>
		</div>

		<div class="brochure-list-layout">
			<div>
				<h3><?php esc_html_e( 'Funciones', 'territorios-de-vida' ); ?></h3>
				<ul class="check-list">
					<?php foreach ( $functions as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div>
				<h3><?php esc_html_e( 'Modelo ágil de gestión', 'territorios-de-vida' ); ?></h3>
				<ul class="check-list">
					<li><?php esc_html_e( 'Estructura organizacional mínima y manuales internos.', 'territorios-de-vida' ); ?></li>
					<li><?php esc_html_e( 'Simplificación administrativa y financiera mediante delegaciones.', 'territorios-de-vida' ); ?></li>
					<li><?php esc_html_e( 'Autonomía administrativa-financiera con presupuesto independiente, Gobiernos Locales y cooperación de ONGs.', 'territorios-de-vida' ); ?></li>
					<li><?php esc_html_e( 'Sinergias de cooperación y levantamiento conjunto de fondos.', 'territorios-de-vida' ); ?></li>
					<li><?php esc_html_e( 'Salvaguardas en género, interculturalidad e intergeneracionalidad.', 'territorios-de-vida' ); ?></li>
					<li><?php esc_html_e( 'Debida diligencia, rendición de cuentas semestral, LOTAIP y acceso a información.', 'territorios-de-vida' ); ?></li>
				</ul>
			</div>
		</div>

		<div class="logo-section">
			<h3><?php esc_html_e( 'Gobiernos Locales / Miembros', 'territorios-de-vida' ); ?></h3>
			<div class="logo-grid logo-grid--members">
				<?php foreach ( $member_logos as $logo ) : ?>
					<figure>
						<img src="<?php echo esc_url( tdv_asset_uri( 'img/brochure-logos/' . $logo['file'] ) ); ?>" alt="<?php echo esc_attr( $logo['name'] ); ?>">
					</figure>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="logo-section">
			<h3><?php esc_html_e( 'Organizaciones No Gubernamentales Aliadas', 'territorios-de-vida' ); ?></h3>
			<p><?php esc_html_e( 'Apoyan la planificación, gestión e implementación de acciones para ordenamiento territorial, desarrollo sostenible, mitigación del cambio climático, reducción de deforestación, conservación y bioeconomía en la provincia.', 'territorios-de-vida' ); ?></p>
			<div class="logo-grid">
				<?php foreach ( $partner_logos as $logo ) : ?>
					<figure>
						<img src="<?php echo esc_url( tdv_asset_uri( 'img/brochure-logos/' . $logo['file'] ) ); ?>" alt="<?php echo esc_attr( $logo['name'] ); ?>">
					</figure>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="brochure-list-layout">
			<div>
				<h3><?php esc_html_e( 'Instrumentos legales vigentes', 'territorios-de-vida' ); ?></h3>
				<ul class="check-list">
					<?php foreach ( $legal_instruments as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div>
				<h3><?php esc_html_e( 'Gestión 2024-2025', 'territorios-de-vida' ); ?></h3>
				<ul class="check-list">
					<?php foreach ( $management as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<div class="brochure-projects">
			<h3><?php esc_html_e( 'Proyectos coejecutados', 'territorios-de-vida' ); ?></h3>
			<div class="project-card-grid">
				<?php foreach ( $projects as $project ) : ?>
					<article class="project-card">
						<h4><?php echo esc_html( $project['title'] ); ?></h4>
						<p><?php echo esc_html( $project['text'] ); ?></p>
						<strong><?php echo esc_html( $project['meta'] ); ?></strong>
					</article>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="brochure-gallery">
			<h3><?php esc_html_e( 'Fotografías del brochure', 'territorios-de-vida' ); ?></h3>
			<div class="brochure-gallery__grid">
				<?php foreach ( $gallery as $photo ) : ?>
					<article class="photo-card">
						<picture>
							<source srcset="<?php echo esc_url( tdv_asset_uri( 'img/' . $photo['image'] . '.webp' ) ); ?>" type="image/webp">
							<img src="<?php echo esc_url( tdv_asset_uri( 'img/' . $photo['image'] . '.jpg' ) ); ?>" alt="<?php echo esc_attr( $photo['title'] ); ?>" loading="lazy">
						</picture>
						<div>
							<h4><?php echo esc_html( $photo['title'] ); ?></h4>
							<p><?php echo esc_html( $photo['text'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

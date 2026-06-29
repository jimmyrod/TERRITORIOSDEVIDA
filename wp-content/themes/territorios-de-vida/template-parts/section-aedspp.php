<?php
/**
 * AEDSPP section.
 *
 * @package territorios-de-vida
 */

$zones = array(
	array( 'title' => 'Intervenida', 'text' => 'Sustento agropecuario, comercialización, infraestructura vial y zonas de recarga hídrica para consumo humano.', 'places' => 'Mera, Shell, Madre Tierra, Tarqui, Santa Clara, San José, Tte. Hugo Ortiz, Fátima, Puyo, Veracruz, Diez de Agosto, Pomona.' ),
	array( 'title' => 'Transición / Amortiguamiento', 'text' => 'Zona de amortiguamiento ambiental y cultural con corredores estratégicos de acceso carrozable.', 'places' => 'Simón Bolívar, Canelos, El Triunfo, Arajuno, parte de Curaray.' ),
	array( 'title' => 'Conservada', 'text' => 'Zona de conservación ambiental y cultural con asentamientos dispersos de las 7 nacionalidades.', 'places' => 'Curaray, Río Tigre, Río Corrientes, Montalvo, Sarayacu.' ),
);
?>
<section id="aedspp" class="section section--map" data-section="aedspp">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'Ordenanza N.° 92', 'territorios-de-vida' ); ?></p>
			<h2><?php esc_html_e( 'El Área Ecológica de Desarrollo Sostenible Provincial de Pastaza', 'territorios-de-vida' ); ?></h2>
			<p class="section-lede"><?php esc_html_e( 'Creada por Ordenanza N.° 92 - 2.541.836 hectáreas - 85,74% bajo protección ambiental', 'territorios-de-vida' ); ?></p>
		</header>
		<div class="aedspp-grid">
			<div>
				<p><?php esc_html_e( 'El Área Ecológica de Desarrollo Sostenible Provincial de Pastaza (AEDSPP) fue creada por el Consejo Provincial de Pastaza mediante la Ordenanza N.° 92, aprobada el 24 de febrero de 2017, con una superficie de 2.541.836 hectáreas.', 'territorios-de-vida' ); ?></p>
				<p><?php esc_html_e( 'Su finalidad es proteger, conservar y restaurar ecosistemas frágiles y amenazados, priorizando espacios de sensibilidad ecológica asociados al recurso hídrico, biodiversidad y culturas ancestrales; promover el ordenamiento territorial conjunto del AEDSPP y reconocer categorías de protección territorial determinadas por nacionalidades, pueblos y comunidades indígenas en sus Planes de Vida.', 'territorios-de-vida' ); ?></p>
				<div class="metric-strip">
					<div><strong>2.541.836 ha</strong><span><?php esc_html_e( 'Extensión AEDSPP', 'territorios-de-vida' ); ?></span></div>
					<div><strong>93,84%</strong><span><?php esc_html_e( 'Bosques nativos', 'territorios-de-vida' ); ?></span></div>
					<div><strong>85,74%</strong><span><?php esc_html_e( 'Bajo protección', 'territorios-de-vida' ); ?></span></div>
					<div><strong>3.113,67 ha</strong><span><?php esc_html_e( 'Deforestación 2018-2020', 'territorios-de-vida' ); ?></span></div>
				</div>
			</div>
			<div class="map-panel" data-map-enhanced>
				<div class="map-panel__canvas map-panel__canvas--image">
					<img src="<?php echo esc_url( tdv_asset_uri( 'img/brochure-map.png' ) ); ?>" width="1133" height="907" alt="<?php esc_attr_e( 'Mapa de los Territorios de Vida y Gobernanza de las Nacionalidades de Pastaza extraído del brochure institucional.', 'territorios-de-vida' ); ?>">
				</div>
				<p><?php esc_html_e( 'Capas previstas: AEDSPP, zonificación, territorios de 7 nacionalidades, ríos, bloques petroleros y deforestación 2018-2020. Los archivos GeoJSON podrán cargarse desde /assets/geojson/.', 'territorios-de-vida' ); ?></p>
			</div>
		</div>
		<div class="zone-grid">
			<?php foreach ( $zones as $zone ) : ?>
				<article class="zone-card">
					<h3><?php echo esc_html( $zone['title'] ); ?></h3>
					<p><?php echo esc_html( $zone['text'] ); ?></p>
					<small><?php echo esc_html( $zone['places'] ); ?></small>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

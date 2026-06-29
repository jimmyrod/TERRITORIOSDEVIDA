<?php
/**
 * About section.
 *
 * @package territorios-de-vida
 */

?>
<section id="quienes-somos" class="section section--light" data-section="quienes-somos">
	<div class="container">
		<header class="section-heading section-heading--split">
			<div>
				<p class="section-kicker"><?php esc_html_e( 'Institución pública', 'territorios-de-vida' ); ?></p>
				<h2><?php esc_html_e( 'Sobre el Consorcio', 'territorios-de-vida' ); ?></h2>
			</div>
			<p class="section-lede"><?php esc_html_e( 'Historia, Misión, Visión y Valores Institucionales - Fuente: PEI 2026-2029', 'territorios-de-vida' ); ?></p>
		</header>
		<div class="about-layout">
			<div class="about-intro">
				<p><?php esc_html_e( 'Somos el Consorcio para la Gestión Ambiental del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza (CGAAEDSPPz), una entidad de derecho público con personería jurídica propia, creada mediante el Convenio de Creación publicado en el Registro Oficial N.° 763 del 12 de febrero de 2019, en cumplimiento de la Ordenanza N.° 92 del Gobierno Provincial de Pastaza.', 'territorios-de-vida' ); ?></p>
				<p><?php esc_html_e( 'Somos un modelo de gobernanza ambiental inédito en Ecuador que materializa la suma de voluntades de los distintos niveles de gobierno junto a los pueblos y nacionalidades indígenas de Pastaza, demostrando que la conservación y el desarrollo son compatibles.', 'territorios-de-vida' ); ?></p>
			</div>
			<div class="accordion" data-accordion>
				<div class="accordion__item">
					<button class="accordion__trigger" type="button" id="mission-trigger" aria-expanded="true" aria-controls="mission-panel" data-accordion-trigger>
						<span><?php esc_html_e( 'Misión institucional oficial', 'territorios-de-vida' ); ?></span>
					</button>
					<div class="accordion__panel" id="mission-panel" aria-labelledby="mission-trigger" data-accordion-panel>
						<p><?php esc_html_e( 'Impulsar la articulación de las acciones entre los diferentes niveles de gobierno autónomos descentralizados en común acuerdo con los pueblos y nacionalidades, mediante el ejercicio efectivo de la planificación y coordinación de la gestión ambiental, promoviendo la producción sostenible libre de deforestación, la equidad género, el combate al cambio climático, la mejora en la calidad de vida de la población y garantizando la gestión territorial de las nacionalidades sobre sus territorios.', 'territorios-de-vida' ); ?></p>
					</div>
				</div>
				<div class="accordion__item">
					<button class="accordion__trigger" type="button" id="vision-trigger" aria-expanded="false" aria-controls="vision-panel" data-accordion-trigger>
						<span><?php esc_html_e( 'Visión institucional oficial', 'territorios-de-vida' ); ?></span>
					</button>
					<div class="accordion__panel" id="vision-panel" aria-labelledby="vision-trigger" hidden data-accordion-panel>
						<p><?php esc_html_e( 'Al 2029, ser una institución pública sólida y articuladora, responsable de la gestión integral del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza, que conserve la biodiversidad y los servicios ecosistémicos y culturales, diseñe y ejecute proyectos sostenibles para los GADs miembros y los pueblos y nacionalidades indígenas, y actúe en coordinación con los distintos niveles de gobierno, garantizando la participación efectiva y los derechos colectivos sobre los territorios.', 'territorios-de-vida' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="timeline" aria-label="<?php esc_attr_e( 'Cronología institucional', 'territorios-de-vida' ); ?>">
			<?php foreach ( tdv_timeline_items() as $item ) : ?>
				<article class="timeline__item">
					<time datetime="<?php echo esc_attr( $item['year'] ); ?>"><?php echo esc_html( $item['year'] ); ?></time>
					<strong><?php echo esc_html( $item['date'] ); ?></strong>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="values-grid" aria-label="<?php esc_attr_e( 'Valores institucionales', 'territorios-de-vida' ); ?>">
			<?php foreach ( tdv_values() as $value ) : ?>
				<article class="value-card">
					<?php echo tdv_inline_svg( $value['icon'], 'value-card__icon' ); ?>
					<h3><?php echo esc_html( $value['title'] ); ?></h3>
					<p><?php echo esc_html( $value['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>


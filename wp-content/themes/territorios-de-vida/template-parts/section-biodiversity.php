<?php
/**
 * Biodiversity section.
 *
 * @package territorios-de-vida
 */

$blocks = array(
	array( 'title' => 'Flora', 'image' => 'img/flora-amazonia.jpg', 'webp' => 'img/flora-amazonia.webp', 'alt' => 'Vegetación amazónica y orquídeas referenciales de Ecuador', 'text' => 'El 95% de la flora provincial es bosque húmedo tropical con precipitaciones anuales de 2.000 a 4.000 mm. Destacan bromelias, helechos, sangre de drago, cedro, chontaduro y árboles gigantes.' ),
	array( 'title' => 'Fauna', 'image' => 'img/fauna-hoatzin.jpg', 'webp' => 'img/fauna-hoatzin.webp', 'alt' => 'Ave hoatzin en entorno amazónico referencial', 'text' => 'Pastaza alberga al 45% de los mamíferos amazónicos y supera las 800 especies de aves, equivalentes al 50% del total ecuatoriano. El Hoatzin es emblema de los ríos de Pastaza.' ),
	array( 'title' => 'Recursos hídricos', 'image' => 'img/rio-pastaza.jpg', 'webp' => 'img/rio-pastaza.webp', 'alt' => 'Río amazónico en territorio de Pastaza', 'text' => '3 cuencas hidrográficas principales: Río Pastaza, Río Tigre y Río Napo, con 161 microcuencas. Ríos estratégicos: Curaray, Bobonaza, Achuar, Conambo y Villano.' ),
);
?>
<section id="biodiversidad" class="section section--biodiversity" data-section="biodiversidad">
	<div class="container">
		<header class="section-heading section-heading--split">
			<div>
				<p class="section-kicker"><?php esc_html_e( 'Recursos naturales', 'territorios-de-vida' ); ?></p>
				<h2><?php esc_html_e( 'Biodiversidad y Recursos Naturales', 'territorios-de-vida' ); ?></h2>
			</div>
			<p class="section-lede"><?php esc_html_e( 'Flora, fauna, cuencas hidrográficas y presiones al territorio - Fuente: PDOT Pastaza 2026', 'territorios-de-vida' ); ?></p>
		</header>
		<p class="wide-copy"><?php esc_html_e( 'La provincia de Pastaza posee el 93,84% de su territorio cubierto por bosques nativos (2.816.144,81 ha), siendo el 85,74% del territorio provincial el que se encuentra bajo algún mecanismo de protección o manejo ambiental. Con 3 cuencas hidrográficas y 161 microcuencas, Pastaza es el gran reservorio hídrico amazónico del Ecuador.', 'territorios-de-vida' ); ?></p>
		<div class="metric-strip metric-strip--wide">
			<div><strong>93,84%</strong><span><?php esc_html_e( 'Bosques nativos', 'territorios-de-vida' ); ?></span></div>
			<div><strong>85,74%</strong><span><?php esc_html_e( 'Bajo protección', 'territorios-de-vida' ); ?></span></div>
			<div><strong>3</strong><span><?php esc_html_e( 'Cuencas hidrográficas', 'territorios-de-vida' ); ?></span></div>
			<div><strong>161</strong><span><?php esc_html_e( 'Microcuencas', 'territorios-de-vida' ); ?></span></div>
			<div><strong>+50%</strong><span><?php esc_html_e( 'Aves del Ecuador', 'territorios-de-vida' ); ?></span></div>
			<div><strong>7 Nac.</strong><span><?php esc_html_e( 'Nacionalidades Indígenas', 'territorios-de-vida' ); ?></span></div>
		</div>
		<div class="bio-grid">
			<?php foreach ( $blocks as $block ) : ?>
				<article class="bio-card">
					<picture>
						<source srcset="<?php echo esc_url( tdv_asset_uri( $block['webp'] ) ); ?>" type="image/webp">
						<img src="<?php echo esc_url( tdv_asset_uri( $block['image'] ) ); ?>" width="900" height="600" loading="lazy" alt="<?php echo esc_attr( $block['alt'] ); ?>">
					</picture>
					<div>
						<h3><?php echo esc_html( $block['title'] ); ?></h3>
						<p><?php echo esc_html( $block['text'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="gallery-categories" aria-label="<?php esc_attr_e( 'Categorías de galería previstas', 'territorios-de-vida' ); ?>">
			<span><?php esc_html_e( 'Fauna', 'territorios-de-vida' ); ?></span>
			<span><?php esc_html_e( 'Flora', 'territorios-de-vida' ); ?></span>
			<span><?php esc_html_e( 'Ríos', 'territorios-de-vida' ); ?></span>
			<span><?php esc_html_e( 'Comunidades Indígenas', 'territorios-de-vida' ); ?></span>
			<span><?php esc_html_e( 'Eventos Institucionales', 'territorios-de-vida' ); ?></span>
			<span><?php esc_html_e( 'Paisajes Amazónicos', 'territorios-de-vida' ); ?></span>
		</div>
	</div>
</section>


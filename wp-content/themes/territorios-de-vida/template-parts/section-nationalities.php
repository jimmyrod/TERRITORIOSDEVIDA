<?php
/**
 * Nationalities section.
 *
 * @package territorios-de-vida
 */

?>
<section id="nacionalidades" class="section section--earth" data-section="nacionalidades">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'Consejo Plurinacional', 'territorios-de-vida' ); ?></p>
			<h2><?php esc_html_e( 'Consejo Plurinacional - 7 Nacionalidades Indígenas', 'territorios-de-vida' ); ?></h2>
			<p class="section-lede"><?php esc_html_e( 'Conformado el 18/02/2022 mediante Acuerdo de Entendimiento | Fuente: Estatuto del Consorcio', 'territorios-de-vida' ); ?></p>
		</header>
		<p class="wide-copy"><?php esc_html_e( 'Pastaza alberga 7 de las 14 nacionalidades indígenas existentes a nivel nacional, que según el INEC Censo 2022 representan aproximadamente el 50,83% de la población provincial, sobre una población total de 111.915 habitantes. Sus Planes de Vida son el instrumento articulador central entre la gobernanza indígena y la gestión del Consorcio.', 'territorios-de-vida' ); ?></p>
		<div class="nationality-grid">
			<?php foreach ( tdv_nationalities() as $nation ) : ?>
				<article class="nationality-card nationality-card--<?php echo esc_attr( $nation['color'] ); ?>">
					<h3><?php echo esc_html( $nation['name'] ); ?></h3>
					<p class="nationality-card__abbr"><?php echo esc_html( $nation['abbr'] ); ?></p>
					<p><?php echo esc_html( $nation['org'] ); ?></p>
					<small><?php echo esc_html( $nation['status'] ); ?></small>
					<a href="<?php echo esc_url( home_url( '/nacionalidades/' . sanitize_title( $nation['name'] ) . '/' ) ); ?>"><?php esc_html_e( 'Ficha futura', 'territorios-de-vida' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
		<p class="ethical-note"><?php esc_html_e( 'El sitio usa lenguaje institucional respetuoso y no incorpora fotografías de personas, rostros o ceremonias sin licencia clara, consentimiento o fuente oficial autorizada.', 'territorios-de-vida' ); ?></p>
	</div>
</section>


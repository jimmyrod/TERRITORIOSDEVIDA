<?php
/**
 * Homepage hero.
 *
 * @package territorios-de-vida
 */

?>
<section id="inicio" class="hero-section" data-section="inicio">
	<picture class="hero-media" aria-hidden="true">
		<source srcset="<?php echo esc_url( tdv_asset_uri( 'img/hero-amazonia.webp' ) ); ?>" type="image/webp">
		<img src="<?php echo esc_url( tdv_asset_uri( 'img/hero-amazonia.jpg' ) ); ?>" width="1920" height="1080" alt="">
	</picture>
	<div class="hero-section__overlay"></div>
	<div class="hero-section__content container">
		<div class="hero-copy">
			<img class="hero-logo-mark" src="<?php echo esc_url( tdv_asset_uri( 'img/logo-territorios-mark.png' ) ); ?>" width="160" height="160" alt="" aria-hidden="true">
			<p class="hero-supertitle"><?php esc_html_e( 'GOBIERNO PROVINCIAL DE PASTAZA | PUYO, ECUADOR AMAZÓNICO | territoriosdevidapastaza.gob.ec', 'territorios-de-vida' ); ?></p>
			<h1 aria-label="<?php esc_attr_e( 'Territorios de Vida', 'territorios-de-vida' ); ?>"><span><?php esc_html_e( 'Territorios de', 'territorios-de-vida' ); ?></span><span><?php esc_html_e( 'Vida', 'territorios-de-vida' ); ?></span></h1>
			<p class="hero-subtitle"><?php esc_html_e( 'y Gobernanza de los Pueblos y Nacionalidades de la Provincia de Pastaza', 'territorios-de-vida' ); ?></p>
			<p class="hero-description"><?php esc_html_e( 'Consorcio para la Gestión Ambiental del Área Ecológica de Desarrollo Sostenible Provincial de Pastaza', 'territorios-de-vida' ); ?></p>
			<p class="hero-legal"><?php esc_html_e( 'Registro Oficial N.° 763 | 12 de febrero de 2019 | Puyo, Pastaza - Ecuador', 'territorios-de-vida' ); ?></p>
			<div class="button-row">
				<a class="button button--gold" href="#aedspp"><?php esc_html_e( 'Conoce el AEDSPP', 'territorios-de-vida' ); ?></a>
				<a class="button button--outline" href="#programas"><?php esc_html_e( 'Plan Estratégico 2026-2029', 'territorios-de-vida' ); ?></a>
				<a class="button button--outline" href="#brochure"><?php esc_html_e( 'Brochure institucional', 'territorios-de-vida' ); ?></a>
			</div>
		</div>
		<div class="hero-stats" aria-label="<?php esc_attr_e( 'Indicadores principales del Consorcio', 'territorios-de-vida' ); ?>">
			<div class="hero-stat"><strong>2.541.836 ha</strong><span><?php esc_html_e( 'AEDSPP', 'territorios-de-vida' ); ?></span></div>
			<div class="hero-stat"><strong>8 GADs</strong><span><?php esc_html_e( 'Miembros del Consorcio', 'territorios-de-vida' ); ?></span></div>
			<div class="hero-stat"><strong>7 Nac.</strong><span><?php esc_html_e( 'Nacionalidades Indígenas', 'territorios-de-vida' ); ?></span></div>
			<div class="hero-stat"><strong>10 ONGs</strong><span><?php esc_html_e( 'Aliadas Cooperación', 'territorios-de-vida' ); ?></span></div>
		</div>
	</div>
	<a class="scroll-indicator" href="#quienes-somos" aria-label="<?php esc_attr_e( 'Ir a Sobre el Consorcio', 'territorios-de-vida' ); ?>"></a>
</section>

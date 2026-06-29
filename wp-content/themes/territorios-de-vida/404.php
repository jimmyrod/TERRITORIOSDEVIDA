<?php
/**
 * 404 template.
 *
 * @package territorios-de-vida
 */

get_header();
?>
<section class="section section--deep error-page">
	<div class="container container--narrow">
		<p class="section-kicker"><?php esc_html_e( 'Página no encontrada', 'territorios-de-vida' ); ?></p>
		<h1><?php esc_html_e( 'El contenido solicitado no está disponible.', 'territorios-de-vida' ); ?></h1>
		<p><?php esc_html_e( 'Puedes volver al inicio o revisar el portal de transparencia y noticias institucionales.', 'territorios-de-vida' ); ?></p>
		<div class="button-row">
			<a class="button button--gold" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Volver al inicio', 'territorios-de-vida' ); ?></a>
			<a class="button button--light" href="<?php echo esc_url( tdv_anchor_url( 'transparencia' ) ); ?>"><?php esc_html_e( 'Portal de Transparencia', 'territorios-de-vida' ); ?></a>
		</div>
	</div>
</section>
<?php
get_footer();

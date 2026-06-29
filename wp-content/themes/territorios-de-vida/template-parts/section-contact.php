<?php
/**
 * Contact section.
 *
 * @package territorios-de-vida
 */

?>
<section id="contacto" class="section section--contact" data-section="contacto">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'Cooperación institucional', 'territorios-de-vida' ); ?></p>
			<h2><?php esc_html_e( 'Contacto', 'territorios-de-vida' ); ?></h2>
		</header>
		<div class="contact-layout">
			<div class="contact-info">
				<h3><?php esc_html_e( 'Consorcio para la Gestión Ambiental del AEDSPP', 'territorios-de-vida' ); ?></h3>
				<p><?php esc_html_e( 'Territorios de Vida y Gobernanza de los Pueblos y Nacionalidades de Pastaza', 'territorios-de-vida' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Sede permanente: Ciudad del Puyo, Pastaza - Ecuador', 'territorios-de-vida' ); ?></li>
					<li><a href="mailto:info@territoriosdevidapastaza.gob.ec">info@territoriosdevidapastaza.gob.ec</a></li>
					<li><a href="https://territoriosdevidapastaza.gob.ec">territoriosdevidapastaza.gob.ec</a></li>
				</ul>
				<div class="location-panel">
					<h4><?php esc_html_e( 'Ubicación', 'territorios-de-vida' ); ?></h4>
					<p><?php esc_html_e( 'Ciudad del Puyo, Pastaza, Ecuador. Lat: 1.4862 S | Lon: 77.9970 W. Capital provincial de Pastaza, centro de la Amazonía ecuatoriana.', 'territorios-de-vida' ); ?></p>
					<p><?php esc_html_e( 'Espacio preparado para mapa estático u OpenStreetMap bajo consentimiento. No se carga iframe externo por defecto.', 'territorios-de-vida' ); ?></p>
				</div>
			</div>
			<form class="contact-form" action="#" method="post" data-contact-form>
				<?php wp_nonce_field( 'tdv_contact_placeholder', 'tdv_contact_nonce' ); ?>
				<p class="form-note"><?php esc_html_e( 'Formulario preparado para integración SMTP segura. No envía correos hasta configurar el servidor autorizado.', 'territorios-de-vida' ); ?></p>
				<label>
					<span><?php esc_html_e( 'Nombre completo', 'territorios-de-vida' ); ?></span>
					<input type="text" name="nombre" autocomplete="name" required>
				</label>
				<label>
					<span><?php esc_html_e( 'Correo electrónico', 'territorios-de-vida' ); ?></span>
					<input type="email" name="correo" autocomplete="email" required>
				</label>
				<label>
					<span><?php esc_html_e( 'Institución / Organización', 'territorios-de-vida' ); ?></span>
					<input type="text" name="institucion" autocomplete="organization">
				</label>
				<label>
					<span><?php esc_html_e( 'Asunto', 'territorios-de-vida' ); ?></span>
					<input type="text" name="asunto" required>
				</label>
				<label>
					<span><?php esc_html_e( 'Tipo de consulta', 'territorios-de-vida' ); ?></span>
					<select name="tipo-consulta" required>
						<option value=""><?php esc_html_e( 'Selecciona una opción', 'territorios-de-vida' ); ?></option>
						<option><?php esc_html_e( 'Cooperación Internacional', 'territorios-de-vida' ); ?></option>
						<option><?php esc_html_e( 'Planes de Vida / Nacionalidades', 'territorios-de-vida' ); ?></option>
						<option><?php esc_html_e( 'REDD+ / Bioeconomía', 'territorios-de-vida' ); ?></option>
						<option><?php esc_html_e( 'Transparencia / Documentos', 'territorios-de-vida' ); ?></option>
						<option><?php esc_html_e( 'Otro', 'territorios-de-vida' ); ?></option>
					</select>
				</label>
				<label class="contact-form__full">
					<span><?php esc_html_e( 'Mensaje', 'territorios-de-vida' ); ?></span>
					<textarea name="mensaje" rows="5" required></textarea>
				</label>
				<button class="button button--gold" type="submit"><?php esc_html_e( 'Enviar mensaje', 'territorios-de-vida' ); ?></button>
				<p class="form-status" role="status" data-form-status></p>
			</form>
		</div>
		<div class="final-ctas">
			<a class="button button--dark" href="#programas"><?php esc_html_e( 'Conoce el Plan Estratégico 2026-2029', 'territorios-de-vida' ); ?></a>
			<a class="button button--gold" href="#transparencia"><?php esc_html_e( 'Accede al Portal de Transparencia', 'territorios-de-vida' ); ?></a>
			<a class="button button--earth" href="#contacto"><?php esc_html_e( 'Contáctanos para cooperación institucional', 'territorios-de-vida' ); ?></a>
		</div>
	</div>
</section>


<?php
/**
 * Governance section.
 *
 * @package territorios-de-vida
 */

?>
<section id="gobernanza" class="section section--white" data-section="gobernanza">
	<div class="container">
		<header class="section-heading section-heading--split">
			<div>
				<p class="section-kicker"><?php esc_html_e( 'Órganos institucionales', 'territorios-de-vida' ); ?></p>
				<h2><?php esc_html_e( 'Estructura de Gobernanza', 'territorios-de-vida' ); ?></h2>
			</div>
			<p class="section-lede"><?php esc_html_e( 'Órganos institucionales y Directorio Oficial - Fuente: Estatuto y PEI 2026-2029', 'territorios-de-vida' ); ?></p>
		</header>
		<div class="organigram" aria-label="<?php esc_attr_e( 'Organigrama institucional', 'territorios-de-vida' ); ?>">
			<div class="organigram__node organigram__node--primary">
				<h3><?php esc_html_e( 'Órgano de Gobierno', 'territorios-de-vida' ); ?></h3>
				<p><?php esc_html_e( 'Asamblea General y Directorio', 'territorios-de-vida' ); ?></p>
			</div>
			<div class="organigram__node">
				<h3><?php esc_html_e( 'Órgano de Gestión', 'territorios-de-vida' ); ?></h3>
				<p><?php esc_html_e( 'Coordinación Técnica', 'territorios-de-vida' ); ?></p>
			</div>
			<div class="organigram__node">
				<h3><?php esc_html_e( 'Órgano de Consulta', 'territorios-de-vida' ); ?></h3>
				<p><?php esc_html_e( 'Consejo Consultivo/Plurinacional de Pueblos y Nacionalidades Indígenas de Pastaza', 'territorios-de-vida' ); ?></p>
			</div>
		</div>
		<div class="director-grid">
			<?php foreach ( tdv_board_members() as $member ) : ?>
				<article class="director-card">
					<p class="director-card__role"><?php echo esc_html( $member['role'] ); ?></p>
					<h3><?php echo esc_html( $member['name'] ); ?></h3>
					<p><?php echo esc_html( $member['institution'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="technical-team">
			<h3><?php esc_html_e( 'Equipo técnico operativo', 'territorios-de-vida' ); ?></h3>
			<ul>
				<li><strong><?php esc_html_e( 'Coordinador Técnico:', 'territorios-de-vida' ); ?></strong> <?php esc_html_e( 'Mgs. Ricardo Esteban Tapia Cedeño - Grado 16 - $2.308 USD/mes.', 'territorios-de-vida' ); ?></li>
				<li><strong><?php esc_html_e( 'Analista Técnico:', 'territorios-de-vida' ); ?></strong> <?php esc_html_e( 'Josué Aguirre - Grado 12 - $1.412 USD/mes.', 'territorios-de-vida' ); ?></li>
				<li><strong><?php esc_html_e( 'Contadora / Secretaria:', 'territorios-de-vida' ); ?></strong> <?php esc_html_e( 'Según designación vigente - Grado 10 - $1.086 USD/mes.', 'territorios-de-vida' ); ?></li>
			</ul>
		</div>
	</div>
</section>


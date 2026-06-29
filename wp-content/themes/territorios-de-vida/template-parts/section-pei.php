<?php
/**
 * PEI section.
 *
 * @package territorios-de-vida
 */

?>
<section id="programas" class="section section--pei" data-section="programas">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'PEI vigente', 'territorios-de-vida' ); ?></p>
			<h2><?php esc_html_e( 'Plan Estratégico Institucional 2026-2029', 'territorios-de-vida' ); ?></h2>
			<p class="section-lede"><?php esc_html_e( '3 Objetivos Estratégicos | 7 Programas | Presupuesto institucional cuatrianual', 'territorios-de-vida' ); ?></p>
		</header>
		<p class="wide-copy"><?php esc_html_e( 'El Plan Estratégico Institucional (PEI) 2026-2029 marca un punto de inflexión para el Consorcio: transformarlo en una entidad moderna, eficiente y LEAN, con un modelo de gobierno dinámico y transparente que incorpora mecanismos digitales de rendición de cuentas en tiempo real.', 'territorios-de-vida' ); ?></p>
		<div class="objective-grid">
			<?php foreach ( tdv_strategic_objectives() as $objective ) : ?>
				<article class="objective-card objective-card--<?php echo esc_attr( $objective['tone'] ); ?>">
					<p><?php echo esc_html( $objective['key'] ); ?></p>
					<h3><?php echo esc_html( $objective['title'] ); ?></h3>
					<p><?php echo esc_html( $objective['text'] ); ?></p>
					<small><?php echo esc_html( $objective['meta'] ); ?></small>
					<strong><?php echo esc_html( $objective['program'] ); ?></strong>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="budget-layout">
			<div class="table-wrap" role="region" aria-label="<?php esc_attr_e( 'Tabla de presupuesto institucional 2026-2029', 'territorios-de-vida' ); ?>" tabindex="0">
				<table class="budget-table">
					<caption><?php esc_html_e( 'Presupuesto institucional 2026-2029', 'territorios-de-vida' ); ?></caption>
					<thead>
						<tr>
							<th scope="col"><?php esc_html_e( 'Año', 'territorios-de-vida' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Inversión', 'territorios-de-vida' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Gasto corriente', 'territorios-de-vida' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Total', 'territorios-de-vida' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Programas', 'territorios-de-vida' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( tdv_budget_rows() as $row ) : ?>
							<tr>
								<th scope="row"><?php echo esc_html( $row['year'] ); ?></th>
								<td><?php echo esc_html( $row['investment'] ); ?></td>
								<td><?php echo esc_html( $row['current'] ); ?></td>
								<td><?php echo esc_html( $row['total'] ); ?></td>
								<td><?php echo esc_html( $row['programs'] ); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="budget-chart" aria-label="<?php esc_attr_e( 'Gráfico visual del presupuesto por año', 'territorios-de-vida' ); ?>">
				<div style="--bar-size: 96%"><span>2026</span></div>
				<div style="--bar-size: 8%"><span>2027</span></div>
				<div style="--bar-size: 97%"><span>2028</span></div>
				<div style="--bar-size: 18%"><span>2029</span></div>
			</div>
		</div>
		<?php /* TODO: Confirmar valor final del presupuesto antes de producción. La propuesta web contiene $3.682.061,11 y el PEI extraído contiene $3.662.061,11. */ ?>
		<p class="document-note"><?php esc_html_e( 'Valor final sujeto a confirmación documental: existe diferencia entre $3.662.061,11 y $3.682.061,11 en los documentos revisados.', 'territorios-de-vida' ); ?></p>
	</div>
</section>


<?php
/**
 * Transparency section.
 *
 * @package territorios-de-vida
 */

?>
<section id="transparencia" class="section section--transparency" data-section="transparencia">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'Gobierno abierto', 'territorios-de-vida' ); ?></p>
			<h2><?php esc_html_e( 'Transparencia y Noticias', 'territorios-de-vida' ); ?></h2>
			<p class="section-lede"><?php esc_html_e( 'Gobierno abierto, rendición de cuentas CPCCS y documentos públicos - OEI 3 del PEI 2026-2029', 'territorios-de-vida' ); ?></p>
		</header>
		<p class="wide-copy"><?php esc_html_e( 'El Consorcio asume la transparencia y la rendición de cuentas como uno de sus compromisos fundamentales del PEI 2026-2029. Esta sección publica la ejecución presupuestaria, informes trimestrales, documentos normativos, resoluciones y toda la información de interés público.', 'territorios-de-vida' ); ?></p>
		<form class="document-filters" data-document-filters aria-label="<?php esc_attr_e( 'Filtros del portal de documentos', 'territorios-de-vida' ); ?>">
			<label>
				<span><?php esc_html_e( 'Año', 'territorios-de-vida' ); ?></span>
				<select name="year" data-filter-year>
					<option value=""><?php esc_html_e( 'Todos', 'territorios-de-vida' ); ?></option>
					<option value="2026">2026</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2017">2017</option>
				</select>
			</label>
			<label>
				<span><?php esc_html_e( 'Tipo de documento', 'territorios-de-vida' ); ?></span>
				<select name="type" data-filter-type>
					<option value=""><?php esc_html_e( 'Todos', 'territorios-de-vida' ); ?></option>
					<option value="normativa"><?php esc_html_e( 'Normativa', 'territorios-de-vida' ); ?></option>
					<option value="planificación"><?php esc_html_e( 'Planificación', 'territorios-de-vida' ); ?></option>
					<option value="presupuesto"><?php esc_html_e( 'Presupuesto', 'territorios-de-vida' ); ?></option>
					<option value="rendición"><?php esc_html_e( 'Rendición', 'territorios-de-vida' ); ?></option>
				</select>
			</label>
			<label>
				<span><?php esc_html_e( 'Buscar', 'territorios-de-vida' ); ?></span>
				<input type="search" name="search" placeholder="<?php esc_attr_e( 'Documento o área', 'territorios-de-vida' ); ?>" data-filter-search>
			</label>
		</form>
		<div class="table-wrap" role="region" aria-label="<?php esc_attr_e( 'Documentos oficiales para descarga', 'territorios-de-vida' ); ?>" tabindex="0">
			<table class="document-table">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Documento', 'territorios-de-vida' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Tipo', 'territorios-de-vida' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Año', 'territorios-de-vida' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Área responsable', 'territorios-de-vida' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Estado', 'territorios-de-vida' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Descarga', 'territorios-de-vida' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( tdv_official_documents() as $document ) : ?>
						<tr data-document-row data-year="<?php echo esc_attr( $document['year'] ); ?>" data-type="<?php echo esc_attr( strtolower( $document['type'] ) ); ?>" data-title="<?php echo esc_attr( strtolower( $document['title'] . ' ' . $document['area'] ) ); ?>">
							<th scope="row"><?php echo tdv_inline_svg( 'pdf', 'document-icon' ); ?> <?php echo esc_html( $document['title'] ); ?></th>
							<td><?php echo esc_html( $document['type'] ); ?></td>
							<td><?php echo esc_html( $document['year'] ); ?></td>
							<td><?php echo esc_html( $document['area'] ); ?></td>
							<td><?php echo esc_html( $document['status'] ); ?></td>
							<td>
								<?php if ( ! empty( $document['file'] ) ) : ?>
									<a class="download-link" href="<?php echo esc_url( tdv_document_uri( $document['file'] ) ); ?>" download><?php esc_html_e( 'PDF', 'territorios-de-vida' ); ?></a>
								<?php else : ?>
									<span class="muted"><?php esc_html_e( 'Por publicar', 'territorios-de-vida' ); ?></span>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div id="noticias" class="news-grid" data-section="noticias">
			<?php foreach ( tdv_news_items() as $news ) : ?>
				<article class="news-card">
					<time><?php echo esc_html( $news['date'] ); ?></time>
					<h3><?php echo esc_html( $news['title'] ); ?></h3>
					<p><?php echo esc_html( $news['summary'] ); ?></p>
					<span><?php echo esc_html( $news['tag'] ); ?></span>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>


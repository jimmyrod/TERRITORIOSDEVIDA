<?php
/**
 * Template Name: Noticias
 *
 * @package territorios-de-vida
 */

get_header();
?>
<section class="section section--plain">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'Noticias', 'territorios-de-vida' ); ?></p>
			<h1><?php esc_html_e( 'Actualidad institucional', 'territorios-de-vida' ); ?></h1>
		</header>
		<div class="news-grid">
			<?php foreach ( tdv_news_items() as $news ) : ?>
				<article class="news-card">
					<time><?php echo esc_html( $news['date'] ); ?></time>
					<h2><?php echo esc_html( $news['title'] ); ?></h2>
					<p><?php echo esc_html( $news['summary'] ); ?></p>
					<span><?php echo esc_html( $news['tag'] ); ?></span>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
get_footer();


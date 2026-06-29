<?php
/**
 * Default index.
 *
 * @package territorios-de-vida
 */

get_header();
?>
<section class="section section--plain archive-shell">
	<div class="container">
		<header class="section-heading">
			<p class="section-kicker"><?php esc_html_e( 'Archivo institucional', 'territorios-de-vida' ); ?></p>
			<h1><?php single_post_title(); ?></h1>
		</header>
		<?php if ( have_posts() ) : ?>
			<div class="archive-list">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'archive-card' ); ?>>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
					</article>
				<?php endwhile; ?>
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No se encontraron contenidos publicados.', 'territorios-de-vida' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();


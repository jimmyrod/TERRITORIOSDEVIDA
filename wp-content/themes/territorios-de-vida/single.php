<?php
/**
 * Single post template.
 *
 * @package territorios-de-vida
 */

get_header();
?>
<section class="section section--plain page-shell">
	<div class="container container--narrow">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<header class="section-heading">
					<?php
					$tdv_post_type_object = get_post_type_object( get_post_type() );
					$tdv_post_type_label  = ( $tdv_post_type_object && isset( $tdv_post_type_object->labels->singular_name ) ) ? $tdv_post_type_object->labels->singular_name : __( 'Publicación', 'territorios-de-vida' );
					?>
					<p class="section-kicker"><?php echo esc_html( $tdv_post_type_label ); ?></p>
					<h1><?php the_title(); ?></h1>
					<p class="entry-meta"><?php echo esc_html( get_the_date() ); ?></p>
				</header>
				<?php if ( has_post_thumbnail() ) : ?>
					<figure class="entry-featured"><?php the_post_thumbnail( 'large' ); ?></figure>
				<?php endif; ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();

<?php
/**
 * Site footer.
 *
 * @package territorios-de-vida
 */

?>
</main>
<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="site-footer__brand">
			<p class="footer-title"><?php esc_html_e( 'TERRITORIOS DE VIDA - PASTAZA', 'territorios-de-vida' ); ?></p>
			<p><?php esc_html_e( 'Consorcio para la Gestión Ambiental del AEDSPP', 'territorios-de-vida' ); ?></p>
			<p><?php esc_html_e( 'Reg. Oficial N.° 763 | 12/02/2019 | Puyo, Pastaza - Ecuador', 'territorios-de-vida' ); ?></p>
		</div>
		<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Menú de pie de página', 'territorios-de-vida' ); ?>">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-nav__list',
						'container'      => false,
						'fallback_cb'    => false,
						'depth'          => 1,
					)
				);
				?>
			<?php else : ?>
				<ul class="footer-nav__list">
					<?php foreach ( tdv_default_menu_items() as $item ) : ?>
						<li><a href="<?php echo esc_url( tdv_anchor_url( $item['anchor'] ) ); ?>"><?php echo esc_html( $item['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</nav>
		<div class="site-footer__contact">
			<a href="mailto:info@territoriosdevidapastaza.gob.ec">info@territoriosdevidapastaza.gob.ec</a>
			<a href="https://territoriosdevidapastaza.gob.ec">territoriosdevidapastaza.gob.ec</a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>


<?php
/**
 * Site header.
 *
 * @package territorios-de-vida
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#contenido-principal"><?php esc_html_e( 'Saltar al contenido principal', 'territorios-de-vida' ); ?></a>
<header class="site-header" data-site-header>
	<div class="site-header__bar"></div>
	<div class="site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Territorios de Vida - inicio', 'territorios-de-vida' ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<span class="brand__logo"><?php the_custom_logo(); ?></span>
			<?php else : ?>
				<span class="brand__mark" aria-hidden="true"><?php echo tdv_inline_svg( 'leaf', 'brand__icon' ); ?></span>
			<?php endif; ?>
			<span class="brand__text">
				<strong><?php esc_html_e( 'TERRITORIOS DE VIDA', 'territorios-de-vida' ); ?></strong>
				<small><?php esc_html_e( 'Consorcio GAAEDSPPz | Pastaza - Ecuador', 'territorios-de-vida' ); ?></small>
			</span>
		</a>
		<button class="nav-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" data-nav-toggle>
			<span class="nav-toggle__line"></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Abrir menú principal', 'territorios-de-vida' ); ?></span>
		</button>
		<nav id="primary-navigation" class="primary-nav" aria-label="<?php esc_attr_e( 'Menú principal', 'territorios-de-vida' ); ?>" data-primary-nav>
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-nav__list',
						'container'      => false,
						'fallback_cb'    => false,
						'depth'          => 1,
					)
				);
			} else {
				echo '<ul class="primary-nav__list">';
				foreach ( tdv_default_menu_items() as $item ) {
					echo '<li><a href="' . esc_url( tdv_anchor_url( $item['anchor'] ) ) . '" data-nav-link="' . esc_attr( $item['anchor'] ) . '">' . esc_html( $item['label'] ) . '</a></li>';
				}
				echo '</ul>';
			}
			?>
			<a class="button button--small button--gold" href="<?php echo esc_url( tdv_anchor_url( 'transparencia' ) ); ?>"><?php esc_html_e( 'Transparencia', 'territorios-de-vida' ); ?></a>
		</nav>
	</div>
</header>
<main id="contenido-principal" class="site-main">


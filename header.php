<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clever_Fox_Media
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cfm' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-header">
			<div class="constrain">
			
				<div class="header-contact">
					<a class="ltgray-text" href="tel:7322660812"><i class="accent-text fas fa-phone"></i> Call Us</a>
					<a class="ltgray-text" href="mailto:contact@cleverfoxmedia.net"><i class="accent-text fas fa-envelope"></i> Email Us</a>
				</div>

				<div id="header-connect" class="header-connect">
					<a id="connect-open" class="social-icon" href="#"><i class="fas fa-ellipsis-h"></i></a>
					<?php social_media_list(); ?>
					<a class="ltgray-text clogin" href="/wp-admin">Client Login</a>
				</div>

			</div><!-- .contstrain -->
		</div>
		<div class="main-header">
			<div class="constrain">
				<div class="site-branding">
						<a class="top-logo" style="background-image:url('<?php echo get_theme_mod( 'cfm_logo' ); ?>');" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
				
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .constrain -->
		</div><!-- .main-header -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

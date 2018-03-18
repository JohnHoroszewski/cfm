<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clever_Fox_Media
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="top-footer">
			<div class="constrain flexxed">
			
			<?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_column_1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_column_2' ); ?>
				</div>
			<?php endif; ?>
	
			<?php if ( is_active_sidebar( 'footer_column_3' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_column_3' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer_column_4' ) ) : ?>
				<div class="footer-col">
					<?php dynamic_sidebar( 'footer_column_4' ); ?>
				</div>
			<?php endif; ?>

			</div><!-- .constrain -->
		</div><!-- .top-footer -->

		<div class="bottom-footer">
			<div class="constrain">
				<div class="copyright footer-info">
					&reg;<?php the_date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.
				</div>
				<div class="bf-links footer-info">
					<?php if ( get_theme_mod( 'cfm_site_map' ) ) : ?>
						<div class="sitemap">
							<a href="<?php echo get_theme_mod( 'cfm_site_map' ); ?>">Site Map</a>
						</div>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'cfm_privacy_policy' ) ) : ?>
						<div class="privacypolicy">
							<a href="<?php echo get_theme_mod( 'cfm_privacy_policy' ); ?>">Privacy Policy</a>
						</div>
					<?php endif; ?>
				</div>
			</div><!-- .constrain -->
		</div><!-- .bottom-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

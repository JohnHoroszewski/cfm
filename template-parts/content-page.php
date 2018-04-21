<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clever_Fox_Media
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php cfm_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cfm' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'cfm' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
<section class="cta-module parallax <?php the_field( 'module_margin' ); ?>" style="background-image:url( '<?php echo get_theme_mod( 'theme_cta_background_image' ); ?>' );">
    <div class="constrain flexxed">

        <div class="cta-content p50">
            <h3><?php echo get_theme_mod( 'theme_cta_heading' ); ?></h3>
            <div class="text-block">
                <?php echo get_theme_mod( 'theme_cta_text' ); ?>
            </div>
        </div>

        <div class="cta-btn-block <?php the_field( 'contact_cta_module_background_color' ); ?>">
            <div class="cta-snippet">
                <?php echo get_theme_mod( 'theme_cta_button_snippet' ); ?>
            </div>
            <a class="<?php the_field( 'contact_cta_button_color' ); ?> btn-md" href="<?php echo get_theme_mod( 'theme_cta_button_url' ); ?>">
                <?php echo get_theme_mod( 'theme_cta_button_text' ); ?>
            </a>
        </div>
    </div><!-- .constrain -->
</section><!-- .cta-module -->

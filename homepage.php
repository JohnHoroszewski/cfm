<?php
/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clever_Fox_Media
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section class="home-slider">

                <?php if ( have_rows( 'home_slider' ) ) : ?>
                    <?php while ( have_rows( 'home_slider' ) ) : the_row(); ?>

                        <div class="slide">
                            <?php $sImage = get_sub_field( 'slide_image' ); ?>
                            <img src="<?php echo $sImage[ 'url' ] ?>" alt="<?php echo $sImage[ 'alt' ] ?>">
                            <div class="slide-content">
                                <h2><?php the_sub_field( 'slide_headinh' ); ?></h2>
                                <div class="slide-text">
                                    <?php the_sub_field( 'slide_content' ); ?>

                                    <?php if ( get_sub_field( 'slide_cta_text' ) ) : ?>
                                        <a style="<?php the_sub_field( 'slide_cta_color' ); ?> <?php the_sub_field( 'slide_cta_style' ); ?>" href="<?php the_sub_field( 'slide_cta_url' ); ?>"><?php the_sub_field( 'slide_cta_text' ); ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

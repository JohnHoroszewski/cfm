<?php
/**
 * Template part for displaying page content in single-service.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clever_Fox_Media
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'service' ); ?>>
    <?php $pBanner = get_field( 'top_banner_image' ); ?>
    <div class="page-banner" style="background-image:url('<?php echo $pBanner[ 'url' ]; ?>');">
        <div class="constrain">
            <div class="big-title">Service</div>
        </div>
    </div>
    
    <section class="page-intro p50">
        <div class="constrain">
            <div class="intro-block service-intro flexxed">
                <div class="services-text">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_field( 'intro_text' ); ?>
                </div>
                <div class="services-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div><!-- .constrain -->
    </section><!-- .page-intro -->

    <section class="portfolio-cta-module p50 <?php the_field( 'portfolio_cta_module_background_color' ); ?> <?php the_field( 'second_module_margin' ); ?>">
        <div class="constrain flexxed">
            <div class="cta-text">
            <h3>Want to see some of our most Recent Work?</br>
            Check out our Clients</h3>
            </div>
            <a href="/clients/" class="btn-lg <?php the_field( 'portfolio_cta_module_button_color' ); ?> white-text">Clients</a>
        </div><!-- .contrain -->
    </section><!-- .portfolio-cta-module -->

    <section class="service-content p50">
        <div class="constrain">
            <?php the_content(); ?>
        </div><!-- .constrain -->
    </section><!-- .service-content -->

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
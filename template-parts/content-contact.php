<?php
/**
 * Template part for displaying page content in contact-templatge.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clever_Fox_Media
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'contact' ); ?>>
    <?php $pBanner = get_field( 'top_banner_image' ); ?>
    <div class="page-banner" style="background-image:url('<?php echo $pBanner[ 'url' ]; ?>');">
        <div class="constrain">
            <div class="big-title">Contact Us</div>
        </div>
    </div>
    
    <section class="page-intro p50">
    <div class="constrain">
        <div class="intro-block">
            <h2>
                <?php the_field( 'intro_title' ); ?>
            </h2>
            <div class="intro-text">
                <?php the_field( 'intro_text' ); ?>
            </div>
            <div class="contact-blocks flexxed">
            <div class="c-block">
                <h3><span class="dkgray-text">Find</span> Us</h3>
                <div class="contact-item"><?php echo get_theme_mod( 'theme_company_street' ); ?></div>
                <div class="contact-item"><?php echo get_theme_mod( 'theme_company_city' ); ?>, <?php echo get_theme_mod( 'theme_company_state' ); ?> <?php echo get_theme_mod( 'theme_company_zip' ); ?></div>
            </div>
            <div class="c-block">
                <h3><span class="dkgray-text">Contact</span> Us</h3>
                <div class="contact-item"><a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"></a><?php echo get_theme_mod( 'theme_company_phone' ); ?></div>
                <div class="contact-item"><a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"></a><?php echo get_theme_mod( 'theme_company_email' ); ?></div>
            </div>
            <div class="c-block">
                <h3><span class="dkgray-text">Connect</span> with Us</h3>
                <?php social_media_list(); ?>
            </div>
        </div>
        </div>
    </div>
</section>

    <section class="contact-content p50">
        <div class="constrain">
            <div class="contact-form">
                <?php the_content(); ?>
            </div>
        </div><!-- .constrain -->
    </section><!-- .service-content -->

    <section class="gmap">
        <?php echo get_theme_mod( 'theme_company_gmap' ); ?>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->

<section class="portfolio-cta-module p50 <?php the_field( 'portfolio_cta_module_background_color' ); ?> <?php the_field( 'second_module_margin' ); ?>">
        <div class="constrain flexxed">
            <div class="cta-text">
            <h3>Want to see some of our most Recent Work?</br>
            Check out our Clients</h3>
            </div>
            <a href="/clients/" class="btn-lg <?php the_field( 'portfolio_cta_module_button_color' ); ?> white-text">Clients</a>
        </div><!-- .contrain -->
    </section><!-- .portfolio-cta-module -->
</section><!-- .cta-module -->
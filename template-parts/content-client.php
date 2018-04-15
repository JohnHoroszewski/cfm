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
    <?php $pBanner = get_field( 'top_banner_image' ); ?>
    <div class="page-banner" style="background-image:url('<?php echo $pBanner[ 'url' ]; ?>');">
        <div class="constrain">
            <div class="big-title">CLIENT</div>
        </div>
    </div>
    
    <section class="page-intro p50">
        <div class="constrain">
            <div class="intro-block client-intro flexxed">
                <div class="project-text">
                    <h1>
                        <?php the_field( 'intro_title' ); ?>
                    </h1>
                    <div class="intro-text">
                        <?php the_field( 'intro_text' ); ?>
                    </div>
                    <div class="intro-share">
                        <h5>Wanna Share?</h5>
                        <div class="share-icons">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-details">
                    <h5>Project Details:</h5>
                    <?php if ( get_field( 'project_type' ) ) : ?>
                        <div class="type detail">
                            <div class="detail-title">
                                Type:
                            </div>
                            <div class="detail-content">
                                <?php the_field( 'project_type' ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ( get_field( 'platform' ) ) : ?>
                        <div class="platform detail">
                            <div class="detail-title">
                                Platform:
                            </div>
                            <div class="detail-content">
                                <?php the_field( 'platform' ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ( get_field( 'technology_used' ) ) : ?>
                        <div class="tech detail">
                            <div class="detail-title">
                                Technology:
                            </div>
                            <div class="detail-content">
                                <?php the_field( 'technology_used' ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ( get_field( 'client_sector' ) ) : ?>
                        <div class="tech detail">
                            <div class="detail-title">
                                Client Sector:
                            </div>
                            <div class="detail-content">
                                <?php the_field( 'client_sector' ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <a target="_blank" href="<?php the_field( 'client_url' ); ?>" class="client-website btn btn-md dkgray-bg white-text">Visit Site</a>
                </div>
            </div>
        </div><!-- .constrain -->
    </section><!-- .page-intro -->

    <section class="top-images p50">
        <div class="constrain flexxed">
            <div class="full-width">
                <?php $fwImage = get_field( 'full_width_image' ); ?>
                <img src="<?php echo $fwImage[ 'url' ]; ?>" alt="<?php echo $fwImage[ 'url' ]; ?>">
            </div>
            <div class="third-width">
                <?php $qImage = get_field( 'quarter_image' ); ?>
                <img src="<?php echo $qImage[ 'url' ]; ?>" alt="<?php echo $qImage[ 'url' ]; ?>">
            </div>
            <div class="twothird-width">
                <?php $tqImage = get_field( 'three_quarter_image' ); ?>
                <img src="<?php echo $tqImage[ 'url' ]; ?>" alt="<?php echo $tqImage[ 'url' ]; ?>">
            </div>
        </div><!-- .constrain -->
    </section><!-- .top-images -->

    <?php if ( get_field( 'additional_project_information' ) ) : ?>
        <section class="client-additional p50 dkgray-bg">
            <div class="constrain">
                <h4>Additonal Information</h4>
                <div class="additional-content">
                    <?php the_field( 'additional_project_information' ); ?>
                </div>
            </div><!-- .constrain -->
        </section><!-- .client-additional -->
    <?php endif; ?>

    <section class="full-image p50 ltgray-bg">
        <div class="constrain ">
            <?php $fsImage = get_field( 'full_screen_image' ); ?>
            <img src="<?php echo $fsImage[ 'url' ]; ?>" alt="<?php echo $fsImage[ 'url' ]; ?>">
        </div><!-- .constrain -->
    </section><!-- .top-images -->

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
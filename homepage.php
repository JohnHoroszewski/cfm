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
                            <div class="slide-image">
                                <img src="<?php echo $sImage[ 'url' ] ?>" alt="<?php echo $sImage[ 'alt' ] ?>">
                            </div>
                            <div class="slide-content">
                                <div class="slide-text-wrapper">
                                    <h2><?php the_sub_field( 'slide_heading' ); ?></h2>
                                    <div class="slide-text">
                                        <?php the_sub_field( 'slide_content' ); ?>
                                        <?php if ( get_sub_field( 'slide_cta_text' ) ) : ?>
                                            <a class="<?php the_sub_field( 'slide_cta_color' ); ?> <?php the_sub_field( 'slide_cta_style' ); ?> btn-md" href="<?php the_sub_field( 'slide_cta_url' ); ?>"><?php the_sub_field( 'slide_cta_text' ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </section><!-- .slider -->

            <section class="page-intro p50">
                <div class="constrain">
                    <div class="intro-block flexxed">
                        <h2>
                            <?php the_field( 'intro_title' ); ?>
                        </h2>
                        <div class="intro-text">
                            <?php the_field( 'intro_text' ); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="services-list p50">
                <div class="constrain">

                    <?php
                        query_posts( array( 'post_type' => 'service', 'orderby' => 'menu_order', 'showposts' => -1 ) ); ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="service-item flexxed">
                                <div class="service-content-container">
                                    <div class="service-content">
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_excerpt(); ?>
                                        <a class="btn-lg accent-bg" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>
                                <div class="service-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div><!-- .constrain -->
            </section><!-- .services-list -->

            <section class="cta-module parallax <?php the_field( 'module_margin' ); ?>" style="background-image:url( '<?php echo get_theme_mod( 'theme_cta_background_image' ); ?>' );">
                <div class="constrain flexxed">

                    <div class="cta-content p50">
                        <h3><?php echo get_theme_mod( 'theme_cta_heading' ); ?></h3>
                        <div class="text-block">
                            <?php echo get_theme_mod( 'theme_cta_text' ); ?>
                        </div>
                    </div>

                    <div class="cta-btn-block dkgray-bg">
                        <div class="cta-snippet">
                            <?php echo get_theme_mod( 'theme_cta_button_snippet' ); ?>
                        </div>
                        <a class="accent-bg btn-md" href="<?php echo get_theme_mod( 'theme_cta_button_url' ); ?>">
                            <?php echo get_theme_mod( 'theme_cta_button_text' ); ?>
                        </a>
                    </div>

                </div><!-- .constrain -->
            </section><!-- .cta-module -->

            <section class="industries p50">
                <div class="constrain">

                    <div class="industry-block flexxed">
                        <h2>
                            <?php the_field( 'industries_title' ); ?>
                        </h2>
                        <div class="industries-text">
                            <div class="text">
                                <?php the_field( 'industries_text' ); ?>
                            </div>
                            <div class="industries-list">
                                <?php if ( have_rows( 'industries_list' ) ) : ?>
                                    <ul>
                                        <?php while ( have_rows( 'industries_list' ) ) : the_row(); ?>
                                            <li>
                                                <?php the_sub_field( 'industry_item' ); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div><!-- .constrain -->
            </section><!-- .industries -->

            <section class="recent-work p50">
                <div class="constrain">
                    <div class="big-title">Recent Work</div>
                </div><!-- .constrain -->
                <div class="flexxed">
                    <?php query_posts( array( 'post_type' => 'client', 'showposts' => 4, 'orderby'   => 'rand', ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="recent-work-item">
                            <?php the_post_thumbnail(); ?>
                            <div class="overlay">
                                <div class="client-info-container">
                                    <h4><?php the_title(); ?></h4>
                                    <div class="project-info">
                                        <?php the_field( 'project_type' ); ?>
                                    </div>
                                    <div class="client-sector">
                                        <?php the_field( 'client_sector' ); ?>
                                    </div>
                                    <a class="btn-auto accent-bg view-project" href="<?php the_permalink(); ?>">View</a>
                                    <a class="btn-auto ltgray-bg see-more" href="/clients">See More</a>
                                    </div>
                            </div><!-- .overlay -->
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </section><!-- .recent-work -->

            <section class="testimonials p50">
                <div class="constrain flexxed">
                    <div class="testimonial-intro">
                        <h2>
                            <?php the_field( 'testimonials_module_title', 'option' ); ?>
                        </h2>
                        <div class="intro-text">
                            <?php the_field( 'testimonials_module_text', 'option' ); ?>
                        </div>
                    </div>
                    <div class="testimonial-slider">
                        <?php query_posts( array( 'post_type' => 'testimonial', 'showposts' => -1, 'orderby'   => 'rand', ) ); ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="testimoial-slide">
                                <div class="testimonial">
                                    <?php the_content(); ?>
                                </div>
                                <div class="client-name">
                                    <?php the_field( 'client_name' ); ?>
                                </div>
                                <?php if ( get_field( 'client_business_name' ) ) : ?>
                                    <div class="client-business">
                                        <?php the_field( 'client_business_name' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div><!-- .constrain -->
            </section><!-- .testimonials -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

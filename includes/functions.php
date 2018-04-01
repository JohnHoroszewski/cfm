<?php 
function social_media_list(){

	if ( get_theme_mod( 'cfm_social_facebook_link' ) ) :
		echo '<a class="social-icon facebook" href="' . get_theme_mod( 'cfm_social_facebook_link' ) . '"><i class="ltgray-text fab fa-facebook-f"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_twitter_link' ) ) :
		echo '<a class="social-icon twitter" href="' . get_theme_mod( 'cfm_social_twitter_link' ) . '"><i class="ltgray-text fab fa-twitter"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_linkedin_link' ) ) :
		echo '<a class="social-icon linkedin" href="' . get_theme_mod( 'cfm_social_linkedin_link' ) . '"><i class="ltgray-text fab fa-linkedin-in"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_google_link' ) ) :
		echo '<a class="social-icon google" href="' . get_theme_mod( 'cfm_social_google_link' ) . '"><i class="ltgray-text fab fa-google"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_youtube_link' ) ) :
		echo '<a class="social-icon youtube" href="' . get_theme_mod( 'cfm_social_youtube_link' ) . '"><i class="ltgray-text fab fa-youtube"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_vimeo_link' ) ) :
		echo '<a class="social-icon vimeo" href="' . get_theme_mod( 'cfm_social_vimeo_link' ) . '"><i class="ltgray-text fab fa-vimeo-v"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_instagram_link' ) ) :
		echo '<a class="social-icon instagram" href="' . get_theme_mod( 'cfm_social_instagram_link' ) . '"><i class="ltgray-text fab fa-instagram"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_pinterest_link' ) ) :
		echo '<a class="social-icon pinterest" href="' . get_theme_mod( 'cfm_social_pinterest_link' ) . '"><i class="ltgray-text fab fa-pinterest"></i></a>';
    endif;
    
    if ( get_theme_mod( 'cfm_social_behance_link' ) ) :
		echo '<a class="social-icon behance" href="' . get_theme_mod( 'cfm_social_behance_link' ) . '"><i class="ltgray-text fab fa-behance"></i></a>';
	endif;
}
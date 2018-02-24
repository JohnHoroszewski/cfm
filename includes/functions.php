<?php 
function social_media_list(){

	if ( get_theme_mod( 'cfm_social_facebook_link' ) ) :
		echo '<a class="social-icon facebook" href="' . get_theme_mod( 'cfm_social_facebook_link' ) . '"><i class="fa fa-facebook"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_twitter_link' ) ) :
		echo '<a class="social-icon twitter" href="' . get_theme_mod( 'cfm_social_twitter_link' ) . '"><i class="fa fa-twitter"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_linkedin_link' ) ) :
		echo '<a class="social-icon linkedin" href="' . get_theme_mod( 'cfm_social_linkedin_link' ) . '"><i class="fa fa-linkedin"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_google_link' ) ) :
		echo '<a class="social-icon google" href="' . get_theme_mod( 'cfm_social_google_link' ) . '"><i class="fa fa-google"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_youtube_link' ) ) :
		echo '<a class="social-icon youtube" href="' . get_theme_mod( 'cfm_social_youtube_link' ) . '"><i class="fa fa-youtube"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_vimeo_link' ) ) :
		echo '<a class="social-icon vimeo" href="' . get_theme_mod( 'cfm_social_vimeo_link' ) . '"><i class="fa fa-vimeo"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_instagram_link' ) ) :
		echo '<a class="social-icon instagram" href="' . get_theme_mod( 'cfm_social_instagram_link' ) . '"><i class="fa fa-instagram"></i></a>';
	endif;

	if ( get_theme_mod( 'cfm_social_pinterest_link' ) ) :
		echo '<a class="social-icon pinterest" href="' . get_theme_mod( 'cfm_social_pinterest_link' ) . '"><i class="fa fa-pinterest"></i></a>';
	endif;
}

/**
* This example returns ten words, then [...]
* Manual excerpts will override this
*/

function cf_custom_excerpt_length( $length ) {
    return 34;
}
add_filter( 'excerpt_length', 'cf_custom_excerpt_length', 999 );
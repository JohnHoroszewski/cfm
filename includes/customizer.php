<?php 
function cfm_customizer( $wp_customize ) {
	// Customizer Sections
	// Logo
	$wp_customize->add_section( 'cfm_logo_section' , array(
	    'title'       => __( 'Company Logos', 'cfm' ),
	    'priority'    => 10,
	    'description' => 'Add Company Logos',
	) );
	// Company Information
	$wp_customize->add_section( 'cfm_companyinfo_section' , array(
	    'title'       => __( 'Company Information', 'cfm' ),
	    'priority'    => 10,
	    'description' => 'Enter company information',
	) );
	// Social Media
	$wp_customize->add_section( 'cfm_social_section' , array(
	    'title'       => __( 'Social Media', 'cfm' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links',
	) );
	// Page Banners
	$wp_customize->add_section( 'cfm_page_banner_section' , array(
	    'title'       => __( 'Default Page Banners', 'cfm' ),
	    'priority'    => 30,
	    'description' => 'Here you can set default page banners for the different page template types. For best results, make sure image is at least 1920x1000px',
	) );
	// Assorted Site Links
	$wp_customize->add_section( 'cfm_assorted_links_section' , array(
	    'title'       => __( 'Assorted Site Links', 'cfm' ),
	    'priority'    => 30,
	    'description' => 'Add your Assorted Site Links here',
	) );
	// Blog Options
	$wp_customize->add_section( 'cfm_blog_options_section' , array(
		'title'       => __( 'Blog Options', 'cfm' ),
		'priority'    => 30,
		'description' => 'Options for your blog posts page and single post pages',
	) );
	// Remove default sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );
	// Customizer Settings
	// Logo Section
	$wp_customize->add_setting( 'cfm_logo_section' );
	$wp_customize->add_setting( 'cfm_logo', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_mark', array( 'default' => __( '' ), 'cfm' ) );
	// Company Information
	$wp_customize->add_setting( 'cfm_companyinfo_section', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_street', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_city', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_state', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_zip', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_country', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_gmap', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_phone', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_tollfree', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_fax', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_company_email', array( 'default' => __( '' ), 'cfm' ) );
	// Social Media
	$wp_customize->add_setting( 'cfm_social' );
	$wp_customize->add_setting( 'cfm_social_facebook_link', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_social_twitter_link', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_social_gplus_link', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_social_linkedin_link', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_social_youtube_link', array( 'default' => __( '' ), 'cfm' ) );
    $wp_customize->add_setting( 'cfm_social_vimeo_link', array( 'default' => __( '' ), 'cfm' ) );
    $wp_customize->add_setting( 'cfm_social_instagram_link', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_social_pinterest_link', array( 'default' => __( '' ), 'cfm' ) );
	// Assorted Site Links
	$wp_customize->add_setting( 'cfm_assorted_links' );
	$wp_customize->add_setting( 'cfm_site_map', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_privacy_policy', array( 'default' => __( '' ), 'cfm' ) );
	// Page Banners
    $wp_customize->add_setting( 'cfm_page_banner_section' );
    $wp_customize->add_setting( 'cfm_page_gallery', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_page_contact', array( 'default' => __( '' ), 'cfm' ) );
    $wp_customize->add_setting( 'cfm_page_general', array( 'default' => __( '' ), 'cfm' ) );
    $wp_customize->add_setting( 'cfm_posts_blog', array( 'default' => __( '' ), 'cfm' ) );
	$wp_customize->add_setting( 'cfm_post_single', array( 'default' => __( '' ), 'cfm' ) );
	// Blog Options
	$wp_customize->add_setting( 'cfm_blog_options_section' );
	$wp_customize->add_setting( 'cfm_blog_quote', array( 'default' => __( '' ), 'cfm' ) );
	// Customizer Controls
	// Company Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_logo', array(
		'description' => __( 'Upload division logo here' ),
	    'label'    => __( 'Site Logo', 'cfm' ),
	    'section'  => 'cfm_logo_section',
	    'settings' => 'cfm_logo',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_company_mark', array(
		'description' => __( 'Upload logo mark image' ),
	    'label'    => __( 'Company logo mark', 'cfm' ),
	    'section'  => 'cfm_logo_section',
	    'settings' => 'cfm_company_mark',
	) ) );
	// Company Information
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_street', array(
	    'label'    => __( 'Street Address', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_street',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_city', array(
	    'label'    => __( 'City', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_city',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_state', array(
	    'label'    => __( 'State', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_state',
	    'type'     => 'select',
	    'choices'  => array(
	        'AL' => 'Alabama',
	        'AK' => 'Alaska',
	        'AZ' => 'Arizona',
	        'AR' => 'Arkansas',
	        'CA' => 'California',
	        'CO' => 'Colorado',
	        'CT' => 'Connecticut',
	        'DE' => 'Delaware',
	        'DC' => 'District of Columbia',
	        'FL' => 'Florida',
	        'GA' => 'Georgia',
	        'HI' => 'Hawaii',
	        'ID' => 'Idaho',
	        'IL' => 'Illinois',
	        'IN' => 'Indiana',
	        'IA' => 'Iowa',
	        'KS' => 'Kansas',
	        'KY' => 'Kentucky',
	        'LA' => 'Louisiana',
	        'ME' => 'Maine',
	        'MD' => 'Maryland',
	        'MA' => 'Massachusetts',
	        'MI' => 'Michigan',
	        'MN' => 'Minnesota',
	        'MS' => 'Mississippi',
	        'MO' => 'Missouri',
	        'MT' => 'Montana',
	        'NE' => 'Nebraska',
	        'NV' => 'Nevada',
	        'NH' => 'New Hampshire',
	        'NJ' => 'New Jersey',
	        'NM' => 'New Mexico',
	        'NY' => 'New York',
	        'NC' => 'North Carolina',
	        'ND' => 'North Dakota',
	        'OH' => 'Ohio',
	        'OK' => 'Oklahoma',
	        'OR' => 'Oregon',
	        'PA' => 'Pennsylvania',
	        'RI' => 'Rhode Island',
	        'SC' => 'South Carolina',
	        'SD' => 'South Dakota',
	        'TN' => 'Tennessee',
	        'TX' => 'Texas',
	        'UT' => 'Utah',
	        'VT' => 'Vermont',
	        'VA' => 'Virginia',
	        'WA' => 'Washington',
	        'WV' => 'West Virginia',
	        'WI' => 'Wisconsin',
	        'WY' => 'Wyoming' )
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_zip', array(
	    'label'    => __( 'Zip Code', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_zip',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_country', array(
	    'label'    => __( 'Country', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_country',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_gmap', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Google Map', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_gmap',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_phone', array(
	    'label'    => __( 'Local Phone', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_phone',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_tollfree', array(
	    'label'    => __( 'Toll Free Phone', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_tollfree',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_fax', array(
	    'label'    => __( 'Fax', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_fax',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_company_email', array(
	    'label'    => __( 'Email', 'cfm' ),
	    'section'  => 'cfm_companyinfo_section',
	    'settings' => 'cfm_company_email',
	) ) );
	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_facebook_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_twitter_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_gplus_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_linkedin_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_youtube_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_vimeo_link',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, ' cfm_social_instagram_link', array(
	    'label'    => __( 'Instagram Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => ' cfm_social_instagram_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'cfm' ),
	    'section'  => 'cfm_social_section',
	    'settings' => 'cfm_social_pinterest_link',
	) ) );
	// Page Banners
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_page_general', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'General Page', 'cfm' ),
	    'section'  => 'cfm_page_banner_section',
	    'settings' => 'cfm_page_general',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_page_gallery', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Gallery Page', 'cfm' ),
	    'section'  => 'cfm_page_banner_section',
	    'settings' => 'cfm_page_gallery',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_page_contact', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Contact Page', 'cfm' ),
	    'section'  => 'cfm_page_banner_section',
	    'settings' => 'cfm_page_contact',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_posts_blog', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Blog Listing Page', 'cfm' ),
	    'section'  => 'cfm_page_banner_section',
	    'settings' => 'cfm_posts_blog',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cfm_post_single', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Single Post Page', 'cfm' ),
	    'section'  => 'cfm_page_banner_section',
	    'settings' => 'cfm_post_single',
	) ) );
	// Assorted Site Links
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_site_map', array(
	    'label'    => __( 'Site Map Link', 'cfm' ),
	    'section'  => 'cfm_assorted_links_section',
	    'settings' => 'cfm_site_map',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_privacy_policy', array(
	    'label'    => __( 'Privacy Policy Link', 'cfm' ),
	    'section'  => 'cfm_assorted_links_section',
	    'settings' => 'cfm_privacy_policy',
	) ) );
	// Blog Options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cfm_blog_quote', array(
	    'label'    => __( 'Blog Quote', 'cfm' ),
	    'section'  => 'cfm_blog_options_section',
		'settings' => 'cfm_blog_quote',
		'type'	   => 'textarea'
	) ) );
}
add_action( 'customize_register', 'cfm_customizer' );
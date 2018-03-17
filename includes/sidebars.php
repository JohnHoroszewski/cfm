<?php 
// Register Sidebars
function cfm_sidebars() {

	$args = array(
		'id'            => 'footer_column_1',
		'class'         => 'footer-column',
		'name'          => __( 'Footer Column #1', 'text_domain' ),
		'description'   => __( 'Footer Area Column #1', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_column_2',
		'class'         => 'footer-column',
		'name'          => __( 'Footer Column #2', 'text_domain' ),
		'description'   => __( 'Footer Area Column #2', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_column_3',
		'class'         => 'footer-column',
		'name'          => __( 'Footer Column #3', 'text_domain' ),
		'description'   => __( 'Footer Area Column #3', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_column_4',
		'class'         => 'footer-column',
		'name'          => __( 'Footer Column #4', 'text_domain' ),
		'description'   => __( 'Footer Area Column #4', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'cfm_sidebars' );

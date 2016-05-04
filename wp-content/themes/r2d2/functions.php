<?php
/**
 * Function File of r2d2 
 * Child Theme of Twenty Thriteen
 *
 * @author Robert Dall
 */
 

function r2d2_add_editor_styles() {
    add_editor_style( 'r2d2-editor-style.css' );
}
add_action( 'init', 'r2d2_add_editor_styles' );

remove_action ('after_setup_theme', 'twentythirteen_custom_header_setup' );


function r2d2_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => 'CD8540',
		'default-image'          => '%2$s/images/headers/cubism.png',

		// Set height and width, with a maximum value for the width.
		'height'                 => 230,
		'width'                  => 2200,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'twentythirteen_header_style',
		'admin-head-callback'    => 'twentythirteen_admin_header_style',
		'admin-preview-callback' => 'twentythirteen_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %2$s is a placeholder for the child theme template directory URI.
	 */
	 
	 
	register_default_headers( array(
		'cubism' => array(
			'url'           => '%2$s/images/headers/cubism.png',
			'thumbnail_url' => '%2$s/images/headers/cubism-thumbnail.png',
			'description'   => _x( 'Cubism', 'header image description', 'r2d2' )
		),
		'wood' => array(
			'url'           => '%2$s/images/headers/wood.png',
			'thumbnail_url' => '%2$s/images/headers/wood-thumbnail.png',
			'description'   => _x( 'Wood', 'header image description', 'r2d2' )
		),
	) );

	add_action( 'admin_print_styles-appearance_page_custom-header', 'twentythirteen_custom_header_fonts' );

}
add_action( 'after_setup_theme', 'r2d2_custom_header_setup' );
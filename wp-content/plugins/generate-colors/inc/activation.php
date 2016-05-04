<?php
/***********************************************
* Include the verification functions
* These functions are the same throughout all addons
***********************************************/
require plugin_dir_path( __FILE__ ) . 'verification.php';

if ( ! function_exists( 'generate_add_colors_button' ) ) :
/*
* Add button
*/
add_action('generate_product_table','generate_add_colors_button', 15);
function generate_add_colors_button() {
	return generate_add_activate_button( 'colors', 'Generate Colors', 'gen_colors_license_key_status', GENERATE_COLORS_VERSION );
}
endif;

if ( ! function_exists( 'generate_activate_colors' ) ) :
/*
* Activate
*/
add_action('admin_init','generate_activate_colors');
function generate_activate_colors() {
	return generate_activate_package( 'colors', 'Generate Colors', 'gen_colors_license_key_status', 'gen_colors_license_key' );
}
endif;

if ( ! function_exists( 'generate_deactivate_colors' ) ) :
/*
* Deactivate
*/
add_action('admin_init','generate_deactivate_colors');
function generate_deactivate_colors() {
	return generate_deactivate_package( 'colors', 'Generate Colors', 'gen_colors_license_key_status', 'gen_colors_license_key' );
}
endif;

if ( ! function_exists( 'generate_apply_colors_key' ) ) :
/*
* Apply license key to database if it doesn't exist
*/
add_action('admin_init','generate_apply_colors_key');
function generate_apply_colors_key() {
	return generate_apply_license_key( 'colors', 'Generate Colors', 'gen_colors_license_key_status', 'gen_colors_license_key' );
}
endif;
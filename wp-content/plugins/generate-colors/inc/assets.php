<?php
if ( ! function_exists( 'generate_colors_init' ) ) :
	add_action('init', 'generate_colors_init');
	function generate_colors_init() {
		load_plugin_textdomain( 'generate-colors', false, 'generate-colors/languages/' );
	}
endif;
	
require plugin_dir_path( __FILE__ ) . 'activation.php';



if ( ! function_exists( 'generate_colors_setup' ) ) :
	add_action('after_setup_theme','generate_colors_setup');
	function generate_colors_setup()
	{
		
	}
endif;
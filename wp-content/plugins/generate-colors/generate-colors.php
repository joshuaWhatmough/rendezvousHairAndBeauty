<?php
/*
Plugin Name: Generate Colors
Plugin URI: http://generatepress.com
Description: Enable color options in GeneratePress
Version: 1.6.12
Author: Thomas Usborne
Author URI: http://edge22.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
	
// Define the version
if ( ! defined( 'GENERATE_COLORS_VERSION' ) )
	define( 'GENERATE_COLORS_VERSION', '1.6.12');
	
// Include assets unique to this addon
require plugin_dir_path( __FILE__ ) . 'inc/assets.php';

// Include functions identical between standalone addon and GP Premium
require plugin_dir_path( __FILE__ ) . 'functions/functions.php';

if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {
	// load our custom updater if it doesn't already exist
	include( dirname( __FILE__ ) . '/inc/EDD_SL_Plugin_Updater.php' );
}

// retrieve our license key from the DB
$license_key = trim( get_option( 'gen_colors_license_key' ) );

// setup the updater
$edd_updater = new EDD_SL_Plugin_Updater( 'http://generatepress.com', __FILE__, array( 
		'version' 	=> GENERATE_COLORS_VERSION, 		// current version number
		'license' 	=> $license_key, 	// license key (used get_option above to retrieve from DB)
		'item_name'     => 'Generate Colors', 	// name of this plugin
		'author' 	=> 'Tom Usborne',  // author of this plugin
		'url'           => home_url()
	)
);
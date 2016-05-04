<?php
/* 
Plugin Name: Simple Slideshow Manager 
Plugin URI: http://www.acurax.com
Description: A Simple 2 Use Slideshow Plugin Which Help You To Create Multiple Image or Video Slideshows That You Can Display On Your Theme, Page, Post and Sidebar
Author: Acurax 
Version: 2.1.1
Author URI: http://www.acurax.com 
License: GPLv2 or later
*/
/*
Copyright 2008-current  Acurax International  ( website : www.acurax.com )
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/ 
?>
<?php
//*************** Admin function ***************
if(function_exists('acx_slideshow_admin_p') || function_exists('acx_slideshow_admin_manage_gallery_p') || function_exists('acx_slideshow_admin_help_gallery_p') ||
 function_exists('acx_slideshow_generate_shortcode_p') || function_exists('simple_slideshow_manager_misc_p') ||
 function_exists('acx_slideshow_admin_actions_p'))
{
	$msg_error = "<p>You Needs To Deactivate Acurax Advance SlideShow Manager Plugin Premium Version In Order To Activate The Basic Version..<a href='plugins.php'>Click Here To Go Plugins Page</a></p>";
	wp_die($msg_error);
} 
else
{

function acx_slideshow_admin() 
{
	include('acx_slideshow_option.php');
}
function acx_slideshow_admin_manage_gallery() 
{
	include('acx_slideshow_managegallery.php');
}
function acx_slideshow_admin_help_gallery() 
{
	include('help.php');
}
function acx_slideshow_generate_shortcode()
{
	include('acx_slideshow_generate_shortcode.php');
}
function simple_slideshow_manager_misc()
{
	include('simple-slideshow-manager-misc.php');
}
function acx_slideshow_admin_actions()
{
	$acx_slideshow_misc_user_level = get_option('acx_slideshow_misc_user_level');
	if($acx_slideshow_misc_user_level=="")
	{
		$acx_slideshow_misc_user_level = "manage_options";
	}	
	add_menu_page(  'Acurax Slideshow Configuration', __('Slideshow','simple-slideshow-manager'), $acx_slideshow_misc_user_level,'Acurax-Slideshow-Settings' ,'acx_slideshow_admin',plugin_dir_url( __FILE__ ).'/images/acurax_international.png' ); // manage_options for admin
	add_submenu_page('', 'Manage Gallery', 'Add Images', $acx_slideshow_misc_user_level, 'Acurax-Slideshow-Add-Images' ,'acx_slideshow_admin_manage_gallery');
	add_submenu_page('Acurax-Slideshow-Settings', __('Generate Shortcode','simple-slideshow-manager'), __('Code Generator','simple-slideshow-manager'), $acx_slideshow_misc_user_level, 'Acurax-Slideshow-Generate-Shortcode' ,'acx_slideshow_generate_shortcode');
	add_submenu_page('Acurax-Slideshow-Settings', __('Misc','simple-slideshow-manager'), __('Misc','simple-slideshow-manager'), $acx_slideshow_misc_user_level,'Acurax-Slideshow-Misc','simple_slideshow_manager_misc');
	add_submenu_page('Acurax-Slideshow-Settings', __('Help','simple-slideshow-manager'), __('Help','simple-slideshow-manager'), $acx_slideshow_misc_user_level,'Acurax-Slideshow-Help' ,'acx_slideshow_admin_help_gallery');
	
}	
if ( is_admin() )
{
	add_action('admin_menu', 'acx_slideshow_admin_actions');
}
include_once('functions.php');
}
?>
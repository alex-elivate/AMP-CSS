<?php
/*
Plugin Name: AMP Additional Settings Extension
Plugin URI: https://elivate.net
Description: Extension made for AMP for WP to add a custom settings.
Version: 1.0
Author:  Elivate staff
Author URI: http://elivate.net/ 
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Additional CSS',
		'menu_title'	=> 'Additional CSS',
		'menu_slug' 	=> 'amp-css-settings',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'amp_options',
		'redirect'		=> false
	));

}
//check for updates
if( ! class_exists( 'Amp_options_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Amp_options_Updater( __FILE__ );
$updater->set_username( 'alex-elivate' );
$updater->set_repository( 'amp-css' );
$updater->initialize();


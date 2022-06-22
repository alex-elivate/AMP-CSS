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

//check for updates
if( ! class_exists( 'Amp_options_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Amp_options_Updater( __FILE__ );
$updater->set_username( 'alex-elivate' );
$updater->set_repository( 'AMP-CSS' );
$updater->initialize();

//requires AFC Pro and options field group.

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Additional CSS',    //Page title
		'menu_title'	=> 'Additional CSS',    //Menu item
		'menu_slug' 	=> 'amp-css-settings',  //slug for this menu
		'capability'	=> 'edit_posts',        //only users that can edit posts.
		'parent_slug'	=> 'amp_options',       //amp_options is the slug for the AMP for WP plugin.
		'redirect'		=> false                //Only for autoselecting a menu when the root item is clicked.
	));
	
}
<?php
/*
Plugin Name: Burger Companion
Plugin URI:
Description: The Burger Companion plugin adds sections functionality to the Spintech Theme.
Version: 2.4
Author: burgersoftware
Author URI: https://burgersoftwares.com
Text Domain: burger-companion
*/
define( 'BURGER_COMPANION_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BURGER_COMPANION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function burger_companion_activate() {
	
	/**
	 * Load Custom control in Customizer
	 */
	if ( class_exists( 'WP_Customize_Control' ) ) {
		require_once('inc/custom-controls/range-validator/range-control.php');		
	}
	require_once('inc/custom-controls/customizer-repeater/functions.php');	
	$theme = wp_get_theme(); // gets the current theme
	
		if( 'Spintech' == $theme->name){
			require_once('inc/spintech/spintech.php');
		}
		
		if( 'ITpress' == $theme->name){
			require_once('inc/spintech/spintech.php');
		}
		
		if( 'Burgertech' == $theme->name){
			require_once('inc/burgertech/burgertech.php');
		}
		
		if( 'CoziPress' == $theme->name){
			require_once('inc/cozipress/cozipress.php');
		}
		
		if( 'Sipri' == $theme->name){
			require_once('inc/sipri/sipri.php');
		}
		
	}
add_action( 'init', 'burger_companion_activate' );

$theme = wp_get_theme();

/**
 * The code during plugin activation.
 */
function burger_companion_activated() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/burger-comapnion-activator.php';
	Burger_Companion_Activator::activate();
}
register_activation_hook( __FILE__, 'burger_companion_activated' );
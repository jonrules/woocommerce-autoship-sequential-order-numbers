<?php
/*
Plugin Name: WC Auto-Ship Sequential Order Numbers
Plugin URI: http://patternsinthecloud.com
Description: Extends WooCommerce Sequential Order Numbers Pro for compatibility with WC Auto-Ship.
Version: 1.0.1
Author: Patterns in the Cloud
Author URI: http://patternsinthecloud.com
License: Single-site
*/
	
/**
 * Activate hook
 */
function wc_autoship_sequential_order_numbers_activate() {
	
}
register_activation_hook( __FILE__, 'wc_autoship_sequential_order_numbers_activate' );

/**
 * Deactivate hook
 */
function wc_autoship_sequential_order_numbers_deactivate() {
	
}
register_deactivation_hook( __FILE__, 'wc_autoship_sequential_order_numbers_deactivate' );

/**
 * Uninstall hook
 */
function wc_autoship_sequential_order_numbers_uninstall() {
	
}
register_uninstall_hook( __FILE__, 'wc_autoship_sequential_order_numbers_uninstall' );

function wc_autoship_sequential_order_numbers_set_order_number( $order_id  ) {
	if ( function_exists( 'wc_seq_order_number_pro' ) ) {
		$wc_seq_order_number_pro = wc_seq_order_number_pro();
		$wc_seq_order_number_pro->set_sequential_order_number( $order_id ); 
	}
}
add_action( 'wc_autoship_new_order', 'wc_autoship_sequential_order_numbers_set_order_number', 10, 1 );

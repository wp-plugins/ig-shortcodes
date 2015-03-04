<?php
/**
 * Plugin Name:IG Shortcodes
 * Plugin URI: http://www.iograficathemes.com/downloads/ig-shortcodes
 * Description: A complete set of WordPress shortcodes to add beautiful and useful elements to your theme.
 * Version: 2.1
 * Author: iografica
 * Author URI: http://www.iograficathemes.com/
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/* Add shortcodes scripts file */
function ig_shortcodes_scripts() {
		wp_enqueue_style('ig_shortcodes', plugins_url( 'inc/shortcodes.css', __FILE__ ) );
		wp_enqueue_style('ig_genericons', plugins_url( 'inc/genericons/genericons.css', __FILE__ ) );
		wp_enqueue_script('jquery');
		wp_register_script('ig_shortcodes_js', plugins_url( 'inc/shortcodes.js', __FILE__ ));
		wp_enqueue_script('ig_shortcodes_js');
}
add_action( 'wp_enqueue_scripts', 'ig_shortcodes_scripts' );

//Options page
require_once( dirname(__FILE__) . '/options.php' );
//Shortcodes
require_once( dirname(__FILE__) . '/ig-shortcodes-shortcodes.php' );

// Hooks your functions into the correct filters
function ig_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'ig_tinymce_plugin' );
		add_filter( 'mce_buttons', 'ig_register_mce_button' );
	}
}
add_action('admin_head', 'ig_mce_button');

// Declare script for new button
function ig_tinymce_plugin( $plugin_array ) {
	$plugin_array['ig_mce_button'] = plugins_url('/inc/mce-button.js', __FILE__);
	return $plugin_array;
}

// Register new button in the editor
function ig_register_mce_button( $buttons ) {
	array_push( $buttons, 'ig_mce_button' );
	return $buttons;
}
/**
 * Load plugin textdomain.
 */
add_action( 'plugins_loaded', 'ig_shortcodes_textdomain' );
function ig_shortcodes_textdomain() {
  load_plugin_textdomain( 'ig-shortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}

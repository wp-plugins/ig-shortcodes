<?php
/**
 * Plugin Name:IG Shortcodes
 * Plugin URI: http://themes.iografica.it/downloads/ig-shortcodes
 * Description: A complete set of WordPress shortcodes to add beautiful and useful elements to your theme.
 * Version: 1.0
 * Author: Iografica.it
 * Author URI: http://themes.iografica.it/
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/* Variables */
$ig_shortcodes_name = "IG Shortcodes";

/* Add shortcodes scripts file */
function ig_shortcodes_add_scripts() {

	if(!is_admin()) {
		
		/* Includes */
		include ('includes/shortcodes.php');

		wp_enqueue_style('ig_shortcodes', plugins_url( 'includes/shortcodes.css', __FILE__ ) );
		wp_enqueue_script('jquery');
		wp_register_script('ig_shortcodes_js', plugins_url( 'includes/shortcodes.js', __FILE__ ));
		wp_enqueue_script('ig_shortcodes_js');
		
	} else {
		
		wp_enqueue_style( 'wp-color-picker' );
	    wp_enqueue_script( 'wp-color-picker' );
	    		
	}
	
/* Font Awesome */
		wp_enqueue_style('ig_shortcodes_fontawesome', plugins_url( 'fonts/fontawesome/css/font-awesome.min.css', __FILE__ ));
		wp_enqueue_style('ig_shortcodes_fontello',  plugins_url( 'fonts/fontello/css/fontello.css', __FILE__ ));
}
add_filter('init', 'ig_shortcodes_add_scripts');

/* Add button to TinyMCE */
function ig_shortcodes_addbuttons() {
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_ig_shortcodes_tinymce_plugin");
     add_filter('mce_buttons', 'register_ig_shortcodes_button');
   }
}
function register_ig_shortcodes_button($buttons) {
   array_push($buttons, "|", "ig_shortcodes_button");
   return $buttons;
}
 function add_ig_shortcodes_tinymce_plugin($plugin_array) {
	$plugin_array['ig_shortcodes'] = plugins_url( '/includes/tinymce_button.js', __FILE__ );

	return $plugin_array;
}
add_action('init', 'ig_shortcodes_addbuttons');

/* Load plugin textdomain */
function ig_shortcodes_load_textdomain() {
  load_plugin_textdomain( 'ig_shortcodes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'plugins_loaded', 'ig_shortcodes_load_textdomain' );

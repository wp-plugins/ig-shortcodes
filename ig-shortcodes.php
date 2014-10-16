<?php
/**
 * Plugin Name:IG Shortcodes
 * Plugin URI: http://themes.iografica.it/downloads/ig-shortcodes
 * Description: A complete set of WordPress shortcodes to add beautiful and useful elements to your theme.
 * Version: 1.2
 * Author: iografica
 * Author URI: http://themes.iografica.it/
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/* Add shortcodes scripts file */
function ig_shortcodes_scripts() {
		wp_enqueue_style('ig-shortcodes-css', plugins_url( '/inc/shortcodes.css', __FILE__ ) );
		wp_enqueue_script( 'ig-shortcodes-js', plugins_url( '/inc/shortcodes.js', __FILE__ ));
}
add_action( 'wp_enqueue_scripts', 'ig_shortcodes_scripts' );

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

/**************************************************
 BUTTONS 
 *************************************************/
function ig_shortcodes_button( $atts, $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'size' => '',
			'color' => '',
			'link' => '',
			'target' => '',
		), $atts )
	);

	// Code
return '<a class="ig-button '. $size . ' '. $color .'" href="'. $link .'" target="'. $target .'" >'.$content.'</a>';
}
add_shortcode( 'ig_button', 'ig_shortcodes_button' );

/**************************************************
 NOTICE BOX
 *************************************************/
function ig_shortcodes_notice( $atts, $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'color' => ''
		), $atts )
	);

	// Code
return '<div class="ig-notice '. $color .'">'.$content.'</div>';
}
add_shortcode( 'ig_notice', 'ig_shortcodes_notice' );

/*************************************************
COLUMNS
*************************************************/
function ig_shortcodes_columns($atts, $content = null) {
	/* Return Tabs */
	$content = str_replace('<br />', '', $content);
	return '<div class="ig-columns">'.do_shortcode($content).'</div>';
	
}
add_shortcode('ig_columns', 'ig_shortcodes_columns');

function ig_shortcodes_column( $atts, $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'position' => ''
		), $atts )
	);

	// Code
return '<div class="ig-column '.$position.'">'.$content.'</div>';
}
add_shortcode( 'ig_column', 'ig_shortcodes_column' );

/*************************************************
CLEARFIX
*************************************************/
function ig_shortcodes_clearfix( $atts, $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);

	// Code
return '<div class="ig-clearfix"></div>';
}
add_shortcode( 'ig_clearfix', 'ig_shortcodes_clearfix' );

/*************************************************
TABS
*************************************************/
/* Tabs content*/
function ig_shortcodes_tabs($atts, $content = null) {
	/* Return Tabs */
	$content = str_replace('<br />', '', $content);
	return '<div class="ig-shortcode-tabs">'.do_shortcode($content).'</div>';
	
}
add_shortcode('ig_tabs', 'ig_shortcodes_tabs');

/* Tab single */
function ig_shortcodes_tab($atts, $content = null) {

	/* Set up variables */
	extract(shortcode_atts(array(
		'label' => ''
	), $atts));
		remove_all_filters( 'the_content' );
	return '<div class="ig-shortcode-tabpane">
	        <div class="ig-shortcode-tab-label">'.$label.'</div>'
		   .$content.'</div>
		   ';

}
add_shortcode('ig_tab', 'ig_shortcodes_tab');

/*************************************************
TOGGLE
*************************************************/
function ig_shortcodes_toggle($atts, $content = null) {

	/* Set up variables */
	extract(shortcode_atts(array(
		'heading' => '',
		'onload' => 'closed'
	), $atts));
	if($onload == "open") { $active_class = "ig-shortcode-toggle-active"; } else { $active_class = ""; }
		
	return '<div class="ig-shortcode-toggle '.$active_class.'"><h3 class="toggle-heading">'.$icon_code.$heading.$toggle_icons.'</h3><div class="toggle-content"><p>'.do_shortcode($content).'</p></div></div>';

}
add_shortcode('ig_toggle', 'ig_shortcodes_toggle');
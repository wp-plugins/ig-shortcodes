<?php
/*************************************************
ACCORDION
*************************************************/

function ig_shortcodes_accordion_content($atts, $content = null) {

	/* Return Toggles */
	return '<div class="ig-shortcode ig-shortcode-accordion">'.do_shortcode($content).'</div>';
	
}
add_shortcode('ig_accordion_content', 'ig_shortcodes_accordion_content');

function ig_shortcodes_accordion($atts, $content = null) {

	/* Set up variables */
	extract(shortcode_atts(array(
		'heading' => '',
		'onload' => 'closed'
	), $atts));
	if($onload == "open") { $active_class = "ig-shortcode-toggle-active"; } else { $active_class = ""; }
	
	return '<div class="ig-shortcode ig-shortcode-toggle '.$active_class.'"><h3 class="ig-shortcode toggle-heading">'.$icon_code.$heading.'</h3><div class="ig-shortcode toggle-content"><p>'.do_shortcode($content).'</p></div></div>';

}
add_shortcode('ig_accordion', 'ig_shortcodes_accordion');

/**************************************************
 BUTTONS 
 *************************************************/
function ig_shortcodes_button( $atts, $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'size' => '',
			'color' => '',
            'style' => '',
			'link' => '',
			'target' => '',
		), $atts )
	);

	// Code
return '<a class="ig-button '. $size . ' '. $color .' '. $style .'" href="'. $link .'" target="'. $target .'" >'.$content.'</a>';
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
DIVIDER
*************************************************/
function ig_shortcodes_divider($atts, $content = null) {

	/* Set up variables */
	extract(shortcode_atts(array(
		'style' => ''
		), $atts));
		
	return '<span class="ig-divider '.$style.'"></span>';

}
add_shortcode('ig_divider', 'ig_shortcodes_divider');

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
		
return '<div class="ig-shortcode-toggle '.$active_class.'"><h3 class="toggle-heading">'.$heading.'</h3><div class="toggle-content"><p>'.do_shortcode($content).'</p></div></div>';

}
add_shortcode('ig_toggle', 'ig_shortcodes_toggle');

/*************************************************
HEADING
*************************************************/
function ig_shortcodes_heading($atts, $content = null) {

	/* Set up variables */
	extract(shortcode_atts(array(
		'align' => '',
		'style' => 'normal'
	), $atts));
		
	return '<h2 class="ig-heading '.$style.' '.$align.'">'.$content.'</h2>';

}
add_shortcode('ig_heading', 'ig_shortcodes_heading');

/*************************************************
ICONS
*************************************************/
function ig_shortcodes_icon($atts, $content = null) {

	/* Set up variables */
	extract(shortcode_atts(array(
		'icon' => '',
		'size' => '',
		), $atts));
		
	return '<span class="genericon '.$icon.' '.$size.'"></span>';

}
add_shortcode('ig_icon', 'ig_shortcodes_icon');

/*************************************************
GOOGLE MAPS
*************************************************/
function ig_shortcodes_map($atts, $content = null){ ?>

<?php	/* Set up variables */
	extract(shortcode_atts(array(
        'height' => '',
        'width' => '',
        'coordinates' => '',
		'address' => '',
		), $atts));?>
<div class="ig-map">		
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:<?php echo $height;?>;">
<div id="gmap_canvas" style="height:<?php echo $height;?>; width:<?php echo $width;?>"></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>

<script type="text/javascript">
function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(<?php echo $coordinates;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $coordinates;?>)});infowindow = new google.maps.InfoWindow({content:"<b><?php echo $blog_title = get_bloginfo('name'); ?></b></br><?php echo $address; ?>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<?php }
add_shortcode('ig_map', 'ig_shortcodes_map');

jQuery(document).ready(function(){
	
	/* Toggle */
	jQuery('.ig-shortcode-toggle-active').each(function() {
		jQuery(this).find('.toggle-content').show();
	});
	jQuery('.toggle-heading').click(function() {
		var toggle = jQuery(this).parent('.ig-shortcode-toggle');
		if(jQuery(this).parent('.ig-shortcode-toggle').parent('div').hasClass('ig-shortcode-accordion')) {
			toggle.parent('div').find('.ig-shortcode-toggle').find('.toggle-content:visible').slideUp();
			toggle.parent('div').find('.toggle-active').removeClass('toggle-active');
			toggle.toggleClass('toggle-active');
			toggle.find('.toggle-content').slideToggle(400);
		} else {
			toggle.toggleClass('toggle-active');
			toggle.find('.toggle-content').slideToggle(400);
		}
	});
	
	/* Tabs */
	jQuery('.ig-shortcode-tabs').each(function() {
		
		jQuery(this).prepend('<div class="ig-shortcode-tab-buttons"></div>');
		jQuery(this).find('.ig-shortcode-tabpane').each(function() {
			
			jQuery(this).parent('.ig-shortcode-tabs').find('.ig-shortcode-tab-buttons').append('<a href="#">'+jQuery(this).find('.ig-shortcode-tab-label').text()+'</a>');
			jQuery(this).find('.ig-shortcode-tab-label').remove();
			
		});
		
		jQuery(this).find('.ig-shortcode-tab-buttons').find('a:first').addClass('active');
		jQuery(this).find('.ig-shortcode-tabpane').hide();
		jQuery(this).find('.ig-shortcode-tabpane:first').show();
		
	});
	
	var tab_to_show = 0;
	jQuery('.ig-shortcode-tab-buttons a').live("click", function() {
		tab_to_show = jQuery(this).parent('.ig-shortcode-tab-buttons').find('a').index(jQuery(this));
		jQuery(this).parent('.ig-shortcode-tab-buttons').parent('.ig-shortcode-tabs').find('.ig-shortcode-tabpane').hide();
		jQuery(this).parent('.ig-shortcode-tab-buttons').parent('.ig-shortcode-tabs').find('.ig-shortcode-tabpane').eq(tab_to_show).show();
		jQuery(this).parent('.ig-shortcode-tab-buttons').find('a').removeClass('active');
		jQuery(this).parent('.ig-shortcode-tab-buttons').find('a').eq(tab_to_show).addClass('active');
		return false;
	});
});
(function() {
	tinymce.PluginManager.add('ig_mce_button', function( editor, url ) {
		editor.addButton( 'ig_mce_button', {
			text: 'IG Shortcodes',
			icon: false,
			type: 'menubutton',
			menu: [
								{
					text: 'Author Info (only premium)',
				},
				{
					text: 'Button',
					onclick: function() {
					editor.insertContent('[ig_button size="medium" color="gray" link="http://themes.iografica.it" target="_blank"]more info[/ig_button]');						
					},	
				},
				{
					text: 'Columns',
					onclick: function() {
					editor.insertContent('[ig_columns][ig_column position="half first"]Content[/ig_column][ig_column position="half last"]Content[/ig_column][/ig_columns]');						
					},	
				},
				{
					text: 'Clearfix',
					onclick: function() {
					editor.insertContent('[ig_clearfix]');						
					},	
				},
				{
					text: 'Login (only premium)',
				},
				{
					text: 'Notice Box',
					onclick: function() {
					editor.insertContent('[ig_notice color="gray"]Content[/ig_notice]');						
					},		
				},
				{
					text: 'Post Image Gallery (only premium)',
				},
				{
					text: 'Protect Content (only premium)',
				},
				{
					text: 'Pricing Table (only premium)',
				},
				{
					text: 'Tabs',
					onclick: function() {
					editor.insertContent('[ig_tabs][ig_tab label="Title 1"]Content 1[/ig_tab][ig_tab label="Title 2"]Content 2[/ig_tab][/ig_tabs]');						
					},	
				},
				{
					text: 'Testimonials (only premium)',
				},
				{
					text: 'Toggle',
					onclick: function() {
					editor.insertContent('[ig_toggle heading="Title" onload="closed"]Content[/ig_toggle]');						
					},	
				},
			]
		});
	});
})();
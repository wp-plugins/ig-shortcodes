(function () {
	tinymce.PluginManager.add('ig_mce_button', function( editor, url ) {
		editor.addButton( 'ig_mce_button',{
			text: 'IG Shortcodes',
			icon: false,
			type: 'menubutton',
			menu: [
                // ACCORDION
				{
					text: 'Accordion',
					onclick: function() {
                    editor.insertContent('[ig_accordion_content]\
                                          [ig_toggle heading="Title 1" onload="closed"]Content[/ig_toggle]\
					                      [ig_toggle heading="Title 2" onload="closed"]Content[/ig_toggle]\
					                      [/ig_accordion_content]');	
				    },
                },
				// BUTTONS
				{
					text: 'Button',
					onclick: function() {
					editor.insertContent('[ig_button size="medium" color="gray" style="normal" link="http://iograficathemes.com" target="_blank"]more info[/ig_button]');
					},
				},
				// COLUMNS
                {
                    text: 'Columns',
                    menu: [
                    {
                        text: '1/2-1/2',
                        onclick: function() {
					    editor.insertContent('[ig_columns]\
                                              [ig_column position="half first"]Content[/ig_column]\
                                              [ig_column position="half last"]Content[/ig_column]\
                                              [/ig_columns]');						
					},
                    },
                    {
                        text: '1/3-1/3-1/3',
                        onclick: function() {
                        editor.insertContent('[ig_columns]\
                                              [ig_column position="one-third first"]Content[/ig_column]\
                                              [ig_column position="one-third"]Content[/ig_column]\
                                              [ig_column position="one-third last"]Content[/ig_column]\
                                              [/ig_columns]');						
					},
                    },
                    {
                        text: '1/4-1/4-1/4-1/4',
                        onclick: function() {
                        editor.insertContent('[ig_columns]\
                                             [ig_column position="one-fourth first"]Content[/ig_column]\
                                             [ig_column position="one-fourth"]Content[/ig_column]\
                                             [ig_column position="one-fourth"]Content[/ig_column]\
                                             [ig_column position="one-fourth last"]Content[/ig_column]\
                                             [/ig_columns]');						
					},
                    }
                           ]
                },
				// CLLEARFIX
				{
					text: 'Clearfix',
					onclick: function() {
					editor.insertContent('[ig_clearfix]');						
					},	
				},
				// CLLEARFIX
				{
					text: 'Divider',
					onclick: function() {
					editor.insertContent('[ig_divider style="normal"]');						
					},	
				},
                // ICONS
				{
					text: 'Icon',
					onclick: function() {
					editor.insertContent('[ig_icon icon="genericon-rating-empty" size="normal"]');						
					},		
				},
                // MAP
				{
					text: 'Map',
					onclick: function() {
					editor.insertContent('[ig_map coordinates="44.812284,-91.497729" address="Eau Claire St" width="660px" height="400px"]');			
					},		
				},
				// NOTICEBOX
				{
					text: 'Notice Box',
					onclick: function() {
					editor.insertContent('[ig_notice color="gray"]Content[/ig_notice]');						
					},		
				},
				// TAB
				{
					text: 'Tabs',
					onclick: function() {
					editor.insertContent('[ig_tabs][ig_tab label="Title 1"]Content 1[/ig_tab][ig_tab label="Title 2"]Content 2[/ig_tab][/ig_tabs]');						
					},	
				},
				// TOGGLE
				{
					text: 'Toggle',
					onclick: function() {
					editor.insertContent('[ig_toggle heading="Title" onload="closed"]Content[/ig_toggle]');						
					},	
				},
                {
                    text: '...more shortcodes',
                    onclick: function() {
                    window.open('http://iograficathemes.com/downloads/ig-shortcodes-premium/','_blank');
                    },
                },	
			]
		});
	});
})();
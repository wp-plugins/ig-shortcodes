<?php
add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'IG Shortcodes', 'IG Shortcodes', 'manage_options', 'ig-shortcodes', 'ig_shortcodes_menu_page', 'dashicons-editor-code' ); 
}

function ig_shortcodes_menu_page() { ?>
  <div class="wrap">
  <h2>IG Shotcodes</h2>
<div class="menu">
  <a href="http://themes.iografica.it/downloads/ig-shortcodes/">Project homepage</a> | <a href="http://themes.iografica.it/document/shortcodes-attributes/">Documentation</a> | <a href="http://themes.iografica.it/premium-support/">Support</a> | <a href="https://wordpress.org/plugins/ig-shortcodes/">Changelog</a>
</div>
      <div class="widget-liquid-left">
			<h3>Shortcodes features</h3>
			<ul>
				<li>Amazing shortcodes</li>
				<li>Power of CSS3 transitions</li>
				<li>Powerful shortcodes customization</li>
				<li>SEO Optimized</li>
                <li>Documented</li>
                <li>More features will to come...</li>
			</ul>
          <h3><?php echo __('Iografica Themes', "ig-shortcodes"); ?></h3>
                    <a title="Facebook" href="https://www.facebook.com/themes.iografica" target="_blank">
                    <span class="facebook"><?php echo __('Facebook', "ig-shortcodes"); ?></span>
                    </a>
                    <?php echo __(' | ', "ig-shortcodes"); ?>
					<a title="Twitter" href="https://twitter.com/iograficathemes" target="_blank">
                    <span class="twitter"><?php echo __('Twitter',"ig-shortcodes"); ?></span>
                    </a>
                    <?php echo __(' | ', "ig-shortcodes"); ?>
					<a title="Iografica Themes" href="http://themes.iografica.it/" target="_blank">
                    <span class="website"><?php echo __('Website',"ig-shortcodes"); ?></span>
                    </a>
					<p><?php echo __('Sign up to our newsletter and get a discount coupon.',  "ig-shortcodes"); ?></p>
                    <div id="mc_embed_signup">
					<form action="//iografica.us2.list-manage.com/subscribe/post?u=14e09f1fb92769d69dfd5ea17&amp;id=5fd8564ba4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					</form>
	                </div>
        </div>

<div class="widget-liquid-right">
    <div style="padding:0 15px 15px 15px; margin-top:15px; border:1px solid #dedede; background:#fff;">
    <h3>IG Shotcodes Premium</h3>
     <p>Upgrade to premium version to have access to all shortcodes and priority support.</p>
    <h3>Shortcodes included</h3>
<ul>
	<li>Customizable buttons</li>
	<li>Simple columns layout</li>
	<li>Toggles and tabs</li>
	<li>Notice boxes to display your message</li>
	<li>Login box and protect content</li>
	<li>Post image gallery</li>
	<li>Pricing table and testimonials</li>
</ul>
    <a class="button-primary" href="http://themes.iografica.it/downloads/ig-shortcodes-premium/">Order now</a>
     </div>
    </div>
</div>
<?php } ?>
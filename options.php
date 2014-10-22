<?php
add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'IG Shortcodes', 'IG Shortcodes', 'manage_options', 'ig-shortcodes', 'ig_shortcodes_menu_page', 'dashicons-editor-code' ); 
}

function ig_shortcodes_menu_page() { ?>
  <div class="wrap">
  <h2><?php echo __('IG Shortcodes',"ig-shortcodes"); ?></h2>
<div class="menu">
  <a href="http://themes.iografica.it/downloads/ig-shortcodes/"><?php echo __('Product page',"ig-shortcodes"); ?></a> | <a href="http://themes.iografica.it/document/shortcodes-attributes/"><?php echo __('Documentation',"ig-shortcodes"); ?></a> | <a href="http://themes.iografica.it/premium-support/"><?php echo __('Support',"ig-shortcodes"); ?></a> | <a href="https://wordpress.org/plugins/ig-shortcodes/"><?php echo __('Changelog',"ig-shortcodes"); ?></a>
</div>
      <div class="widget-liquid-left">
			<h3><?php echo __('Shortcodes features',"ig-shortcodes"); ?></h3>
			<ul>
				<li><?php echo __('Amazing shortcodes',"ig-shortcodes"); ?></li>
				<li><?php echo __('Power of CSS3 transitions',"ig-shortcodes"); ?></li>
				<li><?php echo __('Powerful shortcodes customization',"ig-shortcodes"); ?></li>
				<li><?php echo __('SEO Optimized',"ig-shortcodes"); ?></li>
                <li><?php echo __('Documented',"ig-shortcodes"); ?></li>
                <li><?php echo __('More features will to come...',"ig-shortcodes"); ?></li>
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
    <h3><?php echo __('IG Shotcodes Premium',"ig-shortcodes"); ?></h3>
     <p><?php echo __('Upgrade to premium version to have access to all shortcodes and priority support.',"ig-shortcodes"); ?></p>
    <h3><?php echo __('Shortcodes included',"ig-shortcodes"); ?></h3>
<ul>
	<li><?php echo __('Author box',"ig-shortcodes"); ?></li>
	<li><?php echo __('Login box and protect content',"ig-shortcodes"); ?></li>
	<li><?php echo __('Post image gallery',"ig-shortcodes"); ?></li>
	<li><?php echo __('Pricing tables and testimonials',"ig-shortcodes"); ?></li>
</ul>
    <a class="button-primary" href="http://themes.iografica.it/downloads/ig-shortcodes-premium/"><?php echo __('Order Now',"ig-shortcodes"); ?></a>
     </div>
    </div>
</div>
<?php } ?>
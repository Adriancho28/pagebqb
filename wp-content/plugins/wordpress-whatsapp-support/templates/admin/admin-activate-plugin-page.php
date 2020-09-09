<div id="wws-plugin-activation" class="wrap">

	<div class="wrapper">
		
		<h3><?php _e( 'Enter your Envato purchase code to activate', 'wc-wws' ) ?></h3>
		<h4>WordPress WhatsApp Support</h4>
	
		<form action="" id="wws-plugin-activation-form">
			<input id="site-url" type="hidden" value="<?php echo site_url() ?>">
			<input id="purchase-code" type="text" placeholder="<?php _e( 'Enter Purchase Code', 'wc-wws' ) ?>" required>
			<input type="submit" value="<?php _e( 'Activate', 'wc-wws' ) ?>" name="wws_plugin_activation_ajax">
		</form>

		<a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank"><?php _e( 'Where is my purchase code?', 'wc-wws' ) ?></a>

		<div class="loader">
			<div class="wws-spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
		</div>
		
		<div id="message"></div>

	</div>

</div>
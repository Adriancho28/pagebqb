<div class="wrap">
	
	<h1><?php _e('WeCreativez WhatsApp Support - Support', 'wc-wws') ?></h1>
	<?php do_action( 'sk_wws_admin_notification' ) ?>
	<hr>
	
	


	<form action="" method="post">
		<h3><?php _e( 'Plugin Registration', 'wc-wws' ) ?></h3>
		<p>Please enter your purchase code. <strong>Use one license per domain please!</strong><br>Need help? Check this link <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">Where is my purchase code</a></p>
		<p class="submit">
			<input type="text" name="sk_wws_admin_license_key" class="regular-text" required="required" value="<?php echo get_option('sk_wws_license_key') ?>" placeholder="Enter Envato Purchase Code">
		  <?php 
		  	if ( get_option( 'sk_wws_license_key' ) != '' ) : 
		  ?>
				<input type="submit" value="Deactivate" class="button-primary" name="sk_wws_license_key_deactivate">
				<strong style="color: #008700;"> <?php _e( 'Plugin Activated', 'wc-wws' ); ?></strong>
			<?php else: ?>
				<input type="submit" value="Activate" class="button-primary" name="sk_wws_license_key_activate">
				<strong style="color: #F44336;"> <?php _e( 'Plugin Not Activated', 'wc-wws' ); ?></strong>
			<?php endif; ?>
		</p>
	</form>
	<hr>


	<form action="" method="post">
		<h3>Contact Via Envato Support</h3>
		You can contact us via Envato support, this is the best and hustle free procedure (  <strong>No Verification of Purchased Product </strong>)<br>
		<strong><a href="https://codecanyon.net/item/wordpress-whatsapp-support/20963962/support" target="_black">Support Now</a></strong>
		<br><br><hr>
		<h3>Request Support</h3>
		Need help? send us an email and one of our support experts will get back to you as soon as possible.<br>
		<strong><a href="mailto:sonukaushalssk@gmail.com">Support Now</a> or Email us at sonukaushalssk@gmail.com</strong>
		<br><br><hr>
		
		
		<h3>Share Report With Our Support Team</h3>
		This will send report to our support team through email.<br>	
		Report contains site URL, WP version, list of activated plugins and plugin options setting.<br>

		
		<!-- submit button -->
		<p class="submit">
			<input type="email" name="sk_wws_admin_report_email_address" class="regular-text" required="required" placeholder="Enter your email address">
		  <input type="submit" value="Share Report" class="button-primary" name="sk_wws_admin_send_report"><br>
		  <?php _e( 'This is the address where we will contact you.', 'wc-wws' ); ?>
		</p><!-- end submit button -->
		<hr>


		
		<textarea class="regular-text" name="sk_wws_admin_support_report" style="display: none;">
	## SITE/SERVER INFO: ##
	Site URL:                 <?php echo site_url() . "\n"; ?>
	Home URL:                 <?php echo home_url() . "\n"; ?>
	WordPress Version:        <?php echo get_bloginfo( 'version' ) . "\n"; ?>
	PHP Version:              <?php echo PHP_VERSION . "\n"; ?>
	Web Server Info:          <?php echo $_SERVER['SERVER_SOFTWARE'] . "\n"; ?>
	PHP allow_url_fopen:      <?php echo ini_get( 'allow_url_fopen' ) ? "Yes" . "\n" : "No" . "\n"; ?>
	PHP cURL:                 <?php echo is_callable('curl_init') ? "Yes" . "\n" : "No" . "\n"; ?>
	JSON:                     <?php echo function_exists("json_decode") ? "Yes" . "\n" : "No" . "\n" ?>
	SSL Stream:               <?php echo in_array('https', stream_get_wrappers()) ? "Yes" . "\n" : "No" . "\n" ?>


	## ACTIVE PLUGINS: ##
	<?php
	$plugins = get_plugins();
	$active_plugins = get_option( 'active_plugins', array() );

	foreach ( $plugins as $plugin_path => $plugin ) {
	    // If the plugin isn't active, don't show it.
	    if ( ! in_array( $plugin_path, $active_plugins ) )
	        continue;

	    echo $plugin['Name'] . ': ' . $plugin['Version'] ."\n";
	}
	?>

	## PLUGIN SETTINGS: ##
	<?php var_dump(get_option($this->plugin_setting)); ?>

	## PLUGIN LICENCE KEY ##
	<?php var_dump( get_option( 'sk_wws_license_key' ) ) ?>

	## DEVELOPER SETTINGS: ##
	<?php var_dump(get_option($this->developer_setting)); ?>
	</textarea>

	</form>

	<form action="#" method="post">
		
		<h3><?php _e('Enable Developer Mode', 'wc-wws') ?></h3>
		<?php _e( 'Please do not enable until recommended.', 'wc-wws' ); ?>
			<table class="form-table">
		    <tbody>
					<tr>
				    <th scope="row">
				      <label><?php _e('Enable', 'wc-wws') ?></label>
				    </th>
				    <td>
			        <input type="checkbox" id="sk-wws-admin-developer-enable">
			        <br>
			        <span class="description"></span>
				    </td>
					</tr>
		    </tbody>
			</table>
		

			<div id="sk-wws-admin-developer-box" >
				<table class="form-table">
			    <tbody>

	    			<tr>
	    		    <th scope="row">
	    		      <label><?php _e('Enable Debugging', 'wc-wws') ?></label>
	    		    </th>
	    		    <td>
	    	        <input type="checkbox" name="sk_wws_developer_setting[debuggin_status]" value="1" <?php checked( 1, $this->get_developer_setting('debuggin_status'), 1) ?> >
	    		    </td>
	    			</tr>
	    			
						<tr>
					    <th scope="row">
					      <label><?php _e('HTML in', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <select name="sk_wws_developer_setting[html_in]">
				        	<option value="footer" <?php selected( 'footer', $this->get_developer_setting('html_in'), 1) ?>>Footer</option>
				        	<option value="head" <?php selected( 'head', $this->get_developer_setting('html_in'), 1) ?>>Header</option>
				        </select>
					    </td>
						</tr>

						<tr>
					    <th scope="row">
					      <label><?php _e('Fix Widget Shortcode', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <input type="checkbox" name="sk_wws_developer_setting[fix_widget_shortcode]" value="1" <?php checked( 1, $this->get_developer_setting('fix_widget_shortcode'), 1) ?> >
					    </td>
						</tr>

						<tr>
					    <th scope="row">
					      <label><?php _e('Disable Auto Update', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <input type="checkbox" name="sk_wws_developer_setting[disable_auto_update]" value="1" <?php checked( 1, $this->get_developer_setting('disable_auto_update'), 1) ?> >
					    </td>
						</tr>

			    </tbody>
				</table>

				<!-- submit button -->
				<p class="submit">
				  <input type="submit" value="Save" class="button-primary" name="sk_wws_admin_developer_save">
				</p><!-- end submit button -->
			</div>	

	</form>

</div>
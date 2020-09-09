<div class="wrap">
	<h2><?php _e( 'GDPR Settings', 'wc-wws' ) ?></h2>
	<?php do_action( 'sk_wws_admin_notification' ) ?>
	<hr>

	
	<form action="#" method="post">
					
					<table class="form-table">
				  	<tbody>

				      <tr>
						    <th scope="row">
						      <label><?php _e('Enable GDPR', 'wc-wws') ?></label>
						      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Enable/ Disable GDPR compliant.', 'wc-wws' ) ?>"></span>
						    </th>
						    <td>
					        <input type="checkbox"  name="wws_gdpr_settings[gdpr_status]" <?php checked( 1, $gdpr['gdpr_status'], true ) ?>>
						    </td>
							</tr>

				      <tr>
						    <th scope="row">
						      <label><?php _e('GDPR Message', 'wc-wws') ?></label>
						    </th>
						    <td>
					        <textarea class="regular-text" cols="10" name="wws_gdpr_settings[gdpr_msg]"><?php echo $gdpr['gdpr_msg'] ?></textarea>
					        <p class="description"><?php printf( __('Use shortcode %s to add privacy page link.', 'wc-wws') , '<code>[wws_gdpr_link]</code>' ) ?></p>
						    </td>
							</tr>

				      <tr>
						    <th scope="row">
						      <label><?php _e('Privacy page', 'wc-wws') ?></label>
						      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Select your privacy page.', 'wc-wws' ) ?>"></span>
						    </th>
						    <td>
					        <?php 
					        	wws_admin_page_dropdown( 
					        			array(
					        				'name' 			=> 'wws_gdpr_settings[gdpr_privacy_page]',
					        				'selected' 	=> $gdpr['gdpr_privacy_page'], 
					        			) 
					        		) 
					        ?>
						    </td>
							</tr>

						</tbody>
					</table>

					<?php submit_button( null, 'primary', 'wws_submit_gdpr_settings' ) ?>

				</form>


</div>
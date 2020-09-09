<div class="wrap">
	<h2><?php _e( 'Link Generator', 'wc-wws' ) ?></h2>
	<?php do_action( 'sk_wws_admin_notification' ) ?>
	<hr>

	
	<form id="wws-admin-link-generater" action="#" method="post">
		
		<table class="form-table">
	  	<tbody>

	      <!-- support contact number -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Support Contact Number', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter mobile phone number with the international country code, without + character. Example:  911234567890 for (+91) 1234567890', 'wc-wws') ?>"></span>
				    </th>
				    <td>
			        <input type="number" id="wws-admin-link-generater-number" class="regular-text">
				    </td>
					</tr><!-- .support contact number -->

	      <tr>
			    <th scope="row">
			      <label><?php _e('Support Pre Message', 'wc-wws') ?></label>
			      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter a message that you will receive when someone clicks on the link.', 'wc-wws'); ?>"></span>
			    </th>
			    <td>
		        <textarea class="regular-text" cols="10" id="wws-admin-link-generater-message"></textarea>
			    </td>
				</tr>


	      <tr id="wws-admin-link-generater-link-tr">
			    <th scope="row">
			      <label><?php _e('Generated Link', 'wc-wws') ?></label>
			    </th>
			    <td>
		        <textarea class="regular-text" cols="10" id="wws-admin-link-generater-link" onclick="this.focus();this.select();"></textarea>
		        <p class="description"><?php _e('Copy and share the link', 'wc-wws'); ?></p>

			    </td>
				</tr>
	  

			</tbody>
		</table>

		<?php submit_button( 'Generate Link', 'primary' ) ?>

	</form>


</div>
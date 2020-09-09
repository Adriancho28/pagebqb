<?php

add_action( 'wp_ajax_sk_wws_add_multi_account_popup', 'sk_wws_add_multi_account_popup' );
function sk_wws_add_multi_account_popup() {
	?>

		<form action="#" method="post">
			
				<table class="form-table">
					<tbody>

			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Person Contact', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <input type="number" class="regular-text" name="sk_wws_multi_account[contact]" required>
				        <br>
				        <span class="description"><?php _e('Enter mobile phone number with the international country code, without "+" character. Example:  911234567890 for (+91) 1234567890', 'wc-wws') ?></span>
					    </td>
						</tr>

			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Person Name', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <input type="text" name="sk_wws_multi_account[name]" class="regular-text" value="" required>
				        <br>
				        <span class="description"><?php _e( 'Enter support person name.', 'wc-wws' ) ?></span>
					    </td>
						</tr>

			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Person Title', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <input type="text" name="sk_wws_multi_account[title]" class="regular-text" value="">
				        <br>
				        <span class="description"><?php _e( 'Enter support person title/designation.', 'wc-wws' ) ?></span>
					    </td>
						</tr>

		      	<!-- support person image  -->
			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Person Image', 'wc-wws') ?></label>
					    </th>
					    <td>
						    <input type="text" name="sk_wws_multi_account[image]" id="sk-wws-multi-account__support-img-path" class="all-options" value="">
						    <input type="button" id="sk-wws-multi-account__support-img" class="button-secondary" value="Upload">
				        <br>
				        <span class="description"><?php _e('Add support person image', 'wc-wws') ?></span>
					    </td>
						</tr><!-- .support person image  -->

			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Pre Message', 'wc-wws') ?></label>
					    </th>
					    <td>
				        <textarea name="sk_wws_multi_account[pre_message]" class="regular-text"></textarea> 
  			        <p class="description"><?php printf( __( '%s to display current page title in chat.', 'wc-wws' ), '<code>{title}</code>' ) ?></p>
  			        <p class="description"><?php printf( __( '%s to display current page URL in chat.', 'wc-wws' ), '<code>{url}</code>' ) ?></p>
  			        <p class="description"><?php printf( __( '%s to break the line into a new line.', 'wc-wws' ), '<code>{br}</code>' ) ?></p>
					    </td>
						</tr>


						<!-- schedule -->
			      <tr>
					    <th scope="row">
					      <label><?php _e('Schedule', 'wc-wws') ?></label>
					    </th>
					    <td>
								<?php wws_time_hours_dropdown(
												array(	
													'name'	=>	'sk_wws_multi_account[start_hours]',
												)	
											) ?>
								:
								<?php wws_time_minutes_dropdown(
												array(
													'name'	=>	'sk_wws_multi_account[start_minutes]',
												)
											) ?>
								To
								<?php wws_time_hours_dropdown(
												array(
													'name'	=>	'sk_wws_multi_account[end_hours]',
													'selected' 	=> 	'23',	
												)
											) ?>
								:
								<?php wws_time_minutes_dropdown(
												array(
													'name'	=>	'sk_wws_multi_account[end_minutes]',
													'selected' 	=> 	'59',	
												)
											) ?>  	
				        <br>
				        <input type="checkbox" value="mon" name="sk_wws_multi_account[mon]" checked="checked"> Monday<br>
				        <input type="checkbox" value="tue" name="sk_wws_multi_account[tue]" checked="checked"> Tuesday<br>
				        <input type="checkbox" value="wed" name="sk_wws_multi_account[wed]" checked="checked"> Wednesday<br>
				        <input type="checkbox" value="thu" name="sk_wws_multi_account[thu]" checked="checked"> Thursday<br>
				        <input type="checkbox" value="fri" name="sk_wws_multi_account[fri]" checked="checked"> Friday<br>
				        <input type="checkbox" value="sat" name="sk_wws_multi_account[sat]" checked="checked"> Saturday<br>
				        <input type="checkbox" value="sun" name="sk_wws_multi_account[sun]" checked="checked"> Sunday<br>
				        <span class="description"><?php _e('Schedule by days to show contact person availablity. Time format HH:MM', 'wc-wws') ?></span>
					    </td>
						</tr><!-- .schedule -->

					</tbody>
				</table>
				<hr>
					<!-- submit button -->
				<p class="submit">
				  <input type="submit" value="<?php _e( 'Add', 'wc-wws' ) ?>" class="button-primary" name="sk_wws_add_multi_account_submit" style="float: right;">
				</p><!-- end submit button -->


			</form>

	<?php
	wp_die();
}
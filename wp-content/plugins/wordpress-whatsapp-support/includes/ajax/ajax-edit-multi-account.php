<?php


add_action( "wp_ajax_sk_wws_edit_multi_account_popup", 'sk_wws_edit_multi_account_popup' );

function sk_wws_edit_multi_account_popup() {
	$key = $_GET['sk_wws_edit_multi_account'];
	$setting = get_option( 'sk_wws_multi_account');
	?>

	
		<form action="#" method="post">
		
			<table class="form-table">
				<tbody>
					<input type="hidden" name="sk_wws_multi_account[key]" value="<?php echo $key ?>">

		      <tr>
				    <th scope="row">
				      <label><?php _e('Support Person Contact', 'wc-wws') ?></label>
				    </th>
				    <td>
			        <input type="number" class="regular-text" name="sk_wws_multi_account[contact]" value="<?php echo $setting[$key]['contact'] ?>" required>
			        <br>
			        <span class="description"><?php _e('Enter mobile phone number with the international country code, without "+" character. Example:  911234567890 for (+91) 1234567890', 'wc-wws') ?></span>
				    </td>
					</tr>

		      <tr>
				    <th scope="row">
				      <label><?php _e('Support Person Name', 'wc-wws') ?></label>
				    </th>
				    <td>
			        <input type="text" name="sk_wws_multi_account[name]" class="regular-text" value="<?php echo $setting[$key]['name'] ?>" required>
			        <br>
			        <span class="description"><?php _e( 'Enter support person name.', 'wc-wws' ) ?></span>
				    </td>
					</tr>

		      <tr>
				    <th scope="row">
				      <label><?php _e('Support Person Title', 'wc-wws') ?></label>
				    </th>
				    <td>
			        <input type="text" name="sk_wws_multi_account[title]" class="regular-text" value="<?php echo $setting[$key]['title'] ?>">
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
					    <input type="text" name="sk_wws_multi_account[image]" id="sk-wws-edit-multi-account__support-img-path" class="all-options" value="<?php echo $setting[$key]['image'] ?>">
					    <input type="button" id="sk-wws-edit-multi-account__support-img" class="button-secondary" value="Upload">
			        <br>
			        <span class="description"><?php _e('Add support person image', 'wc-wws') ?></span>
				    </td>
					</tr><!-- .support person image  -->

		      <tr>
				    <th scope="row">
				      <label><?php _e('Support Pre Message', 'wc-wws') ?></label>
				    </th>
				    <td>
			        <textarea name="sk_wws_multi_account[pre_message]" class="regular-text"><?php echo $setting[$key]['pre_message'] ?></textarea> 
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
							<?php 
								wws_time_hours_dropdown(
									array(
										'name'=>'sk_wws_multi_account[start_hours]', 
										'selected'=>$setting[$key]['start_hours'],
									)
								) 
							?>
							:
							<?php 
								wws_time_minutes_dropdown(
									array(
										'name'=>'sk_wws_multi_account[start_minutes]', 
										'selected'=>$setting[$key]['start_minutes'],
									)
								) ?>
							To
							<?php 
								wws_time_hours_dropdown(
									array(
										'name'=>'sk_wws_multi_account[end_hours]', 
										'selected'=>$setting[$key]['end_hours'],
									)
								) ?>
							:
							<?php 
								wws_time_minutes_dropdown(
									array(
										'name'=>'sk_wws_multi_account[end_minutes]', 
										'selected'=>$setting[$key]['end_minutes'],
									)
								) ?>  	
			        <br>
			        <input type="checkbox" value="mon" name="sk_wws_multi_account[mon]" <?php checked( 'mon', $setting[$key]['days']['0'], true ) ?>> Monday<br>
			        <input type="checkbox" value="tue" name="sk_wws_multi_account[tue]" <?php checked( 'tue', $setting[$key]['days']['1'], true ) ?>> Tuesday<br>
			        <input type="checkbox" value="wed" name="sk_wws_multi_account[wed]" <?php checked( 'wed', $setting[$key]['days']['2'], true ) ?>> Wednesday<br>
			        <input type="checkbox" value="thu" name="sk_wws_multi_account[thu]" <?php checked( 'thu', $setting[$key]['days']['3'], true ) ?>> Thursday<br>
			        <input type="checkbox" value="fri" name="sk_wws_multi_account[fri]" <?php checked( 'fri', $setting[$key]['days']['4'], true ) ?>> Friday<br>
			        <input type="checkbox" value="sat" name="sk_wws_multi_account[sat]" <?php checked( 'sat', $setting[$key]['days']['5'], true ) ?>> Saturday<br>
			        <input type="checkbox" value="sun" name="sk_wws_multi_account[sun]" <?php checked( 'sun', $setting[$key]['days']['6'], true ) ?>> Sunday<br>
			        <span class="description"><?php _e('Schedule by days to show contact person availablity. Time format HH:MM', 'wc-wws') ?></span>
				    </td>
					</tr><!-- .schedule -->

				</tbody>
			</table>
			<hr>
				<!-- submit button -->
			<p class="submit">
			  <input type="submit" value="<?php _e( 'Save', 'wc-wws' ) ?>" class="button-primary" name="sk_wws_edit_multi_account_submit" style="float: right;">
			</p><!-- end submit button -->


		</form>



	<?php

	wp_die();


}

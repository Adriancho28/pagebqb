<?php add_thickbox(); ?>
<div class="wrap">
	
	<h1><?php _e('WeCreativez WhatsApp Support', 'wc-wws') ?></h1>
	<?php do_action( 'sk_wws_admin_notification' ) ?>
	<hr>


	<form action="#" method="post" id="sk-wws__admin-form">
		
		
		<h2><?php _e('Designing', 'wc-wws') ?></h2>

			<table class="form-table">
		  	<tbody>

		    	<!-- layout selection  -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Select Layout', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Select your layout.', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <table>
			        	<tr>
			        		<td>
			        			<label class="sk-wws-admin-label">
				        			<input type="radio" name="sk_wws_setting[ui_layout]" class="sk-wws-admin-radio" value="1" <?php checked(1, $this->get_setting('ui_layout'), true) ?>>
				        			<img src="<?php echo $this->plugin_url( 'assets/admin/img/layout-1.png' ) ?>" class="sk-wws-admin-radio-image" width="200">
				        		</label>
				        		<label class="sk-wws-admin-label">
				        			<input type="radio" name="sk_wws_setting[ui_layout]" class="sk-wws-admin-radio" value="2" <?php checked(2, $this->get_setting('ui_layout'), true) ?>>
				        			<img src="<?php echo $this->plugin_url( 'assets/admin/img/layout-2.png' ) ?>" class="sk-wws-admin-radio-image" width="200">
				        		</label>
				        		<label class="sk-wws-admin-label">
				        			<input type="radio" name="sk_wws_setting[ui_layout]" class="sk-wws-admin-radio" value="3" <?php checked(3, $this->get_setting('ui_layout'), true) ?>>
				        			<img src="<?php echo $this->plugin_url( 'assets/admin/img/layout-3.png' ) ?>" class="sk-wws-admin-radio-image" width="200">
				        		</label>
				        		<label class="sk-wws-admin-label">
				        			<input type="radio" name="sk_wws_setting[ui_layout]" class="sk-wws-admin-radio" value="4" <?php checked(4, $this->get_setting('ui_layout'), true) ?>>
				        			<img src="<?php echo $this->plugin_url( 'assets/admin/img/layout-4.png' ) ?>" class="sk-wws-admin-radio-image" width="200">
				        		</label>
				        		<label class="sk-wws-admin-label">
				        			<input type="radio" name="sk_wws_setting[ui_layout]" class="sk-wws-admin-radio" value="5" <?php checked(5, $this->get_setting('ui_layout'), true) ?>>
				        			<img src="<?php echo $this->plugin_url( 'assets/admin/img/layout-5.png' ) ?>" class="sk-wws-admin-radio-image" width="200">
				        		</label>
				        		<label class="sk-wws-admin-label">
				        			<input type="radio" name="sk_wws_setting[ui_layout]" class="sk-wws-admin-radio" value="6" <?php checked(6, $this->get_setting('ui_layout'), true) ?>>
				        			<img src="<?php echo $this->plugin_url( 'assets/admin/img/layout-6.png' ) ?>" class="sk-wws-admin-radio-image" width="200">
				        		</label>
			        		</td>
			        	</tr>
			        </table>
				    </td>
					</tr><!-- .layout selection -->


					<!-- layout background color  -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Layout Background Color', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Set popup layout background color.', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <input type="text" name="sk_wws_setting[ui_layout_bg_color]" class="sk-wws__color-picker" value="<?php echo $this->get_setting('ui_layout_bg_color'); ?>">
				    </td>
					</tr><!-- .layout background color  -->


					<!-- layout text color  -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Layout Text Color', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Set popup layout text color.', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <input type="text" name="sk_wws_setting[ui_layout_text_color]" class="sk-wws__color-picker" value="<?php echo $this->get_setting('ui_layout_text_color'); ?>">
				    </td>
					</tr><!-- .layout text color  -->

					<!-- layout Gradientr  -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Enable Layout Gradient', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Enable/ Disable popup background gradient.', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <input type="checkbox" name="sk_wws_setting[ui_layout_gradient]" <?php checked( 1, $this->get_setting( 'ui_layout_gradient' ), true ) ?> >
				    </td>
					</tr><!-- .layout Gradientr  -->

		    </tbody>
		   </table>
		   <hr>


			<div id="wwsAdminSupportTextSetting">
       	<h2><?php _e('WhatsApp Support Text Settings', 'wc-wws') ?></h2>

         <table class="form-table">
         	<tbody>

     				<!-- about support -->
			      <tr id="wwsAdminAboutSupport">
					    <th scope="row">
					      <label><?php _e('About Support', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('About Support', 'wc-wws') ?>"></span>
					    </th>
					    <td>
				        <input type="" name="sk_wws_setting[text_about_support]" class="regular-text" value="<?php echo $this->get_setting('text_about_support') ?>">
					    </td>
						</tr><!-- .about support -->


						<!-- welcome message -->
			      <tr id="wwsAdminWelcomeMessage">
					    <th scope="row">
					      <label><?php _e('Welcome Message', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Welcome message from Support. Sometime this can be use as pre message.', 'wc-wws') ?>"></span>
					    </th>
					    <td>
				        <input type="" name="sk_wws_setting[text_welcome_msg]" class="regular-text" value="<?php echo $this->get_setting('text_welcome_msg') ?>">
					    </td>
						</tr><!-- .welcome message -->


						<!-- input placeholder text -->
			      <tr id="wwsAdminInputPlaceholder">
					    <th scope="row">
					      <label><?php _e('Input Placeholder Text', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Input placeholder', 'wc-wws') ?>"></span>
					    </th>
					    <td>
				        <input type="" name="sk_wws_setting[text_input_placeholder]" class="regular-text" value="<?php echo $this->get_setting('text_input_placeholder') ?>">
					    </td>
						</tr><!-- .input placeholder text -->


						<!-- input Predefined text -->
			      <tr id="wwsAdminInputPredefinedText">
					    <th scope="row">
					      <label><?php _e('Predefined Text', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('This will automatically append the following options along with user text.', 'wc-wws') ?>"></span>
					    </th>
					    <td>
					    	<textarea class="regular-text" name="sk_wws_setting[text_predefined_text]" style="height: 120px;"><?php echo $this->get_setting('text_predefined_text') ?></textarea>
					    	<p class="description"><?php printf( __( '%s to display current page title in chat.', 'wc-wws' ), '<code>{title}</code>' ) ?></p>
					    	<p class="description"><?php printf( __( '%s to display current page URL in chat.', 'wc-wws' ), '<code>{url}</code>' ) ?></p>
					    	<p class="description"><?php printf( __( '%s to break the line into a new line.', 'wc-wws' ), '<code>{br}</code>' ) ?></p>
					    </td>
						</tr><!-- .input Predefined text -->



         	</tbody>
         </table>
   			<hr>
			</div>
       	


	    	<h2><?php _e('WhatsApp Support Trigger Button', 'wc-wws') ?></h2>

	      <table class="form-table">
	      	<tbody>

	  				<!-- support contact number -->
	  	      <tr>
	  			    <th scope="row">
	  			      <label><?php _e('Trigger Button Text', 'wc-wws') ?></label>
	  			      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('If you leave it blank than, trigger button shown as only icon.', 'wc-wws') ?>"></span>
	  			    </th>
	  			    <td>
	  		        <input type="text" name="sk_wws_setting[text_trigger_btn]" class="regular-text" value="<?php echo $this->get_setting('text_trigger_btn') ?>">
	  			    </td>
	  				</tr><!-- .support contact number -->

						<!-- layout Gradientr  -->
			      <tr>
					    <th scope="row">
					      <label><?php _e('Show Only Icon on Mobile', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Enable this option if you what to display an icon instead of text button on mobile.', 'wc-wws' ) ?>"></span>
					    </th>
					    <td>
				        <input type="checkbox" name="sk_wws_setting[ul_trigger_btn_only_icon]" <?php checked( 1, $this->get_setting( 'ul_trigger_btn_only_icon' ), true ) ?> >
					    </td>
						</tr><!-- .layout Gradientr  -->



	      	</tbody>
	      </table>
				<hr>


			<div id="wwsAdminGroupInvitationSupport">

	     	<h2><?php _e('WhatsApp Group Settings', 'wc-wws') ?></h2>

	       <table class="form-table">
	       	<tbody>

	   				<!-- support contact number -->
	   	      <tr>
	   			    <th scope="row">
	   			      <label><?php _e('Support Group ID', 'wc-wws') ?></label>
	   			      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter your WhatsApp group chat ID', 'wc-wws') ?>"></span>
	   			    </th>
	   			    <td>
	   		        <input type="text" name="sk_wws_setting[wws_group_id]" class="regular-text" value="<?php echo $this->get_setting('wws_group_id') ?>">
	   			    </td>
	   				</tr><!-- .support contact number -->


	       	</tbody>
	       </table>
				<hr>
				
			</div>

			
			<div id="wwsAdminSinglePersonSupport">
				<h2><?php _e('WhatsApp Single Person Support', 'wc-wws') ?></h2>

	       <table class="form-table">
	       	<tbody>

						<!-- support contact number -->
			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Contact Number', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter mobile phone number with the international country code, without + character. Example:  911234567890 for (+91) 1234567890', 'wc-wws') ?>"></span>
					    </th>
					    <td>
				        <input type="number" name="sk_wws_setting[wws_contact_number]" class="regular-text" value="<?php echo $this->get_setting('wws_contact_number') ?>">
					    </td>
						</tr><!-- .support contact number -->

						<!-- support person image  -->
			      <tr>
					    <th scope="row">
					      <label><?php _e('Support Person Image', 'wc-wws') ?></label>
					      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Add Support person image', 'wc-wws') ?>"></span>
					    </th>
					    <td>
						    <input type="text" name="sk_wws_setting[ui_support_person_img]" id="sk-wws__support-img-path" class="regular-text" value="<?php echo $this->get_setting('ui_support_person_img'); ?>">
						    <input type="button" id="sk-wws__support-img" class="button-secondary" value="Upload Image">
					    </td>
						</tr><!-- .support person image  -->


	       	</tbody>
	       </table>
				<hr>
			</div>

			



     	

			<div id="wwsAdminMultiPersonSupport">
	     	<h2><?php _e('WhatsApp Multi Account Settings', 'wc-wws') ?></h2>

	       <table class="form-table">
	       	<tbody>

	       		<?php
	       			foreach ( get_option( 'sk_wws_multi_account', array() ) as $key => $value) :
	       		?>
							
							<!-- support contact number -->
				      <tr>
						    <th scope="row">
						      <label><?php echo $value['name'] ?> <small><?php echo '( '. $value['title'] . ' )' ?></small></label>
						    </th>
						    <td>
					        <a href="#" data-multi-account-key="<?php echo $key ?>" class="button sk_wws_edit_multi_account_show_popup"><?php _e( 'Edit', 'wc-wws' ) ?></a>&nbsp;<a href="?sk_wws_multi_account_delete=<?php echo $key ?>" class="button"><?php _e( 'Delete', 'wc-wws' ) ?></a>
						    </td>
							</tr><!-- .support contact number -->

	       		<?php
	       			endforeach;
	       		?>		


						<!-- support contact number -->
			      <tr>
					    <th scope="row">
					      <label><?php _e( 'Add Support Person', 'wc-wws' ) ?></label>
					    </th>
					    <td>
				        <a href="#" name="<?php _e('Add Support Person', 'wc-wws') ?>" class="button button-primary sk_wws_add_multi_account_show_popup"><?php _e( 'Add Support Person', 'wc-wws' ) ?></a>
					    </td>
						</tr><!-- .support contact number -->
						

	       	</tbody>
	       </table>
				<hr>
			</div>



     	

				

			<h2><?php _e('Basic Settings', 'wc-wws') ?></h2>

		  <table class="form-table">
		  	<tbody>


					<!-- custom css -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Scroll Length', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Display button when scroll length matched with above value. Leave blank to display everytime.', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <input type="number" min="1" max="100" name="sk_wws_setting[wws_scroll_length]" value="<?php echo $this->get_setting('wws_scroll_length') ?>" /> %
				    </td>
					</tr><!-- .custom css -->

					<!-- RTL -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Enable RTL', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'You can enable RTL ( Right to Left ) if your website has language like Arabic, Persian and Hebrew.', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <label for="sk-wws__rtl">
			        	<input type="checkbox" id="sk-wws__rtl" name="sk_wws_setting[wws_rtl]" value="1" <?php echo checked( 1, $this->get_setting( 'wws_rtl' ), 1 ) ?> >
			        </label>
				    </td>
					</tr><!-- .RTL -->

					<!-- display on desktop -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Display On Desktop', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Display on desktop/laptop', 'wc-wws') ?>"></span>
				    </th>
				    <td>
			        <select name="sk_wws_setting[wws_display_on_desktop]" id="sk-wws__display_on_desktop">
			        	<option value="1" <?php selected( '1', $this->get_setting('wws_display_on_desktop'), true ) ?> ><?php _e('Yes', 'wc-wws') ?></option>
			        	<option value="0" <?php selected( NULL, $this->get_setting('wws_display_on_desktop'), true ) ?> ><?php _e('No', 'wc-wws') ?></option>
			        </select>
			        <select name="sk_wws_setting[wws_desktop_location]" id="sk-wws__desktop_position">
			        	<option value="tl" <?php selected( 'tl', $this->get_setting('wws_desktop_location'), true ) ?> ><?php _e('Top Left', 'wc-wws') ?></option>
			        	<option value="tc" <?php selected( 'tc', $this->get_setting('wws_desktop_location'), true ) ?> ><?php _e('Top Center', 'wc-wws') ?></option>
			        	<option value="tr" <?php selected( 'tr', $this->get_setting('wws_desktop_location'), true ) ?> ><?php _e('Top Right', 'wc-wws') ?></option>
			        	<option value="bl" <?php selected( 'bl', $this->get_setting('wws_desktop_location'), true ) ?> ><?php _e('Bottom Left', 'wc-wws') ?></option>
			        	<option value="bc" <?php selected( 'bc', $this->get_setting('wws_desktop_location'), true ) ?> ><?php _e('Bottom Center', 'wc-wws') ?></option>
			        	<option value="br" <?php selected( 'br', $this->get_setting('wws_desktop_location'), true ) ?> ><?php _e('Bottom Right', 'wc-wws') ?></option>
			        </select>
				    </td>
					</tr><!-- .display on desktop -->


					<!-- display on mobile -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Display On Mobile', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Display on mobile devices', 'wc-wws') ?>"></span>
				    </th>
				    <td>
			        <select name="sk_wws_setting[wws_display_on_mobile]" id="sk-wws__display_on_mobile">
			        	<option value="1" <?php selected( '1', $this->get_setting('wws_display_on_mobile'), true ) ?> ><?php _e('Yes', 'wc-wws') ?></option>
			        	<option value="0" <?php selected( NULL, $this->get_setting('wws_display_on_mobile'), true ) ?> ><?php _e('No', 'wc-wws') ?></option>
			        </select>
			        <select name="sk_wws_setting[wws_mobile_location]" id="sk-wws__mobile_position">
			        	<option value="tl" <?php selected( 'tl', $this->get_setting('wws_mobile_location'), true ) ?> ><?php _e('Top Left', 'wc-wws') ?></option>
			        	<option value="tc" <?php selected( 'tc', $this->get_setting('wws_mobile_location'), true ) ?> ><?php _e('Top Center', 'wc-wws') ?></option>
			        	<option value="tr" <?php selected( 'tr', $this->get_setting('wws_mobile_location'), true ) ?> ><?php _e('Top Right', 'wc-wws') ?></option>
			        	<option value="bl" <?php selected( 'bl', $this->get_setting('wws_mobile_location'), true ) ?> ><?php _e('Bottom Left', 'wc-wws') ?></option>
			        	<option value="bc" <?php selected( 'bc', $this->get_setting('wws_mobile_location'), true ) ?> ><?php _e('Bottom Center', 'wc-wws') ?></option>
			        	<option value="br" <?php selected( 'br', $this->get_setting('wws_mobile_location'), true ) ?> ><?php _e('Bottom Right', 'wc-wws') ?></option>
			        </select>
				    </td>
					</tr><!-- .display on mobile -->

					<!-- auto popup -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Auto Popup', '') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter the popup auto display time in seconds', 'wc-wws') ?>"></span>
				    </th>
				    <td>
			        <select name="sk_wws_setting[wws_auto_popup]">
			        	<option value="1" <?php selected( '1', $this->get_setting('wws_auto_popup'), true ) ?> ><?php _e('Yes', 'wc-wws') ?></option>
			        	<option value="0" <?php selected( NULL, $this->get_setting('wws_auto_popup'), true ) ?> ><?php _e('No', 'wc-wws') ?></option>
			        </select>
			        <input type="number" name="sk_wws_setting[wws_auto_popup_time]" value="<?php echo $this->get_setting( 'wws_auto_popup_time' ) ?>">
				    </td>
					</tr><!-- .auto popup -->

					<!-- filter by page -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Filter By Page', 'wc-wws') ?></label>
				    </th>
				    <td>
			       	<label for="sk-wws__filter-by-page-1">
			       		<input type="checkbox" id="sk-wws__filter-by-page-1" name="sk_wws_setting[wws_filter_by_page][by_everywhere]" value="1" <?php echo checked( 1, $this->get_setting('wws_filter_by_page', 'by_everywhere'), 1 ) ?> > <?php _e('Everwhere', 'wc-wws') ?>
			       	</label><br>
			       	<label for="sk-wws__filter-by-page-4">
			       		<input type="checkbox" id="sk-wws__filter-by-page-4" name="sk_wws_setting[wws_filter_by_page][by_front_page]" value="1" <?php echo checked( 1, $this->get_setting('wws_filter_by_page', 'by_front_page'), 1 ) ?> > <?php _e('Front Page', 'wc-wws') ?>
			       	</label><br><br>
			       	<span class="description"><?php _e('Include popup on Pages', 'wc-wws') ?></span><br>
							<?php 
								wws_admin_page_dropdown( array(
									'multiple' => '1',
									'name' => 'sk_wws_setting[wws_filter_by_page][by_slugs][]',
									'selected' => $this->get_setting('wws_filter_by_page', 'by_slugs')
								) );
	 						?>
			        <br>
			        <span class="description"><?php _e('Select pages, where you want to add WhatsApp Support.', 'wc-wws') ?></span>
			        <br><br>
  		       	<span class="description"><?php _e('Exclude popup on Pages', 'wc-wws') ?></span><br>
  						<?php 
  							wws_admin_page_dropdown( array(
  								'multiple' => '1',
  								'name' => 'sk_wws_setting[wws_filter_by_page][by_slugs_exclude][]',
  								'selected' => $this->get_setting('wws_filter_by_page', 'by_slugs_exclude')
  							) );
   						?>
  		        <br>
  		        <span class="description"><?php _e('Select pages, where you not want to add WhatsApp Support.', 'wc-wws') ?></span>

				    </td>
					</tr><!-- .filter by page -->

					<!-- schedule -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Schedule', 'wc-wws') ?></label>
				    </th>
				    <td>

				    	<table id="sk-wws__schedule-table">
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][mon][is_enable]" value="1" <?php echo ($this->get_schedule('mon', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Monday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][mon][start]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('mon', 'start') ?>" ></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][mon][end]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('mon', 'end') ?>" ></td>
				    		</tr>
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][tue][is_enable]" value="1" <?php echo ($this->get_schedule('tue', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Tuesday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][tue][start]"  class="sk-wws-timepicker" value="<?php echo $this->get_schedule('tue', 'start') ?>"></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][tue][end]"  class="sk-wws-timepicker"  value="<?php echo $this->get_schedule('tue', 'end') ?>" ></td>
				    		</tr>
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][wed][is_enable]" value="1" <?php echo ($this->get_schedule('wed', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Wednesday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][wed][start]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('wed', 'start') ?>"></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][wed][end]" class="sk-wws-timepicker"  value="<?php echo $this->get_schedule('wed', 'end') ?>" ></td>
				    		</tr>
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][thu][is_enable]" value="1" <?php echo ($this->get_schedule('thu', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Thursday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][thu][start]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('thu', 'start') ?>"></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][thu][end]" class="sk-wws-timepicker"  value="<?php echo $this->get_schedule('thu', 'end') ?>" ></td>
				    		</tr>
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][fri][is_enable]" value="1" <?php echo ($this->get_schedule('fri', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Friday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][fri][start]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('fri', 'start') ?>"></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][fri][end]" class="sk-wws-timepicker"  value="<?php echo $this->get_schedule('fri', 'end') ?>" ></td>
				    		</tr>
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][sat][is_enable]" value="1" <?php echo ($this->get_schedule('sat', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Saturday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][sat][start]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('sat', 'start') ?>"></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][sat][end]" class="sk-wws-timepicker"  value="<?php echo $this->get_schedule('sat', 'end') ?>" ></td>
				    		</tr>
				    		<tr>
				    			<td><input type="checkbox" name="sk_wws_setting[wws_schedule][sun][is_enable]" value="1" <?php echo ($this->get_schedule('sun', 'is_enable') == 1) ? 'checked' : '' ?> > <?php _e('Sunday', 'wc-wws') ?> </td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][sun][start]" class="sk-wws-timepicker" value="<?php echo $this->get_schedule('sun', 'start') ?>"></td>
				    			<td>To</td>
				    			<td><input type="text" name="sk_wws_setting[wws_schedule][sun][end]" class="sk-wws-timepicker"  value="<?php echo $this->get_schedule('sun', 'end') ?>" ></td>
				    		</tr>
				    	</table>
			        <span class="description"><?php _e('Schedule by days to show WhatsApp Support Popup. Time format HH:MM:SS', 'wc-wws') ?></span><br>
			        <span class="description">
			        	<?php 
			        		printf( __( 'Your selected time zone is %s', 'wc-wws' ), 
			        			'<a href="'.admin_url( 'options-general.php' ).'">' . wws_selected_timezone() . '</a>' );
			        	?>
			        </span>
				    </td>
					</tr><!-- .schedule -->

					<!-- custom css -->
		      <tr>
				    <th scope="row">
				      <label><?php _e('Custom	CSS', 'wc-wws') ?></label>
				      <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Add your custom CSS here', 'wc-wws' ) ?>"></span>
				    </th>
				    <td>
			        <textarea name="sk_wws_setting[wws_custom_css]" class="regular-text" id="wws-admin__custom-css" cols="5" spellcheck="false"><?php echo $this->get_setting('wws_custom_css') ?></textarea>
				    </td>
					</tr><!-- .custom css -->

		  	</tbody>
		  </table>

			<hr>

			<!-- submit button -->
			<p class="submit">
			  <input type="submit" value="<?php _e( 'Save Changes', 'wc-wws' ) ?>" class="button-primary" name="sk_wws_admin_form_submit">
			</p><!-- end submit button -->
	  	

	</form>

</div>
<div class="wrap">
	
	<h1><?php _e('WeCreativez WhatsApp Support - Shortcode Generator', 'wc-wws') ?></h1>
	<?php do_action( 'sk_wws_admin_notification' ) ?>
	<hr>


	<div id="sk-wws__admin-shortcode-generator" >
			

		<div class="sk-wws__admin-col-2">
			<table>

				<tr>
					<th scope="row">
						<label >
							<?php _e('Button Type', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<select id="sk-wws__scg-button-type" >
			    		<option value="sb" selected><?php _e('Support Button', 'wc-wws') ?></option>
			    		<option value="gcb"><?php _e('Group Invitation Button', 'wc-wws') ?></option>
			    	</select>
			    </td>
				</tr>


				<tr class="sk-wws__scg-group-chat-id-row">
					<th scope="row">
						<label >
							<?php _e('Group Chat ID', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<input type="text" id="sk-wws__scg-group-chat-id" class="regular-text" value="XYZ12345678"><br>
			    	<span class="description"><?php _e('Enter your WhatsApp group chat ID', 'wc-wws') ?></span>
			    </td>
				</tr>



				<tr class="sk-wws__scg-support-number-row">
					<th scope="row">
						<label >
							<?php _e('Support Number', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<input type="text" id="sk-wws__scg-support-number" class="regular-text" value="911234567890"><br>
			    	<span class="description"><?php _e('Enter mobile phone number with the international country code, without "+" character', 'wc-wws') ?></span>
			    </td>
				</tr>

				<tr>
					<th scope="row">
						<label >
							<?php _e('Button Text', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<input type="text" id="sk-wws__scg-btn-text" class="regular-text" value="Contact Us">
			    </td>
				</tr>


				<tr>
					<th scope="row">
						<label >
							<?php _e('Button Background Color', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<input type="text" id="sk-wws__scg-btn-bg-color" class="sk-wws__color-picker" value="#22c15e">
			    </td>
				</tr>


				<tr>
					<th scope="row">
						<label >
							<?php _e('Button Text Color', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<input type="text" id="sk-wws__scg-btn-text-color" class="sk-wws__color-picker" value="#fff">
			    </td>
				</tr>


				<tr>
					<th scope="row">
						<label >
							<?php _e('Button Bold Text', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<select id="sk-wws__scg-btn-text-bold" >
			    		<option value="300" selected><?php _e('No', 'wc-wws') ?></option>
			    		<option value="700"><?php _e('Yes', 'wc-wws') ?></option>
			    	</select>
			    	<br>
			    </td>
				</tr>


					<tr>
						<th scope="row">
							<label >
								<?php _e('Button Font Style', 'wc-wws') ?>
							</label>
						</th>
						<td>
				    	<select id="sk-wws__scg-btn-font-family" >
				    		<option value="inherit" selected><?php _e('Theme Default', 'wc-wws') ?></option>
				    		<option value="Lobster">Lobster</option>
				    		<option value="Satisfy">Satisfy</option>
				    		<option value="Bree Serif">Bree Serif</option>
				    		<option value="Oswald">Oswald</option>
				    		<option value="Ubuntu">Ubuntu</option>
				    		<option value="Dancing Script">Dancing Script</option>
				    	</select>
				    	<br>
				    </td>
					</tr>


				<tr class="sk-wws__scg-message-row">
					<th scope="row">
						<label >
							<?php _e('Pre Populate Message', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<input type="text" id="sk-wws__scg-message" class="regular-text" value="Hello..."><br>
			    	<span class="description"><?php _e('This is what you will receive when user sent message first time.', 'wc-wws') ?></span>
			    </td>
				</tr>

				<tr>
					<th scope="row">
						<label >
							<?php _e('Full Width Button', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<select id="sk-wws__scg-btn-full-width" >
			    		<option value="no" selected><?php _e('No', 'wc-wws') ?></option>
			    		<option value="yes"><?php _e('Yes', 'wc-wws') ?></option>
			    	</select>
			    	<br>
			    	<span class="description"><?php _e('This will expand button to full width.', 'wc-wws') ?></span>
			    </td>
				</tr>

				<tr>
					<th scope="row">
						<label >
							<?php _e('Display On Mobile', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<select id="sk-wws__scg-on-mobile" >
			    		<option value="no"><?php _e('No', 'wc-wws') ?></option>
			    		<option value="yes" selected><?php _e('Yes', 'wc-wws') ?></option>
			    	</select>
			    </td>
				</tr>

				<tr>
					<th scope="row">
						<label >
							<?php _e('Display On Desktop', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<select id="sk-wws__scg-on-desktop" >
			    		<option value="no"><?php _e('No', 'wc-wws') ?></option>
			    		<option value="yes" selected><?php _e('Yes', 'wc-wws') ?></option>
			    	</select>
			    </td>
				</tr>

			</table>
		</div>


		<div class="sk-wws__admin-col-2" style="position: relative;">
			<button id="sk-wws__scg-support-button">

				<svg id="sk-wws__scg-button-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
		<path style="fill: #fff;" d="M0.1,24l1.7-6.2c-1-1.8-1.6-3.8-1.6-5.9C0.2,5.3,5.5,0,12,0c3.2,0,6.2,1.2,8.4,3.5c2.2,2.2,3.5,5.2,3.5,8.4
			c0,6.6-5.3,11.9-11.9,11.9c-2,0-4-0.5-5.7-1.4C6.4,22.3,0.1,24,0.1,24z M6.7,20.2c1.7,1,3.3,1.6,5.4,1.6c5.4,0,9.9-4.4,9.9-9.9
			c0-5.5-4.4-9.9-9.9-9.9c-5.5,0-9.9,4.4-9.9,9.9c0,2.2,0.7,3.9,1.7,5.6l-1,3.6C2.9,21.2,6.7,20.2,6.7,20.2z M18,14.7
			c-0.1-0.1-0.3-0.2-0.6-0.3c-0.3-0.1-1.8-0.9-2-1c-0.3-0.1-0.5-0.1-0.7,0.1c-0.2,0.3-0.8,1-0.9,1.2s-0.3,0.2-0.6,0.1
			c-0.3-0.1-1.3-0.5-2.4-1.5c-0.9-0.8-1.5-1.8-1.7-2.1c-0.2-0.3,0-0.5,0.1-0.6c0.1-0.1,0.3-0.3,0.4-0.5C9.9,10,9.9,9.8,10,9.6
			c0.1-0.2,0.1-0.4,0-0.5C9.9,9,9.3,7.5,9.1,6.9C8.8,6.3,8.6,6.4,8.4,6.4l-0.6,0C7.6,6.4,7.3,6.5,7,6.8s-1,1-1,2.5s1.1,2.9,1.2,3.1
			c0.1,0.2,2.1,3.2,5.1,4.5c0.7,0.3,1.3,0.5,1.7,0.6c0.7,0.2,1.4,0.2,1.9,0.1c0.6-0.1,1.8-0.7,2-1.4C18.1,15.4,18.1,14.9,18,14.7z"/>
		</svg>

				<span><?php _e('Contact Us', 'wc-wws') ?></span>
			</button>
		</div>

	</div>


	<div style="margin-top: 40px">
			<table>
				<tr>
					<th scope="row">
						<label style="padding-right: 30px;">
							<?php _e('Shortcode', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<textarea id="sk-wws__scg-main-code" class="regular-text" rows="5" onclick="this.focus();this.select();">[whatsappsupport]</textarea><br>
			    	<span class="description"><?php _e('Copy shortcode and paste wherever you want. Have fun! :)', 'wc-wws') ?></span>
			    </td>
				</tr>
			</table>
	</div>


	<div style="margin-top: 40px">
			<table>
				<tr>
					<th scope="row">
						<label style="padding-right: 30px;">
							<?php _e('HTML Code', 'wc-wws') ?>
						</label>
					</th>
					<td>
			    	<textarea id="sk-wws__scg-html-code" class="regular-text" rows="5" onclick="this.focus();this.select();"><a>Contact Us</a></textarea><br>
			    	<span class="description"><?php _e('Copy HTML and paste wherever you want. Have fun! :)', 'wc-wws') ?></span>
			    </td>
				</tr>
			</table>
	</div>


</div>
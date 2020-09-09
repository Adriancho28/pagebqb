<div class="wrap">
					<h1><?php _e( 'Product Query', 'wc-wws' ) ?></h1>
					<?php do_action( 'sk_wws_admin_notification' ) ?>
					<hr>

					<form action="#" method="post">

						<table class="form-table">
					  	<tbody>

								<!-- Enable / Disable Product Support Button  -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Product Support Button', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Enable / Disable product support button on WooCommerce single product page.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								    <input type="checkbox" name="wws_product_query_setting[status]" <?php checked( '1', $product_query['status'], true ) ?>>
								    <span class="description"></span>
								  </td>
								</tr><!-- .Enable / Disable Product Share  -->

								<!-- Button Location -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Button Location', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Display product share button on mobile.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								    <select name="wws_product_query_setting[btn_location]">
								    	<option value="woocommerce_before_add_to_cart_form" <?php selected( 'woocommerce_before_add_to_cart_form', $product_query['btn_location'], true ) ?>><?php _e( 'After Short Description', 'wc-wws' ); ?></option>
								    	<option value="woocommerce_after_add_to_cart_button" <?php selected( 'woocommerce_after_add_to_cart_button', $product_query['btn_location' ], true ) ?>><?php _e( 'After Add to Cart Button', 'wc-wws' ); ?></option>
								    </select>
								  </td>
								</tr><!-- Button Location -->


								<!-- Button Color  -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Button Color', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Change button background color.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								    <input type="text" name="wws_product_query_setting[btn_bg_color]" class="sk-wws__color-picker" value="<?php echo $product_query[ 'btn_bg_color' ] ?>">
								  </td>
								</tr><!-- .Button Color  -->

								<!-- Button Text Color  -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Button Text Color', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Change button text color.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								    <input type="text" name="wws_product_query_setting[btn_text_color]" class="sk-wws__color-picker" value="<?php echo $product_query[ 'btn_text_color' ] ?>">
								  </td>
								</tr><!-- .Button Text Color  -->

								<!-- Button Label  -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Button Label', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'Enter button label.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								    <input type="text" name="wws_product_query_setting[btn_label]" class="regular-text" value="<?php echo $product_query[ 'btn_label' ] ?>">
								  </td>
								</tr><!-- .Button Label -->


								<!-- support contact number -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Support Contact Number', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter mobile phone number with the international country code, without + character. Example:  911234567890 for (+91) 1234567890', 'wc-wws') ?>"></span>
								  </th>
								  <td>
								    <input type="number" name="wws_product_query_setting[support_number]" class="regular-text" value="<?php echo $product_query[ 'support_number' ] ?>">
								  </td>
								</tr><!-- .support contact number -->


								<!-- support person name -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Support Person Name', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter the name of support person.', 'wc-wws') ?>"></span>
								  </th>
								  <td>
								    <input type="text" name="wws_product_query_setting[support_person_name]" class="regular-text" value="<?php echo $product_query[ 'support_person_name' ] ?>">
								  </td>
								</tr><!-- .support person name -->


								<!-- support person title -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Support Person Title', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter the title / designation of support person.', 'wc-wws') ?>"></span>
								  </th>
								  <td>
								    <input type="text" name="wws_product_query_setting[support_person_title]" class="regular-text" value="<?php echo $product_query[ 'support_person_title' ] ?>">
								  </td>
								</tr><!-- .support person title -->

								<!-- support person image  -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Support Person Image', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Add support person image', 'wc-wws') ?>"></span>
								  </th>
								  <td>
								    <input type="text" name="wws_product_query_setting[support_person_img]" id="sk-wws__support-img-path" class="regular-text" value="<?php echo $product_query[ 'support_person_img' ] ?>">
								    <input type="button" id="sk-wws__support-img" class="button-secondary" value="Upload Image">
								  </td>
								</tr><!-- .support person image  -->

								<!-- support message -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Support Message', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e('Enter the pre populate support message here.', 'wc-wws') ?>"></span>
								  </th>
								  <td>
								    <textarea name="wws_product_query_setting[support_pre_message]" class="regular-text"><?php echo $product_query[ 'support_pre_message' ] ?></textarea>
								    <p class="description"><?php printf( __( 'Use %s shortcode for product title and %s for product URL', 'wc-wws'), '<code>[wws_product_title]</code>', '<code>[wws_product_url]</code>' ) ?></p>
								  </td>
								</tr><!-- .support message -->

							</tbody>
						</table>

						<hr>


						<table class="form-table">
							<tbody>
								
								<!--   -->
								<tr>
								  <th scope="row">
								    <label><?php _e('Exclude Product Query Button', 'wc-wws') ?></label>
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'You can exclude or turn off WhatsApp product query button by products.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								  	<p><?php _e( 'Exclude by products', 'wc-wws' ) ?></p>
										<?php
											$args = array(
												'multiple' => true,
												'name' => 'wws_product_query_setting[exclude_by_products][]',
												'selected' => $product_query['exclude_by_products'],
											);
											wws_products_dropdown( $args );
										?>
								  </td>
								</tr><!-- .  -->

								<!--   -->
								<tr>
								  <th scope="row">
								    <span class="dashicons dashicons-info wws-admin-tooltip" data-tippy-content="<?php _e( 'You can exclude or turn off WhatsApp product query button by categories.', 'wc-wws' ) ?>"></span>
								  </th>
								  <td>
								  	<p><?php _e( 'Exclude by categories', 'wc-wws' ) ?></p>
										<?php
											$args = array(
												'multiple' => true,
												'name' => 'wws_product_query_setting[exclude_by_categories][]',
												'selected' => $product_query['exclude_by_categories'],
											);
											wws_categories_dropdown( $args );
										?>
								  </td>
								</tr><!-- .  -->

							</tbody>
						</table>

						<!-- submit button -->
						<p class="submit">
						  <input type="submit" value="<?php _e( 'Save Product Support', 'wc-wws' ) ?>" class="button-primary" name="wws_product_query_submit">
						</p><!-- end submit button -->


					</form>


</div>




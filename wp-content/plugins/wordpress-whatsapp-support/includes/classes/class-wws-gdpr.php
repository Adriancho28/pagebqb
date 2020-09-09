<?php

	/**
	 * Plugin GDPR
	 */
	class WWS_GDPR extends WWS_Common	{
		
		function __construct()	{

			if ( $this->_get_option( 'gdpr_status' ) != 1 )
				return;
			
			add_shortcode( 'wws_gdpr_link', array( $this, 'get_gdpr_link' ) );
			add_action( 'wws_action_plugin', array( $this, 'display_gdpr' ) );

		}

		function display_gdpr() {
			?>
			<div class="wws-gdpr">
				<div>
					<label for="wws-gdpr-checkbox">
						<input type="checkbox" id="wws-gdpr-checkbox"> <?php echo do_shortcode( stripslashes( do_shortcode(  $this->_get_option( 'gdpr_msg' ) ) ) ) ?>
						</label>
				</div>
			</div>

			<?php
		}


		function get_gdpr_link() {

			$page_slug 				= $this->_get_option( 'gdpr_privacy_page' );
			$page 						= get_page_by_path( $page_slug );
			$page_title 			= get_the_title( $page );
			$page_permalink 	= site_url( '/'.$page_slug.'/' );

			return "<a href='$page_permalink' target='_blank'>$page_title</a>";
		}


		private function _get_option( $data ) {

			$option = get_option( 'wws_gdpr_settings' );
			
			return $option[$data];
		}

	} // WWS_GDPR

	new WWS_GDPR;
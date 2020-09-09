<div id="wws-layout-1" class="wws-popup-container wws-popup-container--position">

    <?php if ( $this->get_setting( 'ui_layout_gradient' ) == '1' ) : ?>
      <div class="wws-gradient wws-gradient--position"></div>
    <?php endif; ?>
  
    <!-- Popup -->
    <div class="wws-popup" data-wws-popup-status="0">
      
      <!-- Popup header -->
      <div class="wws-popup__header">

        <!-- Popup close button -->
        <div class="wws-popup__close-btn wws-shadow wws--bg-color wws--text-color">
          <i class="wws-icon wws-icon-close wws-popup__close-icon" aria-hidden="true"></i>
        </div>
        <div class="wws-clearfix"></div>
        <!-- .Popup close button -->

      </div>
      <!-- .Popup header -->

      <!-- Popup body -->
      <div class="wws-popup__body">

        <!-- Popup support -->
        <div class="wws-popup__support-wrapper">
          <div class="wws-popup__support-img-wrapper wws-shadow">
            <?php if ( $this->get_setting('ui_support_person_img') == NULL ) : ?>
              <img class="wws-popup__support-img" src="<?php echo $this->plugin_url( 'assets/public/img/user.svg' ) ?>" alt="WeCreativez WhatsApp Support" width="50" height="50">
            <?php else: ?>
              <img class="wws-popup__support-img" src="<?php echo $this->get_setting( 'ui_support_person_img' ) ?>" alt="WeCreativez WhatsApp Support" width="50" height="50">
            <?php endif; ?>       
          </div>
          <div class="wws-popup__support wws-shadow">
            <div class="wws-popup__support-about wws--text-color wws--bg-color">
              <?php _e( $this->get_setting( 'text_about_support' ), 'wc-wws' ) ?>
            </div>
            <div class="wws-popup__support-welcome">
              <?php _e( $this->get_setting( 'text_welcome_msg' ), 'wc-wws' ) ?>
            </div>
            <?php do_action( 'wws_action_plugin' ) ?>
          </div>
        </div>
        <!-- Popup support -->

        <!-- Popup input -->
        <div class="wws-popup__input-wrapper wws-shadow">
        	
          <input type="text" class="wws-popup__input" placeholder="<?php _e( $this->get_setting('text_input_placeholder'), 'wc-wws' ) ?>" autocomplete="off">
          <svg class="wws-popup__send-btn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
            <style type="text/css">
              .wws-lau00001{fill:<?php echo $this->get_setting('ui_layout_bg_color') ?>80;}
              .wws-lau00002{fill:<?php echo $this->get_setting('ui_layout_bg_color') ?>;}
            </style>
            <path id="path0_fill" class="wws-lau00001" d="M38.9,19.8H7.5L2,39L38.9,19.8z"></path>
            <path id="path0_fill_1_" class="wws-lau00002" d="M38.9,19.8H7.5L2,0.7L38.9,19.8z"></path>
          </svg>
        </div>
        <div class="wws-clearfix"></div>
        <!-- .Popup input --> 
        
      </div>
      <!-- .Popup body -->

    </div>
    <!-- .Popup -->
    
    
      <!-- .Popup footer -->
      <div class="wws-popup__footer">
        
        <!-- Popup open button -->
        <div class="wws-popup__open-btn wws-shadow wws--text-color wws--bg-color">
          <i class="wws-icon wws-icon-whatsapp wws-popup__open-icon" aria-hidden="true"></i> <span><?php echo $this->get_setting('text_trigger_btn') ?></span>
        </div>
        <div class="wws-clearfix"></div>
        <!-- .Popup open button -->

      </div>
      <!-- Popup footer -->
    
  </div>




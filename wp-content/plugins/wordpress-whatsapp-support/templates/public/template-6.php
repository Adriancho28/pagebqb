<div id="wws-layout-6" class="wws-popup-container wws-popup-container--position">

    <?php if ( $this->get_setting( 'ui_layout_gradient' ) == '1' ) : ?>
      <div class="wws-gradient wws-gradient--position"></div>
    <?php endif; ?>

    <!-- Popup -->
    <div class="wws-popup" data-wws-popup-status="0">
      
      <!-- Popup header -->
      <div class="wws-popup__header">

        <!-- Popup close button -->
        <div class="wws-popup__close-btn wws--bg-color wws--text-color wws-shadow">
          <i class="wws-icon wws-icon-close wws-popup__close-icon" aria-hidden="true"></i>
        </div>
        <div class="wws-clearfix"></div>
        <!-- .Popup close button -->

      </div>
      <!-- .Popup header -->

      <!-- Popup body -->
      <div class="wws-popup__body">

        <!-- Popup support -->
        <div class="wws-popup__support-wrapper  wws-shadow">
          <div class="wws-popup__support">
            <div class="wws-popup__support-about wws--bg-color wws--text-color">
              <?php _e( $this->get_setting( 'text_about_support' ), 'wc-wws' ) ?>
            </div>
          </div>
        </div>
        <div class="wws-clearfix"></div>
        <!-- .Popup support -->


        

        <!-- Popup support person -->
        <div class="wws-popup__support-person-container wws-shadow">
          
          <?php do_action( 'wws_action_plugin' ) ?>

          <div class="wws-popup__support-person-wrapper">
          
          <?php 
            foreach ( (array)get_option( 'sk_wws_multi_account' ) as $m_account) : 

            $pre_message = str_replace(
                                array(
                                  '{title}',
                                  '{url}',
                                  '{br}'
                                ), 
                                array(
                                  get_the_title(),
                                  get_permalink(),
                                  '%0A',
                                ), 
                                $m_account['pre_message']
                              );

            $start_time = $m_account['start_hours'] . $m_account['start_minutes'];
            $end_time   = $m_account['end_hours'] . $m_account['end_minutes'];

            $wws_availablity = wws_multi_account_availablity( $m_account['days'], $start_time, $end_time );

            if ( $wws_availablity == true ) {
              echo '<a class="wws-popup__support-person-link" href="https://wa.me/'.$m_account['contact'].'?text='.$pre_message.'" target="_blank" data-wws-pre-msg="'.$pre_message.'" data-ga-analytics-label="Multi Person - '.$m_account['name'].'">';
              ?>
                <div class="wws-popup__support-person">
                  <div class="wws-popup__support-person-img-wrapper">
                    
                    <?php if ( $m_account['image'] ) : ?>
                      <img class="wws-popup__support-person-img" src="<?php echo $m_account['image'] ?>" alt="WeCreativez WhatsApp Support" width="54">
                    <?php else: ?>
                      <img class="wws-popup__support-person-img" src="<?php echo $this->plugin_url( 'assets/public/img/user.svg' ) ?>" alt="WeCreativez WhatsApp Support" width="54">
                    <?php endif; ?>
                    
                    <div class="wws-popup__support-person-available"></div>
                  </div>
                  <div class="wws-popup__support-person-info-wrapper">
                    <div class="wws-popup__support-person-title"><?php echo $m_account['title'] ?></div>
                    <div class="wws-popup__support-person-name"><?php echo $m_account['name'] ?></div>
                    <div class="wws-popup__support-person-status"><?php _e( 'Available', 'wc-wws' ) ?></div>
                  </div>
                </div>
              </a>
              <?php
            } else { // not available
              ?>
              <a class="wws-popup__support-person-link" href="#">
                <div class="wws-popup__support-person">
                  <div class="wws-popup__support-person-img-wrapper">
                    <?php if ( $m_account['image'] ) : ?>
                      <img class="wws-popup__support-person-img" src="<?php echo $m_account['image'] ?>" alt="WeCreativez WhatsApp Support" width="54">
                    <?php else: ?>
                      <img class="wws-popup__support-person-img" src="<?php echo $this->plugin_url( 'assets/public/img/user.svg' ) ?>" alt="WeCreativez WhatsApp Support" width="54">
                    <?php endif; ?>
                    <div class="wws-popup__support-person-away"></div>
                  </div>
                  <div class="wws-popup__support-person-info-wrapper">
                    <div class="wws-popup__support-person-title"><?php echo $m_account['title'] ?></div>
                    <div class="wws-popup__support-person-name"><?php echo $m_account['name'] ?></div>
                    <div class="wws-popup__support-person-status"><?php _e( 'Away', 'wc-wws' ) ?></div>
                  </div>
                </div>
              </a>

              <?php
            }


           endforeach; ?>

          </div>          

          

        </div>
        <!-- .Popup support person -->
        
      </div>
      <!-- .Popup body -->

    </div>
    <!-- .Popup -->
    
      <!-- .Popup footer -->
      <div class="wws-popup__footer">
        
        <!-- Popup open button -->
        <div class="wws-popup__open-btn wws--bg-color wws--text-color wws-shadow">
          <i class="wws-icon wws-icon-whatsapp wws-popup__open-icon" aria-hidden="true"></i> <span><?php echo $this->get_setting('text_trigger_btn') ?></span>
        </div>
        <div class="wws-clearfix"></div>
        <!-- .Popup open button -->

      </div>
      <!-- Popup footer -->
    
  </div>










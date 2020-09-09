jQuery(document).ready(function() {

		var autoPopup 									= wwsObj.autoPopup;
		var pluginUrl 									= wwsObj.plugin_url;
		var isProduct 									= wwsObj.is_product;
		var currentPageURL 							= wwsObj.current_page_url;
		var currentPopupTemplate 				= wwsObj.current_popup_template;
		var isPopupDisplayOnCurrentPage = wwsObj.is_popup_display_on_current_page;
		var groupInvitationID     			= wwsObj.group_invitation_id;
		var adminAjaxURL          			= wwsObj.admin_ajax_url;
		var scrollLenght								= wwsObj.scroll_lenght;
		var autoPopupTime         			= wwsObj.auto_popup_time;
		var isGDPR											= wwsObj.is_gdpr;
		var predefinedText							=	wwsObj.predefined_text;
		var debuggingStatus							= wwsObj.debuggin_status;

		// Mobile detection
		var isMobile = {
		    Android: function() {
		        return navigator.userAgent.match(/Android/i);
		    },
		    BlackBerry: function() {
		        return navigator.userAgent.match(/BlackBerry/i);
		    },
		    iOS: function() {
		        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		    },
		    Opera: function() {
		        return navigator.userAgent.match(/Opera Mini/i);
		    },
		    Windows: function() {
		        return navigator.userAgent.match(/IEMobile/i);
		    },
		    any: function() {
		        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		    }
		};

		
		var wwsAutoPopupAudio = document.createElement('audio');
	      wwsAutoPopupAudio.setAttribute('src', pluginUrl + 'assets/public/mp3/sk-wws-popup-open-sound.mp3');
	      jQuery.get();
	      wwsAutoPopupAudio.addEventListener("load", function() {}, true);
	


	// popup button display by scroll lenght
	if ( scrollLenght != null ) {
		jQuery(document).scroll(function () {
		    var y = jQuery(window).scrollTop() + jQuery(window).height();
		    var documentHeight = jQuery(document).height() * scrollLenght / 100;
		    if (y >= documentHeight - 10 ) {
		        jQuery('.wws-popup-container').fadeIn();
		    } else {
		        jQuery('.wws-popup-container').fadeOut();
		    }
		});
	}


	// Google and Facebook Pixel Analytics
	function wws_google_click_analytics( label ) {

		try {
			gtag( 'event', 'Button Clicked', {
				'event_category': 'WordPress WhatsApp Support',
				'event_label': 'Support: ' + label,
			} );
		} catch ( error ) {
			if ( debuggingStatus == '1' ) {
				window.console && console.log( 'WordPress WhatsApp Support Google or Facebook analytics error message: ' + error.message );
			}
		}
		
		try {
			ga( 'send', 'event', 'WordPress WhatsApp Support', 'Button Clicked', 'Support: ' + label );
		} catch ( error ) {
			if ( debuggingStatus == '1' ) {
				window.console && console.log( 'WordPress WhatsApp Support Google or Facebook analytics error message: ' + error.message );
			}
		}
		
		try {
			_gaq.push([ '_trackEvent', 'WordPress WhatsApp Support', 'Button Clicked', 'Support: ' + label ]);
		}
		catch ( error ) {
			if ( debuggingStatus == '1' ) {
				window.console && console.log( 'WordPress WhatsApp Support Google or Facebook analytics error message: ' + error.message );
			}
		}
		
		try {
			dataLayer.push({
				'event': 'customEvent',
				'eventCategory': 'WhatsApp Click to Chat',
				'eventAction': 'Button Clicked',
				'eventLabel': 'WhatsApp Account: ' + label
			});
		}
		catch ( error ) {
			if ( debuggingStatus == '1' ) {
				window.console && console.log( 'WordPress WhatsApp Support Google or Facebook analytics error message: ' + error.message );
			}
		}
		
		var FBpixeled = false;
		try {
			if ( ! FBpixeled ) {
				fbq( 'trackCustom', 'WordPressWhatsAppSupport', {
					event: 'Chat started',
					account: label
				});
				FBpixeled = true;
			}
		}
		catch ( error ) {
			if ( debuggingStatus == '1' ) {
				window.console && console.log( 'WordPress WhatsApp Support Google or Facebook analytics error message: ' + error.message );
			}
		}

	} 



	// Popup toggle
	jQuery( document ).on( 'click', '.wws-popup__close-btn', function() {
		jQuery('.wws-popup').slideToggle();
		jQuery('.wws-gradient').hide();
		jQuery('.wws-popup').attr('data-wws-popup-status', 0);
	});
	jQuery( document ).on( 'click', '.wws-popup__open-btn', function() {
		jQuery('.wws-popup').slideToggle();
		if ( jQuery('.wws-popup').attr('data-wws-popup-status') == 0 ) {
			jQuery('.wws-popup').attr('data-wws-popup-status', 1);
			jQuery('.wws-gradient').show();
		} else {
			jQuery('.wws-popup').attr('data-wws-popup-status', 0);
			jQuery('.wws-gradient').hide();
		}
	});


	//	Auto popup
	if ( autoPopup == 1 
		&& sessionStorage.wwsAutoPopup != 1 
		&& jQuery( '.wws-popup' ).attr( 'data-wws-popup-status' ) == 0 ) {

		if ( jQuery( '.wws-popup' ).attr( 'data-wws-popup-status' ) == 0 ) {

			setTimeout( function() {
				if ( scrollLenght == null ) {
					wwsAutoPopupAudio.play();
				}
				jQuery( '.wws-popup' ).slideDown();
				jQuery('.wws-gradient').show();
				jQuery( '.wws-popup' ).attr( 'data-wws-popup-status', 1 );
				sessionStorage.wwsAutoPopup = 1;
			}, Number( autoPopupTime * 1000 ) );
		}
		
	}



	// Send message
	jQuery( document ).on( 'click', '.wws-popup__send-btn', function() {

		// If GDPR is Enable
		if ( isGDPR == '1' && jQuery('.wws-gdpr input').is(':checked') == false ) {
			jQuery( '.wws-gdpr > div' ).addClass('wws-shake-animation');
			setTimeout( function() { 
				jQuery( '.wws-gdpr > div' ).removeClass('wws-shake-animation');
			}, 300 );
			return;
		}


		var skWwsInput = jQuery('.wws-popup__input').val();
		var supportNumber = wwsObj.supportNumber;
		if ( skWwsInput == '' ) return;
		if ( isProduct == 1 ) {
			skWwsInput = currentPageURL + '%0A' + skWwsInput;
		}
		if ( isMobile.any() ) {
			window.open('https://api.whatsapp.com/send?phone=' + supportNumber + '&text=' + skWwsInput + '%0A' + predefinedText);
		} else {
			window.open('https://web.whatsapp.com/send?phone=' + supportNumber + '&text=' + skWwsInput + '%0A' + predefinedText);
		}
	} );


	// Group invitation click function
	jQuery( document ).on( 'click', '.wws-popup-group-invitation__button', function() {
		window.open('https://chat.whatsapp.com/' + groupInvitationID );
	});



	// User Analytics
	jQuery( document ).on( 'click', '.wws-popup__send-btn, .wws-popup-group-invitation__button', function() {
		var skWwsInput = jQuery('.wws-popup__input').val();
		if ( skWwsInput == '' ) return;

		jQuery.ajax({
			url: adminAjaxURL,
			type: 'post',
			data: { 
				'action' : 'wws_click_analytics',
				'message': skWwsInput,
			}
		});

		wws_google_click_analytics( 'Single Person Support' );
	});

	jQuery( document ).on( 'click', '.wws-popup__support-person-link', function( event ) {



		// If GDPR is Enable
		if ( isGDPR == '1' && jQuery('.wws-gdpr input').is(':checked') == false ) {
			jQuery( '.wws-gdpr > div' ).addClass('wws-shake-animation');
			setTimeout( function() { 
				jQuery( '.wws-gdpr > div' ).removeClass('wws-shake-animation');
			}, 300 );
			event.preventDefault();
			return;
		}

		var skWwsInput = jQuery(this).attr('data-wws-pre-msg');
		jQuery.ajax({
			url: adminAjaxURL,
			type: 'post',
			data: { 
				'action' : 'wws_click_analytics',
				'message': skWwsInput,
			}
		})
	});


	// Hit enter to send a message.
	jQuery('.wws-popup__input').keypress(function (e) {
	 var key = e.which;
	 if(key == 13) { // the enter key code
	    jQuery('.wws-popup__send-btn').click();
	    return false;  
	  }
	});


	// multi support person google and pixel analytics
	jQuery( document ).on('click', '[data-ga-analytics-label]', function(event) {
		var label = jQuery( this ).attr('data-ga-analytics-label');
		wws_google_click_analytics( label );
	});


});

	
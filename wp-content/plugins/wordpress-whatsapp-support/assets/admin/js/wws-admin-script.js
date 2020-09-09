// In your Javascript (external .js resource or <script> tag)
jQuery(document).ready(function() {
    jQuery('.wws-admin-select2').select2();
    jQuery('.wws-admin-datatable').DataTable({
      dom: 'Bfrtip',
      buttons: [
          {
              extend: 'csv',
              text: 'Export CSV'
          },
      ]
    });
    tippy('.wws-admin-tooltip');
});


(function( $ ) {
 
  // Add Color Picker to all inputs that have 'color-field' class
  $(function() {
      $('.sk-wws__color-picker').wpColorPicker();
  });


  // Display edit multi account popup
  jQuery('.sk_wws_edit_multi_account_show_popup').click(function() {
    var key = jQuery(this).attr('data-multi-account-key');
    tb_show('Edit Multi Account Support', 'admin-ajax.php?action=sk_wws_edit_multi_account_popup&sk_wws_edit_multi_account=' + key);
    return false;
  });

  // Display add multi account popup
  jQuery('.sk_wws_add_multi_account_show_popup').click(function() {
    tb_show('Add Multi Account Support', 'admin-ajax.php?action=sk_wws_add_multi_account_popup');
    return false;
  });
     

})( jQuery );

// Time picket class assignment
jQuery(document).ready(function() {	
	jQuery('.sk-wws-timepicker').timepicker({ 'timeFormat': 'H:i:s'});
});


// upload support person profile image
jQuery(document).ready(function($){
    $('#sk-wws__support-img').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#sk-wws__support-img-path').val(image_url);
        });
    });
});


// upload support person profile image
jQuery(document).ready(function($){
  $('.wrap').ajaxComplete(function() {
    $('#sk-wws-multi-account__support-img').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#sk-wws-multi-account__support-img-path').val(image_url);
        });
    });
  });
});


// upload support person profile image
jQuery(document).ready(function($){
  $('.wrap').ajaxComplete(function() {
    $('#sk-wws-edit-multi-account__support-img').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#sk-wws-edit-multi-account__support-img-path').val(image_url);
        });
    });
  });
});



jQuery(document).on('keyup change click', function() {

		var displayOnDesktop = jQuery('#sk-wws__display_on_desktop').val();
		var displayOnMobile = jQuery('#sk-wws__display_on_mobile').val();

		if ( displayOnDesktop == 0 ) {
			jQuery('#sk-wws__desktop_position').hide();
		} else {
			jQuery('#sk-wws__desktop_position').show();
		}


		if ( displayOnMobile == 0 ) {
			jQuery('#sk-wws__mobile_position').hide();
		} else {
			jQuery('#sk-wws__mobile_position').show();
		}


});



jQuery(document).ready(function() {
  var developerCheckBox = jQuery('#sk-wws-admin-developer-enable');
  var developerBox      = jQuery('#sk-wws-admin-developer-box');

  developerCheckBox.click(function() {
    developerBox.fadeToggle();
  });

});



jQuery(document).on('keyup change click load', '#sk-wws__admin-shortcode-generator', function() {

  var buttonType = jQuery('#sk-wws__scg-button-type').val();
  var button = jQuery('#sk-wws__scg-support-button');
  var supportNumber = jQuery('#sk-wws__scg-support-number').val();
  var groupChatID = jQuery('#sk-wws__scg-group-chat-id').val();
  var buttonText = jQuery('#sk-wws__scg-btn-text').val();
  var buttonTextColor = jQuery('#sk-wws__scg-btn-text-color').val();
  var buttonBold = jQuery('#sk-wws__scg-btn-text-bold').val();
  var buttonFont = jQuery('#sk-wws__scg-btn-font-family').val();
  var buttonBgColor = jQuery('#sk-wws__scg-btn-bg-color').val();
  var WhatsAppMessage = jQuery('#sk-wws__scg-message').val();
  var buttonFullWidth = jQuery('#sk-wws__scg-btn-full-width').val();
  var onMobile   = jQuery('#sk-wws__scg-on-mobile').val();
  var onDesktop   = jQuery('#sk-wws__scg-on-desktop').val();
  var buttonIcon  = jQuery('#sk-wws__scg-button-icon path');

  var mainShortCode = jQuery('#sk-wws__scg-main-code');
  var mainHTMLCode  = jQuery('#sk-wws__scg-html-code');

  if ( buttonType == 'gcb' ) {
    jQuery('.sk-wws__scg-support-number-row').hide();
    jQuery('.sk-wws__scg-message-row').hide();
    jQuery('.sk-wws__scg-group-chat-id-row').show();
  }

  if ( buttonType == 'sb' ) {
    jQuery('.sk-wws__scg-support-number-row').show();
    jQuery('.sk-wws__scg-message-row').show();
    jQuery('.sk-wws__scg-group-chat-id-row').hide();
  }


  jQuery('#sk-wws__scg-support-button span').html(buttonText);
  button.css({
    'color': buttonTextColor,
    'background-color': buttonBgColor,
    'width': ( buttonFullWidth == 'yes' ) ? '100%' : 'auto',
    'font-weight': ( buttonBold == '700' ) ? '700' : 'inherit',
  });


  buttonIcon.css('fill', buttonTextColor);


  WhatsAppMessage  = ( WhatsAppMessage  != '' ) ? 'message="'+WhatsAppMessage+'"' : '';
  onMobile  = ( onMobile  == 'no' ) ? 'on-mobile="'+onMobile+'"' : '';
  onDesktop = ( onDesktop == 'no' ) ? 'on-desktop="'+onDesktop+'"' : '';
  buttonFullWidth = ( buttonFullWidth == 'yes' ) ? 'full-width="'+buttonFullWidth+'"' : '';
  buttonBold = ( buttonBold == '700' ) ? 'text-bold="'+buttonBold+'"' : '';
  buttonFont = ( buttonFont != 'inherit' ) ? 'font="'+buttonFont+'"' : '';

  var shortcode = '[whatsappsupport ';
  
  if ( buttonType == 'sb' ) {
    shortcode += 'number="'+supportNumber+'" ';  
  } else {
    shortcode += 'group="'+groupChatID+'" ';  
  }
  
  shortcode += 'text="'+buttonText+'" ';
  shortcode += 'text-color="'+buttonTextColor+'" ';
  shortcode += buttonBold + ' ';
  shortcode += buttonFont + ' ';
  shortcode += 'bg-color="'+buttonBgColor+'" ';
  
  if ( buttonType == 'sb' ) {
    shortcode += WhatsAppMessage + ' ';
  }

  shortcode += onMobile + ' ';
  shortcode += onDesktop + ' ';
  shortcode += buttonFullWidth;
  shortcode += ']';

  mainShortCode.val(shortcode);


  // HTML Code
  if ( buttonType == 'sb' ) {
    var HTMLCodeHref = 'https://wa.me/'+supportNumber+'?text='+jQuery('#sk-wws__scg-message').val()+'';
  } else {
    var HTMLCodeHref = 'https://chat.whatsapp.com/'+jQuery('#sk-wws__scg-group-chat-id').val();
  }
  
  var HTMLCode =  '<a href="'+HTMLCodeHref+'" ';
      HTMLCode += 'style="';
      HTMLCode += 'background-color:'+buttonBgColor+';';
      HTMLCode += 'color:'+buttonTextColor+';';
      HTMLCode += ( buttonBold ) ? 'font-weight: 700;' : 'font-weight: 400;';
      HTMLCode += ( buttonFullWidth ) ? 'width: 100%;' : 'width: auto;';
      HTMLCode += 'padding: 8px 25px; margin: 2px; text-decoration: none; border-radius: 5px; text-align: center;';
      HTMLCode += '" target="_blank">'; // close style tag
      HTMLCode += buttonText;
      HTMLCode += '</a>';
  
  mainHTMLCode.val(HTMLCode);


});







function wws_dynamic_admin_setting( template ) {


  var wwsAdminInputPlaceholder = jQuery('#wwsAdminInputPlaceholder');
  var wwsAdminWelcomeMessage = jQuery('#wwsAdminWelcomeMessage');
  var wwsAdminAboutSupport = jQuery('#wwsAdminAboutSupport');

  var wwsAdminGroupInvitationSupport = jQuery('#wwsAdminGroupInvitationSupport');
  var wwsAdminSinglePersonSupport = jQuery('#wwsAdminSinglePersonSupport');
  var wwsAdminMultiPersonSupport = jQuery('#wwsAdminMultiPersonSupport');
  var wwsAdminSupportTextSetting = jQuery('#wwsAdminSupportTextSetting');
  var wwsAdminInputPredefinedText = jQuery( '#wwsAdminInputPredefinedText' );

  wwsAdminInputPlaceholder.show();
  wwsAdminWelcomeMessage.show();
  wwsAdminAboutSupport.show();
  wwsAdminGroupInvitationSupport.show();
  wwsAdminSinglePersonSupport.show();
  wwsAdminMultiPersonSupport.show();
  wwsAdminSupportTextSetting.show();

  if ( template == 1 || template == 2 || template == 3 ) {
    wwsAdminGroupInvitationSupport.hide();
    wwsAdminMultiPersonSupport.hide();
  }

  if ( template == 3 ) {
    wwsAdminWelcomeMessage.hide();
  }

  if ( template == 4 ) {
    wwsAdminGroupInvitationSupport.hide();
    wwsAdminMultiPersonSupport.hide();
    wwsAdminInputPlaceholder.hide();
    wwsAdminAboutSupport.hide();
  }

  if ( template == 5 ) {
    wwsAdminMultiPersonSupport.hide();
    wwsAdminSinglePersonSupport.hide();
    wwsAdminSupportTextSetting.hide();
  }

  if ( template == 6 ) {
    wwsAdminGroupInvitationSupport.hide();
    wwsAdminSinglePersonSupport.hide();
    wwsAdminInputPlaceholder.hide();
    wwsAdminWelcomeMessage.hide();
    wwsAdminInputPredefinedText.hide();
  }

}

jQuery( '[name="sk_wws_setting[ui_layout]"]' ).change( function() {
  wws_dynamic_admin_setting( jQuery( this ).val() );
} );

jQuery( document ).ready( function() {
  wws_dynamic_admin_setting( jQuery('[name="sk_wws_setting[ui_layout]"]:checked').val() );
} );



// Admin Link Generator
jQuery(document).ready(function($) {
  
  jQuery("#wws-admin-link-generater").submit(function(event) {
    event.preventDefault();

    var number = jQuery( '#wws-admin-link-generater-number' ).val();
    var message = jQuery( '#wws-admin-link-generater-message' ).val();

    var generatedLink = 'https://api.whatsapp.com/send?phone=' + number + '&text=' + message;

    jQuery( '#wws-admin-link-generater-link').val( generatedLink );

    jQuery( '#wws-admin-link-generater-link-tr' ).show();

  });

});


// Analytics deep report
jQuery( document ).ready( function() {

  jQuery( document ).on ( 'click', '[data-ip]', function(event) {
    var ip = jQuery( this ).attr( 'data-ip' );

    tb_show('Analytics Deep Report', 'admin-ajax.php?action=sk_wws_analytics_deep_report&ip=' + ip );
    return false;

  });

} );


// Plugin activation ajax
jQuery(document).ready(function($) {
    
  jQuery( '#wws-plugin-activation-form' ).submit( function( e ) {
    e.preventDefault();
    var code = jQuery( '#purchase-code' ).val();
    var siteURL = jQuery( '#site-url' ).val();

    jQuery( '.loader' ).show();
    jQuery( '#message' ).empty();
    
    $.ajax({
      url: wwsAdminObj.admin_ajax,
      type: 'POST',
      data: {
        'action': 'wws_plugin_activation_ajax',
        'purchase_code': code,
        'site_url' : siteURL,
      },
    })
    .done(function( response ) {
      jQuery( '.loader' ).hide();
      jQuery( '#message' ).html( response );
    });
    
  } );

});
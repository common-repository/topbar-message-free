jQuery(document).ready(function(){
  jQuery('#tbm-free-remove-button-admin').css('transition', 'opacity 1.5s;');

// BUTTON DESKTOP SECTION / THIS SCRIPT REMOVE THE BUTTON ATTRIBUTES ON DESK

       jQuery(window).on('load', navigationbar_free_nav_button_info());
       jQuery(window).on('load', navigationbar_free_admin_remove());

       jQuery('input#tbm_free_check_button').change(function(){
         navigationbar_free_nav_button_info();
       });
       jQuery('input#tbm_free_removible_checkbox').change(function(){
         navigationbar_free_admin_remove();
       });

      function navigationbar_free_nav_button_info(){
        if(jQuery('input#tbm_free_check_button').is(':checked')) {
          jQuery('.tbm-free-button-informations').fadeIn(400).css('display', '');
          jQuery('#tbm-free-button-information-title').fadeIn(400).css('display', '').css('text-align', 'left');
          jQuery('#tbm-free-button-basic-info').fadeIn(400).css('display', '');
          jQuery('#tbm-free-button-special-info').fadeIn(400).css('display', '');
          // jQuery('#tbm-free-button-information-title').attr('style', 'text-align: left;');
      } else {
        if(jQuery('input#tbm_free_check_button').not(':checked')) {
          jQuery('.tbm-free-button-informations').fadeOut(400);
          jQuery('#tbm-free-button-information-title').fadeOut(400);
          jQuery('#tbm-free-button-basic-info').fadeOut(400);
          jQuery('#tbm-free-button-special-info').fadeOut(400);
          }
        } // End button data Script
      }

        function navigationbar_free_admin_remove(){
          if(jQuery('input#tbm_free_removible_checkbox').is(':checked')) {
            jQuery('#tbm-free-remove-button-admin').fadeIn(400).css('opacity', '1');
          } else {
              jQuery('#tbm-free-remove-button-admin').fadeOut(400).css('opacity', '0');
            } // End removible Topbar data Script
          }

      });

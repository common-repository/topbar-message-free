<?php

ob_start();

//Assignement Admin page values:
$tbm_free_check_value                 = get_option('tbm_free_check', '');
$tbm_free_message_value               = get_option('tbm_free_message', '');
$tbm_free_background_color_value      = get_option('tbm_free_bg_color', '');
$tbm_free_message_font_color_value    = get_option('tbm_free_message_text_color', '');
$tbm_free_message_font_size_value     = get_option('tbm_free_message_text_size', '');
$tbm_free_message_font_link_value     = get_option('tbm_free_message_text_link', '');
$tbm_free_height_value                = get_option('tbm_free_height', '');
$tbm_free_button_check_value          = get_option('tbm_free_button_check', '');
$tbm_free_button_text_value           = get_option('tbm_free_button_text', '');
$tbm_free_button_color_value          = get_option('tbm_free_button_color', '');
$tbm_free_button_text_color_value     = get_option('tbm_free_button_text_color', '');
$tbm_free_topbar_statement_value      = get_option('tbm_free_topbar_statement', '');
$tbm_free_button_link_value           = get_option('tbm_free_button_link', '');
$tbm_free_button_text_size_value      = get_option('tbm_free_button_text_size', '');
$tbm_free_button_border_value         = get_option('tbm_free_button_border', '');
$tbm_free_removible_check_value       = get_option('tbm_free_removible_check', '');
$tbm_free_remove_button_color_value   = get_option('tbm_free_remove_button_color', '');

  $tbm_free_data_nav = array(
    'check' => $tbm_free_check_value, // 0
    'button_position_statement' => $tbm_free_topbar_statement_value, // 1
    'button_removible'  => $tbm_free_removible_check_value, // 2
    'message' => $tbm_free_message_value, // 3
    'nav_font_link' => $tbm_free_message_font_link_value, // 4
    'nav_color' => $tbm_free_background_color_value, // 5
    'nav_text_color' => $tbm_free_message_font_color_value, // 6
    'nav_font_size' => $tbm_free_message_font_size_value, // 7
    'nav_height'  => $tbm_free_height_value, // 8
    'nav_check_button'  => $tbm_free_button_check_value, // 9
    'button_text' => $tbm_free_button_text_value, // 10
    'button_link'   => $tbm_free_button_link_value, // 11
    'button_text_dimensions'  => $tbm_free_button_text_size_value, // 12
    'button_color'  => $tbm_free_button_color_value, // 13
    'button_text_color' => $tbm_free_button_text_color_value, // 14
    'button_radius' => $tbm_free_button_border_value, // 15
    'remove_button_color' => $tbm_free_remove_button_color_value, // 16
  );

  $tbm_free_custom = implode(', ', $tbm_free_data_nav);
  echo esc_attr($tbm_free_custom);
  $tbm_free_data_nav = ob_get_contents();

  ob_end_clean();

  $tbm_free_data_nav = explode(', ', $tbm_free_data_nav);
//Navbar structure with user data..

  if($tbm_free_data_nav[4]){ // message - Assignment of links to sanitize..
    $tbm_free_message_href = $tbm_free_data_nav[4];
  }
  if($tbm_free_data_nav[11]){ // button link - Assignment of links to sanitize..
    $tbm_free_button_href  = $tbm_free_data_nav[11];
}

  if($tbm_free_data_nav[0]){
    ?>
    <div id="tbm_free_header" style="display: none;">
      <div class="tbm-free-header" style="background-color:<?php echo esc_attr($tbm_free_data_nav[5])?>!important; height: <?php echo esc_attr($tbm_free_data_nav[8])?>px; display:flex; justify-content: center;">
        <div style="display: flex;">
          <div class="tbm-free-flexible">
            <div class="tbm-free-main">
              <p name="tbm-free-message" style="margin: 0; font-size: <?php echo esc_attr($tbm_free_data_nav[7])?>px; text-align: center!important; color:<?php echo esc_attr($tbm_free_data_nav[6])?>; padding-right: 1em; padding-left:1em;">
              <?php if(!empty(esc_attr($tbm_free_data_nav[4]))){?>
                <a href="<?php echo esc_url($tbm_free_message_href);?>" style="text-decoration-thickness: from-font; color: <?php echo esc_attr($tbm_free_data_nav[6])?>;"><?php echo esc_html($tbm_free_data_nav[3]);?></a>
              </p>
            </div>
              <?php } else {
                echo esc_html($tbm_free_data_nav[3]);?>
              </p>
            </div>
              <?php } if(esc_html($tbm_free_data_nav[9])) { ?>
                <a id="tbm-free-button" href="<?php echo esc_url($tbm_free_button_href);?>" style="font-size:<?php echo esc_attr($tbm_free_data_nav[12])?>px; text-decoration: none!important; background-color: <?php echo esc_attr($tbm_free_data_nav[13])?>; color: <?php echo esc_attr($tbm_free_data_nav[14])?>; border-radius: <?php echo esc_attr($tbm_free_data_nav[15])?>px; padding: 0 11px; cursor: pointer; border: 0;" target="_blank">
                  <?php echo esc_html($tbm_free_data_nav[10])?>
                </a>
            <?php } if(esc_html($tbm_free_data_nav[2])){ ?> <!-- Check if navbar could be removed.. -->
              <div class="tbm-free-main tbm-free-button-remover-container">
                <button id="tbm-free-button-remover" class="tbm-free-button-remover-class" style="display: flex; font-size: 20px; text-align: center; border: 0; cursor: pointer; z-index: 9999; color: transparent; padding-left: 1em;">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" class="tbm-free-remover svg-inline--fa fa-xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path fill="<?php echo esc_attr($tbm_free_data_nav[16])?>" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path>
                  </svg>
                </button>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } if(esc_html($tbm_free_data_nav[1])) { ?> <!-- Check Navbar state -->

      <script type="text/javascript"> // Open Script

      jQuery(document).ready(function(){ // Start Script

      var tbm_free_statement = '<?php echo esc_html($tbm_free_data_nav[1]); ?>'; // Navbar type (Dynamic or Fixed)
      var tbm_free_topbar_height = '<?php echo esc_html($tbm_free_data_nav[8]); ?>'; // Navbar Height input
      var tbm_free_admin_margin = jQuery('#wpadminbar').height(); // Height Admin panel

      jQuery('body').addClass('tbm_free_body_response'); //Assign Class to body, so we can remove after "remove button"
      jQuery('#tbm_free_header').addClass('tbm_free_topbar_response'); //Assign Class to navbar, so we can remove after "remove button"

        if(tbm_free_statement == 'Dynamic' || tbm_free_statement == 'Dinamica'){ // DYNAMIC RESPONSE

          jQuery('.tbm_free_topbar_response').css('opacity', '0');
          setTimeout(function(){
            jQuery('.tbm_free_body_response').css('transition', '0.3s'); // Assignment margin-top on body
            if(tbm_free_admin_margin){
              jQuery('.tbm_free_topbar_response').slideDown(300).attr('style', 'position: fixed; width: 100%; z-index: 999; transition: 0.4s;').css('display', 'absolute').css('opacity', '1').css('top', tbm_free_admin_margin); // Assignment position on navigationbar
            } else {
              jQuery('.tbm_free_topbar_response').slideDown(300).attr('style', 'position: fixed; width: 100%; z-index: 999; transition: 0.4s;').css('display', 'absolute').css('opacity', '1').css('top', '0'); // Assignment position on navigationbar
            }
            setTimeout(function(){
              jQuery('.tbm_free_body_response').css('margin-top', jQuery('.tbm_free_topbar_response').height());
            }, 600);
          }, 1000);

          jQuery(window).load(function(){ // First Navbar Slide down
            setTimeout(function(){
              jQuery('tbm_free_topbar_response').slideDown(300);
              if(tbm_free_admin_margin){
                jQuery('.tbm_free_topbar_response').slideDown(300).attr('style', 'position: fixed; width: 100%; z-index: 999; transition: 0.4s;').css('display', 'absolute').css('opacity', '1').css('top', tbm_free_admin_margin); // Assignment position on navigationbar
              } else {
                jQuery('.tbm_free_topbar_response').slideDown(300).attr('style', 'position: fixed; width: 100%; z-index: 999; transition: 0.4s;').css('display', 'absolute').css('opacity', '1').css('top', '0'); // Assignment position on navigationbar
              }
            }, 900);
          });

          var tbm_free_topbar_start_position = window.pageYOffset;
          var tbm_free_page_bottom = (jQuery(document).height() - 100);

          jQuery(window).on('scroll', function(){ // Start Function
            var tbm_free_topbar_current_position = window.pageYOffset;
            if(tbm_free_topbar_start_position >= 0 && (jQuery(window).height()+jQuery(window).scrollTop()) <= tbm_free_page_bottom){ // check on top & bottom page..
            if(tbm_free_topbar_start_position > tbm_free_topbar_current_position) { // NAVBAR GOIN' DOWN
              jQuery('.tbm_free_body_response').css('margin-top', (tbm_free_topbar_height + 'px'));
              // jQuery('.tbm_free_body_response').css('top', jQuery('.tbm_free_topbar_response').height());

                if(tbm_free_admin_margin){ // Check if Admin Bar exist..
                jQuery('.tbm_free_topbar_response').css('top', tbm_free_admin_margin);
              } else {
                jQuery('.tbm_free_topbar_response').css('top', '0');
              }

            } else { //NAVBAR GOIN' UP
              jQuery('.tbm_free_topbar_response').css('top', -(jQuery('.tbm_free_topbar_response').height()));
              jQuery('.tbm_free_body_response').css('margin-top', '0');
            }
          }
          tbm_free_topbar_start_position = tbm_free_topbar_current_position;
        });

      } else { // FIXED RESPONSE

          jQuery('.tbm_free_topbar_response').css('opacity', '0');
          setTimeout(function(){
            jQuery('.tbm_free_topbar_response').slideDown(400);
            setTimeout(function(){
              if(tbm_free_admin_margin){
                jQuery('.tbm_free_topbar_response').attr('style', 'position: fixed; width: 100%; z-index: 999; transition: 0.4s').css('display', 'absolute').css('opacity', '1').css('top', tbm_free_admin_margin); // Assignment position on navigationbar if is Admin
              } else {
                jQuery('.tbm_free_topbar_response').attr('style', 'position: fixed; top: 0; width: 100%; z-index: 999; transition: 0.4s').css('display', 'absolute').css('opacity', '1'); // Assignment position on navigationbar for user
              }
              jQuery('.tbm_free_body_response').css('margin-top', jQuery('.tbm_free_topbar_response').height()); // Assignment margin-top on body
            }, 400);
          }, 1000);
        }

        }); // Close document ready

      </script> <!-- Close Script -->

    <?php } ?> <!-- Close state check -->

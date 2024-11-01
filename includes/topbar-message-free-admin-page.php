<style>

    #wpcontent{
        padding: 0;
    }
    
</style>

<?php

//Update field values with POST method for DESK
if(!empty($_POST)){

  update_option('tbm_free_check', sanitize_text_field(isset($_POST['tbm_free_check_value'])) ? 1 : 0);
  update_option('tbm_free_message', sanitize_text_field($_POST['tbm_free_message_field']) ?? 'This is a banner.');
  update_option('tbm_free_bg_color', sanitize_hex_color($_POST['tbm_free_bg_color_field']) ?? '#ffffff');
  update_option('tbm_free_message_text_color', sanitize_hex_color($_POST['tbm_free_message_text_color']) ?? '#000000');
  update_option('tbm_free_message_text_size', intval($_POST['tbm_free_message_font_size']) ?? '15' . 'px');
  update_option('tbm_free_message_text_link', sanitize_text_field($_POST['tbm_free_message_link']) ?? '');
  update_option('tbm_free_height', intval($_POST['tbm_free_topbar_height']) ?? '50'.'px');
  update_option('tbm_free_button_check', sanitize_text_field(isset($_POST['tbm_free_check_button'])) ? 1 : 0);
  update_option('tbm_free_button_text', sanitize_text_field($_POST['tbm_free_button_message']) ?? 'Scopri di più');
  update_option('tbm_free_button_color', sanitize_hex_color($_POST['tbm_free_button_bg_color']) ?? '#000000');
  update_option('tbm_free_button_text_color', sanitize_hex_color($_POST['tbm_free_button_font_color']) ?? '#ffffff');
  update_option('tbm_free_topbar_statement', sanitize_text_field($_POST['tbm_free_topbar_pos_statement']) ?? '');
  update_option('tbm_free_button_link', sanitize_text_field($_POST['tbm_free_button_redirect']) ?? '');
  update_option('tbm_free_button_text_size', intval($_POST['tbm_free_button_font_size']) ?? '15'.'px');
  update_option('tbm_free_button_border', intval($_POST['tbm_free_button_border_radius']) ?? '5');
  update_option('tbm_free_removible_check', sanitize_text_field(isset($_POST['tbm_free_removible_checkbox'])) ? 1 : 0);
  update_option('tbm_free_remove_button_color', sanitize_hex_color($_POST['tbm_free_remove_topbar_button_color']) ?? '#ffffff');

}

$tbm_free_guide_link = 'https://www.servizitrepuntozero.com/guida-topbar-message-free-plugin/';
//Start admin-option-page (structure)
?>
    <div style="width:100%; display: flex; flex-direction: column;">
        <?php echo '<img src="' . esc_url( plugins_url( '/images/logo_servizi-plugintrasparente.png', dirname(__FILE__) ) ) . '" alt="Logo Servizi 3.0 Italia" height="100%" width="10%" style="margin-left: 10px; margin-top: 1em;">';?>
      <div class="tbm_admin_plugin_title">
        <h1>TopBar Message</h1>
      </div>
    </div>

  <div style="width: 99%;">
  <div style="padding: 10px;">
    <div class="container tbm_admin_advertising_l_column">
        <div style="display: flex; flex-direction: row;">
          <div style="padding: 10px; width: 50%;">
            <p class="tbm_admin_advertising_title"><b><?php esc_html_e('Do you want to customize and make your TopBar unique?', 'topbar-message-free-lang-options');?></b></p>
            <p class="tbm_admin_advertising_subtitle"><?php esc_html_e('With TopBar Message PRO you can improve the appearance and behavior on the desktop and mobile version of your site:', 'topbar-message-free-lang-options');?></p>
            <!-- Lista con funzionalità -->
              <div class="tbm_features_list">
                <div class="tbm_admin_list_container" style="margin-top: 5px;"><i class="tbm_admin_icon">&#10004;</i><li class="tbm_admin_list_element"><?php esc_html_e('Compatible with multilingual sites (You can create a different TopBar for each language).', 'topbar-message-free-lang-options');?></li></div>
                <div class="tbm_admin_list_container"><i class="tbm_admin_icon">&#10004;</i><li class="tbm_admin_list_element"><?php esc_html_e('You can customize and diversify the appearance and behavior between the desktop and mobile version.', 'topbar-message-free-lang-options');?></li></div>
                <div class="tbm_admin_list_container"><i class="tbm_admin_icon">&#10004;</i><li class="tbm_admin_list_element"><?php esc_html_e('Select the colors of your TopBar.', 'topbar-message-free-lang-options');?></li></div>
                <div class="tbm_admin_list_container"><i class="tbm_admin_icon">&#10004;</i><li class="tbm_admin_list_element"><?php esc_html_e('You can decide whether to display the TopBar only on the desktop and deactivate it on the mobile.', 'topbar-message-free-lang-options');?></li></div>
                <div class="tbm_admin_list_container"><i class="tbm_admin_icon">&#10004;</i><li class="tbm_admin_list_element"><?php esc_html_e('You can decide whether to display the TopBar only on mobile and deactivate it on desktop.', 'topbar-message-free-lang-options');?></li></div>
              </div>
          </div>
          <div style="border-left: 2px solid lightgray; height: auto;"></div>
          <div style="padding: 10px; width: 50%; text-align: center;">
            <div style="flex-direction: column; padding: 0px 10px 10px 10px; margin-left: 20px; width: auto; height: auto; text-align: center;">
              <?php echo '<img src="' . esc_url( plugins_url( 'images/TopBar-MessageLogo.png', dirname(__FILE__) ) ) . '" alt="Logo TopBar Message - Free" height="100%" width="40%" >';?>
            </div>
            <p style="padding: 10px; font-size: 22px; margin-top: 0; margin-bottom: 0; color: #484848;"><b>TopBar Message - PRO</b></p>
            <div class="container" style="display: flex; flex-direction: column; align-items: center;">
            <a href="<?php echo esc_url($tbm_free_guide_link);?>" target="_blank">
            <button name="tbm_buy_pro_version" class="btn tbm_buy_pro_version_servizitrepuntozero"><?php esc_html_e('Discover PRO Version', 'topbar-message-free-lang-options');?></button>
            </a>
            <a href="<?php echo esc_url($tbm_free_guide_link);?>" target="_blank" id="tbm_text_pro_version">
              <i><b><?php esc_html_e('Read the full documentation', 'topbar-message-free-lang-options');?></b></i>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--INSERIRE TIT (desk)-->

  <div class="tbm-free-admin-option-page">

    <!-- DESKTOP OPTION MENU -->
  <div class="tbm-option-hover">
    <div class="tbm-free-main-admin">
      <form action="" name="tbm-free-admin-form" method="post" novalidate="novalidate" style="background-color: white; border: 1px solid #f3f3f3; border-radius: 10px;">
        <?php wp_nonce_field('topbar-message-free-options_wpnonce' ); ?>
        <table class="form-table" role="presentation">
        <tbody class="tbm-free-form-body">
          <div class="tbm-free-option-title">
            <div style="font-size: 25px; width: 100%; text-align: left; padding-left: 20px;">
              <h2 style="margin: 0;"><b>TopBar Message</b></h2>
              <p><?php esc_html_e('Set your TopBar on desktop', 'topbar-message-free-lang-options');?>.</p>
            </div>
          </div>
        <tr class="tbm-free-form-row" style="display: flex; flex-direction: row; flex-wrap: nowrap; width: 100%; justify-content: space-between; padding-right: 50%; align-items: center; padding-left: 10px;">
          <td class="tbm-free-form-basic-fields" style="margin: 0px;">
            <label for="tbm_free_check_value" style="width: max-content;"><?php esc_html_e('Activate TopBar', 'topbar-message-free-lang-options');?>:</label>
            <input class="tbm-free-input" name="tbm_free_check_value" type="checkbox" id="tbm_free_check_value" value="1" <?php echo (esc_attr(get_option('tbm_free_check')) == 1 ? 'checked' : '');?>>
          </td>
          <td class="tbm-free-form-basic-fields" style="margin: 0px;">
              <label for="tbm_free_topbar_pos_statement" style="width: max-content;"><?php esc_html_e('TopBar State', 'topbar-message-free-lang-options');?>:</label>
              <?php $select_value = esc_attr(get_option('tbm_free_topbar_statement', ''));?>
              <select name="tbm_free_topbar_pos_statement" id="tbm_free_topbar_pos_statement">
                <option disabled><?php esc_html_e('Choose', 'topbar-message-free-lang-options'); ?>...</option>
                <option value="Fissa" <?php echo esc_html(($select_value == 'Fissa') ? 'selected' : '') ?>><?php esc_html_e('Fixed', 'topbar-message-free-lang-options') ?></option>
                <option value="Dinamica" <?php echo esc_html(($select_value == 'Dinamica') ? 'selected' : '') ?>><?php esc_html_e('Dynamic', 'topbar-message-free-lang-options') ?></option>
              </select>
          </td>
          <td class="tbm-free-form-basic-fields" style="margin: 0px;">
            <label for="tbm_free_removible_checkbox"><?php esc_html_e('Do you want to make the TopBar removable', 'topbar-message-free-lang-options');?>?</label>
            <input class="tbm-free-input" name="tbm_free_removible_checkbox" type="checkbox" id="tbm_free_removible_checkbox" value="1" <?php echo (esc_attr(get_option('tbm_free_removible_check')) == 1 ? 'checked' : '');?>>
          </td>
          <td class="tbm-free-form-basic-fields" style="margin: 0px;" id="tbm-free-remove-button-admin">
            <label for="tbm_free_remove_topbar_button_color" style="white-space: nowrap;"><?php esc_html_e('X Color', 'topbar-message-free-lang-options');?>:</label>
            <input style="padding: 0; width: 70px;" class="tbm-free-input" name="tbm_free_remove_topbar_button_color" type="color" id="tbm_free_remove_topbar_button_color" value="<?php echo esc_attr(get_option('tbm_free_remove_button_color', ''));?>">
          </td>
        </tr> <!-- END FIRST ROW -->

        <tr class="tbm-free-basic-informations tbm-free-messages-admin-row tbm-free-form-row">
          <td class="tbm-free-message-link-row">
            <label for="tbm_free_message_field"><?php esc_html_e('Insert TopBar Message', 'topbar-message-free-lang-options');?>:</label>
            <input class="tbm-free-input" type="text" id="tbm_free_message_field" name="tbm_free_message_field" value="<?php echo esc_attr(get_option('tbm_free_message', ''));?>">
          </td>
          <td class="tbm-free-message-link-row">
            <label for="tbm_free_message_link"><?php esc_html_e('Text Link', 'topbar-message-free-lang-options');?>:<i style="opacity:0.6;">&nbsp;<?php esc_html_e('(Makes the text clickable)', 'topbar-message-free-lang-options');?></i></label>
            <input class="tbm-free-input" name="tbm_free_message_link" type="text" id="tbm_free_message_link" value="<?php echo esc_attr(get_option('tbm_free_message_text_link', ''));?>">
          </td>
        </tr> <!-- END SECOND ROW  -->

        <tr class="tbm-free-basic-informations tbm-free-customization tbm-free-form-row">
          <td class="tbm-free-customization-row">
            <label for="tbm_free_bg_color_field"><?php esc_html_e('TopBar Color', 'topbar-message-free-lang-options');?>:</label>
            <input class="tbm-free-input" name="tbm_free_bg_color_field" type="color" id="tbm_free_bg_color_field" value="<?php echo esc_attr(get_option('tbm_free_bg_color', ''));?>">
          </td>
          <td class="tbm-free-customization-row">
            <label for="tbm_free_message_text_color"><?php esc_html_e('TopBar Text Color', 'topbar-message-free-lang-options');?>:</label>
            <input class="tbm-free-input" name="tbm_free_message_text_color" type="color" id="tbm_free_message_text_color" value="<?php echo esc_attr(get_option('tbm_free_message_text_color', ''));?>">
          </td>
          <td class="tbm-free-customization-row">
            <label for="tbm_free_message_font_size"><?php esc_html_e('TopBar Text Dimensions', 'topbar-message-free-lang-options');?>: <i style="opacity:0.6;">(px)</i></label></th>
            <input class="tbm-free-input" name="tbm_free_message_font_size" type="number" id="tbm_free_message_font_size" value="<?php echo esc_attr(get_option('tbm_free_message_text_size', ''));?>">
          </td>
          <td class="tbm-free-customization-row">
            <label for="tbm_free_topbar_height"><?php esc_html_e('TopBar Height', 'topbar-message-free-lang-options');?>: <i style="opacity:0.6;">(px)</i></label>
            <input class="tbm-free-input" name="tbm_free_topbar_height" type="number" id="tbm_free_topbar_height" value="<?php echo esc_attr(get_option('tbm_free_height', ''));?>">
          </td>
        </tr> <!-- END THIRD ROW  -->

          <!-- START BUTTON SECTION -->

          <tr class="tbm-free-form-row" style="width:100%!important; flex-direction: row!important; margin-top: 4em!important; padding-left: 10px; align-items: center;">
            <th class="tbm-free-button-row" scope="row" style="text-align: left; width: 11%!important; padding-right: 1px!important;"><label for="tbm_free_check_button"><?php esc_html_e('Do you want to insert a button', 'topbar-message-free-lang-options');?>?</label></th>
              <td style="margin: 0;">
                <input class="tbm-free-input" name="tbm_free_check_button" type="checkbox" id="tbm_free_check_button" value="1" <?php echo (esc_attr(get_option('tbm_free_button_check')) == 1 ? 'checked' : '');?>>
              </td>
          </tr>  <!-- END BUTTON FIRST ROW (CHECK) -->

          <tr class="tbm-free-basic-informations tbm-free-button-informations tbm-free-form-row" style="display: none;">
            <th class="tbm-free-button-row" id="tbm-free-button-information-title" colspan="2" scope="row" style="text-align: left!important; display: none;"><label><?php esc_html_e('Button Features', 'topbar-message-free-lang-options');?>:</label></th>
          </tr>
          <tr class="tbm-free-basic-informations tbm-free-messages-admin-row tbm-free-form-row" style="display: none;" id="tbm-free-button-basic-info">
            <td class="tbm-free-message-link-row">
              <label for="tbm_free_button_message"><?php esc_html_e('Insert Button Text', 'topbar-message-free-lang-options');?>:</label>
              <input class="tbm-free-input" name="tbm_free_button_message" type="text" id="tbm_free_button_message" value="<?php echo esc_attr(get_option('tbm_free_button_text', ''));?>">
            </td>
            <td class="tbm-free-message-link-row">
              <label for="tbm_free_button_redirect"><?php esc_html_e('Button Link', 'topbar-message-free-lang-options');?>:</label>
              <input class="tbm-free-input" name="tbm_free_button_redirect" type="text" id="tbm_free_button_redirect" value="<?php echo esc_attr(get_option('tbm_free_button_link', ''));?>">
            </td>
            <td class="tbm-free-customization-row">
              <label for="tbm_free_button_font_size"><?php esc_html_e('Button Text Dimensions', 'topbar-message-free-lang-options');?>: <i style="opacity:0.6;">(px)</i></label>
              <input class="tbm-free-input" name="tbm_free_button_font_size" type="number" id="tbm_free_button_font_size" value="<?php echo esc_attr(get_option('tbm_free_button_text_size', ''));?>">
            </td>
          </tr> <!-- END BUTTON SECOND ROW (BUTTON BASIC INFO) -->

            <tr class="tbm-free-basic-informations tbm-free-customization tbm-free-messages-admin-row tbm-free-form-row" style="width:100%; display: none;" id="tbm-free-button-special-info">
              <td class="tbm-free-customization-row">
                <label for="tbm_free_button_bg_color"><?php esc_html_e('Button Color', 'topbar-message-free-lang-options');?>:</label>
                <input class="tbm-free-input" name="tbm_free_button_bg_color" type="color" id="tbm_free_button_bg_color" value="<?php echo esc_attr(get_option('tbm_free_button_color', ''));?>">
              </td>
              <td class="tbm-free-customization-row">
                <label for="tbm_free_button_font_color"><?php esc_html_e('Button Text Color', 'topbar-message-free-lang-options');?>:</label>
                <input class="tbm-free-input" name="tbm_free_button_font_color" type="color" id="tbm_free_button_font_color" value="<?php echo esc_attr(get_option('tbm_free_button_text_color', ''));?>">
              </td>
              <td class="tbm-free-customization-row">
                <label for="tbm_free_button_border_radius"><?php esc_html_e('Button Beading', 'topbar-message-free-lang-options');?>: <i style="opacity:0.6;">(px)</i></label>
                <input class="tbm-free-input" name="tbm_free_button_border_radius" type="number" id="tbm_free_button_border_radius" max="100" value="<?php echo esc_attr(get_option('tbm_free_button_border', ''));?>">
              </td>
            </tr> <!-- END BUTTON THIRD ROW (BUTTON SPECIAL INFO) -->
          </tbody>
        </table>
      <p class="submit"><input type="submit" name="tbm-free-submit" id="tbm-free-submit" class="button button-primary" value="<?php esc_html_e('Save Changes', 'topbar-message-free-lang-options');?>"></p>
    </form>
  </div>
</div>
</div>

<div style="margin-top: 3rem; width: 99%; height: 100%;">
  <div style="padding: 10px;">
    <div class="tbm_free_admin_picture_container">
      <div style="text-align: center;">
        <?php echo '<img src="' . esc_url( plugins_url( '/images/SCREEN-TopBar-Message-Free(ENG).jpg', dirname(__FILE__) ) ) . '" alt="TopBar Message - Pro" height="100%" width="100%" >';?>
      </div>
    </div>
  </div>
</div>

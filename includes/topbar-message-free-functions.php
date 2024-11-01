<?php
/*
 * Aggiungi il mio nuovo menu al Pannello di controllo dell'amministratore
Aggancia il gancio di azione "admin_menu", esegui la funzione denominata "tbm_free_admin_link ()"
*/



    function tbm_free_admin_link()
  {

    $tbm_free_icon_base64 = 'PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNS4yLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGl2ZWxsb18xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjI0MHB4IiBoZWlnaHQ9IjI0MC42cHgiIHZpZXdCb3g9IjAgMCAyNDAgMjQwLjYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI0MCAyNDAuNjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsNzUwLjAwMDAwMCkgc2NhbGUoMC4xMDAwMDAsLTAuMTAwMDAwKSI+DQoJPHBhdGggZD0iTTEwODAuOCw3Mjk5LjZjLTE0MC4xLTE2LjctMjgwLjctNjQuOS00MDEuNi0xMzcuNmMtMTExLjktNjcuMS0yMjAuNy0xNjcuMy0yOTUuNi0yNzEuOA0KCQljLTEwNS40LTE0Ny4yLTE2OC4yLTMxNC4xLTE4NS41LTQ5NS4zYy01LjYtNTYuOS0yLjUtMTg2LjcsNS42LTIzOWMxNy42LTExMy41LDQ0LjItMTk2LjksOTQuOS0yOTkuOQ0KCQljNTUtMTExLjYsMTExLTE4OC42LDIwMS4zLTI3N2MxNjEuNC0xNTcuNCwzNzEuNi0yNTQuOCw2MDAuNy0yNzcuOWM0MC44LTQsMTU0LTQsMTk1LjQsMGMxOTkuNywxOS44LDM5MS4xLDEwMC4yLDU0Ni45LDIyOS43DQoJCWMzOC4zLDMxLjgsMTA1LjcsMTAwLjUsMTM3LDEzOS43YzEwOC41LDEzNi4zLDE3OC40LDI5Mi41LDIwNy41LDQ2NC43YzEyLjEsNzEuNywxMC4yLDgzLjItNCwyNi45Yy0yMi45LTg4LjEtNTMuNS0xNjQuNS05NC42LTIzNQ0KCQljLTIzMS4zLTM5Ni40LTcwOS41LTU2Mi4xLTExMzEuNi0zOTIuNmMtMjA4LjcsODMuOC0zNzYuMywyMzguNC00NzcuNCw0NDAuNmMtNjYuMiwxMzIuMy05Ni41LDI2MC42LTk2LjgsNDA2LjYNCgkJYzAsOTAuOSwxMC4yLDE2NS40LDM0LjMsMjUwLjRjMzMuNCwxMTguMSw5MS44LDIzMS4zLDE2OC4yLDMyNi4yYzI0LjcsMzAuOSw4Ni45LDk0LDExOS42LDEyMi4xYzEyMCwxMDIsMjc0LjksMTc1LjYsNDMwLjQsMjA0LjENCgkJYzM0LjMsNi4yLDEwNS43LDEzLjYsMTMzLjksMTQuMmMxNS41LDAuMywxOS41LDAuOSwxMy45LDIuOEMxMjcwLDczMDUuOCwxMTIxLDczMDQuMiwxMDgwLjgsNzI5OS42eiIvPg0KCTxwYXRoIGQ9Ik0xMjEyLjIsNzIzMS45Yy05Ny40LTEyLjEtMTgwLjYtMzYuNS0yNjcuNC03OC41Yy05NC4zLTQ1LjgtMTU3LjEtOTAuNi0yMzEuOS0xNjUuNGMtNzAuOC03MC44LTExNC43LTEzMS4xLTE1Ny43LTIxNS4yDQoJCUM0OTMuNCw2NjUwLjYsNDY0LDY1MjcsNDY0LDYzODYuM2MwLTE5NC41LDU4LjQtMzY1LjQsMTc5LTUyNGMzMC0zOS42LDEwNy42LTExNy4yLDE0Ny4yLTE0Ny4yYzEyNC4zLTk0LjYsMjUzLjItMTQ5LDQwNS0xNzEuOQ0KCQljNTIuOS03LjcsMTg2LjEtNy43LDIzNi41LDBjMTA3LjksMTYuNywyMDYuOCw0OS44LDI5Mi4yLDk3LjFjNTYsMzEuMiw2My4xLDM5LjMsMTcsMTkuNWMtMTc3LjItNzctMzgwLTg0LjctNTYzLjMtMjINCgkJYy0xMTcuMiw0MC4yLTIxNC45LDEwMS4xLTMwMi40LDE4OC45Yy0xMjUuNSwxMjUuMi0yMDAsMjc2LjQtMjI2LjMsNDU5LjFjLTUuMywzNy4xLTUuMywxNjEuNCwwLjMsMTk3LjkNCgkJYzEzLjMsOTAsMzcuMSwxNjguNSw3NC4yLDI0NC4yYzExNy44LDIzOS45LDM0MS4zLDQwMC43LDYwOS40LDQzNy44YzE3LDIuNSw1Ny44LDQuMyw5Ny40LDQuM2M3MS43LDAsMTAxLjEtMy4xLDE2My45LTE2LjENCgkJYzYyLjUtMTMsMTY0LjItNDkuNSwyMDEuOS03Mi43YzUuNi0zLjQsMTEuMS01LjYsMTIuMS00LjNjMi41LDIuNSw0LjMsMC45LTMxLjgsMjQuN2MtMTA2LjcsNjkuNi0yMzMuNywxMTUtMzYyLjcsMTMwLjINCgkJQzEzNjUuOSw3MjM3LjQsMTI1OCw3MjM3LjQsMTIxMi4yLDcyMzEuOXoiLz4NCgk8cGF0aCBkPSJNMTQyMC45LDcxMDcuOWMtMTg1LjUtMTMuOS0zNDMuMi04NS00NjkuOS0yMTIuN2MtMTM5LjctMTQwLjctMjEzLjktMzI5LjYtMjA3LjgtNTI5YzMuNC0xMDguNSwyNi4zLTIwMC43LDczLjMtMjk2LjgNCgkJYzg0LjQtMTcyLjIsMjM2LjItMzA0LjgsNDE2LjgtMzY0LjhjMTQuMi00LjYsMjYuMy03LjcsMjYuOS03LjFjMC45LDAuNi0xMi4xLDgtMjguNCwxNi43Yy02My40LDMyLjItMTIyLjEsNzYuNC0xNzQuMSwxMjkuOQ0KCQljLTk0LjMsOTcuNy0xNTYuMSwyMTgtMTc5LjMsMzQ5LjFjLTQxLjQsMjMxLjYsNDMuNiw0NzAuNiwyMjEuNyw2MjMuM2MyMDYuNSwxNzcuNSw0OTIuMiwyMTMuOSw3MzMuNCw5My43DQoJCWMyNC43LTEyLjQsNTYuOS0zMC4zLDcxLjQtMzkuOWMxMDMuNi02OS4zLDE4OC4zLTE2Ny45LDIzOS45LTI3OC42YzcuNC0xNi40LDE0LjUtMjkuNCwxNS4xLTI4LjRjMi41LDIuMi0xNS4xLDU5LjEtMjcuOCw5MC42DQoJCWMtMjkuNyw3My45LTc0LjIsMTQ3LjItMTI2LjEsMjA3LjFjLTExMy44LDEzMi42LTI3OS44LDIyMC43LTQ1NS4xLDI0Mi40QzE1MjIsNzEwNi43LDE0NDMuNSw3MTA5LjUsMTQyMC45LDcxMDcuOXoiLz4NCjwvZz4NCjwvc3ZnPg0K';

    $tbm_free_icon_data_uri = 'data:image/svg+xml;base64,' . $tbm_free_icon_base64;
    $tbm_free_servizi_menu_slug = sanitize_title('servizi-tre-punto-zero');

    if ( empty( menu_page_url( $tbm_free_servizi_menu_slug, false) ) ) { //Check if menu page already exist, if not, show once submenu page about installed plugin in menu page (Servizi 3.0)

      add_menu_page('Servizi 3.0', 'Servizi 3.0', 'manage_options', $tbm_free_servizi_menu_slug, 'tbm_free_admin_page', $tbm_free_icon_data_uri); // Create menu main voice
      add_submenu_page($tbm_free_servizi_menu_slug, 'TopBar Message - Free', 'TopBar Message - Free', 'manage_options', sanitize_title('topbar-message-free-options'), 'tbm_free_admin_page'); // Create submenu plugin page
      remove_submenu_page($tbm_free_servizi_menu_slug, $tbm_free_servizi_menu_slug); // Remove submenu first page (Main menu voice)

    } else { //Else, if admin menu voice "Servizi 3.0" exist, attach this plugin voice.

      add_submenu_page($tbm_free_servizi_menu_slug, 'TopBar Message - Free', 'TopBar Message - Free', 'manage_options', sanitize_title('topbar-message-free-options'), 'tbm_free_admin_page');
       // Remove submenu first voice (Main menu voice)

    }
  }
  add_action('admin_menu', 'tbm_free_admin_link'); // Aggiungere un nuovo collegamento al pannello di controllo amministratore


  function tbm_free_language(){ // Calling pot file..
    load_plugin_textdomain('topbar-message-free-lang-options', false, dirname( dirname( plugin_basename(__FILE__) ) ) . '/languages' );
  }
  add_action('plugins_loaded', 'tbm_free_language');

  ?>

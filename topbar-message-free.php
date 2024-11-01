<?php
/**
* Plugin Name: Topbar Message - FREE
* Version: 1.1
* Author: Servizi 3.0
* Description: Realizza una top bar in pochi click.
* Text Domain: topbar-message-free-lang-options
* Domain Path: topbar-message-free/languages
*/

  //Check ABSPATH..
  if (!defined('ABSPATH')) {
    die;
  }

  //Calling functions php file
  require_once  plugin_dir_path(__FILE__)  . 'includes/topbar-message-free-functions.php';

  //Assognment js & css file on this file (declared 'enqueue' inside function so could be called with 'ADD_ACTION' method)
  function tbm_free_scripts(){
    wp_enqueue_style( 'tbm-free-style-css', plugins_url('/css/style.css', __FILE__));
    wp_enqueue_script( 'tbm_free_structure_js', plugins_url('/js/main.js', __FILE__ ));
    }
    add_action('wp_enqueue_scripts', 'tbm_free_scripts');

  //Assognment js & css file on admin page (declared 'enqueue' inside function so could be called with 'ADD_ACTION' method)
  function tbm_free_admin_scripts(){
    wp_enqueue_style('tbm_free_css', plugins_url('/css/style.css', __FILE__));
    wp_enqueue_script( 'tbm_free_admin_js', plugins_url('/js/admin-main.js', __FILE__ ));
  }
  add_action('admin_enqueue_scripts', 'tbm_free_admin_scripts');

  //Calling Admin page
  function tbm_free_admin_page(){
    require(dirname(__FILE__)  . '/includes/topbar-message-free-admin-page.php');
  }

  //Calling structure function
  function tbm_free_topheader(){
    require( dirname(__FILE__)  . '/includes/topbar-message-free-structure.php' );
  }
    add_action('wp_head', 'tbm_free_topheader');

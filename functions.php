<?php
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support
  function dtp_theme_setup(){
    add_theme_support('post-thumbnails');

    //Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme','dtp_theme_setup');

  // Excerpt Length Control
  function set_excerpt_length(){
    return 70;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

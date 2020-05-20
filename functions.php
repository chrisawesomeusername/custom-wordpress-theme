<?php
  function title_theme_support(){
    //this adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'title_theme_support');

  function theme_menus(){
    $locations = array(
      'primary' => "Desktop primary left side bar",
      'footer' => "Footer menu items"
    );
    register_nav_menus($locations);
  }
  add_action('init','theme_menus');


  function register_styles(){

    $version = wp_get_theme()->get ('Version');
    wp_enqueue_style('style-own', get_template_directory_uri() . "/style.css", array('style-bootstrap'), $version, 'all');
    wp_enqueue_style('style-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('style-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  }
  add_action('wp_enqueue_scripts', 'register_styles');


  function register_scripts(){
    wp_enqueue_script('script-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('script-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('script-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('script-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'register_scripts');

  // function theme_widget_areas(){
  //   register_sidebar(
  //     array(
  //         'before_title' => '<h3>',
  //         'after_title' => '</h3>',
  //         'before_widget' => '',
  //         'after_widget' => ''
  //     ),
  //     array(
  //       'name' => 'Sidebar Area',
  //       'id' => 'sidebar-1',
  //       'description' => 'Sidebar Widget Area'
  //     )
  //   );
  // }
  //
  // add_action('widgets_init', 'theme_widget_areas');


?>

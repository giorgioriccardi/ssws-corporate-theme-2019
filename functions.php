<?php

/**
 * SSWS functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SSWS
 */

function ssws_scripts(){
    wp_enqueue_style( 'ssws-style', get_stylesheet_uri() );
  
      wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '20190211', true );
      wp_register_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '20190211', true );
      wp_register_script('demo', get_template_directory_uri() . '/js/demo.js', array(), '20190211', true );
  
      // wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js', array(), '20190211', true );
      // wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '20190211', true );
      // wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '20190211', true );
      
      wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', $ver = false, $in_footer = true );
      wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', $ver = false, $in_footer = true );
      wp_enqueue_script( 'demo', get_template_directory_uri() . '/js/demo.js', $ver = false, $in_footer = true );
  }
  
  add_action( 'wp_enqueue_scripts', 'ssws_scripts' );
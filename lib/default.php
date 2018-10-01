<?php

  add_image_size( 'gallery-xs', 85  , 35,  true );
  add_image_size( 'gallery-sm', 320 , 320, true );
  add_image_size( 'gallery-md', 800 , 533, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'story-md', 765, 325, true );
  add_image_size( 'story-feat', 720, 1280, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  add_theme_support( 'post-thumbnails' );
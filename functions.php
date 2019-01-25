<?php

// Dependencies
require_once ('lib/default.php');
//require_once ('lib/advanced-custom-fields-pro/acf.php' );
require_once ('lib/soil/soil.php' );
require_once ('lib/roots-rewrites-master/roots-rewrites.php' );

// Includes
//function my_acf_settings_path( $path ) {
//  $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
//  return $path;
//}
//add_filter('acf/settings/path', 'my_acf_settings_path');
//function my_acf_settings_dir( $dir ) {
// $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
// return $dir;
//}
//add_filter('acf/settings/dir', 'my_acf_settings_dir');

//add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-nav-walker');
add_filter('show_admin_bar', '__return_false');

// Remove Stupid Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

define( 'THEME_ROOT', get_template_directory_uri() . '/' );
define( 'PUBLIC_DIR', THEME_ROOT . 'assets/' );
define( 'STYLES_DIR', PUBLIC_DIR . '' );
define( 'SCRIPTS_DIR', PUBLIC_DIR . '' );
define( 'IMAGES_DIR', PUBLIC_DIR . 'images/' );
define( 'VENDOR_SCRIPTS_DIR', THEME_ROOT . 'assets/' );

// tn Limit Excerpt Length by number of Words
function excerpt( $limit ) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}
$content = preg_replace('/[.+]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}

// Add Shortcode
function ad_shortcode() {

  $blog_id = get_current_blog_id();

  if(get_field('ad_copy')){
    // Local to post page
    $script = get_field('ad_script');
    $image =  get_field('ad_image');
    $copy =  get_field('ad_copy');
    $url =  get_field('ad_url');
  } else {
    if ( 1 == $blog_id ){ // Car Life
      $script = get_field('home_ad_script', 336);
      $image =  get_field('default_post_image', 336);
      $copy =  get_field('home_ad_copy', 336);
      $url =  get_field('post_ad_link', 336);
    }
    if ( 2 == $blog_id ){ // Home Life
      $script = get_field('home_ad_script', 336);
      $image =  get_field('default_post_image', 336);
      $copy =  get_field('home_ad_copy', 336);
      $url =  get_field('post_ad_link', 336);
    }
  }

  $output  = '<div class="post-single__ad">';
    if($url){
        $output .= '<a target="_blank" class="post-single__ad-link" href="' . $url . '"></a>';  
      };
    $output .= '<div class="post-single__ad-body">';
      $output .= '<div class="image"><img src="' . $image . '" class="img-responsive"></div>';
    $output .= '</div>';
    if($script || $copy){
    $output .= '<div class="post-single__ad-footer brand--bg">';
      $output .= '<div class="fs-row">';
        $output .= '<div class="fs-cell fs-lg-12 fs-md-4 fs-sm-3">';
          $output .= $copy;
          $output .= '<div class="post-single__ad-footer-spacer"></div>';
        $output .= '</div>';
        $output .= '<div class="post-single__ad-button fs-cell fs-lg-12 fs-md-2 fs-sm-3">';
          $output .= $script;
        $output .= '</div>';
      $output .= '</div>';
    $output .= '</div>';
    };
  $output .= '</div>';


  return $output;
  
}
add_shortcode( 'ad', 'ad_shortcode' );

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
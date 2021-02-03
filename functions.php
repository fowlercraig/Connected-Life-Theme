<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['helpers', 'setup', 'filters', 'admin'])
    ->each(function ($file) {
        $file = "app/{$file}.php";

        if (! locate_template($file, true, true)) {
            wp_die(
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We are ready to bootstrap the Acorn framework and get it ready for use.
| Acorn will provide us support for Blade templating as well as the ability
| to utilize the Laravel framework and its beautifully written packages.
|
*/

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

  $output  = '
    <div class="hidden md:block max-w-xs float-left mr-6">
      <img class="w-full block" src="' . $image . '"/>
    </div>
    <div class="block md:hidden h-screen/2" style="clip-path:inset(0 0 0 0);">
      <div class="fixed inset-x-0 h-screen-header top-0 flex items-center">
        <div class="container">
          <img class="w-full block" src="' . $image . '"/>
        </div>
      </div>
    </div>
  ';


  return $output;
  
}
add_shortcode( 'ad', 'ad_shortcode' );

new Roots\Acorn\Bootloader();

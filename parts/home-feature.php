<?php 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'story-feat', true);
  $thumb_url = $thumb_url_array[0];
  $featured = $thumb_url; 
  $image = get_field('hero_image_mobile');
  if ($image) {
    $source = $image['url'];  
  } else {
    $source = $featured;  
  }
?>

<div class="home-feature background" data-background-options='{"source":"<?php echo $source; ?>"}'>
  <div class="home-feature__meta site-<?php echo get_current_blog_id() ?>">
    <div class="home-feature__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="fs-row">
      <div class="home-feature__cats fs-cell fs-all-half">
        <?php echo get_the_category_list(); ?>
      </div>
      <div class="home-feature__controls fs-cell fs-all-half text-right">
        <div class="home-feature__controls-wrapper">
          <a href="#" class="brand--color left"><i data-feather="chevron-left"></i></a>
          <span class="count-current"><?php echo $i; ?> </span>
          <span class="count-divider">/</span>
          <span class="count-total"><?php echo $count ?> </span>
          <a href="#" class="brand--color right"><i data-feather="chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <a class="home-feature__link" href="<?php the_permalink(); ?>"></a>
</div>

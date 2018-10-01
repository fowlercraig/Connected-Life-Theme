<?php 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'story-md', true);
  $thumb_url = $thumb_url_array[0];
  $source = $thumb_url; 
?>

<div class="home-update">
  <a class="home-update__link" href="<?php the_permalink(); ?>"></a>
  <div class="home-update__meta">
    <div class="home-update__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <span class="home-update__desc"><?php the_field('subheadline'); ?></span>
    <a class="home-update__readmore brand--color" href="<?php the_permalink(); ?>">Read More</a>
  </div>
</div>

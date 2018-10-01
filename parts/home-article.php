<?php 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'story-md', true);
  $thumb_url = $thumb_url_array[0];
  $source = $thumb_url; 
?>

<div class="home-article">
  <a class="home-article__link" href="<?php the_permalink(); ?>"></a>
  <div class="home-article__thumb">
    <div class="home-article__cats">
      <?php echo get_the_category_list(); ?>
    </div>
    <img src="<?php echo $source; ?>" class="img-responsive">
  </div>
  <div class="home-article__meta">
    <div class="home-article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <span class="home-article__desc">
      <?php if(get_field('subheadline')):?>
      <?php the_field('subheadline'); ?>  
      <?php else: ?>
      <?php echo excerpt(15); ?>
      <?php endif; ?>
    </span>
    <a class="home-article__readmore brand--color" href="<?php the_permalink(); ?>">Read More</a>
  </div>
</div>

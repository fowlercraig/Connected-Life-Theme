<?php 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-md', true);
  $thumb_url = $thumb_url_array[0];
  $source = $thumb_url; 
  $blog_id = get_current_blog_id();
?>

<div class="post-item">
  <a class="post-item__link" href="<?php the_permalink(); ?>"></a>
  <div class="post-item__thumb">
    <div class="post-item__cats">
      <?php echo get_the_category_list(); ?>
    </div>
    <img src="<?php echo $source; ?>" class="img-responsive">
  </div>
  <div class="post-item__meta">
    <div class="post-item__title"><a class="site-<?php echo $blog_id; ?>"  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <span class="post-item__desc">
      <?php if(get_field('subheadline')):?>
      <?php the_field('subheadline'); ?>  
      <?php else: ?>
      <?php echo excerpt(10); ?>
      <?php endif; ?>
    </span>
  </div>
</div>

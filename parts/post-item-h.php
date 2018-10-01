<?php 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-md', true);
  $thumb_url = $thumb_url_array[0];
  $source = $thumb_url; 
  $blog_id = get_current_blog_id();
?>

<div class="post-item h">
  <div class="fs-row">
    <div class="fs-cell fs-lg-4 fs-md-half fs-sm-full">
      <div class="post-item__thumb h">
        <?php if(!is_category()): ?>
        <div class="post-item__cats">
          <?php echo get_the_category_list(); ?>
        </div>
        <?php endif; ?>
        <img src="<?php echo $source; ?>" class="img-responsive">
      </div>
    </div>
    <div class="fs-cell fs-lg-8 fs-md-half fs-sm-full">
      <div class="post-item__meta">
        <div class="post-item__title large"><a class="site-<?php echo $blog_id; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <span class="post-item__desc">
          <?php if(get_field('subheadline')):?>
          <?php the_field('subheadline'); ?>  
          <?php else: ?>
          <?php echo excerpt(15); ?>
          <?php endif; ?>
        </span>
        <a class="post-item__readmore h brand--color" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>
  </div>
</div>
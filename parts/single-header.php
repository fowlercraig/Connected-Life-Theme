<?php 
  $blogname = get_bloginfo('name');
  $pieces = explode(" ", $blogname);
  $blogname = strtolower($pieces[1]);
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'original', true);
  $thumb_url = $thumb_url_array[0];
  $mobile_img = get_field('hero_image_mobile')
?>
<?php if(!get_field('hero_image_video')): ?>
<?php if($mobile_img): ?> 
<div class="page-header has--video relative background" data-background-options='{"source":{"0px":"<?php echo $mobile_img['url']; ?>","980px":"<?php echo $thumb_url; ?>"},"alt":"Background Image"}'>
<?php else : ?>
<div class="page-header has--video relative background" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
<?php endif; ?>
  <div class="boom <?php the_field('hero_position'); ?>">
    <div class="fs-row">
      <div class="fs-cell fs-lg-full fs-md-6 fs-sm-3">
        <div class="page-header__tags <?php echo $blogname; ?>"><?php echo get_the_category_list(' / ','multiple'); ?></div>
        <h1 class="page-header__title"><?php the_title(); ?></h1>
        <h5 class="page-header__subtitle"><?php the_field('subheadline'); ?></h5>
      </div>
    </div>
  </div>
</div>
<hr class="page-header__divider invisible fs-sm-hide">
<?php else: ?>  
<div class="page-header has--video background" data-background-options='{"source":{"mp4":"<?php the_field('hero_image_video'); ?>","poster":"<?php echo $mobile_img['url']; ?>"},"alt":"<?php the_title(); ?>"}'>
  <div class="boom <?php the_field('hero_position'); ?>">
    <div class="fs-row">
      <div class="fs-cell fs-lg-full fs-md-6 fs-sm-3">
        <div class="page-header__tags <?php echo $blogname; ?>"><?php echo get_the_category_list(' / ','multiple'); ?></div>
        <h1 class="page-header__title"><?php the_title(); ?></h1>
        <h5 class="page-header__subtitle"><?php the_field('subheadline'); ?></h5>
      </div>
    </div>
  </div>
</div>
<hr class="page-header__divider invisible fs-sm-hide">
<?php endif; ?>
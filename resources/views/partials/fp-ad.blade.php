<div class="container hidden">
<?php $image = get_field('home_ad_image',336); ?>
<?php $imageMobile = get_field('home_ad_image_mobile',336); ?>
<?php if($image): ?>
<div class="fs-row">
  <div class="fs-cell fs-lg-8 fs-md-full fs-sm-hide fs-all-justify-center">
    <a target="blank" href="<?php the_field('home_ad_link',336); ?>"><img src="<?php echo $image; ?>" class="img-responsive"></a>
  </div>
  <?php if($imageMobile): ?>
  <div class="fs-cell fs-lg-hide fs-md-hide fs-sm-3 fs-all-justify-center">
    <a target="blank" href="<?php the_field('home_ad_link',336); ?>"><img src="<?php echo $imageMobile; ?>" class="img-responsive"></a>
  </div>
  <?php endif; ?>
</div>
<?php endif; ?>
</div>

<div class="container mt-20 pb-10">
  <div class="max-w-4xl mx-auto">
    @if(get_field('home_ad_image',336))
      <a href="{{ the_field('home_ad_link',336) }}"><img src="{!! get_field('home_ad_image',336) !!}" class="hidden md:block"></a>
    @endif
    @if(get_field('home_ad_image_mobile',336))
      <a href="{{ the_field('home_ad_link',336) }}"><img src="{!! get_field('home_ad_image_mobile',336) !!}" class="block md:hidden"></a>
    @endif
  </div>
</div>
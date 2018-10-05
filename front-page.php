<?php get_header(); ?>

<div id="home">
<?php get_template_part( 'parts/home', 'top' ); ?>

<hr class="invisible">

<?php $image = get_field('home_ad_image',336); ?>
<?php if($image): ?>
<div class="fs-row">
  <div class="fs-cell fs-lg-8 fs-md-full fs-sm-3 fs-all-justify-center">
    <a href="<?php the_field('home_ad_link',336); ?>"><img src="<?php echo $image; ?>" class="img-responsive"></a>
  </div>
</div>
<?php endif; ?>

<hr class="invisible">

<?php get_template_part( 'parts/home', 'latest' ); ?>
<?php #get_template_part( 'parts/home', 'ad' ); ?>
<?php #get_template_part( 'parts/home', 'stories' ); ?>
</div>

<?php get_footer(); ?>
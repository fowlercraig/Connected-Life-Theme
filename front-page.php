<?php get_header(); ?>

<div id="home">
<?php get_template_part( 'parts/home', 'top' ); ?>

<hr class="invisible">

<div class="fs-row">
  <div class="fs-cell fs-lg-8 fs-md-full fs-sm-3 fs-all-justify-center">
    <?php $image = get_field('home_ad_image',336); ?>
    <a href="<?php the_field('home_ad_link',336); ?>"><img src="<?php echo $image['url']; ?>" class="img-responsive"></a>
  </div>
</div>

<hr class="invisible">

<?php get_template_part( 'parts/home', 'latest' ); ?>
<?php #get_template_part( 'parts/home', 'ad' ); ?>
<?php #get_template_part( 'parts/home', 'stories' ); ?>
</div>

<?php get_footer(); ?>
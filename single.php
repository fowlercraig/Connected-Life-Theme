<?php get_header(); the_post(); ?>

<article <?php post_class('page'); ?>>
  <?php get_template_part( 'parts/single', 'header' ); ?>
  <div class="fs-row">
    <div class="fs-cell fs-lg-3 fs-lg-push-1 fs-lg-last">
      <?php get_template_part( 'parts/single', 'details' ); ?>
      <?php #get_template_part( 'parts/single', 'ad' ); ?>
    </div>
    <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3">
      <div class="page-content">
        <?php setPostViews(get_the_ID()); the_content(); ?>
        <?php $contents = get_field('content'); ?>
        <?php while ( have_rows('content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'text_area' ): ?>
        <?php the_sub_field('text_area'); ?>
        <?php endif; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</article>

<?php get_template_part( 'parts/single', 'related-products' ); ?>
<?php get_template_part( 'parts/single', 'related' ); ?>

<?php get_footer(); ?>
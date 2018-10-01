<?php get_header(); ?>

<div class="section-header">
  <div class="sticky" data-sticky-options='{"offset":60}'>
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <h1 class="section-header__title">
          <span class="section-header__title-wrap">
            <?php the_title(); ?>
          </span>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="fs-row">
  <div class='fs-cell fs-lg-8 fs-md-6 fs-sm-3'>
    <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="10" progress_bar="true" progress_bar_color="ed7070"]'); ?>
    <?php #if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php #get_template_part( 'parts/post', 'item-h' ); ?>
    <?php #endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>

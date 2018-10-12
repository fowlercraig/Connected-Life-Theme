<?php get_header(); ?>

<div class="section-header">
  <div class="sticky" data-sticky-options='{"offset":60}'>
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <h1 class="section-header__title">
          <span class="section-header__title-wrap">
            <?php echo single_cat_title( '', false ); ?>
            <?php $term = get_queried_object(); $slug = $term->slug; ?>
          </span>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="fs-row">
  <div class='fs-cell fs-lg-8 fs-md-6 fs-sm-3'>
    <?php echo do_shortcode('[ajax_load_more category="' . $slug . '" post_type="post" posts_per_page="10" progress_bar="true" progress_bar_color="ed7070"]'); ?>
  </div>
</div>

<?php get_footer(); ?>
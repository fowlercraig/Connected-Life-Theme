<?php get_header(); ?>

<div class="section-header">
  <div class="sticky" data-sticky-options='{"offset":60}'>
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <h1 class="section-header__title">
          <span class="section-header__title-wrap">
            <?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?>
            <?php $search = get_search_query(); ?>
          </span>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="fs-row">
  <div class='fs-cell fs-lg-8 fs-md-6 fs-sm-3'>
    <?php echo do_shortcode('[ajax_load_more search="' . $search . '" post_type="post" posts_per_page="10" progress_bar="true" progress_bar_color="ed7070"]'); ?>
    <?php #if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php #get_template_part( 'parts/post', 'item-h' ); ?>
    <?php #endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>

<?php /*

<?php get_header(); ?>

<div class="fs-row">
<div class="fs-cell fs-all-full">

<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>

</div>
</div>

<?php get_footer(); ?>

*/?>
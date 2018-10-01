<?php get_header(); the_post(); ?>


<article <?php post_class('page'); ?>>
  <?php get_template_part( 'parts/single', 'header' ); ?>
  <div class="fs-row">
    <div class="fs-cell fs-lg-2">
      <div class="fs-row">
        <div class="fs-cell fs-lg-full fs-all-auto">
          <span class="page-content__label">Author</span>
          <h6 class="page-content__author"><?php the_author(); ?></h6>
          <hr class="invisible compact">
        </div>
        <div class="fs-cell fs-lg-full fs-all-auto">
          <span class="page-content__label">Published</span>
          <h6 class="page-content__author"><?php echo get_the_date( 'Y-m-d' ); ?></h6>
          <hr class="invisible compact">
        </div>
        <div class="fs-cell fs-lg-full fs-all-auto">
          <span class="page-content__label">Share</span>
          <div class="fs-row">
            <div class="fs-cell fs-lg-full fs-md-fourth fs-sm-fourth"><a class="page-content__icon"><i data-feather="facebook"></i></a></div>
            <div class="fs-cell fs-lg-full fs-md-fourth fs-sm-fourth"><a class="page-content__icon"><i data-feather="twitter"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 page-content <?php echo $blogname; ?>">
      <?php the_content(); ?>
    </div>
    <hr class="invisible fs-lg-hide fs-md-hide fs-sm-full">
    <div class="fs-cell fs-lg-hide fs-push-1 fs-md-hide fs-sm-3 page-sidebar">
      <?php include locate_template('parts/widget-buy.php'); ?>
      <div class="widget-ad"></div>
    </div>
  </div>

  <?php $contents = get_field('content'); ?>
  <?php #var_dump($contents); ?>
  <?php while ( have_rows('content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'text_area' ): ?>
    <div class="page-content">
      <div class="fs-row">
        <div class="fs-cell fs-lg-8 fs-all-justify-center">
          <?php the_sub_field('text_area'); ?>
        </div>
      </div>
    </div>
    <?php elseif(get_row_layout() == 'ad' ): ?>
    <?php $source = get_sub_field('parallax_ad'); ?>
    <hr class="invisible">
    <div class="home">
      <div class="fs-row">
        <div class="fs-cell fs-lg-8 fs-md-6 fs-all-justify-center">
          <div class="home-parallax js-parallax" data-parallax-bg-image="<?php echo $source; ?>">
            <?php /*
            <div class="home-parallax-content">
              <div class="fs-row">
                <div class="fs-cell fs-all-half fs-sm-full">
                  <h1>This is a Parallax Ad</h1>
                  <a href="#" class="button button-cta car">Sign up Today</a>
                </div>
              </div>
            </div>
            */ ?>
          </div>
        </div>
      </div>
    </div>
    <hr class="invisible">
    <?php endif; ?>
  <?php endwhile; ?>

  <div class="fs-row">
    <div class="fs-cell">
      <!--This button has extra code productGroup code to allow to display on pages where there's a duplicate button in the body content-->
<div class="where-to-buy">
<script type="text/javascript">pswtb.loader.show({ widgetConfigurationId: '962c6cdd-68ad-4979-8eab-86b310e9b2a4', sku: 'US_AVH-4201NEX', productGroup: 'US' });</script>
</div>
</div>
</div>

  <hr class="invisible big">
  <div class="home">
    <div class="home-center section">
      <div class="fs-row">
        <div class="fs-cell section-header">
          <div class="section-title section-title--small">Related Articles From</div>
          <div class="section-title <?php echo $blogname; ?>">
            <span class="section-title__wrap">Connected <span>Home</span> Life</span>
          </div>
        </div>
        <?php get_template_part( 'parts/single', 'related' ); ?>
      </div>
    </div>
  </div>
</article>
<hr class="invisible big">

<?php get_footer(); ?>
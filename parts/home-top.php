<div id="home-top" class="fs-grid-fluid">
  <div class="fs-row">
    <div id="home-top-lg" class="fs-cell fs-lg-half fs-md-half fs-sm-full fs-contained">
      <div class="sticky" data-sticky-options='{"offset":60,"minWidth":"740px"}' data-sticky-container="#home-top">
        <div class="home-top-carousel carousel" data-carousel-options='{"pagination":false, "infinite": true, "controls":false}'>

<?php 
  $args = array(
    'showposts'        => 3,
    'post_type'        => 'post',
    'cat'              => '11'
  );
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
  $count = $wp_query->post_count;
  $i = 1;
  while ($wp_query->have_posts()) : $wp_query->the_post();
  include locate_template('parts/home-feature.php');
  $i++;
  //get_template_part( 'parts/home', 'feature' );
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>    
  
        </div>
      </div>
    </div>
    <div id="home-top-md" class="fs-cell fs-lg-4 fs-md-half fs-contained">

<?php 
  $args = array(
    'showposts'        => 6,
    'post_type'        => 'post',
    'cat'              => '-11'
  );
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
  while ($wp_query->have_posts()) : $wp_query->the_post();
  get_template_part( 'parts/home', 'article' );
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>          

    </div>
    <div id="home-top-sm" class="fs-cell fs-lg-2 fs-md-full fs-sm-hide fs-contained">
      <div class="home-update home-update--title">
        <div class="feed-title">Most Viewed</div>
      </div>
<?php 
  $args = array(
    'showposts'        => 10,
    'orderby'          => 'meta_value_num',
    'meta_key'         => 'post_views_count',
  );
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
  while ($wp_query->have_posts()) : $wp_query->the_post(); setPostViews(get_the_ID());
  get_template_part( 'parts/home', 'update' );
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>    
    </div>
  </div>
</div>
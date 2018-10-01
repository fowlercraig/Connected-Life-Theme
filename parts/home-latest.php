<hr class="invisible big">

<div class="section-header section-header">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <h1 class="section-header__title">
        <span class="section-header__title-wrap">
          Latest News
        </span>
      </h1>
    </div>
  </div>
</div>

<div id="home-latest" class="home-section home-section--padded">
  <div class="fs-row">

<?php 
  $args = array(
    'showposts'        => 6,
    'post_type'        => 'post',
  );
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
  while ($wp_query->have_posts()) : $wp_query->the_post();
  echo "<div class='fs-cell fs-lg-third fs-md-third fs-sm-3'>";
  get_template_part( 'parts/post', 'item' );
  echo "</div>";
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>       

    <div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3 fs-all-justify-center">
      <hr class="invisible compact">
      <a href="/news" class="button button--full brand--bg">More Stories</a>
    </div>

  </div>
</div>

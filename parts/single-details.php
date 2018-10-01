<div class="post-single__details brand--bg">
  <div class="fs-row">
    <div class="fs-cell fs-lg-full fs-all-auto post-single__details-item">
      <span class="post-single__details-label">Author</span>
      <h6 class="post-single__details-author"><?php the_author(); ?></h6>
    </div>
    <div class="fs-cell fs-lg-full fs-all-auto post-single__details-item">
      <span class="post-single__details-label">Published</span>
      <h6 class="post-single__details-author"><?php echo get_the_date( 'Y-m-d' ); ?></h6>
    </div>
    <div class="fs-cell fs-lg-full fs-all-auto post-single__details-item">
      <span class="post-single__details-label">Share</span>
      <div class="fs-row">
        <div class="fs-cell fs-lg-fourth fs-md-fourth fs-sm-fourth"><a class="post-single__details-icon"><i data-feather="facebook"></i></a></div>
        <div class="fs-cell fs-lg-fourth fs-md-fourth fs-sm-fourth"><a class="post-single__details-icon"><i data-feather="twitter"></i></a></div>
        <div class="fs-cell fs-lg-fourth fs-md-fourth fs-sm-fourth"><a class="post-single__details-icon"><i data-feather="mail"></i></a></div>
      </div>
    </div>
  </div>
</div>
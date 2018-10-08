<?php 
  $blog_id = get_current_blog_id();
  if ( 1 == $blog_id ){
    $related = get_field('related_products_home',336); 
  }
  if ( 2 == $blog_id ){
    $related = get_field('related_products_home',336); 
  }
?>
<?php if($related): ?>
<hr class="invisible big">

<div class="section-header section-header">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <h1 class="section-header__title">
        <span class="section-header__title-wrap">
          Featured Product
        </span>
      </h1>
    </div>
  </div>
</div>

<div class="fs-row">
  <?php foreach($related as $item): ?>
  <div class="fs-cell fs-lg-auto fs-md-half fs-sm-full">
    <div class="related">
      <div class="related-image">
        <img src="<?php echo $item['image']['url']; ?>" class="img-responsive">
      </div>
      <div class="related-title"><?php echo $item['title']; ?></div>
      <?php if ( 1 == $blog_id ): ?>
      <div class="related-link-wrapper"><a class="related-link brand--color" href="<?php echo $item['review_link']; ?>">Read the Review</a></div>
      <?php endif; ?>
      <?php if ( 2 == $blog_id ): ?>
      <div class="related-link-wrapper"><a class="related-link brand--color" href="<?php echo $item['review_link']; ?>">Read the Review</a></div>
      <?php endif; ?>
      <div class="related-button">
        <?php if($item['where_to_buy']): echo $item['where_to_buy']; endif; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>
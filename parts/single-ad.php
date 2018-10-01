<div class="post-single__ad">
  <div class="post-single__ad-header"></div>
  <?php if(get_field('ad_image')): ?>
  <?php $source = get_field('ad_image'); ?>
  <?php else: ?>
  <?php $source = '/assets/jose-llamas-751449-unsplash.jpg' ; ?>
  <?php endif; ?>
  <div class="post-single__ad-body js-parallax" data-parallax-bg-image="<?php echo $source; ?>"></div>
  <div class="post-single__ad-footer brand--bg">
    <div class="fs-row">
      <div class="fs-cell fs-lg-12 fs-md-4 fs-sm-3">
        <?php if(get_field('ad_copy')): ?>
        <?php the_field('ad_copy'); ?>
        <?php else: ?>
        Upgrade with Pioneer to Apple CarPlay and Android Auto
        <?php endif; ?>
        <div class="post-single__ad-footer-spacer"></div>
      </div>
      <div class="fs-cell fs-lg-12 fs-md-2 fs-sm-3">
        <?php if(get_field('ad_script')): ?>
        <?php the_field('ad_script'); ?>
        <?php else: ?>
        <script type="text/javascript">pswtb.loader.show({ widgetConfigurationId: '962c6cdd-68ad-4979-8eab-86b310e9b2a4', sku: 'US_AVH-W4400NEX' });</script>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
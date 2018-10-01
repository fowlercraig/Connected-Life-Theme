<?php $blog_id = get_current_blog_id(); ?>
    </div>
    <hr class="invisible big">
    <footer id="footer">
      <div class="fs-row">
        <div class='fs-cell fs-all-half'>
          <?php if ( 1 == $blog_id ): ?>
          <a href="/" class="nav-btn nav-logo">Connected <span class="brand--color">Car</span> Life</a>
          <?php endif; ?>
          <?php if ( 2 == $blog_id ): ?>
          <a href="/" class="nav-btn nav-logo">Connected <span class="brand--color">Home</span> Life</a>
          <?php endif; ?>
        </div>
        <div class='fs-cell fs-all-half text-right'>
          <a href="/" class="nav-btn">Privacy Policy</a>
          <a href="/" class="nav-btn">Terms & Conditions</a>
        </div>
      </div>
    </footer>
  </div><!--Wrapper-->

<script src="<?php print VENDOR_SCRIPTS_DIR . 'vendor.min.js'; ?>"></script>
<script src="<?php print SCRIPTS_DIR . 'main.min.js'; ?>"></script>
<?php wp_footer(); ?>

</body>
</html>


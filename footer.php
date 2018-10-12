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
          <a href="/privacy-policy/" class="nav-btn">Privacy Policy</a>
          <a href="/terms-conditions/" class="nav-btn">Terms & Conditions</a>
        </div>
      </div>
    </footer>
  </div><!--Wrapper-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81120400-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-81120400-1');
</script>  

<!-- Google Tag Manager -->
<noscript style="display:none"><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WBT9QB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBT9QB');</script>
<!-- End Google Tag Manager -->

<!-- IDG Pixel Code -->
<img src="http://pubads.g.doubleclick.net/activity;xsp=231656;ord=1?" width=1 height=1 border=0/>
</noscript>

<script src="<?php print VENDOR_SCRIPTS_DIR . 'vendor.min.js'; ?>"></script>
<script src="<?php print SCRIPTS_DIR . 'main.min.js'; ?>"></script>
<?php wp_footer(); ?>

</body>
</html>


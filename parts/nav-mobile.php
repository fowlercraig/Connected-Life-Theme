<?php $blog_id = get_current_blog_id(); ?>
<div id="nav-mobile">
  <div id="nav-mobile__menu">
    <?php if ( 1 == $blog_id ): ?>
    <a href="/" class="nav-btn nav-logo">Connected <span class="brand--color">Car</span> Life</a>
    <?php endif; ?>
    <?php if ( 2 == $blog_id ): ?>
    <a href="/" class="nav-btn nav-logo">Connected <span class="brand--color">Home</span> Life</a>
    <?php endif; ?>
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
  </div>
  <div id="nav-mobile__search">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
      <input type="input" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter search term', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="submit" class="search-submit brand--bg" value="Search">
    </form>
  </div>
</div>
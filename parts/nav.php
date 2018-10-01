<?php 
  $menuLocations = get_nav_menu_locations();
  $lMenu = $menuLocations['main-menu'];
  $lNav = wp_get_nav_menu_items($lMenu);
  $blog_id = get_current_blog_id();
?>

<header id="nav" class="nav sticky">
  <div id="nav-main" class="fs-grid-fluid">
    <div class="fs-row">
      <div class="fs-cell fs-lg-third fs-md-half fs-sm-2 nav-main">
        <?php if ( 1 == $blog_id ): ?>
        <a href="/" class="nav-btn nav-logo">Connected <span class="brand--color">Car</span> Life</a>
        <?php endif; ?>
        <?php if ( 2 == $blog_id ): ?>
        <a href="/" class="nav-btn nav-logo">Connected <span class="brand--color">Home</span> Life</a>
        <?php endif; ?>
      </div>
      <div class="fs-cell fs-lg-third fs-md-hide fs-sm-hide text-center nav-menu">
        <?php # include locate_template('parts/dropdown.php'); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
      <div class="fs-cell fs-lg-third fs-md-half fs-sm-hide text-right nav-search">
        <a class="nav-btn swap last" data-swap-target="#nav-search"  data-swap-linked='.close' href="#" title="search">
          <i data-feather="search"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="fs-cell fs-lg-hide fs-md-hide fs-sm-1 text-right nav-search">
        <a class="nav-btn swap" data-swap-target="#nav-mobile, #wrapper"  data-swap-linked='.menu-close' href="#" title="Open Menu"><i data-feather="menu" stroke-width="2"></i></a>
      </div>
    </div>
  </div>
  <div id="nav-search" class="search fs-grid-fluid">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
      <div class="fs-row">
        <div class="fs-cell fs-lg-10">
          <label>
            <input type="input" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter search term', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
          </label>
        </div>
        <div class="fs-cell fs-lg-2 text-right">
          <div class="search-submit-btn">
            <input type="submit" class="search-submit brand--bg" value="Search">
          </div>
        </div>
      </div>
    </form>
  </div>
</header>
<header class="navbar navbar-static-top" role="banner">
  <?php dynamic_sidebar('Header Left'); ?>
  <a class="logo-container header_flex_child" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_home_url() . "/wp-content/uploads/logoBL72.png" ?>"<?php imgswap(53,260) ?> /></a>
  <nav class="main-nav header_flex_child" role="navigation">
    <?php if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
    endif; ?>
  </nav>
</header>
<div id="triangle"></div>
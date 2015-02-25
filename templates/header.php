<header class="navbar navbar-static-top" role="banner">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> 
  <?php dynamic_sidebar('Header Left'); ?>
  <a class="logo-container header_flex_child" href="<?php echo esc_url(home_url('/')); ?>"><img class="logo img img-responsive" src="<?php echo get_bloginfo('template_directory') . "/assets/img/logo_black.png"; ?>"></a>
  <nav class="main-nav header_flex_child" role="navigation">
    <?php if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
    endif; ?>
  </nav>
</header>
<div id="triangle"></div>
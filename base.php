<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->
  
  <div class="wrap" role="document">
    <div class="content_frame">
      <header class="intro-container" role="complementary">
       <?php include roots_sidebar_path(); ?>
      </header>
      <main class="content" role="main">
        <?php include roots_template_path(); ?>
      </main>
    </div>
  </div>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>

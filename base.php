<?php

use Source\Config;
use Source\Wrapper;

get_template_part('templates/head');
?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'source'); ?>
      </div>
    <![endif]-->
    <div class="wrap" role="document">
      <?php get_header(); ?>
      <div class="content-wrap">
        <div class="content">
          <div class="container">
            <main class="main" role="main">
              <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
          </div><!-- /.container -->
        </div><!-- /.content -->
      </div><!-- /.content-wrap -->
    </div><!-- /.wrap -->
    <?php get_footer(); ?>
  </body>
</html>

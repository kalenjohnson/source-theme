<?php use Source\Wrapper; ?>
<div class="menu-wrap">
  <div class="site-info">
    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
  </div>
  <aside class="sidebar" role="complementary">
    <?php include Wrapper\sidebar_path(); ?>
  </aside><!-- /.sidebar -->
</div>
<header class="banner" role="banner">
  <div class="menu-fixed-top">
    <div class="container">
      <div class="menu-top">
        <?php
        if (has_nav_menu('social_media_links')) :
          wp_nav_menu(['theme_location' => 'social_media_links', 'menu_class' => 'social', 'container' => null]);
        endif;
        ?>
      </div>
      <button class="menu-button" id="open-button">Open Menu</button>
    </div>
  </div>
</header>

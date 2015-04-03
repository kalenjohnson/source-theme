<header class="banner" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Walker_Nav_Menu(), 'menu_class' => '']);
      endif;
      ?>
    </nav>
  </div>
</header>

<header class="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="brand" href="<?php echo home_url(); ?>/">Rafael Rubio</a>
    </div>
    <div class="pull-right menu-sel">English | <a href="http://rafaelrubio.co/es/">Español</a></div>
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

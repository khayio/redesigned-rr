<header class="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="b-left pull-left"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </span> 
         <span class="b-right pull-right">Menu</span>
      </button>
      <a itemprop="url" class="brand" href="<?php echo home_url(); ?>/"><span class="" itemprop="name">Rafael Rubio</span></a>
    </div>
    <div class="pull-right menu-sel">English | <a href="http://rafaelrubio.co/es/">Español</a></div>
    <nav class="nav-main collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

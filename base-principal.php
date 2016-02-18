<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body class="home page">
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div class="cover full-window cover-image">
      
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <main class="container-fluid">
       <section class="row">
          <div class="container">
            <div class="col-sm-12">
              <h1>Test<span> blabla</span></h1>
              <h2>more fasfa</h2>
              <div class="social-media">
                <a class="ss-twitter"  title="Follow me on Twitter" href="https://twitter.com/rikardo77"></a>
                <a class="ss-linkedin" title="Add me on LinkedIn" href="http://uk.linkedin.com/in/rafaelricardorubio"></a>
                <a class="ss-googleplus" title="Add me on Google Plus" href="https://plus.google.com/109486293785385567491/"></a>
              </div>
            </div>  
          </div>  
       </section><!-- /.row -->
      </main><!-- /.main -->
    </div><!-- /.cover -->
    <div class="row">
      <section class="bio container">
        <div class="col-sm-3">
          <img class="img-circle" src="http://www.lastminute.com/c/content/dam/site_gb/CityBreaks/destinationPages/370x205_dublin_2.jpg">
         </div>
         <div class="col-sm-9">
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>
            <p>Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur</p>
        </div>
      </section>
    </div><!-- /.row -->
    <div class="row">
      <div class="container hr"></div>
    </div>
    <div class="row jobs">
      <section class="container">
         <div class="job-img" style="background-image:url(http://www.lastminute.com/c/content/dam/site_de/1368x437/1368x437_amsterdam.jpg); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.lastminute.com/c/content/dam/site_de/1368x437/1368x437_amsterdam.jpg',sizingMethod='scale');"></div>
         <div class="col-sm-12">
          <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>
          <p>Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur</p>
          <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>
          <p>Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur</p>
            <div class="text-center">
              <a class="btn boton-link" href="#">See CV</a>
            </div>  
         </div>
      </section><!-- /.section -->
    </div><!-- /.row -->
    <div class="row">
      <div class="container hr"></div>
    </div>
    <div class="row jobs">
      <section class="container">
         <div class="job-img" style="background-image:url(http://www.lastminute.com/c/content/dam/site_de/1368x437/1368x437_amsterdam.jpg); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.lastminute.com/c/content/dam/site_de/1368x437/1368x437_amsterdam.jpg',sizingMethod='scale');"></div>
          <div class="col-sm-12">
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>
            <p>Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur</p>
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>
            <p>Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur</p>
            <div class="text-center">
              <a class="btn boton-link" href="#">See CV</a>
            </div>  
          </div>
         </div>
      </section><!-- /.section -->
    </div><!-- /.row -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
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
              <h1>Rafael<span> Rubio</span></h1>
              <h2><span itemprop="jobtitle">SEO Strategist</span></h2>
              <div class="social-media">
                <a class="ss-twitter"  title="Follow me on Twitter" href="https://twitter.com/rrubio9"></a>
                <a class="ss-linkedin" title="Add me on LinkedIn" href="http://uk.linkedin.com/in/rafaelricardorubio"></a>
                <a class="ss-googleplus" title="Add me on Google Plus" href="https://plus.google.com/+RafaelRicardoRubio"></a>
                <a class="ss-mail" title="Contact me by e-mail" href="/contact/"></a>
              </div>
            </div>  
          </div>  
       </section><!-- /.row -->
      </main><!-- /.main -->
    </div><!-- /.cover -->
    <div class="row">
      <section class="bio container">
        <div class="col-sm-3">
          <img class="img-circle" src="http://rafaelrubio.co/media/Rafael-Rubio.jpg">
         </div>
         <div class="col-sm-9 desc">
            <span itemprop="description"><p>I am a SEO professional with insight, creativity, energy and drive to achieve results.</p>
            <p>With 6+ years of experience in SEO and Web development I am comfortable working with technical SEO challenges and providing strategic and data-driven insights for the gain of SEO.</p></span>
        </div>
      </section>
    </div><!-- /.row -->
    <div class="row">
      <div class="container hr"></div>
    </div>
    <div class="row jobs">
      <section class="container">
         <div class="job-img" style="background-image:url(http://rafaelrubio.co/media/lmn_beach_logo.jpg); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://rafaelrubio.co/media/lmn_beach_logo.jpg',sizingMethod='scale');"></div>
         <div class="col-sm-12 text-center desc">
          <p>Currently I am working as SEO Manager for lastminute.com where I have been implementing effective SEO campaigns across multiple markets in Europe.</p>
          <p>I have been working in the web since 2008 when I started developing websites using Joomla and Wordpress, from then I have been helping companies to increase their revenue through better organic visibility.</p>
            <div class="text-center">
              <a class="btn boton-link" href="#">See more Experience</a>
            </div>  
         </div>
      </section><!-- /.section -->
    </div><!-- /.row -->
    <div class="row">
      <div class="container hr"></div>
    </div>
    <div class="row jobs">
      <section class="container">
         <div class="job-img" style="background-image:url(http://rafaelrubio.co/media/skills-road.jpg); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://rafaelrubio.co/media/skills-road.jpg',sizingMethod='scale');"></div>
          <div class="col-sm-12">
            <p>Coming from a technical background not only gives me credibility when I’m explaining technical SEO issues and implementations but also helps me bridging the gap between technical and marketing teams. I also have experience in Web design, Project management and Analytics.</p>
            <div class="text-center">
              <a class="btn boton-link" href="http://rafaelrubio.co/about/">See Skills</a>
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
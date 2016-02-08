<?php
/*
Template Name: Principal Template
*/
?>
<section class="intro">
<div class="bg-intro"></div>
	<div class="container">
		<div class="biorr">
			<h1>Hi, I'm an IT Professional with a great passion for Front-End Web development
			 and Search Engine Optimization (SEO) based in London, UK</h1>
			 <div class="btn-intro">
				<a class="btn btn-lg btn-default " href="http://rafaelrubio.co/about/">Learn More</a>
			</div>
		</div>	
	</div>	
</section>
<section class="share">
	<div class="container">
		<div class="social-media">
			<a class="ss-twitter"  title="Follow me on Twitter" href="https://twitter.com/rikardo77"></a>
			<a class="ss-linkedin" title="Add me on LinkedIn" href="http://uk.linkedin.com/in/rafaelricardorubio"></a>
			<a class="ss-googleplus" title="Add me on Google Plus" href="https://plus.google.com/109486293785385567491/"></a>
		</div>

	</div>
</section>
<section class="latestpost">
	<div class="container">
		<h2>Recent Articles</h2>
			<?php
				query_posts('showposts=3');
			while (have_posts()) : the_post();
				get_template_part('templates/content', get_post_format());
			endwhile;
			?>
	</div>	
</section>

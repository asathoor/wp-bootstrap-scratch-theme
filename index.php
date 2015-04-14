<?php get_header(); ?>
<!-- file: index.php -->

<div class="container-fluid">
<div class="jumbotron">
    <h1>A Bootstrap Theme Experiment</h1> 
    <p>Bootstrap is perhaps the most popular HTML, CSS, and JS framework for developing
    responsive, mobile-first projects on the web.</p> 
  
  <p>Let's use it for something.</p> 
  <p>
	  <a href="http://www.w3schools.com/bootstrap/bootstrap_get_started.asp">
	    Here are the turorials.
	  </a>
  </p> 
</div><!-- jumbotron end -->

<!-- the WordPress Loop -->
<!-- copy & pasted from: http://digwp.com/2011/05/loops/ -->

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>

</div><!-- container end -->

</div>

<?php get_footer(); ?>

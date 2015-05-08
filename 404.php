<?php
/**
 * Template Name: Blog Page
 */

get_header(); 



?>


<section class="banner">
  <div class="container">
    <h1>Page Not Found</h1>
  </div>
</section><!-- banner -->

<div id="the-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php get_sidebar('blog'); ?>
      </div>
      <div class="col-sm-8">
        <div class="wrapper the-news">
        <h1 class="text-center">Sorry, this canvas is blank. </h1>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>

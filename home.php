<?php 
/**
* Template Name: Home Page
*/
  get_header();

?>
    <section class="banner">
      <div class="container">
        <h1>Bulletproof your marketing data</h1>
        <h3>Rock solid campaign performance metrics <br> everyone can agree on – right in Salesforce.</h3>
        <a href="#" class="btn btn-warning">watch a demo ›</a>
      </div>
    </section><!-- end banner -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>

    <?php load_template( dirname(__FILE__) . '/inc/sales-force.php'); ?>

    <?php load_template( dirname(__FILE__) . '/inc/data-driven.php'); ?>

    <?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php'); ?>

<?php 

  get_footer();

?>
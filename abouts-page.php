<?php 

/**
 * Template Name: Abouts Page
 */

get_header(); ?>

<section class="banner banner-about">
  <div class="container">
    <h1>Full Circle CRM</h1>
  </div>
</section><!-- end banner -->

<?php load_template( dirname(__FILE__) . '/inc/menu-abouts-page.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content( ); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
    
<?php get_footer(); ?>

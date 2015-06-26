<?php

/**
* Template Name: Contact Page
*/ 

 get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php echo do_shortcode(getField('banner')); ?>

        <div id="sources-page">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">

                <?php the_content(); ?>

              </div>

              <div class="col-sm-6">
                <?php echo do_shortcode( getField('form_shortcode') ); ?>
              </div>
            </div>
          </div>
        </div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
    

<?php load_template( dirname(__FILE__) . '/inc/people-saying.php' ); ?>

<?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php' ); ?>

<?php get_footer(); ?>

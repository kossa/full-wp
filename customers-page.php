<?php 

/**
 * Template Name: Customers Page
 */

$clients = GetPosts('clients');

get_header(); ?>

<section class="banner banner-about">
  <div class="container">
    <h1>Full Circle Customers</h1>
  </div>
</section><!-- end banner -->

<section class="featured-testimonial">
  <div class="container">
    <h3>Featured Testimonial</h3>

<?php if ( $clients->have_posts() ) : while ( $clients->have_posts() ) : $clients->the_post(); ?>

      <?php if (getField('featured')): ?>
        <div class="row one-featured">
          <div class="col-sm-8">
            <blockquote>
              <?php the_content(); ?>
            </blockquote>
            <p><small><?php echo getField('client_employee_title') ?> <br><?php echo getField('client_employee_name') ?></small></p>
            <div class="clearfix"></div>
          </div>
          <div class="col-sm-4 col-md-3">
            <img src="<?php echo getImgLink('logo') ?>" alt="" class="thumb">
            <?php if (getFileLink('file')): ?>
              <a href="<?php echo getFileLink('file') ?>" class="btn btn-warning btn-block">Read the case study ›</a>
            <?php endif ?>
            
          </div>
        </div>
      <?php endif ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

  </div>
</section><!-- featured-testimonial -->


    <article id="testimonial-page">
      <div class="container">

        <?php if ( $clients->have_posts() ) : while ( $clients->have_posts() ) : $clients->the_post(); ?>

          <?php if (!getField('featured')): ?>
            <div class="row">
              <div class="col-sm-2 text-center">
                <img src="<?php echo getImgLink('logo') ?>" alt="">
                <?php echo getField('featured') ?>
              </div>
              <div class="col-sm-9">
                <blockquote>
                  <?php the_content(); ?>
                </blockquote>
                <p><small><?php echo getField('client_employee_title') ?> <br><?php echo getField('client_employee_name') ?></small></p>
              </div>
            </div>
            <hr class="sep">
          <?php endif; ?>
  
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>

      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>
    </article>



<?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php' ); ?>

<?php get_footer(); ?>

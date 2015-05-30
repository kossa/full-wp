<?php 

/**
 * Template Name: Careers Page
 */

get_header(); 

$careers = GetPosts('career', ['order'=>'ASC']);

?>

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
    


<div id="open-positions">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>Open Positions</h3>
        <div class="row">

          <?php $cat = ''; $i = 0; ?>
          <?php if ( $careers->have_posts() ) : while ( $careers->have_posts() ) : $careers->the_post(); ?>

            <?php $tmp = get_the_category()[0]->name ?>   
            
            <?php if ( $cat != '' && $cat != $tmp ): // Close old ?>
                </div><!-- col-sm-6 -->
              <?php endif ?>

              <?php if ( $cat == '' || $cat != $tmp ): // First Time ?>
                <div class="col-sm-6">
                  <p><strong>Location: <?php echo $tmp ?></strong></p>
              <?php endif ?>

              <?php $cat = ($cat != $tmp) ? $tmp : $cat; $i++ ?>

              <p><a href="#"><?php the_title(); ?></a></p>

          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
            no posts found
          <?php endif; ?>
          
          </div><!-- col-sm-6 -->
        </div><!-- row -->
      </div><!-- col-sm-8 -->
    </div><!-- row -->
  </div><!-- container -->
</div>


<?php get_footer(); ?>

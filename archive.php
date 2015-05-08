<?php
/**
 * Template Name: Blog Page
 */

get_header(); 

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
   'post_type' => 'post',
   'paged'=>$paged,
);
$wp_query = new WP_Query( $args );


?>


<section class="banner">
  <div class="container">
    <h1>The MTM Blog</h1>
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
        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <article>
          <?php if (has_post_thumbnail()): ?>
            <div class="row">
              <div class="col-md-4">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
              </div>
              <div class="col-md-8">
                <p class="date">November 15, 2014</p>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_content('',FALSE); ?>
                <br>
                <a href="<?php the_permalink(); ?>" class="btn btn-danger">Read more</a>
              </div>
            </div>
          <?php else: ?>
            <div class="row">
              <div class="col-md-12">
                <p class="date"><?php the_date(); ?></p>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_content('',FALSE); ?>
                <br>
                <a href="<?php the_permalink(); ?>" class="btn btn-danger">Read more</a>
              </div>
            </div>
          <?php endif ?>
            
          </article>

        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>

        <?php wp_pagenavi(array( 'query' => $wp_query )); ; ?>

      </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>

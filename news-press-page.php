<?php 

/**
 * Template Name: news-press Page
 */

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$args = array(
   'post_type' => 'post',
   'cat'       => 4,
   'paged'     => $paged,
);

$the_query = new WP_Query( $args );

get_header(); ?>

<section class="banner banner-about">
  <div class="container">
    <h1>Full Circle Insights News & Press</h1>
  </div>
</section><!-- end banner -->

<?php load_template( dirname(__FILE__) . '/inc/menu-abouts-page.php' ); ?>

    <div id="news-page">
      <div class="container">
        <h2 class="title"><span>News & Press</span></h2>

        <?php $currentMonth = '' ?>

        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php $tmp = date('M Y', strtotime(get_the_date())); ?>


          <?php if ( $currentMonth != '' && $currentMonth != $tmp ): // Close old ?>
            </section>
          <?php endif ?>

          <?php if ( $currentMonth == '' || $currentMonth != $tmp ): // First Time ?>
            <section>
            <h3><?php echo $tmp ?></h3>
          <?php endif ?>

          <?php $currentMonth = ($currentMonth != $tmp) ? $tmp : $currentMonth ?>
            
          <article>
            <?php load_template( dirname(__FILE__) . '/inc/category.php', false ); ?>
            <h5><?php echo get_the_date(); ?></h5>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            
            <?php echo get_the_excerpt();  ?>... 
            <a href="<?php echo the_permalink(); ?>">Read more ›</a>
          </article>

          
        <?php endwhile; ?>
          </section>
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>


        <nav>
          <ul class="pager">
            <li><?php previous_posts_link( '‹ previous page' ); ?></li>
            <li><?php next_posts_link( 'next page ›', $the_query->max_num_pages ); ?></li>
          </ul>
        </nav>


      </div>
    </div>

    
<?php get_footer(); ?>

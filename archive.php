<?php
/**
 * Template Name: Blog Page
 */

get_header(); 

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
   'post_type' => 'post',
   'paged'=>$paged,
   'category__not_in' => [4,5,6,7]
);
$wp_query = new WP_Query( $args );

?>

<section class="banner banner-blog">
  <div class="container">
    <h1>The Full Circle CRM Blog</h1>
    <h2>From Salesforce Marketers, For Salesforce Marketers</h2>
  </div>
</section><!-- end banner -->

    <div id="blog-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              <article>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php  ?>
                <ul class="list-inline article-info">
                  <li class="blogger-img"><?php echo get_avatar(get_the_author_meta('ID'), 25) ?></li>
                  <li>BY <a href="#"><?php the_author(); ?> </a></li>
                  <li>•</li>
                  <li><?php echo get_the_date(); ?></li>
                  <li>•</li>
                  <li><a href="<?php echo comment_link() ?>"><?php echo comments_number() ?></a></li>
                </ul>
                <?php echo get_the_excerpt();  ?>... 
                <a href="<?php echo the_permalink(); ?>">Read more ›</a>
              </article>
              <hr class="sep">
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>
                
            <?php wp_pagenavi(array( 'query' => $wp_query )); ; ?>

          </div>
          
              <?php get_sidebar(); ?>
        </div>
      </div>
    </div>


<?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php' ); ?>

<?php get_footer(); ?>

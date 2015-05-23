<?php
/**
 * Template Name: Blog Page
 */

get_header(); 


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

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
              <h1 class="title"><?php the_title(); ?></h1>
              <ul class="list-inline article-info">
                <li class="blogger-img"><?php echo get_avatar(get_the_author_meta('ID'), 25) ?></li>
                <li>BY <a href="#"><?php echo the_author(); ?></a></li>
                <li>•</li>
                <li><?php the_date(); ?></li>
                <li>•</li>
                <li><a href="<?php echo comment_link() ?>"><?php echo comments_number() ?></a></li>
              </ul>

              <?php the_content(); ?>

              <section class="about-author">
                <div class="row">
                  <div class="col-sm-2 text-right">
                    <?php echo get_avatar(get_the_author_meta('ID'), 50) ?>
                  </div>
                  <div class="col-sm-10">
                    <p><small>About <a href="#"><?php the_author(); ?></a></small></p>
                    <p><?php echo get_the_author_meta('description'); ?></p>
                  </div>
                </div>

              </section><!-- about-author -->
            </article>
          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
          <!-- no posts found -->
          <?php endif; ?>
            
          </div>
          
              <?php get_sidebar(); ?>
        </div>


      </div>
    </div>

    <section class="comments">
      <div class="container">
        <h3>Comments</h3>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-1">
            <form action="<?php echo bloginfo( 'url' ); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">

              <input type="hidden" name="comment_post_ID" value="<?php echo the_id(); ?>" id="comment_post_ID">
              <input type="hidden" name="comment_parent" id="comment_parent" value="0">

              <div class="row">
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="author" placeholder="NAME" required>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" name="email" placeholder="EMAIL ADDRESS" required>
                </div>
              </div>
              <input type="url" class="form-control"  name="url" placeholder="WEBSITE">
              <textarea name="comment" class="form-control" rows="6" placeholder="YOUR COMMENT"></textarea>
              <input type="submit" value="COMMENT ›" class="btn btn-warning">
            </form>
          </div>
        </div>

        <?php //var_dump(get_comments()) ?>


      </div>
    </section><!-- comments -->

<?php get_footer(); ?>

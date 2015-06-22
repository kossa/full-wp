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
                <li>BY <a href="#"><?php echo get_the_author(); ?></a></li>
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
        
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = '<example>'; // Required - Replace '<example>' with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


      </div>
    </section><!-- comments -->

<?php get_footer(); ?>

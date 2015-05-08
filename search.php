<?php get_header(); ?>


<section class="banner">
    <div class="container">
        <h1>Search Page</h1>
    </div>
</section><!-- banner -->


<!-- post -->
    

    <div id="the-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                    
                </div>
                <div class="col-sm-8">
                    <article id="search-page">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a class="btn btn-danger" href="<?php the_permalink() ?>">Read More</a>
                            </article>
                            
                        <?php endwhile; ?>
                        <!-- post navigation -->
                        <?php else: ?>
                            0 Result
                        <?php endif; ?>
                    </article>

                </div>
            </div>
        </div>
    </div>

    
<?php get_footer(); ?>

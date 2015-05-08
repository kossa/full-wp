<?php get_header() ?>

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
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $key = 0 ?>

                        <article>
                            <header>
                                <p class="date"><?php the_date(); ?></p>
                                <?php load_template( dirname(__FILE__) . '/inc/share-button.php' ); ?>
                            </header>
                            <h1 class="title-article"><?php the_title(); ?></h1>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                <?php foreach (get_post_gallery_images() as $value): ?>
                                    <div class="item <?php echo ($key==0) ? 'active' :'' ?>">
                                        <img src="<?php echo $value ?>" alt="">
                                    </div>
                                <?php $key++; endforeach ?>
                                </div>

                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                <?php for ($i = 0;$i < $key;$i++): ?>
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" <?php echo ($i == 0)? ' class="active"' : '' ?>></li>
                                <?php endfor ?>
                                </ol>

                            </div>

                            <div class="the-text">
                                <?php the_content(); ?>
                            </div>

                        </article>
                    
                    <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
    
                    <?php endif; ?>

                </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>

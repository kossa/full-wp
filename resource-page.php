<?php 

/**
 * Template Name: Resource Page
 */

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php echo getField('banner'); ?>

    <?php the_content( ); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
    

<?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php' ); ?>

<?php get_footer(); ?>

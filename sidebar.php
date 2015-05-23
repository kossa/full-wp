<div class="col-sm-4">
  <aside id="sidebar">
    <?php dynamic_sidebar( "follow-us" ); ?>
 

    <div class="bg-blue">
      <section class="subscribe">
        <h3>Subscribe by Email</h3>
        <form class="form-inline" action="<?php echo bloginfo( 'url' ) . '/wp-content/plugins/newsletter/do/subscribe.php' ?>" >
            <input type="text" name="ne" class="form-control" value="" placeholder="EMAIL ADDRESS">
            <input type="submit" class="btn btn-warning" name="" value="&rsaquo;">
        </form>
      </section><!-- subscribe -->

      <?php dynamic_sidebar( "blog-sidebar" ); ?>

    </div>
  </aside>
</div>
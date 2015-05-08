
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-4">
                <!-- <h4>Site Links</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Marketing Science Blog</a></li>
                  <li><a href="#">Ensure Opportunities Have Contact Roles</a></li>
                  <li><a href="#">Set Campaign Member Status</a></li>
                </ul> -->
                <?php dynamic_sidebar( 'footer-01' ); ?>
              </div>
              <div class="col-sm-4">
                <?php dynamic_sidebar( 'footer-02' ); ?>
              </div>
              <div class="col-sm-4">
                <?php dynamic_sidebar( 'footer-03' ); ?>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="row">
              <div class="col-sm-3">
                <h4></h4>
                
                <?php dynamic_sidebar( 'footer-04' ); ?>
              </div>
              <div class="col-sm-3">
                <?php dynamic_sidebar( 'footer-05' ); ?>
              </div>
              <div class="col-sm-6">
                <?php dynamic_sidebar( 'footer-06' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
    <script src="<?php echo bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo( 'template_url' ); ?>/js/jquery.carouFredSel.js"></script>
    <script src="<?php echo bloginfo( 'template_url' ); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
    
  </body>
</html>

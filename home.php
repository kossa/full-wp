<?php 

  get_header();

?>
    <section class="banner">
      <div class="container">
        <h1>Bulletproof your marketing data</h1>
        <h3>Rock solid campaign performance metrics <br> everyone can agree on – right in Salesforce.</h3>
        <a href="#" class="btn btn-warning">watch a demo ›</a>
      </div>
    </section><!-- end banner -->

    <section class="what-we-do">
      <div class="container">
        <h2><span>What we do</span></h2>
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-3 text-center">
                <img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/05/img-01.png" alt="">
              </div>
              <div class="col-sm-9">
                <h3>Response Management</h3>
                <p>Drive revenue with complete visibility into your critical marketing data.</p>
                <a href="#" class="btn btn-primary">Learn more ›</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-3 text-center">
                <img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/05/img-02.png" alt="">
              </div>
              <div class="col-sm-9">
                <h3>Campaign Influence</h3>
                <p>The campaign performance metrics you need to plan with confidence.</p>
                <a href="#" class="btn btn-primary">Learn more ›</a>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="leading-marketing">
        <div class="container">
          <h3>But that’s not all.</h3>
          <p>Learn more about the leading Marketing Performance Management applications on the Salesforce1 Platform.</p>
          <div class="text-center"><a href="#" class="btn btn-primary">Check out our full product family ›</a></div>
        </div>
      </div>
    </section><!-- end what-we-do -->

    <section class="learn-marketing-data">
      <div class="container">
        <h2><span>Learn From the Marketing Data Experts</span></h2>

        <div class="row">
          <div class="col-sm-4">
            <div class="one-section">
              <h5><i class="fa fa-book"></i> <br>White paper: </h5>
              <h4>Data-Driven Marketing is Here to Stay—Campaign influence for Salesforce Marketers</h4>
              <a href="#" class="btn btn-primary">download now ›</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="one-section">
              <h5><i class="fa fa-play-circle"></i> <br>Webinar: </h5>
              <h4>Align Sales and Marketing with Funnel Metrics in Salesforce </h4>
              <a href="#" class="btn btn-primary">watch now ›</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="one-section">
              <h5><i class="fa fa-book"></i> <br>White paper: </h5>
              <h4>Best Practices in Designing a Lead Lifecycle in Salesforce</h4>
              <a href="#" class="btn btn-primary">get it now ›</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- learn-marketing-data -->

    <?php load_template( dirname(__FILE__) . '/inc/sales-force.php'); ?>

    <?php load_template( dirname(__FILE__) . '/inc/data-driven.php'); ?>

    <?php load_template( dirname(__FILE__) . '/inc/what-we-can-do.php'); ?>

<?php 

  get_footer();

?>
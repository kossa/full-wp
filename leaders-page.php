<?php 

/**
 * Template Name: Leader Page
 */

$leaders = GetPosts('leader', ['orderby' => 'cat', 'order'=>'DESC']);

get_header(); ?>

<section class="banner banner-about">
  <div class="container">
    <h1>Full Circle Insights</h1>
  </div>
</section><!-- end banner -->

<?php load_template( dirname(__FILE__) . '/inc/menu-abouts-page.php' ); ?>

    <div id="leadership-page">

      <h2 class="title"><span>Leadership</span></h2>

      <?php $cat = ''; $i = 0; ?>
      <?php if ( $leaders->have_posts() ) : while ( $leaders->have_posts() ) : $leaders->the_post(); ?>

        <?php $tmp = get_the_category()[0]->name ?>   
        
        <?php if ( $cat != '' && $cat != $tmp ): // Close old ?>
              </div><!-- container -->
            </div><!-- gray-bg -->
          <?php endif ?>

          <?php if ( $cat == '' || $cat != $tmp ): // First Time ?>
            <div class="<?php echo ($i%2==0) ? 'gray-bg' : 'white-bg' ?>">
              <div class="container">
                <h3><?php echo $tmp ?></h3>
          <?php endif ?>

          <?php $cat = ($cat != $tmp) ? $tmp : $cat; $i++ ?>

          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="<?php echo getImgLink('image') ?>" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4>
                  <span class="name"><?php the_title(); ?></span>
                  <br>
                  <?php echo getField('profession') ?>
                </h4>
                <?php the_content(); ?>
              </div>
            </div>
          </article>

      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
        no posts found
      <?php endif; ?>
<!--
      <div class="gray-bg">
        <div class="container">
          <h2 class="title"><span>Leadership</span></h2>
          
          <h3>Management</h3>
        
          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-46.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Bonnie Crater</span> <br>President & CEO</h4>
                <p>Prior to joining Full Circle CRM, Bonnie Crater was vice president of marketing for VoiceObjects and Realization. Bonnie also held vice president and senior vice president roles at Genesys, Netscape, Network Computer Inc., salesforce.com, and Stratify. A ten-year veteran of Oracle Corporation and its various subsidiaries, Bonnie was vice president, Compaq Products Division and vice president, Workgroup Products Division. Bonnie was also president and CEO of Zelerate, a provider of open source e-commerce solutions. In 2000, Bonnie was named one of the “Top 20 Female Executives in Silicon Valley” by San Jose Magazine. Bonnie holds a B.A. in biology from Princeton University.</p>
              </div>
            </div>
          </article>
        
          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-47.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Dan Appleman</span> <br>Chief Technology Officer</h4>
                <p>As Full Circle CRM’s CTO, Dan Appleman brings a broad technology experience to our customers. Having supported over 30 Salesforce implementations with technology solutions, Dan is also the founder of Desaware, Inc. a developer of add-on products for Microsoft Visual Studio and co-founder of Apress publishing. In addition, Dan is the author of numerous popular technology books including Advanced Apex Programming for Salesforce.com and Force.com, Moving to VB .NET: Strategies, Concepts and Code, and Dan Appleman’s Visual Basic Programmer’s Guide to the Win32 API. You can often find Dan on the speaker circuit providing new insights into cloud computing and other technologies.</p>
              </div>
            </div>
          </article>
        
          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-48.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Roan Bear</span> <br>Vice President, Customer Success</h4>
                <p>Roan Bear brings nearly 20 years experience in advising companies on business and marketing strategies as well as technology solutions. An expert in Salesforce and a former marketing executive, Roan understands how to leverage technology to facilitate marketing requirements from advertising to lead generation to analytics to automation and reporting. Roan is a Certified Salesforce.com Consultant and has experience with a wide range of companies—from large to mid-sized to startups—in many industries, including technology, healthcare, military, e-commerce, non-profit, and services.</p>
              </div>
            </div>
          </article>
        </div>
      </div>

      <div class="white-bg">
        <div class="container">

          <h3>Executive Board</h3>

          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-49.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Jodi Sherman Jahic</span></h4>
                <p>Jodi Sherman Jahic is a co-founder and Managing Partner at Aligned Partners, an early-stage technology venture firm focused on capital efficiency and clear founder-investor alignment. She has been investing in early-stage technology companies for over 15 years. Previously, Jodi was a Kauffman Fellow at Battery Ventures, led the wireless sector team at Voyager Capital, managed technology projects at Accenture, and co-founded three startups in North America and Europe. </p>
                <p>Jodi holds an STS/Physics degree from Pomona College and an MBA from the Kellogg School of Management at Northwestern University. She is a frequent industry speaker and co-author of a book on venture capital. Jodi lives in San Francisco with her husband and two daughters.</p>
              </div>
            </div>
          </article>

          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-50.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Brian Owen</span></h4>
                <p>Brian D. Owen has more than 30 years of senior operating experience with a particular focus on achieving growth and liquidity for VC-backed B2B software companies. Currently CEO of Cloud Concepts and a partner at Masthead Venture Partners, Brian was CEO of Decalog, NV, a venture-backed financial management software company that he successfully merged with SunGard (NYSE: SDS). Brian was also CEO of MapInfo where he led the company’s successful IPO. Prior to that, Brian held senior management positions with Computer Associates, Oracle Corporation and Digital Equipment Corporation. He is currently a member of the Board of Directors at both Centric Software and CloudTP. Previously he served on the Board of Directors or as a Board Advisor to Raptor Systems (Nasdaq: RAPT, Sold to Symantec), Nuron (sold to Intel), Nexaweb, WorldWide Packets (Sold to Ciena), and AEP Networks (Sold to Ultra Electronics). Brian has an MBA degree from the Wharton School and a BS degree in Mathematics from Boston College. </p>
              </div>
            </div>
          </article>

          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-46.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Bonnie Crater</span></h4>
                <p>Prior to joining Full Circle CRM, Bonnie Crater was vice president of marketing for VoiceObjects and Realization. Bonnie also held vice president and senior vice president roles at Genesys, Netscape, Network Computer Inc., salesforce.com, and Stratify. A ten-year veteran of Oracle Corporation and its various subsidiaries, Bonnie was vice president, Compaq Products Division and vice president, Workgroup Products Division. Bonnie was also president and CEO of Zelerate, a provider of open source e-commerce solutions. In 2000, Bonnie was named one of the “Top 20 Female Executives in Silicon Valley” by San Jose Magazine. Bonnie holds a B.A. in biology from Princeton University. </p>
              </div>
            </div>
          </article>
          
        </div>
      </div>

      <div class="gray-bg">
        <div class="container">
        
          <h3>Advisors</h3>
        
          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-52.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Judy Loehr</span></h4>
                <p>Judy Loehr is one of the world’s leading consultants in B2B marketing for SaaS companies. As an early employee at salesforce.com, Judy was one of the company’s first product managers where she designed and launched the original Service Cloud product, the Campaign features within the Salesforce Marketing Cloud, and the Salesforce AppExchange. While at salesforce.com, Judy held Director and Senior Director positions in Product Management, Integrated Marketing and on the AppExchange teams. Since her time at salesforce.com, Judy has been acting CMO for top startups including Zuora, AppExtremes and ServiceMax and has applied her product launch, packaging and messaging expertise to over a dozen other SaaS companies. </p>
              </div>
            </div>
          </article>
        
          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-53.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Jennifer Pockell-Wilson</span></h4>
                <p>Jen Pockell-Wilson is a connected and energetic leader in the B2B marketing arena. Currently as Vice President of Marketing and Demand Operations at Demandbase, Jen applies her passion for aligning sales and marketing toward common goals through the coordination of language, systems and process. Before joining Demandbase, Jen was the Senior Director of Global Marketing Operations at Polycom and has also held positions at Hyperion, PeopleSoft, Ernst & Young LLP and Lotus Development. Jennifer earned her M.B.A. in Marketing from the Graduate School of Management at the University of California at Davis and her B.A. from Lewis & Clark College. </p>
              </div>
            </div>
          </article>
        
          <article>
            <div class="row">
              <div class="col-sm-2">
                <div class="thumb">
                  <img src="http://kossa.local/full-wp/wp-content/uploads/2015/05/img-54.png" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <h4><span class="name">Andrea Wildt</span></h4>
                <p>As former Vice President of Products, Andrea Wildt led the product design efforts for Full Circle CRM. Prior to that, she was Director of Product Management for the Salesforce Marketing Cloud. Now as an independent consultant, Andrea has worked with over 30 organizations to define, design, and implement marketing and sales business processes. Andrea earned a BFA from the Kansas City Art Institute and an MBA in Marketing from Texas A&M University. </p>
              </div>
            </div>
          </article>
        </div>
      </div>
-->
    </div><!-- leadership-page -->

<?php get_footer(); ?>

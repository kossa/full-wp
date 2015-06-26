<?php 

$clients = GetPosts('clients');

 ?>

<section class="data-driven">
  <div class="container">
    <div class="text-center">
      <h2><span>Data-driven Marketers</span></h2>
      <div class="logos">
        <ul class="list-inline" id="foo0">
          <?php if ( $clients->have_posts() ) : while ( $clients->have_posts() ) : $clients->the_post(); ?>
            <li><img src="<?php echo getImgLink('logo') ?>" alt=""></li>
          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
          no posts found
          <?php endif; ?>

        </ul>

        <script>
        jQuery(document).ready(function($) {
          (function($){
              $('#foo0').carouFredSel({
                responsive: true,
                width: '100%',
                scroll: {
                  duration    : 2000,
                  items            : 1,
                },
                items: {
                  visible: {
                    min: 2,
                    max: 6
                  }
                }
              });
            })(jQuery);
        });
        </script>


      </div>
    </div>

    <div id="foo1">
      <?php if ( $clients->have_posts() ) : while ( $clients->have_posts() ) : $clients->the_post(); ?>
      
        <div class="row">
          <div class="col-lg-8 col-md-offset-2">
            <blockquote>
              <?php echo get_the_content(); ?>
            </blockquote>
            <img src="<?php echo getImgLink('logo') ?>" alt="" class="pull-left">
            <p><small><?php echo getField('client_employee_name') ?> <br> <?php echo getField('client_employee_title') ?></small></p>
            <div class="clearfix"></div>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      no posts found
      <?php endif; ?>
    </div>

    <script>
    jQuery(document).ready(function($) {
      (function($){
          $('#foo1').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: {
              duration    : 2000,
            },
            items: {
              visible: {
                min: 1,
                max: 1
              }
            }
          });
        })(jQuery);
    });
    </script>

  </div>
</section>

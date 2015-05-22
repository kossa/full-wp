<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.png" />

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <header id="header">
      <section id="top">
        <div class="container">
          <ul class="list-inline">
            <?php wp_nav_menu( [
                  'menu'       => 'Top Menu',
                  'container'  => '',
                  'items_wrap' => '%3$s'
                ]); ?>
            <!-- <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Contact Us</a></li> -->
          </ul>
        </div>
      </section>

      <div class="navbar" role="navigation">
        <div class="container"><div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/05/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <?php wp_nav_menu( [
                  'menu'       => 'Main Menu',
                  'theme_location' => 'primary', 
                  'container'  => '',
                  'items_wrap' => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>'
                ]); ?>
            </ul>
          </div><!--/.nav-collapse --></div>
      </div>
    </header><!-- end header -->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="stylesheets/screen.css">
  </head>
  <body>
    <div class="page">
      <header>
        <?php include 'partials/header.php' ?>
      </header> <!-- end header -->
      <nav class="main-navigation">
        <?php include 'partials/main-navigation.php' ?>
      </nav> <!-- end nav -->

      <section class="hero">
       <?php include 'partials/hero-slider.php' ?>
       <?php include 'partials/ad-block.php' ?>

      </section> <!-- end .hero -->

      <section class="content">
        <div class="main-content">
          <?php include 'partials/browse-categories.php' ?>
          <?php include 'partials/recent-articles.php' ?>
          <?php include 'partials/popular-videos.php' ?>
        </div> <!-- end .main-content -->
        <div class="secondary-content">
          <?php include 'partials/newsletter-signup.php' ?>
          <?php include 'partials/current-contests.php' ?>
          <?php include 'partials/twitter-widget.php' ?>
        </div> <!-- end .secondary-content -->
      </section> <!-- end .content -->

      <footer>
        <?php include 'partials/privacy-terms-copyright.php' ?>
        <?php include 'partials/social-links.php' ?>
      </footer> <!-- end footer -->



    </div>  <!-- end .page -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package designxnine
 */
?>

  <footer>
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <h2>Creative Directors</h2>
        <h4>Janice Troutman</h4>
        <h4>John Morrison</h4>
      </div>
      <div class="col-xs-12 col-sm-6">

      </div>
    </div>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>

  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>
</body>
</html>
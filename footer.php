<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package designxnine
 */
?>

  <footer id="contact">
    <div class="container">
      <div class="col-xs-12 col-sm-6">
        <h2>Creative Directors</h2>
        <h5>Janice Troutman</h5>
        <p><a href="mailto:jmorrison@uakron.edu">jmorrison@uakron.edu</a></p>
        <h5>John Morrison</h5>
        <p><a href="mailto:jstrout@uakron.edu">jstrout@uakron.edu</a></p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <h2>Address</h2>
        <p>Myers School of Art</p>
        <p>150 E Exchange St</p>
        <p>Akron, OH 44325-7801</p>
      </div>
    </div>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.bxslider.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.localScroll.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.scrollTo.min.js"></script>

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
  <?php wp_footer(); ?>
</body>
</html>
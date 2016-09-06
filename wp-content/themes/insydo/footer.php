<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insydo
 */

?>
</div><!-- /.main wrapper -->

<!-- FOOTER -->     
<footer class="clearfix">
    <div class="container-fluid">
        <div class="col-md-4 col-md-offset-4">
          <div class="icon-title"><h3 class="text-center">JOIN US ON</h3></div>
           <div class="icon-collection">
                <div class="social-icon"><i class="fa fa-facebook"></i></div>
                <div class="social-icon"><i class="fa fa-twitter"></i></div>
                <div class="social-icon"><i class="fa fa-youtube-play"></i></div>
            </div><!-- /.icon-collection -->
        </div>
    </div>
</footer>  	

<?php wp_footer(); ?>

  <script async src="https://www.youtube.com/iframe_api"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>


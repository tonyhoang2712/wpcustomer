<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customer
 */

$options = get_option('my_framework'); // unique id of the framework
?>

<!-- Foter -->
<footer class="page-section bg-dark footer pb-60">
    <div class="relative container">
        <!-- Footer Logo -->
        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
            <a href="#top"><img src="<?php echo $options['opt-upload-footer-logo']; ?>" width="78" height="36" alt=""/></a>
        </div>
        <!-- End Footer Logo -->
        <!-- Social Links -->
        <div class="footer-social-links mb-60 mb-xs-60">
            <?php echo $options['opt-code-editor-share'] ?>
        </div>
        <!-- End Social Links -->
        <!-- Footer Text -->
        <div class="footer-text">
            <!-- Copyright -->
            <div class="footer-copy font-alt">
                <?php echo $options['opt-code-editor-copy-right'] ?>
                <div class="musicBtn"></div>
            </div>
            <!-- End Copyright -->
        </div>
        <!-- End Footer Text -->
    </div>
    <!-- Top Link -->
    <div class="local-scroll"><a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a></div>
    <!-- End Top Link -->
    <audio id="Audio" controls loop autoplay="autoplay">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/music.mp3" type="audio/mpeg">
    </audio>
</footer>
<!-- End Foter -->
</div>

<!--script-->
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.localScroll.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.viewport.mini.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simple-text-rotator.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/all.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countTo.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/SmoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/icon.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/portfolio.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/music.js"></script>
<!--end script-->
<?php wp_footer(); ?>

</body>
</html>

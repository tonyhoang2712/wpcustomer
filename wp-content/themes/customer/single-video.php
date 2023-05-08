<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package customer
 */

get_header();
$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);

?>
    <section class="home-section bg-dark-alfa-90 parallax-2" data-background="<?php echo $src[0] ?>"
             id="home">
        <div class="js-height-full container">
            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <div class="video">
                        <iframe width="640" height="360" src="<?php echo get_field('video_post_type_link') ?>"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
            <!-- Scroll Down -->
            <div class="local-scroll">
                <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
        </div>
    </section>
    <section class="page-section" id="about">
        <div class="container relative">
        <?php echo get_the_content() ?>
        </div>
    </section>

<?php
get_footer();

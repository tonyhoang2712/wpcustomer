<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package customer
 */

get_header();

?>
    <!-- Page Wrap -->
    <?php
        get_template_part( 'template-parts/home', 'banner' );
        get_template_part( 'template-parts/home', 'about' );
        get_template_part( 'template-parts/home', 'portfolio-video' );
    ?>

    <!-- <hr class="mt-0 mb-0" /> -->
    <!-- End Divider -->
    <?php
    get_template_part( 'template-parts/home', 'portfolio' );
    ?>
    <!-- Call Action Section -->
    <section class="small-section">
        <div class="container relative">
            <div class="align-center">
                <div class="local-scroll"><a href="<?php echo get_site_url() ?>/portfolio" class="btn btn-mod btn-medium btn-round mb-xs-10"><?php esc_html_e( 'See more', 'customer' ); ?></a>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_template_part( 'template-parts/home', 'portfolio-category' );
    ?>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container relative">
            <h2 class="section-title font-alt mb-30 mb-sm-40"><?php esc_html_e( 'Contact Us', 'customer' ); ?> </h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <!-- Phone -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-phone"></i></div>
                                <div class="ci-title font-alt"> Call Us</div>
                                <div class="ci-text"> +886-4-2251-7855</div>
                            </div>
                        </div>
                        <!-- End Phone -->
                        <!-- Address -->
                        <div class="col-sm-6 col-lg-5 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-map-marker"></i></div>
                                <div class="ci-title font-alt"> Address</div>
                                <div class="ci-text"> 台中市西屯區市政北一路77號9樓之10</div>
                            </div>
                        </div>
                        <!-- End Address -->
                        <!-- Email -->
                        <div class="col-sm-6 col-lg-3 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-envelope"></i></div>
                                <div class="ci-title font-alt"> Email</div>
                                <div class="ci-text"><a href="mailto:shangyih.tc@gmail.com">shangyih.tc@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Email -->
                    </div>
                </div>
            </div>
            <div class="align-center">
                <h2 class="section-title font-alt mb-70 mb-sm-40"></h2>
                <div><a href="<?php echo get_site_url() ?>/contact" class="btn btn-mod btn-medium btn-round mb-70 mb-sm-40"><?php esc_html_e( 'Consult Now', 'customer' ); ?></a></div>
                <h5 class="widget-title font-alt"><?php esc_html_e( 'Share', 'customer' ); ?>：</h5>
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

<?php
get_footer();

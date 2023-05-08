<?php
/**
 * Template Name: Director
 */

get_header();
?>
    <!-- Home Section -->
    <section class="page-section bg-dark bg-dark-alfa-70" data-background="img/director.jpg" id="home">
        <div class="relative container">
            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <div class="row mt-60 mt-xs-20">
                        <div class="col-sm-6 col-lg-5 align-center pt-20 pt-lg-0 mb-xs-30">
                            <?php echo get_the_content(); ?>
                        </div>
                        <div class="col-sm-6 col-lg-offset-1">
                            <?php
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                            ?>
                            <img src="<?php echo $src[0]; ?>" alt="<?php echo get_the_title() ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
        </div>
    </section>
    <!-- End Home Section -->

    <!-- Skills Section -->
    <section class="page-section" id="skills">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="section-title font-alt align-left mt-0 mb-70 mb-sm-40"><?php esc_html_e('Director’s Words', 'customer'); ?></h2>
                </div>
                <div class="col-sm-10">
                    <div class="section-text mb-50 mb-xs-30">
                        <?php echo get_field('director_page_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Skills Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
    <!-- Portfolio Section -->
    <section class="page-section" id="portfolio">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="section-title font-alt align-left mt-0 mb-70 mb-sm-40"><?php esc_html_e('Latest works', 'customer'); ?></h2>
                </div>
                <div class="col-sm-10">
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
                        <?php
                        $args = array(
                            'posts_per_page' => 3, // we need only the latest post, so get that post only
                            'category_name' => 'portfolio',
                        );
                        $q = new WP_Query($args);

                        if ($q->have_posts()) {
                            while ($q->have_posts()) {
                                $q->the_post();
                                ?>
                                <!-- Work Item (External Page) -->
                                <li class="work-item mix design photography">
                                    <a href="<?php echo get_the_permalink() ?>" class="work-ext-link">
                                        <div class="work-img">
                                            <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail', false); ?>
                                            <img class="work-img"
                                                 src="<?php echo $src[0]; ?>"
                                                 alt="<?php echo get_the_title() ?>"/>
                                        </div>
                                        <div class="work-intro">
                                            <h3 class="work-title"><?php echo get_the_title() ?></h3>
                                            <div class="work-descr">
                                                <?php echo substr(get_the_excerpt(), 0, 50); ?>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- End Work Item -->
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </ul>
                    <!-- End Works Grid -->
                    <div class="align-right mt-20">
                        <a href="<?php echo get_site_url() ?>/portfolio"
                           class="btn btn-mod btn-gray btn-small btn-circle"><?php esc_html_e('Latest works', 'customer'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="section-title font-alt align-left mt-0 mb-70 mb-sm-40"><?php esc_html_e( 'Contact', 'customer' ); ?></h2>
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <!-- Phone -->
                        <div class="col-sm-4 col-lg-4 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-phone"></i></div>
                                <div class="ci-title font-alt"> Call Us</div>
                                <div class="ci-text"> +886-2-2567-7757</div>
                            </div>
                        </div>
                        <!-- End Phone -->
                        <!-- Address -->
                        <div class="col-sm-4 col-lg-5 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-map-marker"></i></div>
                                <div class="ci-title font-alt"> Address</div>
                                <div class="ci-text"> 台北市中山北路2段39巷10號3樓</div>
                            </div>
                        </div>
                        <!-- End Address -->
                        <!-- Email -->
                        <div class="col-sm-3 col-lg-3 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-envelope"></i></div>
                                <div class="ci-title font-alt"> Email</div>
                                <div class="ci-text"><a href="mailto:shang.tpe@gmail.com">shang.tpe@gmail.com</a></div>
                            </div>
                        </div>
                        <!-- End Email -->
                    </div>
                    <div class="row">
                        <!-- Phone -->
                        <div class="col-sm-4 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-phone"></i></div>
                                <div class="ci-title font-alt"> Call Us</div>
                                <div class="ci-text"> +886-4-2251-7855</div>
                            </div>
                        </div>
                        <!-- End Phone -->
                        <!-- Address -->
                        <div class="col-sm-4 col-lg-5 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon"><i class="fa fa-map-marker"></i></div>
                                <div class="ci-title font-alt"> Address</div>
                                <div class="ci-text"> 台中市西屯區市政北一路77號9樓之10</div>
                            </div>
                        </div>
                        <!-- End Address -->
                        <!-- Email -->
                        <div class="col-sm-3 col-lg-3 pt-20 pb-20 pb-xs-0">
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
                <div><a href="contact.html" class="btn btn-mod btn-medium btn-round mb-70 mb-sm-40">立 即 諮 詢</a></div>
                <h5 class="widget-title font-alt">分享給其他人：</h5>
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

<?php
get_footer();

<div class="section dark d-flex home-video" style="height: 540px;margin: 0;">
    <div class="vertical-middle">
        <div class="container-fluid center">
            <div class="slider-caption slider-caption-center">
                <h2 data-animate="fadeInUp"
                    class="section-title font-alt align-center mb-40 mb-sm-40 fadeInUp animated">
                    <?php esc_html_e( 'Portfolio Videos', 'customer' ); ?>
                </h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-text align-center mb-30 mb-xs-20 d-none d-sm-block fadeInUp animated"
                             data-animate="fadeInUp" data-delay="200">
                            <?php esc_html_e( 'Home Portfolio Videos', 'customer' ); ?>
                        </div>
                        <div><a href="<?php echo get_site_url() ?>/video" class="btn btn-mod btn-gray btn-round"> <?php esc_html_e( 'Video', 'customer' ); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-wrap">
        <video poster="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-61.jpg" preload="none" loop="" autoplay="" muted="" playsinline>
            <source src="<?php echo get_field('portfolio_videos') ?>" type="video/mp4">
        </video>
        <div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
    </div>
</div>
<!-- Divider -->
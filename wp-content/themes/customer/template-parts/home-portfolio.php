<!-- Portfolio Section -->
<section class="page-section pb-0" bg-gray-lighter id="portfolio">
    <div class="relative">
        <h2 class="section-title font-alt mb-10 mb-sm-30"><?php esc_html_e('Latest Works', 'customer'); ?></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-text align-center mb-40 mb-xs-30"><?php esc_html_e('ShangYih Latest Works', 'customer'); ?></div>
                </div>
            </div>
        </div>
        <!-- Works Grid -->
        <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
            <!-- Work Item (External Page) -->
            <?php
            $latestWorks = get_field('latest_works');
            $arr = array($latestWorks[0]['select'], $latestWorks[1]['select'], $latestWorks[2]['select']);
            $args = array(
                'post_type' => array('post'),
                'orderby' => 'ASC',
                'post__in' => $arr
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>

                <li class="work-item">
                    <a href="<?php echo get_the_permalink() ?>">
                        <div class="work-img">
                            <img class="work-img" style="max-height: 308px"
                                 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?>"
                                 alt="<?php echo get_the_title(); ?>"/>
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title"><strong><?php echo get_the_title() ?></strong></h3>
                        </div>
                    </a>
                    <div class="section-text align-center mb-40 mb-xs-30"></div>
                </li>
                <?php
            }
            wp_reset_postdata();
            ?>

        </ul>
        <!-- End Works Grid -->
    </div>
</section>
<!-- End Portfolio Section -->
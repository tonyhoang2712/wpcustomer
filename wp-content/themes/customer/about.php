<?php
/**
 * Template Name: About
 */

get_header();
?>
    <style>
        #about{
            margin-top: 80px;
        }
    </style>
    <!-- Head Section -->
    <section id="about" class="small-section bg-gray-lighter pt-30 pb-30">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-10 mb-xs-0"><?php echo get_the_title() ?></h1>
                    <div class="hs-line-4 font-alt black"><?php echo get_the_content() ?></div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs font-alt align-right">
                        <a href="<?php echo home_url() ?>"><?php esc_html_e('Home', 'customer'); ?></a>&nbsp;/&nbsp;<a
                                href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
?>
    <section class="page-section pt-70 pb-70 banner-section"
             data-background="<?php echo $src[0] ?>">
        <div class="container relative">
            <h2 class="section-title font-alt mb-30 mb-sm-40 white"><?php esc_html_e('About Us', 'customer'); ?></h2>
            <div class="row">
                <!-- Col -->
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xxs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs animate" id="myTabs">
                            <li class="active"><a href="#mini-one"><?php esc_html_e('Design Spirit', 'customer'); ?></a>
                            </li>
                            <li><a href="#mini-two"><?php esc_html_e('Management Concept', 'customer'); ?></a></li>
                            <li><a href="#mini-three"><?php esc_html_e('Design Style', 'customer'); ?></a></li>
                        </ul>
                    </div>
                    <div class="tab-content tpl-minimal-tabs-cont section-text white">
                        <?php
                        $contents = get_field('about_company');
                        ?>

                        <div class="tab-pane fade in active" id="mini-one">
                            <div style="max-width:770px; margin:0 auto;">
                                <?php echo $contents[0]['description'] ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mini-two">
                            <div style="max-width:770px; margin:0 auto;">
                                <?php echo $contents[1]['description'] ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mini-three">
                            <div style="max-width:770px; margin:0 auto;">
                                <?php echo $contents[2]['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Story -->
        </div>
    </section>
    <hr class="mt-0 mb-0"/>
    <section class="page-section" id="about">
        <div class="container relative">
            <h2 class="section-title font-alt mb-30 mb-sm-30">
                <?php esc_html_e('Design Team', 'customer'); ?>
            </h2>
            <?php
            $aboutPersonnel = get_field('about_personnel');
            foreach ($aboutPersonnel as $value) { ?>
                <div class="row multi-columns-row">

                    <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp">
                        <div class="team-item">
                            <div class="team-item-image">
                                <div class="team-item-detail">
                                    <h4 class="font-alt normal"></h4>
                                </div>
                            </div>
                            <div class="team-item-descr font-alt">
                                <div class="team-item-name"
                                     style="font-weight: bold; text-align: right; font-size: 2rem; word-wrap: break-word;">
                                    <?php echo $value['department'] ?>
                                </div>
                                <div class="team-item-role"></div>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($value['group'] as $key => $item) {
                        if (($key + 1) % 4 == 0) { ?>
                            <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp">
                                <div class="team-item">
                                    <div class="team-item-image">
                                        <div class="team-item-detail">
                                            <h4 class="font-alt normal"></h4>
                                        </div>
                                    </div>
                                    <div class="team-item-descr font-alt">
                                        <div class="team-item-name"></div>
                                        <div class="team-item-role"></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" <?php if ($key == 1) echo 'data-wow-delay="0.1s"';
                            if ($key == 2) echo 'data-wow-delay="0.2s"' ?> >
                                <div class="team-item">
                                    <div class="team-item-image"><img
                                                src="<?php echo $item['image']['url'] ?>"
                                                alt="<?php echo $item['image']['title'] ?>"/>
                                        <div class="team-item-detail">
                                            <h4 class="font-alt normal"></h4>
                                        </div>
                                    </div>
                                    <div class="team-item-descr font-alt">
                                        <?php echo $item['position'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <!-- End Section -->


    <!-- Call Action Section -->
    <section class="small-section bg-dark">
        <div class="container relative">
            <div class="align-center">
                <h3 class="banner-heading font-alt">Want to work with us?</h3>
                <div>
                    <a href="#"
                       target="_blank" class="btn btn-mod btn-w btn-medium btn-round">Join Now</a></div>
            </div>
        </div>
    </section>
    <!-- End Call Action Section -->

    <script type="text/javascript">
        $(function () {
            $('#myTabs a').hover(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        })
    </script>

<?php
get_footer();

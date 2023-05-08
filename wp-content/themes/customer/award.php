<?php
/**
 * Template Name: Award
 */

get_header();
?>
    <style>
        #award{
            margin-top: 80px;
        }
    </style>
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/assets/css/slicknav.min.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/award.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/portfolio.css">

    <!-- Head Section -->
    <section id="award" class="small-section bg-gray-lighter pt-30 pb-30">
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
    <!-- End Head Section -->

    <!-- Story Section -->
    <section class="page-section" id="start">
        <div class="container relative">
            <?php
            $awardPage = get_field('award_page');
            if ($awardPage) {
                foreach ($awardPage as $key => $value) {
                    ?>
                    <div class="award-wrap">
                        <div class="award-title"><h2><?php echo $value['title']; ?></h2></div>
                        <div class="award-content">
                            <div class="award-img">
                                <ul>
                                    <?php foreach ($value['icon'] as $icon) { ?>
                                        <li>
                                            <img src="<?php echo $icon['image'] ?>"
                                                 alt=""></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="award-info">
                                <?php echo $value['description']; ?>

                                <div class="award-btn">
                                    <ul>
                                        <li>
                                            <a onclick="setPhoto('<?php echo getImageArrayAssociative($value['group_image']) ?>', '<?php echo $value['title'] ?>')"
                                               class="btn btn-mod btn-gray btn-round"
                                               target="_blank" id="aw-btn"><?php esc_html_e('View Work', 'customer'); ?></a>
                                        </li>
                                        <li><a href="<?php $value['video'] ?>"
                                               class="btn btn-mod btn-gray btn-round"><?php esc_html_e('Video', 'customer'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }

            }
            ?>


            <div class="align-center">
                <h2 class="section-title font-alt mb-70 mb-sm-40"></h2>
                <div>
                    <a href="<?php echo get_site_url() ?>/contact" class="btn btn-mod btn-medium btn-round mb-xs-10">
                        <?php esc_html_e('Contact', 'customer'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Story Section -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>


    <script>
        $("body").click(function (e) {
            if ($(e.target).hasClass('modal-open')) {

            } else if (window.orientation == 90 || window.orientation == -90) {
//ipad、iphone竖屏；Andriod横屏
                $('.slick-slide').addClass('h-mobile').removeClass('v-mobile');
                $('#myModal').addClass('h-mobile').removeClass('v-mobile');
                var orientation = 'landscape';
// return false;
            } else if (window.orientation == 0 || window.orientation == 180) {
//ipad、iphone横屏；Andriod竖屏
                $('.slick-slide').addClass('v-mobile').removeClass('h-mobile');
                $('#myModal').addClass('v-mobile').removeClass('h-mobile');

                orientation = 'portrait';
// return false;
            }
        });
        $(window).on("orientationchange", function () {
            if (window.orientation == 0) // Portrait
            {
                $('.slick-slide').addClass('v-mobile').removeClass('h-mobile');
                $('#myModal').addClass('v-mobile').removeClass('h-mobile');
            } else // Landscape
            {
                $('.slick-slide').addClass('h-mobile').removeClass('v-mobile');
                $('#myModal').addClass('h-mobile').removeClass('v-mobile');
            }
        });
    </script>

<?php
get_footer();

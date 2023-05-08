<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package customer
 */

get_header();

$parent = get_category(get_query_var('cat'));
?>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/video-js.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/videojs-ie8.min.js"></script>
    <section class="home-section">
        <style>
            #my-video {
                width: 100%;
            }

            .vjs-big-play-button {
                display: none !important;
            }

            .video-js.vjs-static-controls.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
                visibility: visible;
            }

            .video-js.vjs-static-controls .vjs-tech {
                height: auto;
                height: calc(100% - 30px);
            }
        </style>
        <video id="my-video" class="video-js vjs-static-controls vjs-fluid"
               poster="<?php echo get_field('category_image') ?>"
               data-setup='{"controls": true, "autoplay": true, "preload": "auto", "muted": true}' autoplay>
            <source src="<?php echo get_field('category_video') ?>" type="video/mp4"/>
        </video>
        <div class="local-scroll">
            <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
        </div>
    </section>
    <section class="small-section bg-dark pt-30 pb-30">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <?php echo get_field('category_desc', $parent) ?>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs font-alt align-right">
                        <a href="<?php echo home_url() ?>"><?php esc_html_e('Home', 'customer'); ?></a>&nbsp;/&nbsp;<a
                                href="<?php echo get_category_link($parent->term_id); ?>"><?php echo $parent->name ?></a>&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section pb-0 pt-0">
        <div class="relative">
            <!-- Works Grid -->
            <ul class="works-grid clearfix font-alt hover-white" id="work-grid">
                <?php
                $args = array(
                    'post_type' => 'video',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $parent->slug,
                        )
                    ),
                    'posts_per_page' => 1
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) {
                        $loop->the_post();
                        ?>
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix photography"><a href="<?php echo get_the_permalink() ?>">
                                <div class="work-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-31.jpg"
                                            alt="Work"/></div>
                                <div class="work-intro">
                                    <h3 class="work-title"><?php echo get_the_title() ?></h3>
                                    <div class="work-descr"><?php echo substr(get_the_excerpt(), 0, 50); ?></div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        <?php
                    }
                }
                ?>
            </ul>
            <!-- End Works Grid -->

        </div>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/video.js"></script>
    <script>
        var myPlayer;
        jQuery(function () {
            var options = {};
            myPlayer = jQuery(".player").YTPlayer(options);
        });
    </script>

<?php
get_footer();

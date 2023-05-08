<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package customer
 */

get_header();

$parent = get_category_by_slug('portfolio');
$current = get_category(get_query_var('cat'));

$arg = array('parent' => $parent->term_id);
$categories = get_categories($arg);
?>

    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/assets/css/slicknav.min.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/portfolio.css">

    <!-- Head Section -->
    <section id="category" class="small-section bg-dark pt-80 pb-30">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <?php echo get_field('category_desc', $current) ?>
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
    <!-- End Head Section -->

    <!-- Portfolio Section -->
    <section class="page-section pb-0">
        <div class="relative">
            <div class="works-filter font-alt align-center">

                <a href="<?php echo get_category_link($parent->term_id); ?>"
                   class="active"><?php esc_html_e('All works', 'customer'); ?></a>
                <?php foreach ($categories as $category) {
                    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                } ?>
            </div>
            <ul class="works-grid work-grid-5 clearfix font-alt " id="work-grid">
                <?php
                if ($parent->term_id == $current->term_id) {
                    $categories = get_categories($arg);
                } else {
                    $categories = array($current);
                }

                $arr = getValueArrayAssociative($categories, 'term_id');
                $arr = implode(",", $arr);
                $query = new WP_Query(array('category__and' => $arr));
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail', false);
                        ?>
                        <li class="work-item mix ot"><a href="<?php echo get_the_permalink() ?>" class="list">
                                <figure>
                                    <div class="workImg">
                                        <img src="<?php echo $src[0]; ?>" alt="<?php echo get_the_title() ?>"/></div>
                                </figure>
                            </a>
                            <div class="work-intro">
                                <h3 class="work-title mb-20"><?php echo get_the_title() ?></h3>
                                <div class="work-descr">
                                    <a href="<?php echo get_the_permalink() ?>" class="btn btn-mod btn-gray btn-round"
                                       id="aw-btn">
                                        <?php esc_html_e('Concepts', 'customer'); ?></a>
                                    <?php
                                    $product = get_field('portfolio_news_product');
                                    $urls = getImageArrayAssociative($product);
                                    ?>
                                    <a onclick="setPhoto('<?php echo $urls ?>', '<?php echo get_the_title() ?>');"
                                       class="btn btn-mod btn-gray btn-round" target="_blank"
                                       id="aw-btn"> <?php esc_html_e('View work', 'customer'); ?> </a>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>


            </ul>
            <div class="align-center">
                <h2 class="section-title font-alt mb-70 mb-sm-40"></h2>
                <div><a href="<?php echo get_site_url() ?>/contact"
                        class="btn btn-mod btn-medium btn-round mb-70 mb-sm-40 mb-xs-10"><?php esc_html_e('Contact', 'customer'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- End Story Section -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets//js/slick.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets//js/portfolio-en.js"></script>
    <script>
        $(window).load(function () {
            setProject();
            $('.list').hover(function () {
                $(this).find('figure').css({marginTop: -$(this).find('figcaption').outerHeight()});
                $(this).find('.workImg').addClass('hover')
            }, function () {
                $(this).find('figure').css({marginTop: 0})
                $(this).find('.workImg').removeClass('hover')
            })

        })
        $(window).resize(function () {
            setProject();
        })

        function setProject() {
            $('.list').each(function (index, element) {
                var viewH = $(this).find('img').height()
                $(this).height(viewH)
                $(this).find('.workImg').height(viewH)
            });
        }
    </script>
    <script>
        $("body").click(function (e) {
            if ($(e.target).hasClass('modal-open')) {

            } else if (window.orientation == 90 || window.orientation == -90) {
//ipad、iphone竖屏；Andriod横屏
                $('.slick-slide').addClass('h-mobile').removeClass('v-mobile');
                $('#myModal').addClass('h-mobile').removeClass('v-mobile');
                orientation = 'landscape';
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

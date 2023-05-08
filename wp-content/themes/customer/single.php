<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package customer
 */

get_header();

?>
    <!-- Head Section -->
    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false); ?>
    <section class="home-section bg-dark-alfa-30 parallax-2 fixed-height-small"
             data-background="<?php echo $src[0]; ?>">
        <div class="js-height-parent container">
            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <div class="row">
                        <div class="col-md-8 align-left">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"> <?php echo get_the_title() ?> </h1>
                            <div class="hs-line-4 font-alt"><?php echo get_the_title() ?></div>
                        </div>
                        <?php

                        $category = get_the_category();
                        $parent = get_category($category[0]->category_parent);
                        ?>
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right"><a
                                        href="<?php echo home_url() ?>"><?php esc_html_e( 'Home', 'customer' ); ?></a>&nbsp;/&nbsp;<a
                                        href="<?php echo get_category_link( $parent->term_id ); ?>"><?php echo $parent->name; ?></a>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
        </div>
    </section>
    <!-- End Head Section -->

  <?php echo get_the_content(); ?>

    <hr class="mt-0 mb-0 "/>
    <section class="page-section">
        <div class="container relative">
            <h2 class="section-title font-alt mb-70 mb-sm-40"><?php esc_html_e( 'Others read', 'customer' ); ?></h2>

            <!-- Products Grid -->
            <div class="row multi-columns-row">

                <?php
                $related = new WP_Query(
                    array(
                        'category__in'   => wp_get_post_categories( $post->ID ),
                        'posts_per_page' => 4,
                        'post__not_in'   => array( $post->ID )
                    )
                );

                if( $related->have_posts() ) {
                    while( $related->have_posts() ) {
                        $related->the_post();
                        ?>
                        <!-- Shop Item -->
                        <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                            <div class="post-prev-img">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail') ?>" alt=""/></a>
                            </div>
                            <div class="post-prev-title font-alt align-center"><a
                                        href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                            </div>
                        </div>
                        <!-- End Shop Item -->
                <?php
                    }
                    wp_reset_postdata();
                }
                ?>


            </div>
            <!-- End Products Grid -->
            <div class="row">
                <div class="col-sm-6 mb-40">
                    <h5 class="widget-title font-alt">Share：</h5>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
                <div class="col-sm-6 mb-40">
                    <div class="widget">
                        <h5 class="widget-title font-alt"># Tags</h5>
                        <div class="widget-body">
                            <div class="tags">
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach($posttags as $tag) {
                                    echo '<a href="'.get_tag_link( $tag->term_id ).'">'.$tag->name.'</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-center mt-40 mb-70 mb-sm-40">
                <div><a href="https://www.sy-interior.com/en/contact.html"
                        class="btn btn-mod btn-medium btn-round mb-xs-10"
                        style="padding: 8px 11px;"><?php esc_html_e( 'Contact', 'customer' ); ?></a></div>
            </div>
        </div>
    </section>

<?php
get_footer();

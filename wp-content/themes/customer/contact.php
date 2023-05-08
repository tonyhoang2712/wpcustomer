<?php
/**
 * Template Name: Contact
 */

get_header();
?>
    <!-- Head Section -->
    <section class="small-section bg-gray-lighter pt-80 pb-30">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-10 mb-xs-0"><?php echo get_the_title() ?></h1>
                    <div class="hs-line-4 font-alt black"><?php echo get_field('contact_description') ?></div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs font-alt align-right"> <a href="<?php echo home_url() ?>"><?php esc_html_e('Home', 'customer'); ?></a>&nbsp;/&nbsp;<a
                                href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>&nbsp </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->
    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container relative">
            <!-- Contact Form -->
            <div class="row">
                <?php echo get_the_content() ?>
            </div>
            <!-- End Contact Form -->
        </div>
    </section>
    <!-- End Contact Section -->
    <!-- Google Map -->
    <div>
        <?php echo get_field('contact_map_1') ?>
    </div>
    <!-- End Google Map -->
    <section class="page-section" id="contact">
        <div class="container relative">
            <?php echo get_field('contact_address_2') ?>
        </div>
    </section>
    <!-- Google Map -->
    <div>
        <?php echo get_field('contact_map_2') ?>
    </div>
    <!-- End Google Map -->

<?php
get_footer();

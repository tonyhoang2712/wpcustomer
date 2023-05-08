<!-- End Call Action Section -->
<?php

$cat = get_category_by_slug('portfolio'); // passing in above parameters
$taxonomies = array(
    'taxonomy' => 'category'
);
$args = array(
    'child_of'  => $cat->term_id
);
$terms = get_terms($taxonomies, $args);
?>
<section class="page-section pb-0 pt-20">
    <div class="relative">
        <h2 class="section-title font-alt align-center mb-40 mb-sm-40">
          <?php esc_html_e( 'Interior design style', 'customer' ); ?>
        </h2>
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="section-text align-center mb-70 mb-xs-40">
                    <?php esc_html_e( 'Description Interior design style', 'customer' ); ?>
                </div>
            </div>
        </div>
        <!-- Works Grid -->
        <ul class="works-grid work-grid-3 clearfix font-alt hover-white hide-titles masonry" id="work-grid">
            <!-- Work Item (Lightbox) -->
            <?php
                foreach ($terms as $term) {
            ?>
            <li class="work-item mix">
                <a href="<?php echo esc_url( get_category_link( $term->term_id ) ); ?>">
                    <div class="work-img">
                        <img src="<?php echo get_field('category_image', $term)?>" alt="<?php echo $term->term_id ?>"/>
                    </div>
                    <div class="work-intro2">
                        <h3 class="work-title2"><?php echo $term->name?></h3>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            <?php } ?>

        </ul>
        <!-- End Works Grid -->
    </div>
</section>
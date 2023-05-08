<!-- About Section -->

<?php $about = get_field('home_about_us'); ?>
<section class="page-section bg-gray-lighter" id="about">
    <div class="container-fluid relative">
        <div id="inpro">
            <div id="inpro1">
                <img src="<?php echo $about['image']['url'] ?>" alt="<?php echo $about['image']['name']; ?>"/>
            </div>
            <div id="inpro2">
                <div class="text">
                    <?php echo $about['description']; ?>
                    <h3 class="font-alt mt-10 mb-10 mb-xxs-10" style="text-align: center;"><img
                                src="<?php echo $about['signature']['sizes']['thumbnail'] ?>"
                                alt=""/>
                    </h3>

                    <div style="text-align: center;">
                        <a href="<?php echo get_site_url() ?>/about" class="btn btn-mod btn-gray btn-round"
                           target="_blank"><?php esc_html_e('About us', 'customer'); ?></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End About Section -->
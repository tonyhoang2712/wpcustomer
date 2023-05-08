<!-- Fullwidth Slider -->
<div id="wrapper" class="clearfix" style="width: 100%">
    <section id="slider" class="slider-parallax revslider-wrap clearfix">
        <!-- 首頁上方跑大圖區塊 -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <?php
                    $banners = get_field('banner');
                    if (count($banners)) {
                        foreach ($banners as $key => $banner) {
                            ?>
                            <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500"
                                data-thumb="<?php echo $banner['image']['sizes']['thumbnail'] ?>"
                                data-delay="12000" data-saveperformance="off"
                                data-title="<?php echo $banner['capture_image'] ?>">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo $banner['image']['url'] ?>"
                                     alt="Chien’s House, Xindian-尚藝室內設計" data-bgposition="left center"
                                     data-kenburns="on"
                                     data-duration="12000" data-ease="Linear.easeNone" data-bgfit="105"
                                     data-bgfitend="100"
                                     data-bgpositionend="right center">
                                <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft d-xs-none"
                                     data-x="right" data-y="bottom" data-hoffset="-50" data-voffset="-90"
                                     data-maxwidth="250"
                                     data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="800" data-start="1400" data-easing="easeOutQuad" data-splitin="none"
                                     data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                                     data-endspeed="1000" data-endeasing="Power4.easeIn"
                                     style="z-index: 3; white-space: normal;  width:100%;">
                                    <?php echo $banner['description'] ?>
                                </div>
                                <div class="tp-caption customin ltl tp-resizeme xs-btn" data-x="right" data-y="bottom"
                                     data-hoffset="-50" data-voffset="-30" data-maxwidth="250"
                                     data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-speed="800" data-start="1550" data-easing="easeOutQuad" data-splitin="none"
                                     data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
                                     data-endspeed="1000" data-endeasing="Power4.easeIn"
                                     style="z-index: 3; width:100%;">
                                    <a href="<?php echo $banner['link'] ?>"
                                       class="button button-white button-light button-border button-large button-rounded tright nomargin">
                                        <span><?php esc_html_e('See more', 'customer'); ?></span> <i
                                                class="icon-angle-right"></i>
                                    </a>
                                    <a href="<?php echo get_site_url() ?>/contact"
                                       class="button button-white button-light button-border button-large button-rounded tright nomargin"><span><?php esc_html_e('Contact', 'customer'); ?></span></a>
                                </div>
                                <!-- Scroll Down -->
                                <div class="local-scroll">
                                    <a href="#about" class="scroll-down"><i
                                                class="fa fa-angle-down scroll-down-icon"></i></a>
                                </div>
                                <!-- End Scroll Down -->
                            </li>
                            <?php
                        }
                    }
                    ?>
                    <!-- SLIDE  -->
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('.tp-banner').show().revolution({
                    dottedOverlay: "none",
                    delay: 16000,
                    startwidth: 1140,
                    fullScreenAlignForce: "on",
                    startheight: 700,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigationType: "bullet",
                    navigationArrows: "solo",
                    navigationStyle: "preview4",

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "off",
                    fullScreen: "on",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",

                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    fullScreenOffsetContainer: ".header"
                });
            }); //ready
        </script>
        <!-- END REVOLUTION SLIDER -->
    </section>
</div>

<!-- End Fullwidth Slider -->
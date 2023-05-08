<?php
/**
 * Template Name: Video
 */

get_header();
$parent = get_category(get_query_var('cat'));
?>
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
        <video id="my-video" class="video-js vjs-static-controls vjs-fluid" poster="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-top.jpg"
               data-setup='{"controls": true, "autoplay": true, "preload": "auto", "muted": true}' autoplay>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/vdm/sy_video.mp4" type="video/mp4"/>
        </video>
        <div class="local-scroll">
            <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
        </div>
    </section>
    <section class="small-section bg-dark pt-30 pb-30">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Portfolio Videos</h1>
                    <div class="hs-line-4 font-alt">It is like the 88 keys on a piano. Every note should be precisely correct to play a perfect piece.All tiny details are shown<br> in the videos. As in the wonderful residence, we can hear the amazing music.</div>
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
                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-31.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-31.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">俞宅-自然奧義</h3>
                            <div class="work-descr"> 自然主義 簡約風格休閒宅 生活本質</div>
                        </div>
                    </a>
                </li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-28.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-28.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">昇陽-淡然自若</h3>
                            <div class="work-descr"> 河畔度假宅 現代簡約 豪宅設計 解放心靈</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-27.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-27.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">流雲月光</h3>
                            <div class="work-descr"> 藝術宅 五感體驗 豪宅設計</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-25.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-25.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">萬通</h3>
                            <div class="work-descr"> 小坪數空間 簡約風格休閒宅 暖色系</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-13.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-13.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">東騰千里</h3>
                            <div class="work-descr"> 老屋翻新 豪宅設計 簡約風設計</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-30.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-30.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">鑫洋百景-山城靜謐</h3>
                            <div class="work-descr"> 質樸精緻 退休豪宅 山城靜謐</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-19.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-19.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">玉山岩 設計理念</h3>
                            <div class="work-descr"> 豪宅設計 退休宅 人文休閒</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-21.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-21.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">濯清漣</h3>
                            <div class="work-descr"> 豪宅設計 退休宅 湖閱天琴</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-9.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-9.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">境映深邃</h3>
                            <div class="work-descr"> 幸福空間 輕工業風 豪宅設計</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-23.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-23.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">台中昌平-光廊謐院</h3>
                            <div class="work-descr"> 現代風格 退休宅 自地自建 光廊謐院</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-29.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-29.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">富邦777-光映流轉</h3>
                            <div class="work-descr"> 美式休閒感 輕工業風 質感生活</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-15.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-15.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">大直帝景 設計理念</h3>
                            <div class="work-descr"> 豪宅設計 退休宅 飯店時尚休閒風</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-7.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-7.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">墨方</h3>
                            <div class="work-descr"> 幸福空間 豪宅設計 現代感 壁爐設計 豪宅氣度 零壓感自然</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-24.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-24.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">雨賦</h3>
                            <div class="work-descr"> 複層設計 人文禪境</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-20.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-20.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">御青川晴公館</h3>
                            <div class="work-descr"> 簡約風設計 個性工業風 洞岩感豪曠衛浴</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-11.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-11.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">琉光謐境</h3>
                            <div class="work-descr"> 退休宅 簡約風格休閒宅 個性風 開放式廚房</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-12.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-12.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">天境360</h3>
                            <div class="work-descr"> 渡假會館 豪宅設計 簡約風設計</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-14.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-14.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">覺界 設計理念</h3>
                            <div class="work-descr"> 豪宅設計 退休宅 人文宅 人文藝術</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-26.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-26.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">秀岡-謐境</h3>
                            <div class="work-descr"> 鐵件搭配 個性人文 透天別墅</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-18.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-18.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">光復田 設計理念</h3>
                            <div class="work-descr"> 個性工業風 簡約風格休閒宅 老屋大改造</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-16.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-16.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">力麒Park實品屋 設計理念</h3>
                            <div class="work-descr"> 小坪數空間 大機能設計 簡約風格休閒宅</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-22.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-22.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">侘之庭</h3>
                            <div class="work-descr"> 現代風格 退休宅 侘之庭</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-10.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-10.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">逸仙 設計理念</h3>
                            <div class="work-descr"> 豪宅設計 招待會所 信義計畫區 都會風格</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-8.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-8.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">入深林</h3>
                            <div class="work-descr"> 豪宅設計 渡假會館 私人會所 台中大器豪宅</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-6.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-6.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">闊 設計理念</h3>
                            <div class="work-descr"> 渡假會館 豪宅設計 複層住宅 別墅 新店自然景觀</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-5.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-5.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">器宇</h3>
                            <div class="work-descr"> 幸福空間 簡約風格休閒宅 格柵設計 和室設計</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-4.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-4.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">微觀四季</h3>
                            <div class="work-descr"> 豪宅設計 室內電梯 景觀豪宅 複層景觀</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-3.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-3.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">一悅藏</h3>
                            <div class="work-descr"> 個性工業風 酒吧風格 輕工業風</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-2.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-2.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">新生南路廖醫師</h3>
                            <div class="work-descr"> 幸福空間 老屋翻新 個性工業風 品味雅痞空間</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

                <!-- Work Item (Lightbox) -->
                <li class="work-item mix photography"><a href="video/video-1.html">
                        <div class="work-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/video/video-1.jpg"
                                    alt="Work"/></div>
                        <div class="work-intro">
                            <h3 class="work-title">尚藝設計辦公室</h3>
                            <div class="work-descr"> 幸福空間 辦公室設計</div>
                        </div>
                    </a></li>
                <!-- End Work Item -->

            </ul>
            <!-- End Works Grid -->

        </div>
    </section>
    <script>
        var myPlayer;
        jQuery(function () {
            var options = {
            };
            myPlayer = jQuery(".player").YTPlayer(options);
        });
    </script>

<?php
get_footer();

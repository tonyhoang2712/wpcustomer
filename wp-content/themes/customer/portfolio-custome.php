<?php
/**
 * Template Name: Portfolio Custome
 */

get_header();
?>
    <!-- Head Section -->
    <section class="small-section bg-dark pt-30 pb-30">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 font-alt mb-10 mb-xs-0">自地自建</h1>
                    <div class="hs-line-4 font-alt"> 家，不在只是奢侈的嚮往<br>透過量身訂做，實現您理想中的夢幻藍圖。<br>期許能突破既定框架，打造出為您收藏歲月的專屬好宅。</div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs font-alt align-right"> <a href="index.html">尚藝設計</a>&nbsp;/&nbsp;<a href="portfolio.html">設計作品</a>&nbsp;/&nbsp;<a href="portfolio-bto.html">自地自建</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->
    <!-- Portfolio Section -->
    <section class="page-section pb-0">
        <div class="relative">
            <div class="works-filter font-alt align-center">
                <a href="portfolio.html">All works</a>
                <a href="portfolio-bto.html" class="active">自地自建</a>
                <a href="portfolio-rh.html">退休宅</a>
                <a href="portfolio-lhd.html">豪宅設計</a>
                <a href="portfolio-clh.html">簡約風格休閒宅</a>
                <a href="portfolio-hc.html">渡假會館</a>
                <a href="portfolio-is.html">個性工業風</a>
            </div>
            <ul class="works-grid work-grid-5 clearfix font-alt " id="work-grid">
                <li class="work-item mix tp"> <a href="portfolio/portfolio-39.html" class="list">
                        <figure>
                            <div class="workImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/projects-39.jpg" alt="自地自建"></div>
                        </figure>
                        <div class="work-intro">
                            <h3 class="work-title mb-20">自地自建桃園張公館-藏峰寫意</h3>
                            <div class="work-descr"> <a href="portfolio/portfolio-39.html" class="btn btn-mod btn-gray btn-round" > 觀看設計概念 </a> <a onclick="setPhoto('p39',34,'自地自建桃園張公館-藏峰寫意');" class="btn btn-mod btn-gray btn-round" target="_blank" id="aw-btn"> 欣賞作品照片 </a> </div>
                        </div>
                    </a> </li>
                <li class="work-item mix tp"> <a onclick="setPhoto('p55',20,'台中昌平-光廊謐院');" class="list">
                        <figure>
                            <div class="workImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/projects-55.jpg" alt="自地自建:台中昌平-光廊謐院"></div>
                        </figure>
                        <div class="work-intro">
                            <h3 class="work-title mb-20">台中昌平-光廊謐院</h3>
                            <div class="work-descr">
                                <!--<a href="portfolio/portfolio-46.html" class="btn btn-mod btn-gray btn-round" id="aw-btn"> Concepts </a>--> <a onclick="setPhoto('p55',20,'台中昌平-光廊謐院');" class="btn btn-mod btn-gray btn-round" target="_blank" id="aw-btn"> 欣賞作品照片 </a> </div>
                        </div>
                    </a> </li>
                <li class="work-item mix tp"> <a onclick="setPhoto('p47',9,'惠仁段');" class="list">
                        <figure>
                            <div class="workImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/projects-47.jpg" alt="自地自建:惠仁段"></div>
                        </figure>
                        <div class="work-intro">
                            <h3 class="work-title mb-20">惠仁段</h3>
                            <div class="work-descr">
                                <!--<a href="portfolio/portfolio-46.html" class="btn btn-mod btn-gray btn-round" id="aw-btn"> Concepts </a>--> <a onclick="setPhoto('p47',9,'惠仁段');" class="btn btn-mod btn-gray btn-round" target="_blank" id="aw-btn"> 欣賞作品照片 </a> </div>
                        </div>
                    </a> </li>
            </ul>
            <div class="align-center">
                <h2 class="section-title font-alt mb-70 mb-sm-40"></h2>
                <div> <a href="contact.html" class="btn btn-mod btn-medium btn-round mb-70 mb-sm-40 mb-xs-10">立 即 諮 詢</a> </div>
            </div>
        </div>
    </section>

<?php
get_footer();

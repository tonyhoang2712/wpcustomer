<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--    style-->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/bootstrap.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/dark.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/font-icons.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/magnific-popup.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/responsive.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/r/settings.css"
          media="screen"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/portfolio.css">
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
    <!-- External JavaScripts-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.themepunch.revolution.js"></script>
    <style>
        .revo-slider-emphasis-text {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 13px;
            font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        body {
            scroll-behavior: smooth;
            over-flow: auto; /* winphone8和android4+ */
            -webkit-overflow-scrolling: touch; /* ios5+ */
        }

        @media screen and (max-width: 767px) {
            .d-xs-none {
                display: none;
            }

            .xs-title {
                top: 58% !important;
            }

            .xs-award {
                top: 65% !important;
            }

            .xs-btn {
                top: 80% !important;
            }
        }

        @media screen and (max-width: 800px) {
            #inpro1 {
                width: 100%;
            }

            #inpro2 {
                height: auto;
                padding: 10px;
            }
        }

        .inner-nav ul li a {
            width: max-content;
        }
    </style>
    <?php
    $options = get_option('my_framework'); // unique id of the framework
    global $template;
    $templateName = basename($template);
    $dark = 'dark';
    $logo = $options['opt-upload-logo-white'];
    if (in_array($templateName, ['about.php', 'award.php', 'contact.php'])) {
        $dark = '';
        $logo = $options['opt-upload-logo-black'];
    }

    if (is_page_template('About')) {
        ?>
        <style>
            .inner-nav ul li a {
                color: #777;
                letter-spacing: 2px;
                display: inline-block;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                text-decoration: none;
                -webkit-transition: all 0.27s cubic-bezier(0.000, 0.000, 0.580, 1.000);
                -moz-transition: all 0.27s cubic-bezier(0.000, 0.000, 0.580, 1.000);
                -o-transition: all 0.27s cubic-bezier(0.000, 0.000, 0.580, 1.000);
                -ms-transition: all 0.27s cubic-bezier(0.000, 0.000, 0.580, 1.000);
                transition: all 0.27s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            }
        </style>
        <?php
    }
    ?>

    <!--end style-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
wp_body_open();

?>

<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->
<!-- Page Wrap -->
<div class="page" id="top">
    <!-- Navigation panel -->
    <div id="sticky-wrapper" class="sticky-wrapper">
        <nav class="main-nav <?php echo $dark; ?> transparent stick-fixed">
            <div class="full-wrapper relative clearfix">
                <!-- Logo ( * your text or image into link tag *) -->
                <div class="nav-logo-wrap local-scroll"><a href="<?php echo home_url(); ?>" class="logo"> <img
                                src="<?php echo $logo ?>" width="218"
                                height="50" alt="logo"/> </a>
                </div>
                <div class="mobile-nav"><i class="fa fa-bars"></i></div>
                <!-- Main Menu -->
                <div class="inner-nav desktop-nav">
                    <ul class="clearlist" itemscope>
                        <?php
                        $translations = pll_the_languages(array('raw' => 1));
                        if ($translations['vi']['current_lang'] == 1) {
                            $mainMenu = wp_get_menu_array('primary-menu-vn');
                        } else {
                            $mainMenu = wp_get_menu_array('primary-menu-en');
                        }

                        if ($mainMenu) {
                            foreach ($mainMenu as $menu) {
                                if (count($menu['children'])) { ?>
                                    <li itemprop="name">
                                        <a itemprop="url" href="<?php echo $menu['url'] ?>" class="mn-has-sub">
                                            <div class="tw"><?php echo $menu['title'] ?></div>
                                            <div class="en"><?php echo $menu['title'] ?></div>
                                        </a>
                                        <ul class="mn-sub">
                                            <?php foreach ($menu['children'] as $child) { ?>
                                                <li>
                                                    <a href="<?php echo $child['url'] ?>"><?php echo $child['title'] ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li itemprop="name"><a itemprop="url" href="<?php echo $menu['url'] ?>">
                                            <div class="tw"><?php echo $menu['title'] ?></div>
                                            <div class="en"><?php echo $menu['title'] ?></div>
                                        </a>
                                    </li>
                                <?php }
                            }
                        }
                        ?>

                        <?php
                        if ($translations['vi']['current_lang'] == 1) { ?>
                            <li itemprop="name"><a itemprop="url" href="<?php echo $translations['en']['url'] ?>">
                                    <div class="tw">EN</div>
                                    <div class="en">EN</div>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li itemprop="name"><a itemprop="url" href="<?php echo $translations['vi']['url'] ?>">
                                    <div class="tw">VI</div>
                                    <div class="en">VI</div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- End Main Menu -->
            </div>
        </nav>
    </div>

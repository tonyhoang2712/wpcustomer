<?php
/**
 * customer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package customer
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function customer_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on customer, use a find and replace
        * to change 'customer' to the name of your theme in all the template files.
        */
    load_theme_textdomain('customer', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'customer'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'customer_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'customer_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function customer_content_width()
{
    $GLOBALS['content_width'] = apply_filters('customer_content_width', 640);
}

add_action('after_setup_theme', 'customer_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function customer_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'customer'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'customer'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'customer_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function customer_scripts()
{
    wp_enqueue_style('customer-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('customer-style', 'rtl', 'replace');

    wp_enqueue_script('customer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'customer_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';

require_once get_theme_file_path() .'/inc/framework.php';


/*=========================== My Custome =======================================*/

function wp_get_menu_array($current_menu = 'Main Menu')
{

    $menu_array = wp_get_nav_menu_items($current_menu);

    $menu = array();

    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)) {
            foreach ($menu_array as $k => $m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        }
    }

    return $menu;

}

function dd($a = 1)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    die;
}

//======== Chien ======

// Thêm đoạn mã sau vào file functions.php của theme hoặc child theme của bạn
function create_image_block()
{
    // Đăng ký khối reusable với tên "My Image Block"
    register_block_type('my-image-block/image', array(
        'title' => __('test', 'customer'),
        'attributes' => array(
            'imageSrc' => array(
                'type' => 'string',
                'source' => 'attribute',
                'attribute' => 'src',
                'selector' => 'img',
            ),
            'imageAlt' => array(
                'type' => 'string',
                'source' => 'attribute',
                'attribute' => 'alt',
                'selector' => 'img',
            ),
            'imageWidth' => array(
                'type' => 'number',
                'source' => 'attribute',
                'attribute' => 'width',
                'selector' => 'img',
            ),
            'imageHeight' => array(
                'type' => 'number',
                'source' => 'attribute',
                'attribute' => 'height',
                'selector' => 'img',
            ),
        ),
        'render_callback' => 'render_image_block',
    ));
}

add_action('init', 'create_image_block');

// Hàm render khối ảnh
function render_image_block($attributes)
{
    // Trích xuất các thuộc tính của khối ảnh
    $image_src = $attributes['imageSrc'];
    $image_alt = $attributes['imageAlt'];
    $image_width = $attributes['imageWidth'];
    $image_height = $attributes['imageHeight'];

    // Trả về HTML của khối ảnh
    return '<div class="my-custom-style"><img src="' . esc_url($image_src) . '" alt="' . esc_attr($image_alt) . '" width="' . esc_attr($image_width) . '" height="' . esc_attr($image_height) . '"></div>';
}


function getImageArrayAssociative($arrAssoc = [])
{
    if (count($arrAssoc) == 0) {
        return '';
    }
    $arr = [];
    foreach ($arrAssoc as $item) {
        array_push($arr, $item['image']);
    }
    return implode($arr, ",");
}

function getValueArrayAssociative($arrAssoc = [], $key = '')
{
    if (count($arrAssoc) == 0 || empty($key)) {
        return '';
    }

    $arr = [];
    foreach ($arrAssoc as $item) {
        array_push($arr, $item->{$key});
    }
    return $arr;
}

//=============

/*
* Creating a function to create our CPT
*/

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Video', 'Post Type General Name', 'customer' ),
        'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'customer' ),
        'menu_name'           => __( 'Video', 'customer' ),
        'parent_item_colon'   => __( 'Parent Video', 'customer' ),
        'all_items'           => __( 'All Video', 'customer' ),
        'view_item'           => __( 'View Video', 'customer' ),
        'add_new_item'        => __( 'Add New Video', 'customer' ),
        'add_new'             => __( 'Add New', 'customer' ),
        'edit_item'           => __( 'Edit Video', 'customer' ),
        'update_item'         => __( 'Update Video', 'customer' ),
        'search_items'        => __( 'Search Video', 'customer' ),
        'not_found'           => __( 'Not Found', 'customer' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'customer' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'video', 'customer' ),
        'description'         => __( 'Video news and reviews', 'customer' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres', 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'video', $args );

}
  
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
  
add_action( 'init', 'custom_post_type', 0 );
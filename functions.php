<?php
function theme_enqueue_scripts()
{

    wp_enqueue_style('style_css_main', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('input', get_template_directory_uri() . '/src/input.css');
    wp_enqueue_style('output', get_template_directory_uri() . '/src/output.css');
    wp_enqueue_script('indexjs', get_template_directory_uri() . '/js/index/index.js', array(), '', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/index/swiper-element-bundle.min.js', array(), '', true);
    wp_enqueue_script('product', get_template_directory_uri() . '/js/products/products.js', array(), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array(), '', true);


}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


// Reset Post Thumbnail size
// =============================================================================
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    
    
}


function theme_register_menus()
{
    register_nav_menus(array(
        'primary1' => __('primary1', 'samed'),
        'aboutus' => __('aboutus', 'samed'),
        'footer_1' => __('footer_1', 'samed'),
        'footer_2' => __('footer_2', 'samed'),
        'footer_4' => __('footer_4', 'samed'),
        'mobile' => __('mobile', 'samed'),


    ));


}

add_action('after_setup_theme', 'theme_register_menus');

function add_class_on_a_tag($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_class_on_a_tag', 1, 3);


function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_list_item_class($classes, $item, $args)
{
    if (isset($args->list_item_class)) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

function add_menu_link_class($atts, $item, $args)
{
    if (isset($args->link_class)) {
        $atts[] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);



    
    
function cptui_register_my_cpts() {

    /**
     * Post Type: اسلایدر صفحه اصلی.
     */

    $labels = [
        "name" => esc_html__( "اسلایدر صفحه اصلی", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "اسلایدر صفحه اصلی", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "اسلایدر صفحه اصلی", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "image_slider", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "image_slider", $args );

    /**
     * Post Type: افتخارات.
     */

    $labels = [
        "name" => esc_html__( "افتخارات", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "افتخار", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "افتخارات", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "adwords", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "adwords", $args );

    /**
     * Post Type: تنظیمات صفحه اصلی.
     */

    $labels = [
        "name" => esc_html__( "تنظیمات صفحه اصلی", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "تنظیمات صفحه اصلی", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "تنظیمات صفحه اصلی", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "main_page", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "main_page", $args );

    /**
     * Post Type: اسلایدر سربرگ.
     */

    $labels = [
        "name" => esc_html__( "اسلایدر سربرگ", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "اسلایدر سربرگ", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "اسلایدر سربرگ", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "slider_header_main", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "slider_header_main", $args );

    /**
     * Post Type: تنظیمات درباره ما.
     */

    $labels = [
        "name" => esc_html__( "تنظیمات درباره ما", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "تنظیمات درباره ما", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "تنظیمات درباره ما", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "aboutus_setting", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "aboutus_setting", $args );

    /**
     * Post Type: تنظیمات صفحه خدمات.
     */

    $labels = [
        "name" => esc_html__( "تنظیمات صفحه خدمات", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "تنظیمات صفحه خدمات", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "تنظیمات صفحه خدمات", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "service_setting", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "service_setting", $args );

    /**
     * Post Type: تنظیمات فوتر.
     */

    $labels = [
        "name" => esc_html__( "تنظیمات فوتر", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "تنظیمات فوتر", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "تنظیمات فوتر", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "footer", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "footer", $args );

    /**
     * Post Type: اطلاعات تماس باما.
     */

    $labels = [
        "name" => esc_html__( "اطلاعات تماس باما", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "اطلاعات تماس باما", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => esc_html__( "اطلاعات تماس باما", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "contactus_setting", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "contactus_setting", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



function action_after_switch_theme_my_cpts()
{
    cptui_register_my_cpts();
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'action_after_switch_theme_my_cpts');



add_action('acf/include_fields', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_66e52dea2ed8d',
        'title' => 'اخبار',
        'fields' => array(
            array(
                'key' => 'field_66e52deb680b4',
                'label' => 'گالری تصاویر اصلی (مربوط به اخبار)',
                'name' => 'main_gallery_slider',
                'aria-label' => '',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66e52ee194e6f',
                'label' => 'چکیده اخبار',
                'name' => 'news_excerpt',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66e530f12a820',
                'label' => 'عنوان اسلایدر دوم اخبار',
                'name' => 'gallery_slider_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e5311f2a821',
                'label' => 'اسلایدر گالری دوم اخبار',
                'name' => 'image_gallery_slider',
                'aria-label' => '',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'news',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66ea7b1080ff2',
        'title' => 'اطلاعات تماس با ما',
        'fields' => array(
            array(
                'key' => 'field_66ea7b1231a34',
                'label' => 'آدرس',
                'name' => 'address',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66ea7b3531a35',
                'label' => 'تلفن تماس',
                'name' => 'phone_number',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66ea7b4f31a36',
                'label' => 'لینک تلگرام',
                'name' => 'telegram',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66ea7b6831a37',
                'label' => 'لینک واتساپ',
                'name' => 'whatsapp',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66ea7b7c31a38',
                'label' => 'آدرس ایمیل',
                'name' => 'email',
                'aria-label' => '',
                'type' => 'email',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66ea7c2231a39',
                'label' => 'آدرس اینستاگرام',
                'name' => 'instagram',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'contactus_setting',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66d1ddb7db1a4',
        'title' => 'تنظیمات صفحه اصلی',
        'fields' => array(
            array(
                'key' => 'field_66d1ddb83b754',
                'label' => 'عنوان شرکت تولیدی صنعتی سامد',
                'name' => 'samed_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1de4305d26',
                'label' => 'متن معرفی شرکت',
                'name' => 'samed_text',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66d1de5e05d27',
                'label' => 'لینک تصویر جعبه عکس 1',
                'name' => 'box_image_link_1',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d1df9d05d29',
                'label' => 'لینک تصویر جعبه عکس 2',
                'name' => 'box_image_link_2',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d1dfa305d2a',
                'label' => 'لینک تصویر جعبه عکس 3',
                'name' => 'box_image_link_3',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d1dfa605d2b',
                'label' => 'لینک تصویر جعبه عکس 4',
                'name' => 'box_image_link_4',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d1dfa805d2c',
                'label' => 'لینک تصویر جعبه عکس 5',
                'name' => 'box_image_link_5',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d1dfac05d2d',
                'label' => 'لینک تصویر جعبه عکس 6',
                'name' => 'box_image_link_6',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d1df0005d28',
                'label' => 'متن جعبه عکس 1',
                'name' => 'box_image_text_1',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1dfb605d2e',
                'label' => 'متن جعبه عکس 2',
                'name' => 'box_image_text_2',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1dfb805d2f',
                'label' => 'متن جعبه عکس 3',
                'name' => 'box_image_text_3',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1dfbb05d30',
                'label' => 'متن جعبه عکس 4',
                'name' => 'box_image_text_4',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1dfbe05d31',
                'label' => 'متن جعبه عکس 5',
                'name' => 'box_image_text_5',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1dfc005d32',
                'label' => 'متن جعبه عکس 6',
                'name' => 'box_image_text_6',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1dff205d33',
                'label' => 'عنوان جعبه عکس 1',
                'name' => 'box_image_tiltle_1',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1e02305d34',
                'label' => 'عنوان جعبه عکس 2',
                'name' => 'box_image_tiltle_2',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1e02605d35',
                'label' => 'عنوان جعبه عکس 3',
                'name' => 'box_image_tiltle_3',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1e02905d36',
                'label' => 'عنوان جعبه عکس 4',
                'name' => 'box_image_tiltle_4',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1e02d05d37',
                'label' => 'عنوان جعبه عکس 5',
                'name' => 'box_image_tiltle_5',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1e02f05d38',
                'label' => 'عنوان جعبه عکس 6',
                'name' => 'box_image_tiltle_6',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1edfdfbd0d',
                'label' => 'شماره صدای مشتری',
                'name' => 'customer_sound',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1ee33fbd0e',
                'label' => 'عنوان جعبه متن 1',
                'name' => 'text_box_title_1',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1ef0bfbd11',
                'label' => 'عنوان جعبه متن 2',
                'name' => 'text_box_title_2',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d1eeb4fbd0f',
                'label' => 'تصویر جعبه متن 1',
                'name' => 'text_box_image_1',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66d1ef10fbd12',
                'label' => 'تصویر جعبه متن 2',
                'name' => 'text_box_image_2',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66d1eecefbd10',
                'label' => 'متن جعبه متن 1',
                'name' => 'text_box_text_1',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66d1ef15fbd13',
                'label' => 'متن جعبه متن 2',
                'name' => 'text_box_text_2',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66d2aab235d32',
                'label' => 'عنوان ما را بیشتر بشناسید',
                'name' => 'get_know_us_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d2aad435d33',
                'label' => 'متن مارا بیشتر بشناسید',
                'name' => 'get_know_us_text',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66d2ab0635d34',
                'label' => 'لینک دکمه با ما بیشتر آشنا شوید',
                'name' => 'get_know_us_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_66d2ab4035d35',
                'label' => 'شماره شرکت',
                'name' => 'telephone_number',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d2ab7f35d36',
                'label' => 'عنوان افتخارات',
                'name' => 'adwords_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d2ab9d35d37',
                'label' => 'توضیح کوتاه افتخاران',
                'name' => 'adwords_subtitle',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66d2abc035d38',
                'label' => 'متن افتخارات',
                'name' => 'adwords_text',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),


            array(
                'key' => 'field_66ea8df0bdadde',
                'label' => 'لینک صفحه افتخارات',
                'name' => 'adwords_page_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),

            array(
                'key' => 'field_66ea8df0bdaddezd',
                'label' => 'لینک صفحه اخبار',
                'name' => 'news_page_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),


            array(
                'key' => 'field_66ea8df0bdadd',
                'label' => 'لینک صفحه ماهنامه',
                'name' => 'magezine_page_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),

        ),


        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'main_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66e819988d509',
        'title' => 'تنظیمات صفحه اصلی',
        'fields' => array(
            array(
                'key' => 'field_66e8199974719',
                'label' => 'پاراگراف اول درباره ما',
                'name' => 'about_us_p_1',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66e81acaec291',
                'label' => 'عنوان اصول حرفه ای',
                'name' => 'osool_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e81af6ec292',
                'label' => 'متن اصول حرفه ای',
                'name' => 'osool_text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e81b11ec293',
                'label' => 'تصویر اصول حرفه ای ما',
                'name' => 'osool_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66e81b62ec294',
                'label' => 'متن معرفی شرکت',
                'name' => 'introduction',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66e81b8aec295',
                'label' => 'متن افتخارات',
                'name' => 'adwords_text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e81be0ec296',
                'label' => 'متن محصولاتو تولیدات',
                'name' => 'product_text',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e82a1cefef7',
                'label' => 'متن محصولاتو تولیدات (کپی)',
                'name' => 'product_text_2',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e82a1eefef8',
                'label' => 'متن محصولاتو تولیدات (کپی2)',
                'name' => 'product_text_3',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e81c39ec297',
                'label' => 'استاندار ها',
                'name' => 'standards',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e81c59ec298',
                'label' => 'مجوزها',
                'name' => 'permissions',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66ea8df0bdadd',
                'label' => 'لینک صفحه افتخارات',
                'name' => 'adwords_page_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_66ea8e0cbdade',
                'label' => 'لینک صفحه صدای مشتری',
                'name' => 'contactus_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_66ea8e37bdadf',
                'label' => '',
                'name' => '',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'aboutus_setting',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66e95756d894e',
        'title' => 'تنظیمات صفحه خدمات',
        'fields' => array(
            array(
                'key' => 'field_66e957575e9b0',
                'label' => 'عنوان خدمات',
                'name' => 'service_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e957815e9b1',
                'label' => 'زیر عنوان خدمات',
                'name' => 'service_subtitle',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9579f5e9b2',
                'label' => 'توضیحات خدمات',
                'name' => 'service_desc',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66e957d05e9b3',
                'label' => 'عنوان خدمات 1',
                'name' => 'service_title_1',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e958035e9b4',
                'label' => 'service_desc_1',
                'name' => 'service_desc_1',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e958145e9b5',
                'label' => 'service_image_1',
                'name' => 'تصویر_خدمت_1',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66e9582c5e9b6',
                'label' => 'عنوان خدمت 2',
                'name' => 'service_title_2',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e958535e9b7',
                'label' => 'متن خدمات 2',
                'name' => 'service_desc_2',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_66e958705e9b8',
                'label' => 'تصویر خدمات 2',
                'name' => 'service_image_2',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66e958885e9b9',
                'label' => 'تصویر دوم خدمت 2',
                'name' => 'image_service_2_2',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_66e95a3174dc3',
                'label' => 'زیر عنوان خدمت 2',
                'name' => 'service_subtitle_2',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66ea8f7cadbd7',
                'label' => 'لینک صفحه درباره ما',
                'name' => 'aboutus_page_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_66ea8fd8adbd8',
                'label' => 'لینک سایت خدمات 1',
                'name' => 'service_link_1',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service_setting',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66ea840b3c55f',
        'title' => 'تنظیمات فوتر',
        'fields' => array(
            array(
                'key' => 'field_66ea840bc69e7',
                'label' => 'متن فوتر',
                'name' => 'footer_text',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66ea8430c69e8',
                'label' => 'متن مربوط به (ماهنامه های مارا دنبال کنید)',
                'name' => 'mahname_text',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),

            array(
                'key' => 'field_66ea8430c69e8',
                'label' => 'متن مربوط به (اطلاعات بیشتر درباره واحد ها)',
                'name' => 'productionunit_text',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),


            array(
                'key' => 'field_66ea84afc69e9',
                'label' => 'لینک صفحه ماهنامه ها',
                'name' => 'mahname_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),
            array(
                'key' => 'field_66ea84afc69e9',
                'label' => 'لینک صفحه صدای مشتریان',
                'name' => 'contactus_page_link',
                'aria-label' => '',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'allow_archives' => 1,
                'multiple' => 0,
                'allow_null' => 0,
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'footer',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66e834f38badb',
        'title' => 'ماهنامه',
        'fields' => array(
            array(
                'key' => 'field_66e834f35e735',
                'label' => 'فایل ماهنامه',
                'name' => 'mahname_file',
                'aria-label' => '',
                'type' => 'file',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_size' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_66e936bdce2b4',
                'label' => 'گالری تصاویر ماهنامه',
                'name' => 'mahname_gallery',
                'aria-label' => '',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'magezine',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66e9421278745',
        'title' => 'محصولات',
        'fields' => array(
            array(
                'key' => 'field_66e942121156b',
                'label' => 'درباره محصول',
                'name' => 'product_about',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66e9422a1156c',
                'label' => 'کاربرد محصول',
                'name' => 'product_application',
                'aria-label' => '',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_66e942541156d',
                'label' => 'رنگ محصول',
                'name' => 'color',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e942641156e',
                'label' => 'درصد مواد جامد',
                'name' => 'jamed',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9427a1156f',
                'label' => 'استحکام فشاری',
                'name' => 'estehkamfeshari',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9429211570',
                'label' => 'شرایط نگهداری چسب:',
                'name' => 'sharayetnegahdarichasb',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e942aa11571',
                'label' => 'غلظت(ویسکوزیته)',
                'name' => 'ghelzat',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e942ba11572',
                'label' => 'دمای کاربرد',
                'name' => 'damayekarbord',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e942d011573',
                'label' => 'فشار لازم برای چسباندن',
                'name' => 'fesharchasbandan',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e942e511574',
                'label' => 'زمان فشار برای چسباندن',
                'name' => 'zamanfeshar',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9430611575',
                'label' => 'مقدار مصرف',
                'name' => 'meghdarmasraf',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9445ccef45',
                'label' => 'حجم بسته بندی 1',
                'name' => 'hajmbastebandi1',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e94479cef46',
                'label' => 'حجم بسته بندی 2',
                'name' => 'hajmbastebandi2',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9447ccef47',
                'label' => 'حجم بسته بندی 3',
                'name' => 'hajmbastebandi3',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_66e9447fcef48',
                'label' => 'حجم بسته بندی 4',
                'name' => 'hajmbastebandi4',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'products',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_66e93f6cdc0a9',
        'title' => 'واحد های تولیدی',
        'fields' => array(
            array(
                'key' => 'field_66e93f6d8ee33',
                'label' => 'گالری تصاویر واحد تولیدی',
                'name' => 'toliddi_gallery',
                'aria-label' => '',
                'type' => 'gallery',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min' => '',
                'max' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'insert' => 'append',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'productionunit',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
});

class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div id=\"dropDown\" class=\"w-full h-auto px-28 mx-auto py-12 invisible absolute z-30 right-0 \">
                    <div class=\"grid grid-cols-2 lg:grid-cols-6 gap-6\">
                      <div class=\"col-span-2\"> <div class=\"pb-2\"><ul>
                     
\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $img_src = "/img/DJI_0112\ dropper.png";
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div></div>
        <div class=\"col-span-4 p-2 bg-primary-800 rounded\">
                        <div class=\"menu_image bg-cover bg-center w-full min-h-80\" style=\"
                            background-image: url(https://test3.faradev.ir/samed/wp-content/themes/samed/img/DJI_0112\ dropper.png);
                          \"></div>
                      </div>

        </div></div>\n";
    }
}


class Child_mobile_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"h-0 overflow-y-auto transition-all duration-150 customScroll\">
                    <ul class=\"sub-menu  \">
                     
\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {

        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>
       \n";
    }
}


function cptui_register_my_cpts_products()
{

    /**
     * Post Type: محصولات.
     */

    $labels = [
        "name" => esc_html__("محصولات", "custom-post-type-ui"),
        "singular_name" => esc_html__("محصول", "custom-post-type-ui"),
    ];

    $args = [
        "label" => esc_html__("محصولات", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "products", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("products", $args);
}


function action_after_switch_theme_cpt_products()
{

    cptui_register_my_cpts_products();
    flush_rewrite_rules();


}

add_action('after_switch_theme', 'action_after_switch_theme_cpt_products');


function cptui_register_my_cpts_magezine()
{

    /**
     * Post Type: ماهنامه.
     */

    $labels = [
        "name" => esc_html__("ماهنامه", "custom-post-type-ui"),
        "singular_name" => esc_html__("ماهنامه", "custom-post-type-ui"),
    ];

    $args = [
        "label" => esc_html__("ماهنامه", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "magezine", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("magezine", $args);
}


function action_after_switch_theme_cpt_magezine()
{

    cptui_register_my_cpts_magezine();
    flush_rewrite_rules();


}

add_action('after_switch_theme', 'action_after_switch_theme_cpt_magezine');


function cptui_register_my_cpts_productionunit()
{

    /**
     * Post Type: واحد های تولیدی.
     */

    $labels = [
        "name" => esc_html__("واحد های تولیدی", "custom-post-type-ui"),
        "singular_name" => esc_html__("واحد تولیدی", "custom-post-type-ui"),
    ];

    $args = [
        "label" => esc_html__("واحد های تولیدی", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "productionunit", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("productionunit", $args);
}


function action_after_switch_theme_cpt_productionunit()
{

    cptui_register_my_cpts_productionunit();
    flush_rewrite_rules();


}

add_action('after_switch_theme', 'action_after_switch_theme_cpt_productionunit');


function cptui_register_my_cpts_news()
{

    /**
     * Post Type: اخبار.
     */

    $labels = [
        "name" => esc_html__("اخبار", "custom-post-type-ui"),
        "singular_name" => esc_html__("اخبار", "custom-post-type-ui"),
    ];

    $args = [
        "label" => esc_html__("اخبار", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "news", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_graphql" => false,
    ];

    register_post_type("news", $args);
}


function action_after_switch_theme_cpt_news()
{

    cptui_register_my_cpts_news();
    flush_rewrite_rules();


}

add_action('after_switch_theme', 'action_after_switch_theme_cpt_news');


function cptui_register_my_taxes_product_category()
{

    /**
     * Taxonomy: دسته بندی محصولات.
     */

    $labels = [
        "name" => esc_html__("دسته بندی محصولات", "custom-post-type-ui"),
        "singular_name" => esc_html__("دسته بندی محصولات", "custom-post-type-ui"),
    ];


    $args = [
        "label" => esc_html__("دسته بندی محصولات", "custom-post-type-ui"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'product_category', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "product_category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("product_category", ["products"], $args);
}


function action_after_switch_theme_taxonomy_product_category()
{
    cptui_register_my_taxes_product_category();
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'action_after_switch_theme_taxonomy_product_category');


function cptui_register_my_taxes_adwords_category()
{

    /**
     * Taxonomy: دسته بندی افتخارات.
     */

    $labels = [
        "name" => esc_html__("دسته بندی افتخارات", "custom-post-type-ui"),
        "singular_name" => esc_html__("دسته بندی افتخارات", "custom-post-type-ui"),
    ];


    $args = [
        "label" => esc_html__("دسته بندی افتخارات", "custom-post-type-ui"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'adwords_category', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "adwords_category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("adwords_category", ["adwords"], $args);
}


function action_after_switch_theme_taxonomy_adwords_category()
{
    cptui_register_my_taxes_adwords_category();
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'action_after_switch_theme_taxonomy_adwords_category');


function highlight_results($text)
{
    if (is_search() && !is_admin()) {
        $sr = get_query_var('s');
        $keys = explode(' ', $sr);
        $keys = array_filter($keys);
        $text = preg_replace('/(' . implode('|', $keys) . ')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}

add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');

/* Removing WordPress version*/
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_null' );

/* Disabling emojis */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* Removing s.w.org DNS prefetch */
add_filter('wp_resource_hints', function (array $urls, string $relation): array {
    if ($relation !== 'dns-prefetch') {
        return $urls;
    }
    $urls = array_filter($urls, function (string $url): bool {
        return strpos($url, 's.w.org') === false;
    });
    return $urls;
}, 10, 2);

/* Removing wlwmanifest.xml */
remove_action( 'wp_head', 'wlwmanifest_link' );

/* Removing RSD */
remove_action('wp_head', 'rsd_link');

/* Removing shortlink */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

/* Disabling RSS feeds and removing RSS feed links */
function itsme_disable_feed() {
 wp_die( __( 'Nothing here! Please go back to the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}
add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

/* Removing duplicated robots tag */
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
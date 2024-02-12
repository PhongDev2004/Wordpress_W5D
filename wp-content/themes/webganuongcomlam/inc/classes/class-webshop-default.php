<?php
define('THEME_URL', get_template_directory_uri());
define('THEME_DIR', get_template_directory());
if (!function_exists('webshop_theme_setup')) {
    function webshop_theme_setup()
    {
        // Setting text domain
        $langguage_folder = get_template_directory() . '/languages';
        load_theme_textdomain('webshop', $langguage_folder);

        // Auto add link RSS to <head>
        add_theme_support('automatic-feed-links');

        // Enable post thumbnail
        add_theme_support('post-thumbnails');

        //Post format
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        // Meta tag
        add_theme_support('title-tag');

        // Menu
        register_nav_menu('primary-menu', __('Primary Menu', "webshop"));
        register_nav_menu('topbar-menu', __('Topbar Menu', "webshop"));
        register_nav_menu('vertical-menu', __('Vertical Menu', "webshop"));

        // Sidebar Widget
        $sidebar = array(
            'name'                 =>     __('Right Sidebar', 'webshop'),
            'id'                 =>     'right-sidebar',
            'description'        =>    __('Default Sidebar on website', 'webshop'),
            'class'                =>    'right-sidebar',
            'before_widget'        =>    '<div id="%1$s" class="widget %2$s">',
            'after_widget'        =>    '</div>',
            'before_title'        =>    '<h2 class="widget-title">',
            'after_title'        =>    '</h2>'
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'webshop_theme_setup');

    function custom_theme_setup()
    {
        // Thêm hỗ trợ menu
        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'custom-theme'), // Thay 'Primary Menu' bằng tên của menu nếu cần
            )
        );
    }
    add_action('after_setup_theme', 'custom_theme_setup');
}

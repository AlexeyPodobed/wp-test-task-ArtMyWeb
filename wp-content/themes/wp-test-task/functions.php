<?php

if (!function_exists('custom_setup')) {
    function custom_setup()
    {
        add_theme_support('custom-logo', [
            'height' => 80,
            'width' => 120,
            'flex-width' => false,
            'flex-height' => false,
            'header-text' => 'Furn.',
        ]);

        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'custom_setup');
}


function custom_theme_scripts()
{

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

    wp_enqueue_style('linearicons', get_template_directory_uri() . '/assets/css/linearicons.css');

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');

    wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

    wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

    wp_enqueue_style('bootstrapmin', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css');


    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');



    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, true);

    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true);

    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), null, true);

    wp_enqueue_script('owl-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true);

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');


function furn_custom_menus()
{
    $locations = array(
        'header' => __('Header menu', 'furn_cusom'),
        'footer' => __('Footer menu', 'furn_cusom'),

    );

    register_nav_menus($locations);

}

add_action('init', 'furn_custom_menus');

function remove_menu_id($items, $args)
{
    if ($args->theme_location === 'header') {
        $items = preg_replace('/ id=\".*?\"/', '', $items);
    }

    return $items;
}
add_filter('wp_nav_menu', 'remove_menu_id', 10, 2);

function add_menu_data_attributes($items, $args)
{
    if ($args->theme_location === 'header') {
        $menu_data_in = 'data-in="fadeInDown"';
        $menu_data_out = 'data-out="fadeOutUp"';

        $items = str_replace('<ul class="nav navbar-nav navbar-center">', '<ul class="nav navbar-nav navbar-center" ' . $menu_data_in . ' ' . $menu_data_out . '>', $items);
    }

    return $items;
}
add_filter('wp_nav_menu', 'add_menu_data_attributes', 10, 2);


/* ACF Options page in admin panel */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-generic',
		'redirect'		=> false
	));	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Other Settings',
		'menu_title'	=> 'Other Settings',
		'parent_slug'	=> 'theme-general-settings',
	));	
}
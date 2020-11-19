<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('customJs', get_template_directory_uri() . '/main.js', 'jquery', 1, true);
    wp_enqueue_script('customJs');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// add theme support for various things you can do in admin area

add_theme_support('menus'); // allows us to manage menus in admin and attach pages to menu
add_theme_support('post-thumbnails'); // allows us to have thumbnail image support on pages and posts

register_nav_menus(array(
    'top-menu' => 'Top menu'
));

add_image_size('post_image', 1100, 550, false);

//add support for widgets

register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

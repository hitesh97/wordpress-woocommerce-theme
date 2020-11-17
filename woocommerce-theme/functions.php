<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/main.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('customJs', get_template_directory_uri() . '/main.js', 'jquery', 1, true);
    wp_enqueue_script('customJs');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// add theme support so that admin area has 'menu' in appearance tab/menu
add_theme_support('menus');

register_nav_menus(array(
    'top-menu' => 'Top menu'
));

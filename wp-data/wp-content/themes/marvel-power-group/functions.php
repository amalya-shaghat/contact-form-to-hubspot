<?php
function marvelpower_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'marvelpower_enqueue_styles');

function marvelpower_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], '3.7.1', true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'marvelpower_enqueue_scripts');

function marvelpower_register_menus() {
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'marvelpower'),
        'footer_menu'  => __('Footer Menu', 'marvelpower')
    ]);
}
add_action('after_setup_theme', 'marvelpower_register_menus');
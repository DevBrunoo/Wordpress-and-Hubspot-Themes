<?php
// This file contains theme-specific functions, hooks, and filters to extend WordPress functionality.

function mathematic_theme_setup() {
    // Add support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mathematic-theme'),
        'footer' => __('Footer Menu', 'mathematic-theme'),
    ));
}

add_action('after_setup_theme', 'mathematic_theme_setup');

function mathematic_theme_scripts() {
    // Enqueue styles and scripts
    wp_enqueue_style('mathematic-style', get_stylesheet_uri());
    wp_enqueue_script('mathematic-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'mathematic_theme_scripts');
?>
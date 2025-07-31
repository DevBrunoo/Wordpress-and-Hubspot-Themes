<?php
// This file contains theme functions and features for the Chemical theme.

function chemical_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'chemical-theme'),
        'footer' => __('Footer Menu', 'chemical-theme'),
    ));
}

add_action('after_setup_theme', 'chemical_theme_setup');

function chemical_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('chemical-style', get_stylesheet_uri());

    // Enqueue custom styles
    wp_enqueue_style('chemical-custom-style', get_template_directory_uri() . '/assets/css/custom.css');

    // Enqueue custom JavaScript
    wp_enqueue_script('chemical-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'chemical_theme_scripts');
?>
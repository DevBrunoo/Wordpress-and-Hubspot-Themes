<?php
// Theme setup function
function religion_theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'religion-theme'),
        'footer' => __('Footer Menu', 'religion-theme'),
    ));
}

// Enqueue styles and scripts
function religion_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('religion-style', get_stylesheet_uri());

    // Enqueue custom stylesheet
    wp_enqueue_style('religion-custom-style', get_template_directory_uri() . '/assets/css/custom.css');

    // Enqueue custom JavaScript
    wp_enqueue_script('religion-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}

// Hook into the 'after_setup_theme' action
add_action('after_setup_theme', 'religion_theme_setup');

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'religion_theme_scripts');
?>
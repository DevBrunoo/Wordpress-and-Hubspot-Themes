<?php
// Theme setup function
function devops_theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'devops-wordpress-theme'),
        'footer' => __('Footer Menu', 'devops-wordpress-theme'),
    ));
}

// Enqueue scripts and styles
function devops_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('devops-style', get_template_directory_uri() . '/src/assets/css/style.css');

    // Enqueue main JavaScript file
    wp_enqueue_script('devops-main', get_template_directory_uri() . '/src/assets/js/main.js', array('jquery'), null, true);
}

// Hook into the 'after_setup_theme' action
add_action('after_setup_theme', 'devops_theme_setup');

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'devops_enqueue_scripts');
?>
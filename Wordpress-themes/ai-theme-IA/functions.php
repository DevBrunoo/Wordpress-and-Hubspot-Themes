<?php
// This file contains theme functions and features for the AI theme.

function ai_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ai-theme'),
        'footer' => __('Footer Menu', 'ai-theme'),
    ));
}

add_action('after_setup_theme', 'ai_theme_setup');

function ai_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('ai-style', get_stylesheet_uri());

    // Enqueue custom styles
    wp_enqueue_style('ai-custom-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue custom styles
    wp_enqueue_style('ai-custom-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue custom JavaScript for AI features
    wp_enqueue_script('ai-features-script', get_template_directory_uri() . '/assets/js/ai-features.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'ai_theme_scripts');
?>
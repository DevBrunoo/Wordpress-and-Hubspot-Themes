<?php
// This file contains custom functions and features specific to the AI theme.

function ai_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register custom post type for AI features
    register_post_type('ai_feature', array(
        'labels' => array(
            'name' => __('AI Features', 'ai-theme'),
            'singular_name' => __('AI Feature', 'ai-theme'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('after_setup_theme', 'ai_theme_setup');

function ai_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('ai-style', get_stylesheet_uri());

    // Enqueue custom styles
    wp_enqueue_style('ai-custom-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue custom JavaScript for AI features
    wp_enqueue_script('ai-features-script', get_template_directory_uri() . '/assets/js/ai-features.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'ai_enqueue_scripts');
?>
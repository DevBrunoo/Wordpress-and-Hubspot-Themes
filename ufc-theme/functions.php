<?php
// This file is used to define custom functions and features for the UFC theme.

// Enqueue styles and scripts
function ufc_theme_enqueue_scripts() {
    wp_enqueue_style('ufc-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ufc_theme_enqueue_scripts');

// Register navigation menus
function ufc_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ufc-theme'),
    ));
}

add_action('after_setup_theme', 'ufc_theme_setup');

// Add support for post thumbnails
add_theme_support('post-thumbnails');
?>
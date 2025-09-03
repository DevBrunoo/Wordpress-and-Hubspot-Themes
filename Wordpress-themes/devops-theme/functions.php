// filepath: /devops-theme/devops-theme/functions.php
<?php
function devops_theme_setup() {
    // Add support for automatic feed links 
    add_theme_support('automatic-feed-links');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register a primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'devops-theme'),
    ));
}

add_action('after_setup_theme', 'devops_theme_setup');

function devops_theme_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('devops-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'devops_theme_scripts');
?>
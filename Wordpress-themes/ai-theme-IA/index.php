<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <?php get_header(); ?>
    </header>
    <main>
        <h1>Welcome to the AI Theme</h1>
        <p>This theme is designed to showcase artificial intelligence features.</p>
    </main>
    <footer>
        <?php get_footer(); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
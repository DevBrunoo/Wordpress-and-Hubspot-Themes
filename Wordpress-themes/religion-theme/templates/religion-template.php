<?php
/*
Template Name: Religion Template
*/

get_header(); ?>

<div class="religion-content">
    <h1><?php the_title(); ?></h1>
    <div class="religion-description">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
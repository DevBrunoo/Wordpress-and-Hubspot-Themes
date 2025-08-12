<?php
/**
 * Template Name: DevOps Page
 * Description: A custom page template for displaying DevOps-related content.
 */

get_header(); ?>

<div class="devops-page-content">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
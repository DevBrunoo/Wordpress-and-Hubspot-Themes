<?php
// This is the main template file for the chemical theme.
// It serves as a fallback for all other templates and is responsible for displaying the content of the site.

get_header(); ?>

<main id="main" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Include the template for the content
            get_template_part('templates/content', get_post_type());
        endwhile;

        // Pagination
        the_posts_navigation();
    else :
        get_template_part('templates/content', 'none');
    endif;
    ?>
</main>

<?php
get_sidebar();
get_footer();
?>
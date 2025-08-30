<?php
/**
 * The main template file for the Religion Theme.
 *
 * This is the default template that displays the content of the site
 * when no other specific template files are available.
 *
 * @package ReligionTheme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'templates/religion-template' );
            endwhile;

            the_posts_navigation();

        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
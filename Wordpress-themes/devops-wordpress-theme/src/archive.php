<?php
get_header(); ?>

<main id="main" class="site-main">
    <header class="archive-header">
        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
        <div class="archive-description"><?php the_archive_description(); ?></div>
    </header>

    <?php if (have_posts()) : ?>
        <div class="archive-posts">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', get_post_type()); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'devops-wordpress-theme'); ?></p>
    <?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();
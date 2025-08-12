<?php
// filepath: /devops-theme/devops-theme/index.php
get_header(); ?>

<main>
    <h1>Welcome to the DevOps Theme</h1>
    <p>This is the main content area. Here you can display your posts, pages, or any other content.</p>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile;
    else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
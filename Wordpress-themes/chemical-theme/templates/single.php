<?php
get_header(); ?>

<div class="chemical-post">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1 class="chemical-post-title"><?php the_title(); ?></h1>
            <div class="chemical-post-meta">
                <span class="chemical-post-date"><?php echo get_the_date(); ?></span>
                <span class="chemical-post-author"><?php the_author(); ?></span>
            </div>
            <div class="chemical-post-content">
                <?php the_content(); ?>
            </div>
            <div class="chemical-post-tags">
                <?php the_tags('<span class="chemical-tag">', '</span><span class="chemical-tag">', '</span>'); ?>
            </div>
        <?php endwhile;
    else :
        echo '<p>No content found</p>';
    endif; ?>
</div>

<?php
get_sidebar();
get_footer(); ?>
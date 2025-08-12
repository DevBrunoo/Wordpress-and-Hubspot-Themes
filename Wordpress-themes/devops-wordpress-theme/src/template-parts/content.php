<?php
// This file contains the markup for displaying content in various templates, allowing for reusable content structure.

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-meta">
                    <?php
                    echo 'Posted on ' . get_the_date() . ' by ' . get_the_author();
                    ?>
                </div>
            </header>

            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div>

            <footer class="entry-footer">
                <?php
                echo 'Categories: ' . get_the_category_list( ', ' );
                ?>
            </footer>
        </article>
    <?php endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>
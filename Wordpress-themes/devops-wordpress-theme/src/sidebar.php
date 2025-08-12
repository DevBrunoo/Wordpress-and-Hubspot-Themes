<div class="sidebar">
    <h2>Sidebar</h2>
    <ul>
        <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'primary-sidebar' ); ?>
        <?php else : ?>
            <li><?php _e( 'Please add widgets to the sidebar.', 'devops-wordpress-theme' ); ?></li>
        <?php endif; ?>
    </ul>
</div>
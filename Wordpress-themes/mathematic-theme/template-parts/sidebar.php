<?php
// This file contains the sidebar template part, which can include widgets and additional navigation.
?>

<aside id="secondary" class="widget-area">
    <h2 class="widget-title"><?php _e('Sidebar', 'mathematic-theme'); ?></h2>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div id="sidebar-1" class="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    <?php endif; ?>
</aside>
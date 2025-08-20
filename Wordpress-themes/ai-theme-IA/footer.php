<?php
// This file contains the footer section of the AI theme.

?>

<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date('Y'); ?> AI Theme in WordPress. All rights reserved.</p>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
            ));
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
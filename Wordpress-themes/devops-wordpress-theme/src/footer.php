<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.</p>
        <nav class="footer-navigation">
            <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
        </nav>
    </div>
</footer>
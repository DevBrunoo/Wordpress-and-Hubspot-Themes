<?php
// Footer content for the Religion Theme
?>

<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Religion Theme. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
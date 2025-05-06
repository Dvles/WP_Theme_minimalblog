 
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-contact">
                <p>merveille[@]example.com</p>
                <p>(123) 456-7890</p>
            </div>

            <div class="footer-links">
            <?php
            $socials = ['linkedin', 'instagram', 'behance'];
            foreach ($socials as $social) {
                $url = get_theme_mod("{$social}_url");
                if ($url) {
                    printf(
                        '<a href="%s" target="_blank" class="footer-link block__link">%s</a>',
                        esc_url($url),
                        ucfirst($social)
                    );
                }
            }
            ?>
            </div>



        </div>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>
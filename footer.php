<?php
/**
 * The footer template - PIXEL PERFECT
 *
 * @package KVW_Lopik
 */

?>

        </div><!-- #content -->

        <footer id="colophon" class="site-footer">
            <div class="footer-content">
                <!-- Social Media Icons -->
                <div class="social-icons">
                    <a href="https://facebook.com/kvwlopik" target="_blank" rel="noopener" aria-label="Facebook">
                        <span>f</span>
                    </a>
                    <a href="https://instagram.com/kvw_lopik" target="_blank" rel="noopener" aria-label="Instagram">
                        <span>📷</span>
                    </a>
                    <a href="https://twitter.com/kvwlopik" target="_blank" rel="noopener" aria-label="Twitter">
                        <span>🐦</span>
                    </a>
                    <a href="https://youtube.com/kvwlopik" target="_blank" rel="noopener" aria-label="YouTube">
                        <span>▶</span>
                    </a>
                </div>

                <!-- Footer Links -->
                <div class="footer-links">
                    <a href="<?php echo esc_url( home_url( '/privacyverklaring' ) ); ?>">
                        Privacyverklaring
                    </a>
                    <a href="<?php echo esc_url( home_url( '/algemene-voorwaarden' ) ); ?>">
                        Algemene Voorwaarden
                    </a>
                </div>
            </div>
        </footer>

    </div><!-- #page -->

    <?php wp_footer(); ?>

</body>
</html>

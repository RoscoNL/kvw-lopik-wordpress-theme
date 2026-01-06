<?php
/**
 * The template for displaying the footer
 *
 * @package KVW_Lopik
 */

?>
        </div><!-- #content -->

        <footer id="colophon" class="site-footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section">
                        <h4><?php esc_html_e( 'Contact', 'kvw-lopik' ); ?></h4>
                        <p>
                            <strong><?php esc_html_e( 'Adres:', 'kvw-lopik' ); ?></strong><br>
                            Cornelis van Haarlemlaan 4<br>
                            3411 VJ Lopik<br>
                            Nederland
                        </p>
                        <p>
                            <strong><?php esc_html_e( 'Email:', 'kvw-lopik' ); ?></strong><br>
                            <a href="mailto:info@kvwlopik.nl">info@kvwlopik.nl</a>
                        </p>
                        <p>
                            <strong><?php esc_html_e( 'Telefoon:', 'kvw-lopik' ); ?></strong><br>
                            <a href="tel:0631137319">06-31 13 73 19</a>
                        </p>
                    </div>

                    <div class="footer-section">
                        <h4><?php esc_html_e( 'Links', 'kvw-lopik' ); ?></h4>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>"><?php esc_html_e( 'Privacyverklaring', 'kvw-lopik' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>"><?php esc_html_e( 'Algemene Voorwaarden', 'kvw-lopik' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/disclaimer' ) ); ?>"><?php esc_html_e( 'Disclaimer', 'kvw-lopik' ); ?></a></li>
                        </ul>
                    </div>

                    <div class="footer-section">
                        <h4><?php esc_html_e( 'Volg Ons', 'kvw-lopik' ); ?></h4>
                        <ul>
                            <li><a href="https://facebook.com/kvwlopik" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                            <li><a href="https://instagram.com/kvw_lopik" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                            <li><a href="https://twitter.com/kvwlopik" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                        </ul>
                    </div>

                    <?php
                    if ( is_active_sidebar( 'footer-widgets' ) ) {
                        dynamic_sidebar( 'footer-widgets' );
                    }
                    ?>
                </div>

                <div class="footer-bottom">
                    <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Alle rechten voorbehouden.', 'kvw-lopik' ); ?></p>
                </div>
            </div>
        </footer>
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * The header for our theme - PIXEL PERFECT
 *
 * @package KVW_Lopik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="header-container">
                <div class="site-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                        <div class="logo-icon">
                            <span class="sun">☀️</span>
                            <span class="tent">⛺</span>
                        </div>
                        <span class="logo-text"><span class="kvw">KVW</span> <span class="lopik">Lopik</span></span>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>
            </div>
        </header>

        <div id="content" class="site-content">

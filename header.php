<?php
/**
 * The header for our theme
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
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            🏕️ KVW Lopik
                        </a>
                        <?php
                    }
                    ?>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'fallback_cb'    => 'kvw_lopik_fallback_menu',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                    ) );
                    ?>
                </nav>
            </div>
        </header>

        <div id="content" class="site-content">

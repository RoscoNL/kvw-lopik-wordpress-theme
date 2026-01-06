<?php
/**
 * The template for displaying pages
 *
 * @package KVW_Lopik
 */

get_header();
?>

<main id="main" class="site-main">
    <?php
    while ( have_posts() ) {
        the_post();
        ?>

        <!-- PAGE HERO -->
        <section class="hero" style="background: linear-gradient(135deg, var(--kvw-blue) 0%, var(--kvw-cyan) 100%);">
            <div class="hero-content">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- PAGE CONTENT -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container" style="padding: 4rem 0;">
                <?php
                if ( has_post_thumbnail() ) {
                    ?>
                    <div class="entry-thumbnail" style="margin-bottom: 2rem; border-radius: 1rem; overflow: hidden;">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                    <?php
                }
                ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>

        <?php
    }
    ?>
</main>

<?php
get_footer();

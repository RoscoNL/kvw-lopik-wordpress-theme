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
        <section class="site-content" style="padding: 4rem 0; background: #fff;">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                <?php
                if ( has_post_thumbnail() ) {
                    ?>
                    <div class="entry-thumbnail" style="margin-bottom: 2rem; border-radius: 1rem; overflow: hidden;">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                    <?php
                }
                ?>

                <div class="entry-content" style="font-size: 1.125rem; line-height: 1.8; color: #333;">
                    <?php the_content(); ?>
                </div>
            </article>
        </section>

        <?php
    }
    ?>
</main>

<?php
get_footer();

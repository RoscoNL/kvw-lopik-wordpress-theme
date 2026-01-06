<?php
/**
 * The main template file
 *
 * @package KVW_Lopik
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class="entry-meta">
                            <?php kvw_lopik_posted_on(); ?>
                        </div>
                    </header>

                    <?php
                    if ( has_post_thumbnail() ) {
                        ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            }

            // Pagination
            the_posts_pagination( array(
                'prev_text' => esc_html__( 'Previous', 'kvw-lopik' ),
                'next_text' => esc_html__( 'Next', 'kvw-lopik' ),
            ) );
        } else {
            ?>
            <div class="no-posts">
                <p><?php esc_html_e( 'No posts found.', 'kvw-lopik' ); ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</main>

<?php
get_footer();

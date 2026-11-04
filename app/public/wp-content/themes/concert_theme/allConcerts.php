<?php
/*
Template Name: All Concerts
*/
?>
<?php
get_header();
?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php
                    the_title(
                        '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
                        '</a></h2>'
                    );
                    ?>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'concert_theme' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        )
                    );
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    echo '<p class="entry-meta">';
                    the_date();
                    echo ' | ';
                    the_author();
                    echo '</p>';
                    ?>
                </footer>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'No concerts found', 'concert_theme' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found here.', 'concert_theme' ); ?></p>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();

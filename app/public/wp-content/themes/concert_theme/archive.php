
<?php get_header(); ?>

<?php
$category_name = single_cat_title('', false);

if (is_category('solo-concert')) {
    $page_title = 'Solo Concerts';
    $description = 'Concerts I experienced on my own.';
} else {
    $page_title = $category_name . ' Concerts';
    $description = 'Explore all my concert experiences from ' . $category_name . '.';
}
?>
<!-- CATEGORY HEADER -->
<section class="archive-hero">

    <div class="archive-hero-content">

        <p class="section-label">MY CONCERT ARCHIVE</p>

        <h1>
            <?php single_cat_title(); ?> Concerts
        </h1>

        <p>
            Explore all my concert experiences
            from <?php single_cat_title(); ?>.
        </p>

    </div>

</section>

<!-- CONCERTS -->
<main class="archive-section">

    <div class="home-container">

        <div class="archive-heading">
            <h2>Concerts from <?php single_cat_title(); ?></h2>
        </div>

        <?php if (have_posts()) : ?>

            <div class="concert-grid">

                <?php while (have_posts()) : the_post(); ?>

                    <article class="concert-card">

                        <a href="<?php the_permalink(); ?>"
                           class="concert-image">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('large'); ?>

                            <?php else : ?>

                                <div class="no-image">
                                    Concert Photo
                                </div>

                            <?php endif; ?>

                        </a>

                        <div class="concert-info">

                            <h3><?php the_title(); ?></h3>

                            <p>
                                <?php
                                echo esc_html(
                                    wp_trim_words(
                                        get_the_excerpt(),
                                        18,
                                        '...'
                                    )
                                );
                                ?>
                            </p>

                            <a href="<?php the_permalink(); ?>"
                               class="read-more">
                                View Concert →
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <div class="archive-pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>

            <p>No concerts found in this category.</p>

        <?php endif; ?>

        <div class="archive-back">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                ← Back to Home
            </a>
        </div>

    </div>

</main>

<?php get_footer(); ?>

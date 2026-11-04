
<?php get_header(); ?>

<main>

    <!-- HERO -->
    <section class="home-hero">
        <div class="hero-content">
            <span class="hero-label">LIVE MUSIC & MEMORIES</span>

            <h1>My Concert Journey</h1>

            <p>
                A collection of concerts, favourite artists
                and unforgettable moments.
            </p>

            <a href="#concerts" class="hero-button">
                Explore Concerts →
            </a>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="home-section">
        <div class="home-container">

            <p class="section-label">EXPLORE</p>
            <h2>Browse Concerts</h2>

            <div class="year-grid">

                <?php
                $categories = get_categories(array(
                    'hide_empty' => false,
                    'slug' => array(
                        '2023', '2025', '2026', 'solo-concert'
                    )
                ));

                foreach ($categories as $category) :
                ?>

                    <a class="year-card"
                       href="<?php echo esc_url(get_category_link($category->term_id)); ?>">

                        <h3><?php echo esc_html($category->name); ?></h3>
                        <span>Explore →</span>

                    </a>

                <?php endforeach; ?>

            </div>
            
        </div>
    </section>

    <!-- LATEST CONCERTS -->
    <section class="home-section latest-section" id="concerts">
        <div class="home-container">

            <p class="section-label">MY EXPERIENCES</p>
            <h2>Latest Concerts</h2>

            <div class="concert-grid">

                <?php
                $concerts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ));

                if ($concerts->have_posts()) :
                    while ($concerts->have_posts()) :
                        $concerts->the_post();
                ?>

                    <article class="concert-card">

                        <a href="<?php the_permalink(); ?>" class="concert-image">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            } else {
                                echo '<div class="no-image">Concert Photo</div>';
                            }
                            ?>
                        </a>

                        <div class="concert-info">

                            <h3><?php the_title(); ?></h3>

                            <p>
                                <?php echo esc_html(
                                    wp_trim_words(get_the_excerpt(), 18, '...')
                                ); ?>
                            </p>

                            <a class="read-more" href="<?php the_permalink(); ?>">
                                View Concert →
                            </a>

                        </div>

                    </article>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p>No concerts found.</p>
                <?php endif; ?>

            </div>

           

        </div>
    </section>

    <section class="upcoming-preview">
        <div class="home-container">

            <p class="section-label">WHAT'S NEXT?</p>

            <h2>Upcoming Concerts</h2>

            <p>
                Take a look at the concerts I'm planning to attend!
            </p>

            <a href="<?php echo esc_url(
                get_post_type_archive_link('upcoming_concert')
            ); ?>" class="hero-button">
                View Upcoming Concerts →
            </a>

        </div>
    </section>

</main>

<?php get_footer(); ?>

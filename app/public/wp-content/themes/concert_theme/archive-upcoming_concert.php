
<?php get_header(); ?>

<section class="archive-hero">
    <div class="archive-hero-content">
        <p class="section-label">WHAT'S NEXT?</p>
        <h1>Upcoming Concerts</h1>
        <p>
            Concerts I'm planning to attend
            and artists I hope to see live!
        </p>
    </div>
</section>

<main class="archive-section">
    <div class="home-container">

        <div class="upcoming-grid">

            <?php
            $concerts = new WP_Query(array(
                'post_type' => 'upcoming_concert',
                'posts_per_page' => -1,
                'meta_key' => 'concert_date',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            ));

            if ($concerts->have_posts()) :
                while ($concerts->have_posts()) :
                    $concerts->the_post();

                    $date = get_post_meta(
                        get_the_ID(), 'concert_date', true
                    );

                    $location = get_post_meta(
                        get_the_ID(), 'concert_location', true
                    );

                    $status = get_post_meta(
                        get_the_ID(), 'ticket_status', true
                    );
            ?>

                <article class="upcoming-card">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="upcoming-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="upcoming-info">

                        <span class="upcoming-status">
                            <?php
                            if ($status === 'secured') {
                                echo 'Ticket secured';
                            } elseif ($status === 'waiting') {
                                echo 'Waiting for sale';
                            } else {
                                echo 'Wishlist';
                            }
                            ?>
                        </span>

                        <h2><?php the_title(); ?></h2>

                        <?php if ($date) : ?>
                            <p>📅 <?php echo esc_html($date); ?></p>
                        <?php endif; ?>

                        <?php if ($location) : ?>
                            <p>📍 <?php echo esc_html($location); ?></p>
                        <?php endif; ?>

                        <div class="upcoming-description">
                            <?php the_excerpt(); ?>
                        </div>

                    </div>

                </article>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p>No upcoming concerts yet!</p>
            <?php endif; ?>

        </div>

        <div class="archive-back">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                ← Back to Home
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>

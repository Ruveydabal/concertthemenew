<?php get_header(); ?>

<main class="single-concert">

    <?php while ( have_posts() ) : the_post(); ?>

        <article class="concert-detail">

            <a class="back-link" href="<?php echo home_url(); ?>">
                ← Back to all concerts
            </a>

            <h1><?php the_title(); ?></h1>

            <div class="concert-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
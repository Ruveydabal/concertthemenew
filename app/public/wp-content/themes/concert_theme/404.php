
<?php get_header(); ?>

<main class="error-page">
    <div class="home-container">

        <h1>404 - Page Not Found</h1>

        <p>
            Oops! This page doesn't exist.
            Let's get you back to the music!        
        </p>

        <a href="<?php echo esc_url(home_url('/')); ?>"
           class="hero-button">
            Back to Home →
        </a>

    </div>
</main>

<?php get_footer(); ?>

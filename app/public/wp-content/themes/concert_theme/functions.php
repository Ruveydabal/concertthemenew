<?php

function concert_theme_styles() {
    wp_enqueue_style(
        'concert-theme-style',
        get_stylesheet_uri()
    );
}

function concert_theme_setup() {
    add_theme_support('post-thumbnails');
}

function register_upcoming_concerts() {

    register_post_type('upcoming_concert', array(
        'labels' => array(
            'name' => 'Upcoming Concerts',
            'singular_name' => 'Upcoming Concert',
            'add_new_item' => 'Add New Concert',
            'edit_item' => 'Edit Concert'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'upcoming'),
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
        'supports' => array(     
            'title',
            'editor',
            'thumbnail',
            'custom-fields'
        )
    ));
}

add_action('init', 'register_upcoming_concerts');

add_action('after_setup_theme', 'concert_theme_setup');

add_action('wp_enqueue_scripts', 'concert_theme_styles');
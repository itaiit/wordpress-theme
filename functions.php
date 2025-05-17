<?php
// Enqueue theme styles and scripts
function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('progress-bar', get_template_directory_uri() . '/js/progress-bar.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Add theme support for various features
function theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');

// Register navigation menu
function register_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme'),
    ));
}
add_action('init', 'register_theme_menus');

// Add a reading progress bar
function add_progress_bar() {
    echo '<div class="progress-bar" id="progress-bar"></div>';
}
add_action('wp_body_open', 'add_progress_bar');
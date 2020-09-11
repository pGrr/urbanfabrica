<?php
/**
 * Enqueue scripts and styles.
 */
function urbanfabrica_scripts() {
    wp_enqueue_style( 'urbanfabrica-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'pgrr-style', 'rtl', 'replace' );
    wp_enqueue_script( 'wp-api' );
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/46de57cbc9.js', array(), _S_VERSION, false);
    wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array(), _S_VERSION, false);
    wp_enqueue_script( 'urbanfabrica-script', get_stylesheet_directory_uri() . '/script.js', array(), _S_VERSION, false );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'urbanfabrica_scripts' );
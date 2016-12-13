<?php

/**
 * Enqueue scripts and styles.
 */
function ap_scripts() {
    wp_enqueue_style( 'ap-style', get_template_directory_uri() . '/assets/build/css/theme.min.css' );
}
add_action( 'wp_enqueue_scripts', 'ap_scripts' );
<?php

/**
 * Enqueue scripts and styles.
 */
function ap_scripts() {
    wp_enqueue_style( 'ap-style', get_template_directory_uri() . '/assets/build/css/theme.min.css' );

    wp_enqueue_script( 'ap-gmaps', 'https://maps.googleapis.com/maps/api/js?key='. get_field( 'gmaps_api_key', 'option' ) .'&region=PT', array(), '', false );
    wp_enqueue_script( 'ap-js', get_template_directory_uri() . '/assets/build/js/theme.min.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'ap_scripts' );
<?php

/**
 * Change the WordPress default menu item active class to match uikit.
 *
 */

add_filter('nav_menu_css_class' , 'uikit_nav_class' , 10 , 2);

function uikit_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'uk-active ';
    }
    return $classes;
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
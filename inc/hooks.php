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
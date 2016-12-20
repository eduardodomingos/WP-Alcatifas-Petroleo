<?php
/**
 * Returns the most recent posts
 *
 * @package Eduardo Domingos
 * @since 0.1.0
 * @author Eduardo Domingos
 * @param $post_type
 * @param $nb_posts
 * @param $excluded_cats
 *
 * @return object
 *
 */
function ap_get_latest_posts($post_type = 'post', $nb_posts = -1, $excluded_cats = array()) {

    $excluded_cats_ids = array();

    foreach ($excluded_cats as $cat) {
        array_push($excluded_cats_ids, get_cat_ID($cat));
    }

    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => $nb_posts,
        'category__not_in' => $excluded_cats_ids,
        'orderby' => 'date',
    ];

    return new WP_Query($args);
}
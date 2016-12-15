<?php

function ap_get_template_part( $slug, $name = null, $data=array() ) {
    if ( $name ){
        $file = "{$slug}-{$name}.php";
    }
    else{
        $file = "{$slug}.php";
    }
    extract( $data );
    include locate_template( $file );
}

function ap_get_headlines(){
    $home_id = ap_get_active_homepage();
    $headlines = get_field('headlines', $home_id);
    ap_get_template_part('template-parts/home', 'headlines', array('headlines' => $headlines));
}

function ap_get_active_homepage(){
    $home_active_id = 0;
    //arguments to find the
    $args = [
        'post_type' => 'home',
        'post_status' => 'publish',
        'orderby' => 'date',
        'posts_per_page' => 1,
        'fields' => 'ids'
    ];
    $home_query = new WP_Query( $args );
    $home_active = $home_query->posts;
    if( !empty( $home_active  ) ){
        $home_active_id = $home_active[0];
    }
    return $home_active_id;
}
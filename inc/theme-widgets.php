<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ap_widgets_init() {
    // Homepage sections
    register_sidebar( array(
        'name'          => __( 'Homepage sections', 'rm' ),
        'id'            => 'ap-homepage-sections',
        'description'	=> '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_widget( 'Ap_intro' );
    register_widget( 'Ap_ask_quote' );

    /*register_widget( 'Rm_Latest_News' );
    register_widget( 'Rm_About_Rm' );
    register_widget( 'Rm_Why_Rm' );
    register_widget( 'Rm_Courses' );
    register_widget( 'Rm_Download' );
    register_widget( 'Rm_Text_Banner' );
    register_widget( 'Rm_Contacts' );*/
}
add_action( 'widgets_init', 'ap_widgets_init' );

class Ap_intro extends WP_Widget {
    function __construct() {
        $widget_ops = array( 'description' => __( 'Mostra banner de intro', 'ap' ) );
        parent::__construct( false, __('Intro','ap' ), $widget_ops );

    }
    function widget( $args, $instance ) {
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = $instance['title'];
        $text = empty( $instance['text'] ) ? '' : $instance['text'];
        echo $args['before_widget'];
        $markup = '';
        echo $markup;
        echo $args['after_widget'];
    }
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = !empty( $new_instance['title'] ) ? $new_instance['title'] : '';
        $instance['text'] =  $new_instance['text'];
        return $instance;
    }
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'text' => '', 'title' => '', 'subtitle' => '') );
        $markup = '<p>';
        $markup.= '<label for="'. $this->get_field_name( 'title' ) .'">'. esc_html( 'Título:', 'ap') .'</label>';
        $markup.= '<input class="widefat" id="'. $this->get_field_id( 'title' ) .'" name="'. $this->get_field_name( 'title' ) .'" type="text" value="'. esc_attr( $instance['title'] ) .'"  />';
        $markup.= '</p>';

        $markup.= '<p>';
        $markup.= '<label for="'. $this->get_field_name( 'description' ) .'">'. esc_html( 'Texto:', 'ap') .'</label>';
        $markup.= '<textarea class="widefat" rows="10" cols="20" id="'. $this->get_field_id( 'text' ) .'" name="'. $this->get_field_name( 'text' ) .'">'. esc_textarea( $instance['text'] ) .'</textarea>';
        $markup.= '</p>';

        echo $markup;
    }
}

class Ap_ask_quote extends WP_Widget {
    function __construct() {
        $widget_ops = array( 'description' => __( 'Banner Orçamento', 'ap' ) );
        parent::__construct( false, __('Banner Orçamento','ap' ), $widget_ops );
    }
    function widget( $args, $instance ) {
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        $text = empty( $instance['text'] ) ? '' : $instance['text'];
        echo $args['before_widget'];
        $markup = '<div class="uk-block tm-block-small tm-block-dark tm-banner">';
        $markup.= '<div class="uk-container uk-container-center">';
        $markup.= '<div class="uk-grid uk-flex uk-flex-middle" data-uk-grid-margin>';
        $markup.= '<div class="uk-width-large-2-3">';
        $markup.= '<p class="tm-banner__text">'. $text .'</p>';
        $markup.= '</div>';
        $markup.= '<div class="uk-width-large-1-3 uk-text-center">';
        $markup.= '<a href="#ask-quote-modal" class="uk-button uk-button-large uk-button-primary" data-uk-modal="{center:true}">Pedir orçamento</a>';
        $markup.= '</div>';
        $markup.= '</div>';
        $markup.= '</div>';
        $markup.= '</div>';
        echo $markup;
        echo $args['after_widget'];
    }
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['text'] = !empty( $new_instance['text'] ) ? $new_instance['text'] : '';
        return $instance;
    }
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'text' => '') );

        $markup = '<p>';
        $markup.= '<label for="'. $this->get_field_name( 'text' ) .'">'. esc_html( 'Text:', 'rm') .'</label>';
        $markup.= '<textarea class="widefat" rows="10" cols="20" id="'. $this->get_field_id( 'text' ) .'" name="'. $this->get_field_name( 'text' ) .'">'. esc_textarea( $instance['text'] ) .'</textarea>';
        $markup.= '</p>';
        echo $markup;
    }
}
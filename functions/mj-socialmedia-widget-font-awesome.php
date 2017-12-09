<?php

/* Integrate font-awesome */
add_action('init', 'register_style');

function register_style() {
    wp_register_style( 'font-awesome', plugins_url('../css/font-awesome.min.css', __FILE__), false, '4.7.0', 'all');
    wp_register_style( 'mj-socialmedia-widget', plugins_url('../css/mj-socialmedia-widget.css', __FILE__), false, '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_style');

function enqueue_style(){
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'mj-socialmedia-widget' );
}
?>
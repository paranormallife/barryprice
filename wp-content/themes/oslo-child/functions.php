<?php 

add_action( 'wp_enqueue_scripts', 'bp_enqueue_styles' );
function bp_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
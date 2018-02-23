<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

function my_theme_enqueue_scripts() {
    wp_enqueue_script( 'js-style', get_theme_file_uri().'/js/main.js', array("jquery") );

}
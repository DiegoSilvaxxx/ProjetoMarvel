<?php

function bootstrap_scripts() {
    wp_enqueue_style('bootstrap_css','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('style_css',get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('bootstrap_js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'),'',true );
    
}
add_action('wp_enqueue_scripts', 'bootstrap_scripts');
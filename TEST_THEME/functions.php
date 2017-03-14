<?php

function register_styles(){
    wp_register_style('style', get_template_directory_uri() . 
 		'/style.css');
    wp_enqueue_style('style'); 

}

add_action( 'wp_enqueue_scripts', 'register_styles' );

function load_my_script() {
  
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4');
    wp_enqueue_script('jquery');

   	wp_register_script('bootstrap', get_template_directory_uri() . 
 		'/js/bootstrap.js', array ('jquery'), null, false);
    wp_enqueue_script('bootstrap');

	wp_register_script('mixitup', get_template_directory_uri() . 
 		'/js/mixitup.min.js', array ('jquery'), null, false);
    wp_enqueue_script('mixitup');

 

}

add_action('wp_enqueue_scripts', 'load_my_script');
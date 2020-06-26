<?php 

function load_styles(){
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
  wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

add_action('wp_enqueue_scripts','load_styles');

function load_scripts(){
  wp_enqueue_script( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ) );


}

add_action( 'wp_enqueue_scripts', 'load_scripts');
<?php
add_action('after_setup_theme' , 'first_wp');

function first_wp(){
    add_theme_support('post-formats', array( 'aside', 'gallery','audio','video'));
    add_theme_support('post-thumbnails');
} 
add_action('wp_enqueue_scripts' , 'first_wp_enqueue');
function first_wp_enqueue(){
    wp_enqueue_style('bootsrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('custom', get_template_directory_uri().'/css/clean-blog.min.css');
    wp_enqueue_style('fonts-lora', '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('fonts-open_sans', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
}
?>
<?php 

function stocker_assets() {
    // Enqueue a stylesheet
    wp_enqueue_style('stocker-animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('stocker-lightbox', get_template_directory_uri() . '/asset/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('stocker-owl', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('stocker-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('stocker-style',get_stylesheet_uri() );

    // Enqueue a script
    wp_enqueue_script('wow-min-script', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('easing-min-script', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('waypoint-min-script', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('counterup-min-script', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('lightbox-min-script', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('carousel-min-script', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'stocker_assets' );
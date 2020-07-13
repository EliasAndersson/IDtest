<?php
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('IBM-font', 'https://fonts.googleapis.com/css?family=IBM+Plex+Sans');
    wp_enqueue_style('IBM-font-light', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300');
    wp_enqueue_style('IBM-font-medium', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500');
    wp_enqueue_style('style', get_stylesheet_uri());

    add_action('wp_enqueue_scripts', 'idtest_enqueue_custom_js');
    function idtest_enqueue_custom_js() {
        wp_enqueue_script('slider', get_stylesheet_directory_uri().'/assets/script/slider.js', array( 'jquery' ));
    }
?>
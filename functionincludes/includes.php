<?php

// Loading css and javascript.

function loadingFiles() {
    // Include Javascript files.
    wp_enqueue_script('jquery_script_Js', get_theme_file_uri('assets/js/jquery-3.5.1.min.js'), null, null, true);
    wp_enqueue_script('bootstrap_Js', get_theme_file_uri('assets/js/bootstrap.bundle.min.js'), null, null, true);
    
    if (is_front_page())
    {
        wp_enqueue_style('animate_Css', get_theme_file_uri('assets/vendor/animate/animate.css'));
        wp_enqueue_style('bootstrap_Css', get_theme_file_uri('assets/css/bootstrap.css'));
        wp_enqueue_style('owlCarousel_Css', get_theme_file_uri('assets/vendor/owl-carousel/css/owl.carousel.css'));
    

        wp_enqueue_script('wow_Js', get_theme_file_uri('assets/vendor/wow/wow.min.js'), null, null, true);
        wp_enqueue_script('owl_Js', get_theme_file_uri('assets/vendor/owl-carousel/js/owl.carousel.min.js'), null, null, true);
        wp_enqueue_script('waypoint_Js', get_theme_file_uri('assets/vendor/waypoints/jquery.waypoints.min.js'), null, null, true);
        wp_enqueue_script('animate_number_Js', get_theme_file_uri('assets/vendor/animateNumber/jquery.animateNumber.min.js'), null, null, true);
    }

    wp_enqueue_script('google_maps', get_theme_file_uri('assets/js/google-maps.js'), null, null, true);
    wp_enqueue_script('theme_Js', get_theme_file_uri('assets/js/theme.js'), null, null, true);


    // Theme Styles.
    wp_enqueue_style('bootstrap_style_css', get_theme_file_uri('assets/css/bootstrap.css'));
    wp_enqueue_style('main_icons_style_css', get_theme_file_uri('assets/css/maicons.css'));
    wp_enqueue_style('custom_theme_style_css', get_theme_file_uri('assets/css/theme.css'));

    // This will load your default style.css
    wp_enqueue_style('main_style_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'loadingFiles');
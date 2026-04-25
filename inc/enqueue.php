<?php
function estatein_enqueue_assets() {
    wp_enqueue_style('estatein-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0.0');
    wp_enqueue_style('estatein-responsive', get_template_directory_uri() . '/assets/css/responsive.css', ['estatein-main'], '1.0.0');
    wp_enqueue_script('estatein-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'estatein_enqueue_assets' );
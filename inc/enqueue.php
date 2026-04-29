<?php
function estatein_enqueue_assets() {
    // Google Fonts — Inter
    wp_enqueue_style(
        'estatein-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        [],
        null
    );
    wp_enqueue_style('estatein-main', get_template_directory_uri() . '/assets/css/main.css', ['estatein-fonts'], '1.0.1');
    wp_enqueue_style('estatein-responsive', get_template_directory_uri() . '/assets/css/responsive.css', ['estatein-main'], '1.0.1');
    wp_enqueue_script('estatein-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.1', true);
}
add_action( 'wp_enqueue_scripts', 'estatein_enqueue_assets' );
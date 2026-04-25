<?php
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/acf-fields.php';

function estatein_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', ['search-form','comment-form','gallery','caption'] );
    register_nav_menus(['primary' => __('Primary Menu', 'estatein')]);
}
add_action( 'after_setup_theme', 'estatein_setup' );
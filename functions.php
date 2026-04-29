<?php
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/acf-fields.php';

function estatein_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', ['search-form','comment-form','gallery','caption','script','style'] );
    add_theme_support( 'custom-logo' );
    register_nav_menus(['primary' => __('Primary Menu', 'estatein')]);
}
add_action( 'after_setup_theme', 'estatein_setup' );

// SEO: meta description + OG tags
function estatein_meta_description() {
    if ( is_singular() ) {
        global $post;
        $desc = wp_strip_all_tags(get_the_excerpt($post));
        if ( ! $desc ) $desc = 'Estatein — Discover your dream property. Expert real estate services for buying, selling, and investing.';
        $title = get_the_title();
    } else {
        $desc  = 'Estatein — Discover your dream property. Expert real estate services for buying, selling, and investing.';
        $title = get_bloginfo('name');
    }
    echo '<meta name="description" content="' . esc_attr(substr($desc, 0, 160)) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr(substr($desc, 0, 160)) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
}
add_action('wp_head', 'estatein_meta_description', 1);

// Disable block editor for pages to avoid template conflicts
add_filter('use_block_editor_for_post_type', function($use, $post_type) {
    if ($post_type === 'page') return false;
    return $use;
}, 10, 2);

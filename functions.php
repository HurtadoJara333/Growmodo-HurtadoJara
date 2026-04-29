<?php
// Forzar HTTP_HOST para ngrok — debe ir PRIMERO
if ( defined('NGROK_URL') && NGROK_URL ) {
    $host = parse_url(NGROK_URL, PHP_URL_HOST);
    $_SERVER['HTTP_HOST']   = $host;
    $_SERVER['SERVER_NAME'] = $host;
    $_SERVER['HTTPS']       = 'on';
}
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

if ( defined('NGROK_URL') && NGROK_URL ) {
    $ngrok = rtrim(NGROK_URL, '/');
    // Fuerza HTTP_HOST antes de que WordPress resuelva cualquier URL
add_action('template_redirect', function() {
    if ( defined('NGROK_URL') && NGROK_URL ) {
        $host = parse_url(NGROK_URL, PHP_URL_HOST);
        $_SERVER['HTTP_HOST']   = $host;
        $_SERVER['SERVER_NAME'] = $host;
        $_SERVER['HTTPS']       = 'on';
    }
}, 1);

    add_filter( 'option_siteurl', fn() => $ngrok );
    add_filter( 'option_home',    fn() => $ngrok );

    add_filter( 'the_content', fn($c) => str_replace('https://localhost', $ngrok, $c) );

    add_filter( 'upload_dir', function($dirs) use ($ngrok) {
        $dirs['url']     = str_replace('https://localhost', $ngrok, $dirs['url']);
        $dirs['baseurl'] = str_replace('https://localhost', $ngrok, $dirs['baseurl']);
        return $dirs;
    });

    // Links de páginas del navbar
    add_filter( 'page_link', fn($link) => str_replace('https://localhost', $ngrok, $link) );
    add_filter( 'post_link', fn($link) => str_replace('https://localhost', $ngrok, $link) );
    add_filter( 'post_type_link', fn($link) => str_replace('https://localhost', $ngrok, $link) );

    // Por si WordPress usa HTTP_HOST para construir URLs
    $_SERVER['HTTP_HOST']   = parse_url($ngrok, PHP_URL_HOST);
    $_SERVER['HTTPS']       = 'on';
    $_SERVER['SERVER_NAME'] = parse_url($ngrok, PHP_URL_HOST);
}

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
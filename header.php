<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ANNOUNCEMENT BAR -->
<div class="announcement-bar" id="announcementBar">
    <div class="announcement-bar__content">
        <span class="announcement-bar__dot"></span>
        <p>Discover Your Dream Property with Estatein. <a href="<?php echo get_permalink(get_page_by_path('properties')); ?>">Learn More</a></p>
    </div>
    <button class="announcement-bar__close" id="closeAnnouncement" aria-label="Close">&#x2715;</button>
</div>

<!-- NAVBAR -->
<header class="navbar" id="navbar">
    <div class="container navbar__inner">

        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="navbar__logo">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 2L4 8V20L14 26L24 20V8L14 2Z" fill="#7B5EA7"/>
                <path d="M14 6L7 10.5V17.5L14 22L21 17.5V10.5L14 6Z" fill="#9B7EC7"/>
                <circle cx="14" cy="14" r="3" fill="#fff"/>
            </svg>
            <span>Estatein</span>
        </a>

        <!-- Nav Links -->
        <nav class="navbar__nav" id="navMenu">
            <a href="<?php echo home_url(); ?>" class="navbar__link <?php echo is_front_page() ? 'active' : ''; ?>">Home</a>
            <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="navbar__link <?php echo is_page('about') ? 'active' : ''; ?>">About Us</a>
            <a href="<?php echo get_permalink(get_page_by_path('properties')); ?>" class="navbar__link <?php echo is_page('properties') || is_singular('property') ? 'active' : ''; ?>">Properties</a>
            <a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="navbar__link <?php echo is_page('services') ? 'active' : ''; ?>">Services</a>
        </nav>

        <!-- CTA + Hamburger -->
        <div class="navbar__actions">
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-outline navbar__cta">Contact Us</a>
            <button class="navbar__hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>
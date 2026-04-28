<!-- CTA BANNER -->
<?php get_template_part('template-parts/cta-banner'); ?>

<!-- FOOTER -->
<footer class="footer">
    <div class="container footer__inner">

        <!-- Brand col -->
        <div class="footer__brand">
<a href="<?php echo home_url(); ?>" class="navbar__logo footer__logo">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-icon.svg" alt="Estatein" width="160" height="48">
</a>
            <form class="footer__newsletter" onsubmit="return false;">
                <div class="footer__newsletter-input">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                    <input type="email" placeholder="Enter Your Email">
                    <button type="submit" aria-label="Subscribe">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Links cols -->
        <div class="footer__links">
            <div class="footer__col">
                <h4>Home</h4>
                <ul>
                    <li><a href="#hero">Hero Section</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#properties">Properties</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#faq">FAQ's</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>About Us</h4>
                <ul>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>#story">Our Story</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>#works">Our Works</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>#how">How It Works</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>#team">Our Team</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>#clients">Our Clients</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Properties</h4>
                <ul>
                    <li><a href="<?php echo get_permalink(get_page_by_path('properties')); ?>">Portfolio</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('properties')); ?>#categories">Categories</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>#valuation">Valuation Mastery</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>#marketing">Strategic Marketing</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>#negotiation">Negotiation Wizardry</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>#closing">Closing Success</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>#management">Property Management</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact Form</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>#offices">Our Offices</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer__bottom">
        <div class="container footer__bottom-inner">
            <p>&copy;<?php echo date('Y'); ?> Estatein. All Rights Reserved. <a href="#">Terms &amp; Conditions</a></p>
            <div class="footer__socials">
                <a href="#" aria-label="Facebook">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </a>
                <a href="#" aria-label="LinkedIn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
                <a href="#" aria-label="Twitter">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                </a>
                <a href="#" aria-label="YouTube">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.96A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0D0D14"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
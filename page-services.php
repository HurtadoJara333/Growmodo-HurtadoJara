<?php get_header(); ?>

<main class="services-page">

<!-- HERO SECTION -->
<section class="services-hero">
<div class="container">
<div class="section-label">Our Services</div>
<h1>Elevate Your Real Estate Experience</h1>
<p>Welcome to Estatein, where your real estate aspirations meet expert guidance. Explore our comprehensive range of services, each designed to cater to your unique needs and dreams.</p>
</div>
</section>

<!-- SERVICES STRIP -->
<section class="services-strip">
<div class="container">
<div class="services-strip__grid">
<a href="#unlock" class="services-strip__item">
<div class="services-strip__icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
</div>
<span>Find Your Dream Home</span>
<div class="services-strip__arrow">↗</div>
</a>
<a href="#unlock" class="services-strip__item">
<div class="services-strip__icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
</div>
<span>Unlock Property Value</span>
<div class="services-strip__arrow">↗</div>
</a>
<a href="#management" class="services-strip__item">
<div class="services-strip__icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
</div>
<span>Effortless Property Management</span>
<div class="services-strip__arrow">↗</div>
</a>
<a href="#investments" class="services-strip__item">
<div class="services-strip__icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
</div>
<span>Smart Investments, Informed Decisions</span>
<div class="services-strip__arrow">↗</div>
</a>
</div>
</div>
</section>

<!-- UNLOCK PROPERTY VALUE -->
<section class="service-block" id="unlock">
<div class="container">
<div class="service-block__header">
<div class="section-label">Sell a Property</div>
<h2>Unlock Property Value</h2>
<p>Selling your property should be a rewarding experience, and at Estatein, we make sure it is. Our Property Selling Service is designed to maximize the value of your property, ensuring you get the best deal possible.</p>
</div>

<div class="service-block__grid">
<?php
$sell_services = [
['icon'=>'🏠', 'title'=>'Valuation Mastery', 'desc'=>'Discover the true worth of your property with our expert valuation services.'],
['icon'=>'📢', 'title'=>'Strategic Marketing', 'desc'=>'Selling a property requires more than just a listing; it demands a strategic marketing approach.'],
['icon'=>'🤝', 'title'=>'Negotiation Wizardry', 'desc'=>'Negotiating the best deal is an art, and our negotiation experts are masters of it.'],
];
foreach ($sell_services as $s) : ?>
<div class="service-card">
<div class="service-card__icon"><?php echo $s['icon']; ?></div>
<h3><?php echo $s['title']; ?></h3>
<p><?php echo $s['desc']; ?></p>
</div>
<?php endforeach; ?>

<!-- CTA Card -->
<div class="service-cta-card">
<h3>Unlock the Value of Your Property Today</h3>
<p>Ready to unlock the true value of your property? Explore our Property Selling Service categories and let us help you achieve the best deal possible for your valuable asset.</p>
<a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-outline">Learn More</a>
</div>
</div>
</div>
</section>

<!-- EFFORTLESS PROPERTY MANAGEMENT -->
<section class="service-block" id="management">
<div class="container">
<div class="service-block__header">
<div class="section-label">Manage a Property</div>
<h2>Effortless Property Management</h2>
<p>Owning a property should be a pleasure, not a hassle. Estatein's Property Management Service takes the stress out of property ownership, offering comprehensive solutions tailored to your needs.</p>
</div>

<div class="service-block__grid">
<?php
$mgmt_services = [
['icon'=>'👥', 'title'=>'Tenant Harmony', 'desc'=>'Our Tenant Management services ensure that your tenants have a smooth and reducing vacancies.'],
['icon'=>'🔧', 'title'=>'Maintenance Ease', 'desc'=>'Say goodbye to property maintenance headaches. We handle all aspects of property upkeep.'],
['icon'=>'💰', 'title'=>'Financial Peace of Mind','desc'=>'Managing property finances can be complex. Our financial experts take care of rent collection.'],
];
foreach ($mgmt_services as $s) : ?>
<div class="service-card">
<div class="service-card__icon"><?php echo $s['icon']; ?></div>
<h3><?php echo $s['title']; ?></h3>
<p><?php echo $s['desc']; ?></p>
</div>
<?php endforeach; ?>

<div class="service-cta-card">
<h3>Experience Effortless Property Management</h3>
<p>Ready to experience hassle-free property management? Explore our Property Management Service categories and let us handle the complexities while you enjoy the benefits.</p>
<a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-outline">Learn More</a>
</div>
</div>
</div>
</section>

<!-- SMART INVESTMENTS -->
<section class="service-block" id="investments">
<div class="container">
<div class="service-block__investments">
<div class="service-block__investments-left">
<div class="section-label">Invest</div>
<h2>Smart Investments, Informed Decisions</h2>
<p>Building a real estate portfolio requires a strategic approach. Estatein's Investment Advisory Service empowers you to make smart investments and informed decisions.</p>

<div class="service-cta-card">
<h3>Unlock Your Investment Potential</h3>
<p>Explore our Property Management Service categories while you enjoy the benefits of property ownership.</p>
<a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-outline">Learn More</a>
</div>
</div>

<div class="service-block__investments-right">
<?php
$invest_services = [
['icon'=>'📈', 'title'=>'Market Insight', 'desc'=>'Stay ahead of market trends with our expert Market Analysis. We provide in-depth insights into real estate market conditions.'],
['icon'=>'🎯', 'title'=>'ROI Assessment', 'desc'=>'Make investment decisions with confidence. Our ROI Assessment services evaluate the potential returns on your investments.'],
['icon'=>'🗺️', 'title'=>'Customized Strategies', 'desc'=>'Every investor is unique, and so are their goals. We develop Customized Investment Strategies tailored to your specific needs.'],
['icon'=>'🌐', 'title'=>'Diversification Mastery', 'desc'=>'Diversify your real estate portfolio effectively. Our experts guide you in spreading your investments across various property types and locations.'],
];
foreach ($invest_services as $s) : ?>
<div class="service-card">
<div class="service-card__icon"><?php echo $s['icon']; ?></div>
<h3><?php echo $s['title']; ?></h3>
<p><?php echo $s['desc']; ?></p>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</section>

<!-- CTA Banner -->
<?php get_template_part('template-parts/cta-banner'); ?>

</main>

<?php get_footer(); ?>
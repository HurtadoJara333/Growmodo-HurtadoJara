<section class="section faq" id="faq">
<div class="container">
<div class="section-header">
<div class="section-header__content">
<div class="section-label">FAQ</div>
<h2>Frequently Asked Questions</h2>
<p>Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.</p>
</div>
<a href="#" class="btn btn-outline">View All FAQ's</a>
</div>

<div class="faq-grid">
<?php
$faqs = [
['q'=>'How do I search for properties on Estatein?', 'a'=>'Learn how to use our user-friendly search tools to find properties that match your criteria.'],
['q'=>'What documents do I need to sell my property through Estatein?', 'a'=>'Find out about the necessary documentation for listing your property with us.'],
['q'=>'How can I contact an Estatein agent?', 'a'=>'Discover the different ways you can get in touch with our experienced agents.'],
];
foreach ($faqs as $i => $faq) : ?>
<div class="faq-item" id="faq-<?php echo $i; ?>">
<h3 class="faq-item__question">
<span><?php echo $faq['q']; ?></span>
<span class="faq-item__icon">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
</h3>
<div class="faq-item__answer">
<p><?php echo $faq['a']; ?></p>
<a href="#" class="faq-item__read-more">Read More</a>
</div>
</div>
<?php endforeach; ?>
</div>

<div class="slider-nav">
<span class="slider-nav__count"><span class="text-white">01</span> of 10</span>
<div class="slider-nav__arrows">
<button class="slider-nav__btn" aria-label="Previous">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
</button>
<button class="slider-nav__btn" aria-label="Next">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
</button>
</div>
</div>
</div>
</section>
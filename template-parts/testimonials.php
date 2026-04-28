<section class="section testimonials" id="testimonials">
<div class="container">
<div class="section-header">
<div class="section-header__content">
<div class="section-label">Testimonials</div>
<h2>What Our Clients Say</h2>
<p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
</div>
<a href="#" class="btn btn-outline">View All Testimonials</a>
</div>

<div class="testimonials-grid">
<?php
$reviews = [
['name'=>'Wade Warren', 'location'=>'USA, California', 'title'=>'Exceptional Service!', 'text'=>'Our experience with Estatein was outstanding. Their team\'s dedication and professionalism made finding our dream home a breeze. Highly recommended!', 'rating'=>5, 'initial'=>'W'],
['name'=>'Emelie Thomson','location'=>'USA, Florida', 'title'=>'Efficient and Reliable', 'text'=>'Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn\'t be happier with the results.', 'rating'=>5, 'initial'=>'E'],
['name'=>'John Mans', 'location'=>'USA, Nevada', 'title'=>'Trusted Advisors', 'text'=>'The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!', 'rating'=>5, 'initial'=>'J'],
];
foreach ($reviews as $r) : ?>
<div class="testimonial-card">
<div class="testimonial-card__stars">
<?php for ($i = 0; $i < $r['rating']; $i++) : ?>
<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
<?php endfor; ?>
</div>
<h3 class="testimonial-card__title"><?php echo $r['title']; ?></h3>
<p class="testimonial-card__text"><?php echo $r['text']; ?></p>
<div class="testimonial-card__author">
<div class="testimonial-card__avatar-placeholder">
<?php echo $r['initial']; ?>
</div>
<div>
<p class="testimonial-card__name"><?php echo $r['name']; ?></p>
<p class="testimonial-card__location"><?php echo $r['location']; ?></p>
</div>
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
<section class="section testimonials" id="testimonials">
    <div class="container">
        <div class="section-header">
            <div>
                <div class="section-label">Testimonials</div>
                <h2>What Our Clients Say</h2>
                <p>Read the success stories and heartfelt testimonials from our valued clients.</p>
            </div>
            <a href="#" class="btn btn-outline">View All Testimonials</a>
        </div>

        <div class="testimonials-grid">
            <?php
            $reviews = [
                ['name'=>'Wade Warren',   'location'=>'USA, California', 'text'=>'Our experience with Estatein was outstanding. Their team\'s dedication and professionalism made finding our dream home a breeze. Highly recommended!', 'rating'=>5],
                ['name'=>'Emelie Thomson','location'=>'USA, Florida',    'text'=>'Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn\'t be happier with the results.', 'rating'=>5],
                ['name'=>'John Mans',     'location'=>'USA, Nevada',     'text'=>'The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!', 'rating'=>5],
            ];
            foreach ($reviews as $r) : ?>
            <div class="testimonial-card">
                <div class="testimonial-card__stars">
                    <?php for ($i = 0; $i < $r['rating']; $i++) : ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#F59E0B"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <?php endfor; ?>
                </div>
                <p class="testimonial-card__text"><?php echo $r['text']; ?></p>
                <div class="testimonial-card__author">
                    <div class="testimonial-card__avatar">
                        <?php echo strtoupper(substr($r['name'], 0, 1)); ?>
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
            <span class="slider-nav__count">01 of 10</span>
            <div class="slider-nav__arrows">
                <button class="slider-nav__btn">←</button>
                <button class="slider-nav__btn">→</button>
            </div>
        </div>
    </div>
</section>
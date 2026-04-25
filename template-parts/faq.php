<section class="section faq" id="faq">
    <div class="container">
        <div class="section-header">
            <div>
                <div class="section-label">FAQ</div>
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about Estatein's services, property listings, and the real estate process.</p>
            </div>
            <a href="#" class="btn btn-outline">View All FAQ's</a>
        </div>

        <div class="faq-grid">
            <?php
            $faqs = [
                ['q'=>'How do I search for properties on Estatein?',          'a'=>'Learn how to use our user-friendly search tools to find properties that match your criteria including location, type, and budget.'],
                ['q'=>'What documents do I need to sell my property through Estatein?', 'a'=>'Find out about the necessary documentation for listing your property with us and how we guide you through the process.'],
                ['q'=>'How can I contact an Estatein agent?',                 'a'=>'Discover the different ways you can get in touch with our experienced agents for personalized assistance.'],
            ];
            foreach ($faqs as $i => $faq) : ?>
            <div class="faq-item" id="faq-<?php echo $i; ?>">
                <button class="faq-item__question" onclick="toggleFaq(<?php echo $i; ?>)">
                    <span><?php echo $faq['q']; ?></span>
                    <svg class="faq-item__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-item__answer">
                    <p><?php echo $faq['a']; ?></p>
                    <a href="#" class="faq-item__read-more">Read More</a>
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
<?php get_header(); ?>

<main>

<!-- HERO -->
<section class="section about-hero">
    <div class="container about-hero__inner">
        <div class="about-hero__content">
            <div class="section-label">About Us</div>
            <h1>Our Journey</h1>
            <p>Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary. Over the years, we've expanded our reach, forged valuable partnerships, and gained the trust of countless clients.</p>
            <div class="about-hero__stats">
                <div class="hero__stat">
                    <span class="hero__stat-num">200+</span>
                    <span class="hero__stat-label">Happy Customers</span>
                </div>
                <div class="hero__stat-divider"></div>
                <div class="hero__stat">
                    <span class="hero__stat-num">10k+</span>
                    <span class="hero__stat-label">Properties For Clients</span>
                </div>
                <div class="hero__stat-divider"></div>
                <div class="hero__stat">
                    <span class="hero__stat-num">16+</span>
                    <span class="hero__stat-label">Years of Experience</span>
                </div>
            </div>
        </div>
        <div class="about-hero__image">
            <div class="hero__image-glow"></div>
            <div class="about-hero__image-wrapper">
                <img loading="lazy" src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt="Real estate professional">
            </div>
        </div>
    </div>
</section>

<!-- OUR VALUES -->
<section class="section about-values">
    <div class="container">
        <div class="about-values__inner">
            <div class="about-values__left">
                <div class="section-label">Our Values</div>
                <h2>Our Values</h2>
                <p>Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.</p>
            </div>
            <div class="about-values__grid">
                <?php
                $values = [
                    ['icon'=>'⭐', 'title'=>'Trust',          'desc'=>'Trust is the cornerstone of every successful real estate transaction.'],
                    ['icon'=>'🏆', 'title'=>'Excellence',     'desc'=>'We set the bar high for ourselves. From the properties we list to the services we provide.'],
                    ['icon'=>'💎', 'title'=>'Client-Centric', 'desc'=>'Your dreams and needs are at the center of our universe. We listen, understand.'],
                    ['icon'=>'⭐', 'title'=>'Our Commitment', 'desc'=>'We are dedicated to providing you with the highest level of service, professionalism, and support.'],
                ];
                foreach ($values as $v) : ?>
                <div class="value-card">
                    <div class="value-card__icon"><?php echo $v['icon']; ?></div>
                    <div>
                        <h4><?php echo $v['title']; ?></h4>
                        <p><?php echo $v['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- OUR ACHIEVEMENTS -->
<section class="section about-achievements">
    <div class="container">
        <div class="section-label">Our Achievements</div>
        <h2>Our Achievements</h2>
        <p>Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.</p>
        <div class="achievements-grid">
            <?php
            $achievements = [
                ['title'=>'3+ Years of Excellence',   'desc'=>'With over 3 years in the industry, we\'ve amassed a wealth of knowledge and experience, becoming a go-to resource for all things real estate.'],
                ['title'=>'Happy Clients',             'desc'=>'Our greatest achievement is the satisfaction of our clients. Their success stories fuel our passion for what we do.'],
                ['title'=>'Industry Recognition',     'desc'=>'We\'ve earned the respect of our peers and industry leaders, with accolades and awards that reflect our commitment to excellence.'],
            ];
            foreach ($achievements as $a) : ?>
            <div class="achievement-card card">
                <div class="achievement-card__inner">
                    <h3><?php echo $a['title']; ?></h3>
                    <p><?php echo $a['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROCESS STEPS -->
<section class="section about-process">
    <div class="container">
        <div class="section-label">How It Works</div>
        <h2>Navigating the Estatein Experience</h2>
        <p>At Estatein, we've designed a straightforward process to help you find and purchase your dream property with ease.</p>
        <div class="process-grid">
            <?php
            $steps = [
                ['num'=>'01', 'title'=>'Discover a World of Possibilities',  'desc'=>'Your journey begins with exploring our carefully curated property listings.'],
                ['num'=>'02', 'title'=>'Narrowing Down Your Choices',        'desc'=>'Once you\'ve found properties that catch your eye, save them to your account or make a shortlist.'],
                ['num'=>'03', 'title'=>'Personalized Guidance',              'desc'=>'Have questions about a property or need more information? Our dedicated team of real estate experts is just a call or message away.'],
                ['num'=>'04', 'title'=>'See It for Yourself',                'desc'=>'Arrange viewings of the properties you\'re interested in. We\'ll coordinate with the property owners and accompany you to ensure you get a firsthand look.'],
                ['num'=>'05', 'title'=>'Making Informed Decisions',          'desc'=>'Before making an offer, our team will assist you with due diligence, including property inspections, legal checks, and market analysis.'],
                ['num'=>'06', 'title'=>'Getting the Best Deal',              'desc'=>'We\'ll help you negotiate the best terms and prepare your offer. Our goal is to secure the property at the right price and on favorable terms.'],
            ];
            foreach ($steps as $s) : ?>
            <div class="process-card card">
                <div class="process-card__num">Step <?php echo $s['num']; ?></div>
                <h3><?php echo $s['title']; ?></h3>
                <p><?php echo $s['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TEAM -->
<section class="section about-team" id="team">
    <div class="container">
        <div class="section-header">
            <div>
                <div class="section-label">Our Team</div>
                <h2>Meet the Estatein Team</h2>
                <p>At Estatein, our success is driven by the dedication and expertise of our team.</p>
            </div>
        </div>
        <div class="team-grid">
            <?php
            $team = [
                ['name'=>'Max Mitchell',   'role'=>'Founder',                    'img'=>'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=300&q=80'],
                ['name'=>'Sarah Johnson',  'role'=>'Chief Real Estate Officer',  'img'=>'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&q=80'],
                ['name'=>'David Brown',    'role'=>'Head of Property Management','img'=>'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&q=80'],
                ['name'=>'Michael Turner', 'role'=>'Legal Counsel',              'img'=>'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=300&q=80'],
            ];
            foreach ($team as $member) : ?>
            <div class="team-card card">
                <div class="team-card__image">
                    <img loading="lazy" src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>">
                </div>
                <div class="team-card__body">
                    <div class="team-card__social">
                        <a href="#" aria-label="Twitter">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                        </a>
                    </div>
                    <h3><?php echo $member['name']; ?></h3>
                    <p><?php echo $member['role']; ?></p>
                    <div class="team-card__actions">
                        <a href="#" class="btn btn-outline btn-sm">Say Hello 👋</a>
                        <a href="#" class="team-card__arrow btn btn-primary btn-sm">↗</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CLIENTS -->
<section class="section about-clients" id="clients">
    <div class="container">
        <div class="section-header">
            <div>
                <div class="section-label">Our Clients</div>
                <h2>Our Valued Clients</h2>
                <p>At Estatein, we have had the privilege of working with a diverse range of clients across various industries.</p>
            </div>
        </div>
        <div class="clients-grid">
            <?php
            $clients = [
                ['since'=>'Since 2019', 'name'=>'ABC Corporation',       'domain'=>'Commercial Real Estate', 'category'=>'Luxury Home Development', 'quote'=>'Estatein\'s expertise in finding the perfect office space for our expanding operations was invaluable. They truly understand our business needs.'],
                ['since'=>'Since 2018', 'name'=>'GreenTech Enterprises',  'domain'=>'Commercial Real Estate', 'category'=>'Retail Space',            'quote'=>'Estatein\'s ability to identify prime retail locations helped us expand our brand presence. They are a trusted partner in our growth.'],
            ];
            foreach ($clients as $c) : ?>
            <div class="client-card card">
                <div class="client-card__header">
                    <div>
                        <span class="client-card__since"><?php echo $c['since']; ?></span>
                        <h3><?php echo $c['name']; ?></h3>
                    </div>
                    <a href="#" class="btn btn-outline btn-sm">Visit Website</a>
                </div>
                <div class="client-card__meta">
                    <span class="client-card__tag">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/></svg>
                        <?php echo $c['domain']; ?>
                    </span>
                    <span class="client-card__tag">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/></svg>
                        <?php echo $c['category']; ?>
                    </span>
                </div>
                <div class="client-card__quote">
                    <p><?php echo $c['quote']; ?></p>
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

</main>

<?php get_footer(); ?>
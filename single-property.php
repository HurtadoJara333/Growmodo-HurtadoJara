<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
    $price     = get_field('price')     ?: '$1,250,000';
    $bedrooms  = get_field('bedrooms')  ?: '4';
    $bathrooms = get_field('bathrooms') ?: '3';
    $sqft      = get_field('sqft')      ?: '2500';
    $location  = get_field('location')  ?: 'Malibu, California';
    $gallery   = get_field('gallery')   ?: [];
?>

<main class="single-property">

    <!-- BREADCRUMB + PRICE -->
    <section class="property-top">
        <div class="container property-top__inner">
            <div class="property-top__left">
                <h1><?php the_title(); ?></h1>
                <div class="property-top__meta">
                    <span class="property-top__location">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <?php echo $location; ?>
                    </span>
                </div>
            </div>
            <div class="property-top__price">
                <span class="property-top__price-label">Price</span>
                <span class="property-top__price-value"><?php echo $price; ?></span>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="property-gallery">
        <div class="container">
            <div class="property-gallery__grid">
                <?php if ( ! empty($gallery) ) :
                    foreach ( array_slice($gallery, 0, 5) as $img ) : ?>
                    <div class="property-gallery__item">
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    </div>
                    <?php endforeach;
                else :
                    $fallback = [
                        'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80',
                        'https://images.unsplash.com/photo-1600210492493-0946911123ea?w=400&q=80',
                        'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&q=80',
                        'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&q=80',
                        'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=400&q=80',
                    ];
                    foreach ($fallback as $i => $src) : ?>
                    <div class="property-gallery__item <?php echo $i === 0 ? 'property-gallery__item--main' : ''; ?>">
                        <img src="<?php echo $src; ?>" alt="Property image <?php echo $i+1; ?>">
                    </div>
                    <?php endforeach;
                endif; ?>
            </div>
        </div>
    </section>

    <!-- DETAILS -->
    <section class="section property-details">
        <div class="container property-details__inner">

            <!-- Left: Description + Features -->
            <div class="property-details__left">
                <div class="property-info card">
                    <div class="property-info__inner">
                        <h2>Description</h2>
                        <div class="property-info__content">
                            <?php the_content(); ?>
                            <?php if ( ! get_the_content() ) : ?>
                            <p>Experience the epitome of paradise with the <?php the_title(); ?>. With an open floor plan and breathtaking ocean views, every room is a sanctuary of calm and beauty. The property is nestled in a peaceful coastal neighborhood, offering privacy and serenity.</p>
                            <?php endif; ?>
                        </div>
                        <div class="property-info__specs">
                            <div class="property-info__spec">
                                <span class="property-info__spec-label">Bedrooms</span>
                                <span class="property-info__spec-value"><?php echo $bedrooms; ?></span>
                            </div>
                            <div class="property-info__spec">
                                <span class="property-info__spec-label">Bathrooms</span>
                                <span class="property-info__spec-value"><?php echo $bathrooms; ?></span>
                            </div>
                            <div class="property-info__spec">
                                <span class="property-info__spec-label">Area</span>
                                <span class="property-info__spec-value"><?php echo number_format($sqft); ?> Square Feet</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="property-features card" style="margin-top: var(--spacing-md)">
                    <div class="property-features__inner">
                        <h2>Key Features and Amenities</h2>
                        <ul class="property-features__list">
                            <?php
                            $features = [
                                'Expansive oceanfront terrace with stunning views',
                                'Gourmet kitchen with top-of-the-line appliances',
                                'Private movie theatre for entertaining small groups',
                                'Master suite with a spa-inspired bathroom and ocean-facing balcony',
                                'Private garage and ample storage space',
                            ];
                            foreach ($features as $f) : ?>
                            <li>
                                <span class="property-features__dot">✦</span>
                                <?php echo $f; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right: Inquiry Form -->
            <div class="property-details__right">
                <div class="property-inquiry card">
                    <div class="property-inquiry__inner">
                        <h2>Inquire About<br><?php the_title(); ?></h2>
                        <p>Interested in this property? Fill out the form below and one of our agents will get back to you shortly.</p>
                        <form class="property-inquiry__form">
                            <div class="form-grid form-grid--2">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="form-grid form-grid--2">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Selected Property</label>
                                <div class="property-inquiry__selected">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                    <?php the_title(); ?>, <?php echo $location; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea rows="4" placeholder="Enter your Message here..."></textarea>
                            </div>
                            <div class="form-footer">
                                <label class="form-checkbox">
                                    <input type="checkbox">
                                    <span>I agree with Terms of Use and Privacy Policy</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center; margin-top: var(--spacing-sm)">Send Your Message</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- PRICING -->
    <section class="section property-pricing">
        <div class="container">
            <div class="section-label">Pricing</div>
            <h2>Comprehensive Pricing Details</h2>
            <p>At Estatein, transparency is key. We want you to be fully informed about all costs associated with your property investment.</p>

            <div class="pricing-grid">
                <div class="pricing-main">
                    <span class="pricing-main__label">Listing Price</span>
                    <span class="pricing-main__value"><?php echo $price; ?></span>
                </div>

                <div class="pricing-section card">
                    <div class="pricing-section__inner">
                        <div class="pricing-section__header">
                            <h3>Additional Fees</h3>
                            <a href="#" class="btn btn-outline btn-sm">Learn More</a>
                        </div>
                        <div class="pricing-rows">
                            <div class="pricing-row">
                                <div>
                                    <p class="pricing-row__name">Property Transfer Tax</p>
                                    <p class="pricing-row__desc">Based on the sale price and local regulations</p>
                                </div>
                                <span class="pricing-row__value">$25,000</span>
                            </div>
                            <div class="pricing-row">
                                <div>
                                    <p class="pricing-row__name">Legal Fees</p>
                                    <p class="pricing-row__desc">Approximate cost for legal services including title transfer</p>
                                </div>
                                <span class="pricing-row__value">$3,000</span>
                            </div>
                            <div class="pricing-row">
                                <div>
                                    <p class="pricing-row__name">Home Inspection</p>
                                    <p class="pricing-row__desc">Recommended for due diligence</p>
                                </div>
                                <span class="pricing-row__value">$500</span>
                            </div>
                            <div class="pricing-row">
                                <div>
                                    <p class="pricing-row__name">Property Insurance</p>
                                    <p class="pricing-row__desc">Annual cost for comprehensive property insurance</p>
                                </div>
                                <span class="pricing-row__value">$1,200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <?php get_template_part('template-parts/faq'); ?>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
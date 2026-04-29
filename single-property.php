<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
$price = get_field('price') ?: '$1,250,000';
$bedrooms = get_field('bedrooms') ?: '4';
$bathrooms = get_field('bathrooms') ?: '3';
$sqft = get_field('sqft') ?: '2500';
$location = get_field('location') ?: 'Malibu, California';
$gallery = get_field('gallery') ?: [];
?>

<main class="property-details-page">

<!-- HERO / HEADER -->
<section class="property-details-hero">
<div class="container">
<div class="property-details__header">
<h1 class="property-details__title"><?php the_title(); ?></h1>
<div class="property-details__location">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
<?php echo $location; ?>
</div>
</div>
</div>
</section>

<!-- GALLERY -->
<section class="property-gallery">
<div class="container">
<div class="property-gallery__wrapper">
<div class="property-gallery__main">
<?php if ( ! empty($gallery) ) : ?>
<img src="<?php echo esc_url($gallery[0]['url']); ?>" alt="<?php echo esc_attr($gallery[0]['alt'] ?: get_the_title()); ?>">
<?php else : ?>
<img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1200&q=80" alt="<?php the_title(); ?>">
<?php endif; ?>
<button class="gallery-nav gallery-nav--prev">←</button>
<button class="gallery-nav gallery-nav--next">→</button>
</div>
<div class="property-gallery__thumbnails">
<?php if ( ! empty($gallery) ) : ?>
<?php foreach ( array_slice($gallery, 0, 4) as $i => $img ) : ?>
<div class="gallery-thumb <?php echo $i === 0 ? 'gallery-thumb--active' : ''; ?>">
<img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
</div>
<?php endforeach; ?>
<?php else : ?>
<?php $thumbnails = [
'https://images.unsplash.com/photo-1600210492493-0946911123ea?w=400&q=80',
'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&q=80',
'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&q=80',
'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=400&q=80',
];
foreach ($thumbnails as $i => $src) : ?>
<div class="gallery-thumb <?php echo $i === 0 ? 'gallery-thumb--active' : ''; ?>">
<img src="<?php echo $src; ?>" alt="Property thumbnail <?php echo $i+1; ?>">
</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>
</div>
</section>

<!-- PROPERTY INFO & SPECIFICATIONS -->
<section class="property-info">
<div class="container">
<div class="property-info__grid">
<!-- Left Column -->
<div class="property-info__main">
<!-- Specs -->
<div class="property-specs">
<div class="spec-item">
<svg class="spec-item__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
<div class="spec-item__content">
<span class="spec-item__label">Bedrooms</span>
<span class="spec-item__value"><?php echo $bedrooms; ?></span>
</div>
</div>
<div class="spec-divider"></div>
<div class="spec-item">
<svg class="spec-item__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16M4 6h16M4 18h16"/></svg>
<div class="spec-item__content">
<span class="spec-item__label">Bathrooms</span>
<span class="spec-item__value"><?php echo $bathrooms; ?></span>
</div>
</div>
<div class="spec-divider"></div>
<div class="spec-item">
<svg class="spec-item__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
<div class="spec-item__content">
<span class="spec-item__label">Area</span>
<span class="spec-item__value"><?php echo number_format($sqft); ?> sqft</span>
</div>
</div>
<div class="spec-divider"></div>
<div class="property-price">
<span class="property-price__label">Price</span>
<span class="property-price__value"><?php echo $price; ?></span>
</div>
</div>

<!-- Description -->
<div class="property-description">
<h2 class="property-description__title">Description</h2>
<div class="property-description__text">
<?php the_content(); ?>
<?php if ( ! get_the_content() ) : ?>
<p>Experience the epitome of paradise with the <?php the_title(); ?>. With an open floor plan and breathtaking ocean views, every room is a sanctuary of calm and beauty. The property is nestled in a peaceful coastal neighborhood, offering privacy and serenity.</p>
<p>This stunning property features world-class amenities and premium finishes throughout. Enjoy spacious living areas, gourmet kitchen with top-of-the-line appliances, and luxurious master suite with spa-inspired bathroom.</p>
<?php endif; ?>
</div>
</div>

<!-- Key Features -->
<div class="property-features-section" style="margin-top: 30px;">
<h2 class="property-features-section__title">Key Features and Amenities</h2>
<div class="property-features__list">
<?php
$features = [
'Expansive oceanfront terrace with stunning views',
'Gourmet kitchen with top-of-the-line appliances',
'Private movie theatre for entertaining small groups',
'Master suite with a spa-inspired bathroom and ocean-facing balcony',
'Private garage and ample storage space',
];
foreach ($features as $f) : ?>
<div class="property-feature__item">
<svg class="property-feature__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
<span class="property-feature__text"><?php echo $f; ?></span>
</div>
<?php endforeach; ?>
</div>
</div>
</div>

<!-- Right Column - Contact Form -->
<div class="property-contact__form-wrapper">
<div class="property-contact__form">
<div class="property-contact__header">
<h2>Inquire About<br><?php the_title(); ?></h2>
<p>Interested in this property? Fill out the form below and one of our agents will get back to you shortly.</p>
</div>

<form>
<div class="property-contact__grid">
<div class="property-contact__field">
<label>First Name</label>
<input type="text" placeholder="Enter First Name">
</div>
<div class="property-contact__field">
<label>Last Name</label>
<input type="text" placeholder="Enter Last Name">
</div>
</div>
<div class="property-contact__grid">
<div class="property-contact__field">
<label>Email</label>
<input type="email" placeholder="Enter your Email">
</div>
<div class="property-contact__field">
<label>Phone</label>
<input type="tel" placeholder="Enter Phone Number">
</div>
</div>

<div class="property-contact__field property-contact__field--full">
<label>Selected Property</label>
<div class="property-contact__selected">
<span class="property-contact__selected-text"><?php the_title(); ?>, <?php echo $location; ?></span>
</div>
</div>

<div class="property-contact__field property-contact__field--full">
<label>Message</label>
<textarea placeholder="Enter your Message here..."></textarea>
</div>

<div class="property-contact__checkbox">
<input type="checkbox" id="terms">
<label for="terms">I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></label>
</div>

<button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Send Your Message</button>
</form>
</div>
</div>
</div>
</div>
</section>

<!-- COMPREHENSIVE PRICING -->
<section class="property-pricing">
<div class="container">
<div class="property-pricing__header">
<div class="section-label">Pricing</div>
<h2>Comprehensive Pricing Details</h2>
<p>At Estatein, transparency is key. We want you to be fully informed about all costs associated with your property investment.</p>
</div>

<div class="pricing-note">
<h3 class="pricing-note__title">Note</h3>
<p class="pricing-note__text">The figures provided above are estimates and may vary depending on the property, location, and individual circumstances. We recommend consulting with our real estate experts for personalized pricing information.</p>
</div>

<div class="pricing-card">
<div class="pricing-card__header">
<span class="pricing-card__title">Additional Fees</span>
<a href="#" class="btn btn-outline" style="padding: 12px 20px; font-size: 16px;">Learn More</a>
</div>

<div class="pricing-item">
<span class="pricing-item__label">Property Transfer Tax</span>
<span class="pricing-item__value">$25,000</span>
</div>
<div class="pricing-item">
<span class="pricing-item__label">Legal Fees</span>
<span class="pricing-item__value">$3,000</span>
</div>
<div class="pricing-item">
<span class="pricing-item__label">Home Inspection</span>
<span class="pricing-item__value pricing-tag">Recommended</span>
</div>
<div class="pricing-item">
<span class="pricing-item__label">Property Insurance</span>
<span class="pricing-item__value">$1,200/year</span>
</div>
</div>
</div>
</section>

<!-- FAQ -->
<?php get_template_part('template-parts/faq'); ?>

<!-- SIMILAR PROPERTIES -->
<section class="similar-properties">
<div class="container">
<div class="similar-properties__header">
<div class="section-label">Discover</div>
<h2>Similar Properties</h2>
<p>Explore more properties that match your preferences.</p>
</div>

<div class="similar-properties__grid">
<?php
$similar = [
['Oceanview Paradise', '$2,500,000', '5', '4', 'Villa', 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=80'],
['Modern Loft Space', '$850,000', '1', '1', 'Loft', 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=600&q=80'],
['Mountain View Estate', '$1,800,000', '6', '5', 'Estate', 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80'],
];
foreach ($similar as $p) : ?>
<div class="similar-property-card">
<div class="similar-property-card__image">
<img src="<?php echo $p[5]; ?>" alt="<?php echo $p[0]; ?>">
</div>
<div class="similar-property-card__content">
<h3 class="similar-property-card__title"><?php echo $p[0]; ?></h3>
<div class="similar-property-card__specs">
<span class="similar-property-card__spec"><?php echo $p[2]; ?>-Bedroom</span>
<span class="similar-property-card__spec"><?php echo $p[3]; ?>-Bathroom</span>
<span class="similar-property-card__spec"><?php echo $p[4]; ?></span>
</div>
<div class="similar-property-card__footer">
<div>
<span class="similar-property-card__price-label">Price</span>
<div class="similar-property-card__price"><?php echo $p[1]; ?></div>
</div>
<a href="#" class="btn btn-primary" style="padding: 14px 24px;">View Details</a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
<?php get_header(); ?>

<main>

<!-- HERO -->
<section class="section properties-hero">
<div class="container">
<div class="section-label">Properties</div>
<h1>Find Your Dream Property</h1>
<p>Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life.</p>

<!-- SEARCH BAR -->
<div class="properties-search">
<div class="properties-search__input">
<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
<input type="text" placeholder="Search For A Property">
</div>
<button class="btn btn-primary">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
Find Property
</button>
</div>

<!-- FILTERS -->
<div class="properties-filters">
<div class="properties-filter">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
<select>
<option>Location</option>
<option>New York</option>
<option>Los Angeles</option>
<option>Miami</option>
<option>Chicago</option>
</select>
</div>
<div class="properties-filter">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
<select>
<option>Property Type</option>
<option>Villa</option>
<option>Apartment</option>
<option>Townhouse</option>
<option>Commercial</option>
</select>
</div>
<div class="properties-filter">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
<select>
<option>Pricing Range</option>
<option>$100k - $300k</option>
<option>$300k - $600k</option>
<option>$600k - $1M</option>
<option>$1M+</option>
</select>
</div>
<div class="properties-filter">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 3H3v7l9 9 9-9V3z"/></svg>
<select>
<option>Property Size</option>
<option>500 - 1000 sqft</option>
<option>1000 - 2000 sqft</option>
<option>2000+ sqft</option>
</select>
</div>
<div class="properties-filter">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
<select>
<option>Build Year</option>
<option>2020 - 2024</option>
<option>2015 - 2020</option>
<option>2010 - 2015</option>
<option>Before 2010</option>
</select>
</div>
</div>
</div>
</section>

<!-- PROPERTIES LISTING -->
<section class="section" id="categories">
<div class="container">
<div class="section-label">Properties</div>
<h2>Discover a World of Possibilities</h2>
<p>Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home.</p>

<div class="properties-grid" style="margin-top: var(--spacing-lg);">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
$price = get_field('price') ?: '$650,000';
$bedrooms = get_field('bedrooms') ?: '3';
$bathrooms = get_field('bathrooms') ?: '2';
$type = get_field('type') ?: 'Villa';
$location = get_field('location') ?: 'Malibu, California';
?>
<div class="property-card">
<div class="property-card__image">
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail('large'); ?>
<?php else : ?>
<div class="property-card__image-placeholder">
<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
</div>
<?php endif; ?>
<div class="property-card__location-badge">
<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
<?php echo $location; ?>
</div>
</div>
<div class="property-card__body">
<p class="property-card__category"><?php echo $type; ?></p>
<h3 class="property-card__title"><?php the_title(); ?></h3>
<p class="property-card__desc"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
<div class="property-card__specs">
<span class="property-card__spec">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
<?php echo $bedrooms; ?>-Bedroom
</span>
<span class="property-card__spec">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16M4 6h16M4 18h16"/></svg>
<?php echo $bathrooms; ?>-Bathroom
</span>
<span class="property-card__spec">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
<?php echo $type; ?>
</span>
</div>
<div class="property-card__footer">
<div class="property-card__price">
<span class="property-card__price-label">Price</span>
<span class="property-card__price-value"><?php echo $price; ?></span>
</div>
<a href="<?php the_permalink(); ?>" class="btn btn-primary">View Property Details</a>
</div>
</div>
</div>
<?php endwhile; ?>
<?php else : ?>
<p>No properties found.</p>
<?php endif; ?>
</div>

<!-- Pagination -->
<div class="slider-nav">
<span class="slider-nav__count">01 of <?php echo $wp_query->found_posts ?: '10'; ?></span>
<div class="slider-nav__arrows">
<?php previous_posts_link('←'); ?>
<?php next_posts_link('→'); ?>
</div>
</div>
</div>
</section>

<!-- CONTACT FORM -->
<section class="section properties-contact">
<div class="container">
<div class="section-label">Contact Us</div>
<h2>Let's Make it Happen</h2>
<p>Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match.</p>

<form class="properties-form">
<div class="form-grid form-grid--4">
<div class="form-group">
<label>First Name</label>
<input type="text" placeholder="Enter First Name">
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" placeholder="Enter Last Name">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" placeholder="Enter your Email">
</div>
<div class="form-group">
<label>Phone</label>
<input type="tel" placeholder="Enter Phone Number">
</div>
</div>
<div class="form-grid form-grid--4">
<div class="form-group">
<label>Preferred Location</label>
<select><option>Select Location</option><option>New York</option><option>Los Angeles</option><option>Miami</option></select>
</div>
<div class="form-group">
<label>Property Type</label>
<select><option>Select Property Type</option><option>Villa</option><option>Apartment</option><option>Townhouse</option></select>
</div>
<div class="form-group">
<label>No. of Bathrooms</label>
<select><option>Select no. of Bathrooms</option><option>1</option><option>2</option><option>3+</option></select>
</div>
<div class="form-group">
<label>No. of Bedrooms</label>
<select><option>Select no. of Bedrooms</option><option>1</option><option>2</option><option>3</option><option>4+</option></select>
</div>
</div>
<div class="form-grid form-grid--2">
<div class="form-group">
<label>Budget</label>
<select><option>Select Budget</option><option>$100k-$300k</option><option>$300k-$600k</option><option>$600k-$1M</option><option>$1M+</option></select>
</div>
<div class="form-group">
<label>Preferred Contact Method</label>
<div class="form-contact-method">
<div class="form-contact-option">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.64A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
<input type="text" placeholder="Enter Your Number">
<input type="radio" name="contact_method" value="phone">
</div>
<div class="form-contact-option">
<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
<input type="text" placeholder="Enter Your Email">
<input type="radio" name="contact_method" value="email">
</div>
</div>
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
<button type="submit" class="btn btn-primary">Send Your Message</button>
</div>
</form>
</div>
</section>

</main>

<?php get_footer(); ?>

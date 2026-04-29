<?php
/* Template Name: Properties Page */
get_header(); ?>

<main class="properties-page">

<!-- HERO SECTION -->
<section class="properties-hero">
<div class="container">
<div class="section-label">Properties</div>
<h1>Find Your Dream Property</h1>
<p>Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life.</p>

<!-- SEARCH BAR -->
<div class="properties-search">
<div class="properties-search__input">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
<input type="text" placeholder="Search For A Property">
</div>
<button class="btn btn-primary">
<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
Find Property
</button>
</div>

<!-- FILTERS -->
<div class="properties-filters">
<div class="properties-filter">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
<select>
<option>Location</option>
<option>New York</option>
<option>Los Angeles</option>
<option>Miami</option>
<option>Chicago</option>
</select>
</div>
<div class="properties-filter">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
<select>
<option>Property Type</option>
<option>Villa</option>
<option>Apartment</option>
<option>Townhouse</option>
<option>Commercial</option>
</select>
</div>
<div class="properties-filter">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
<select>
<option>Pricing Range</option>
<option>$100k - $300k</option>
<option>$300k - $600k</option>
<option>$600k - $1M</option>
<option>$1M+</option>
</select>
</div>
<div class="properties-filter">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/></svg>
<select>
<option>Property Size</option>
<option>500 - 1000 sqft</option>
<option>1000 - 2000 sqft</option>
<option>2000+ sqft</option>
</select>
</div>
<div class="properties-filter">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
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
<section class="properties-section" id="properties-listing">
<div class="container">
<div class="properties-section__header">
<div class="section-label">Properties</div>
<h2>Discover a World of Possibilities</h2>
<p>Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home.</p>
</div>

<div class="properties-grid">
<?php
$args = new WP_Query([
'post_type' => 'property',
'posts_per_page' => 6,
]);

if ( $args->have_posts() ) :
while ( $args->have_posts() ) : $args->the_post();
$price = get_field('price') ?: '$650,000';
$bedrooms = get_field('bedrooms') ?: '3';
$bathrooms = get_field('bathrooms') ?: '2';
$type = get_field('type') ?: 'Villa';
$location = get_field('location') ?: 'Malibu, California';
$category = get_field('category') ?: 'Coastal Escapes';
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
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
<?php echo $location; ?>
</div>
</div>
<div class="property-card__body">
<p class="property-card__category"><?php echo $category; ?></p>
<h3 class="property-card__title"><?php the_title(); ?></h3>
<div class="property-card__desc-wrapper">
<p class="property-card__desc"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
<a href="<?php the_permalink(); ?>" class="property-card__read-more">Read More</a>
</div>
<div class="property-card__specs">
<span class="property-card__spec">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
<?php echo $bedrooms; ?>-Bedroom
</span>
<span class="property-card__spec">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16M4 6h16M4 18h16"/></svg>
<?php echo $bathrooms; ?>-Bathroom
</span>
<span class="property-card__spec">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
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
<?php
endwhile;
wp_reset_postdata();
else :
// Placeholder properties
$placeholders = [
['Seaside Serenity Villa', '$1,250,000', '4', '3', 'Villa', 'Malibu, California', 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=80', 'Coastal Escapes'],
['Metropolitan Haven', '$650,000', '2', '2', 'Apartment', 'Manhattan, New York', 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=80', 'Urban Living'],
['Rustic Retreat Cottage', '$350,000', '3', '2', 'Cottage', 'Aspen, Colorado', 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?w=600&q=80', 'Countryside Charm'],
['Oceanview Paradise', '$2,500,000', '5', '4', 'Villa', 'Miami Beach, Florida', 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=80', 'Beachfront Luxury'],
['Modern Loft Space', '$850,000', '1', '1', 'Loft', 'San Francisco, California', 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=600&q=80', 'Urban Living'],
['Mountain View Estate', '$1,800,000', '6', '5', 'Estate', 'Vail, Colorado', 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80', 'Mountain Retreat'],
];
foreach ($placeholders as $p) : ?>
<div class="property-card">
<div class="property-card__image">
<img src="<?php echo $p[6]; ?>" alt="<?php echo $p[0]; ?>">
<div class="property-card__location-badge">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
<?php echo $p[5]; ?>
</div>
</div>
<div class="property-card__body">
<p class="property-card__category"><?php echo $p[7]; ?></p>
<h3 class="property-card__title"><?php echo $p[0]; ?></h3>
<div class="property-card__desc-wrapper">
<p class="property-card__desc">A stunning property offering breathtaking views and world-class amenities.</p>
<a href="#" class="property-card__read-more">Read More</a>
</div>
<div class="property-card__specs">
<span class="property-card__spec">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
<?php echo $p[2]; ?>-Bedroom
</span>
<span class="property-card__spec">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16M4 6h16M4 18h16"/></svg>
<?php echo $p[3]; ?>-Bathroom
</span>
<span class="property-card__spec">
<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>
<?php echo $p[4]; ?>
</span>
</div>
<div class="property-card__footer">
<div class="property-card__price">
<span class="property-card__price-label">Price</span>
<span class="property-card__price-value"><?php echo $p[1]; ?></span>
</div>
<a href="#" class="btn btn-primary">View Property Details</a>
</div>
</div>
</div>
<?php endforeach; endif; ?>
</div>

<!-- PAGINATION -->
<div class="properties-pagination">
<span class="properties-pagination__text"><span>01</span> of 60</span>
<div class="properties-pagination__buttons">
<button class="properties-pagination__btn" disabled>←</button>
<button class="properties-pagination__btn">→</button>
</div>
</div>
</div>
</section>

<!-- CONTACT FORM -->
<section class="properties-contact">
<div class="container">
<div class="properties-contact__header">
<div class="section-label">Contact Us</div>
<h2>Let's Make it Happen</h2>
<p>Ready to take the first step toward your dream property? Fill out the form below, and our real estate wizards will work their magic to find your perfect match.</p>
</div>

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
<select>
<option>Select Location</option>
<option>New York</option>
<option>Los Angeles</option>
<option>Miami</option>
</select>
</div>
<div class="form-group">
<label>Property Type</label>
<select>
<option>Select Property Type</option>
<option>Villa</option>
<option>Apartment</option>
<option>Townhouse</option>
</select>
</div>
<div class="form-group">
<label>No. of Bathrooms</label>
<select>
<option>Select no. of Bathrooms</option>
<option>1</option>
<option>2</option>
<option>3+</option>
</select>
</div>
<div class="form-group">
<label>No. of Bedrooms</label>
<select>
<option>Select no. of Bedrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4+</option>
</select>
</div>
</div>
<div class="form-grid form-grid--2">
<div class="form-group">
<label>Budget</label>
<select>
<option>Select Budget</option>
<option>$100k-$300k</option>
<option>$300k-$600k</option>
<option>$600k-$1M</option>
<option>$1M+</option>
</select>
</div>
<div class="form-group">
<label>Preferred Contact Method</label>
<div class="form-contact-method">
<div class="form-contact-option">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.64A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
<input type="text" placeholder="Enter Your Number">
<input type="radio" name="contact_method" value="phone">
</div>
<div class="form-contact-option">
<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
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
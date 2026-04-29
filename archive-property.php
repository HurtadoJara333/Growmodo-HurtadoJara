<?php get_header(); ?>

<main>
<section class="section">
    <div class="container">
        <div class="section-label">Properties</div>
        <h1>All Properties</h1>
        <p style="color:var(--color-text-secondary);margin-bottom:var(--spacing-lg)">Browse our full portfolio of available properties.</p>

        <div class="properties-grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                $price     = get_field('price')     ?: '$550,000';
                $bedrooms  = get_field('bedrooms')  ?: '3';
                $bathrooms = get_field('bathrooms') ?: '2';
                $type      = get_field('type')      ?: 'Villa';
                $location  = get_field('location')  ?: 'USA';
            ?>
            <div class="property-card">
                <div class="property-card__image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large', ['loading' => 'lazy', 'alt' => get_the_title()]); ?>
                    <?php else : ?>
                        <div class="property-card__image-placeholder">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                        </div>
                    <?php endif; ?>
                    <div class="property-card__location-badge">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <?php echo esc_html($location); ?>
                    </div>
                </div>
                <div class="property-card__body">
                    <p class="property-card__category"><?php echo esc_html($type); ?></p>
                    <h2 class="property-card__title"><?php the_title(); ?></h2>
                    <p class="property-card__desc"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    <div class="property-card__specs">
                        <span class="property-card__spec"><?php echo esc_html($bedrooms); ?>-Bedroom</span>
                        <span class="property-card__spec"><?php echo esc_html($bathrooms); ?>-Bathroom</span>
                        <span class="property-card__spec"><?php echo esc_html($type); ?></span>
                    </div>
                    <div class="property-card__footer">
                        <div class="property-card__price">
                            <span class="property-card__price-label">Price</span>
                            <span class="property-card__price-value"><?php echo esc_html($price); ?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Property Details</a>
                    </div>
                </div>
            </div>
            <?php endwhile;
            else : ?>
            <p style="color:var(--color-text-secondary)">No properties found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>

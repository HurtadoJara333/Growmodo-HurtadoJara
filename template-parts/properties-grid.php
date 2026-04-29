<section class="section featured-properties" id="properties">
<div class="container">
<div class="section-header">
<div class="section-header__content">
<div class="section-label">Properties</div>
<h2>Featured Properties</h2>
<p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein.</p>
</div>
<a href="<?php echo get_permalink(get_page_by_path('properties')); ?>" class="btn btn-outline">View All Properties</a>
</div>

        <div class="properties-grid">
            <?php
            $featured = new WP_Query([
                'post_type'      => 'property',
                'posts_per_page' => 3,
                'meta_query'     => [[
                    'key'     => 'is_featured',
                    'value'   => '1',
                    'compare' => '='
                ]]
            ]);

            // Fallback: si no hay featured, traer las 3 más recientes
            if ( ! $featured->have_posts() ) {
                $featured = new WP_Query([
                    'post_type'      => 'property',
                    'posts_per_page' => 3,
                ]);
            }

            if ( $featured->have_posts() ) :
                while ( $featured->have_posts() ) : $featured->the_post();
                    $price     = get_field('price') ?: '$550,000';
                    $bedrooms  = get_field('bedrooms') ?: '4';
                    $bathrooms = get_field('bathrooms') ?: '3';
                    $type      = get_field('type') ?: 'Villa';
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
                </div>
<div class="property-card__body">
<h3 class="property-card__title"><?php the_title(); ?></h3>
<p class="property-card__desc"><?php echo wp_trim_words(get_the_excerpt(), 12); ?> <a href="<?php the_permalink(); ?>">Read More</a></p>
<div class="property-card__specs">
<span class="property-card__spec">
<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bed.svg" alt="Bed" width="20" height="20">
<?php echo $bedrooms; ?>-Bedroom
</span>
<span class="property-card__spec">
<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bath.svg" alt="Bath" width="20" height="20">
<?php echo $bathrooms; ?>-Bathroom
</span>
<span class="property-card__spec">
<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-villa.svg" alt="Type" width="20" height="20">
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
            else : ?>
            <!-- Placeholder cards si no hay properties aún -->
            <?php
                $placeholders = [
                    ['Seaside Serenity Villa', '$550,000', '4', '3', 'Villa'],
                    ['Metropolitan Haven',     '$550,000', '2', '2', 'Apartment'],
                    ['Rustic Retreat Cottage', '$550,000', '3', '3', 'Villa'],
                ];
                foreach ($placeholders as $p) : ?>
            <div class="property-card">
                <div class="property-card__image">
                    <div class="property-card__image-placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    </div>
                </div>
                <div class="property-card__body">
                    <h3 class="property-card__title"><?php echo $p[0]; ?></h3>
                    <p class="property-card__desc">A stunning property in a peaceful neighborhood.</p>
                    <div class="property-card__specs">
                        <span class="property-card__spec"><?php echo $p[2]; ?>-Bedroom</span>
                        <span class="property-card__spec"><?php echo $p[3]; ?>-Bathroom</span>
                        <span class="property-card__spec"><?php echo $p[4]; ?></span>
                    </div>
                    <div class="property-card__footer">
                        <div class="property-card__price">
                            <span class="property-card__price-label">Price</span>
                            <span class="property-card__price-value"><?php echo $p[1]; ?></span>
                        </div>
                        <a href="<?php echo get_permalink(get_page_by_path('properties')); ?>" class="btn btn-primary">View Property Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
<div class="slider-nav">
<span class="slider-nav__count"><span class="text-white">01</span> of 60</span>
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
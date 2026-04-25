<?php get_header(); ?>

<main>

<!-- HERO -->
<section class="section contact-hero">
    <div class="container">
        <div class="section-label">Contact Us</div>
        <h1>Get in Touch with Estatein</h1>
        <p>Welcome to Estatein's Contact Us page. We're here to assist you with any inquiries, requests, or feedback you may have. Whether you're looking to buy or sell a property, explore investment opportunities, or simply want to connect, we're just a message away.</p>
    </div>
</section>

<!-- CONTACT INFO CARDS -->
<section class="contact-info">
    <div class="container">
        <div class="contact-info__grid">
            <div class="contact-info__card card">
                <div class="contact-info__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                </div>
                <div class="contact-info__arrow">↗</div>
                <p class="contact-info__label">Email Address</p>
                <p class="contact-info__value">info@estatein.com</p>
            </div>
            <div class="contact-info__card card">
                <div class="contact-info__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.64A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <div class="contact-info__arrow">↗</div>
                <p class="contact-info__label">Phone Number</p>
                <p class="contact-info__value">+1 (223) 456-7890</p>
            </div>
            <div class="contact-info__card card">
                <div class="contact-info__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="contact-info__arrow">↗</div>
                <p class="contact-info__label">Main Headquarters</p>
                <p class="contact-info__value">123 Estatein Plaza, City Center</p>
            </div>
            <div class="contact-info__card card">
                <div class="contact-info__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                </div>
                <div class="contact-info__arrow">↗</div>
                <p class="contact-info__label">Social Media</p>
                <p class="contact-info__value">Instagram · LinkedIn · Facebook</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM -->
<section class="section contact-form-section">
    <div class="container">
        <div class="section-label">Get in Touch</div>
        <h2>Let's Connect</h2>
        <p>We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein.</p>

        <form class="properties-form" style="margin-top: var(--spacing-lg)">
            <div class="form-grid form-grid--3">
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
            </div>
            <div class="form-grid form-grid--3">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>Inquiry Type</label>
                    <select>
                        <option>Select Inquiry Type</option>
                        <option>Buy a Property</option>
                        <option>Sell a Property</option>
                        <option>Property Management</option>
                        <option>Investment Advice</option>
                        <option>General Inquiry</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>How Did You Hear About Us?</label>
                    <select>
                        <option>Select</option>
                        <option>Google Search</option>
                        <option>Social Media</option>
                        <option>Friend / Referral</option>
                        <option>Advertisement</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea rows="5" placeholder="Enter your Message here..."></textarea>
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

<!-- OFFICE LOCATIONS -->
<section class="section contact-offices" id="offices">
    <div class="container">
        <div class="section-label">Our Offices</div>
        <h2>Discover Our Office Locations</h2>
        <p>Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, or simply drop by for a chat, we have offices conveniently located to serve your needs.</p>

        <!-- TABS -->
        <div class="offices-tabs">
            <button class="offices-tab active" onclick="filterOffices('all', this)">All</button>
            <button class="offices-tab" onclick="filterOffices('regional', this)">Regional</button>
            <button class="offices-tab" onclick="filterOffices('international', this)">International</button>
        </div>

        <div class="offices-grid">
            <?php
            $offices = [
                ['type'=>'all', 'tag'=>'Main Headquarters',  'name'=>'123 Estatein Plaza, City Center, Metropolis',          'desc'=>'Our main headquarters serve as the heart of Estatein. Located in the bustling city center.', 'email'=>'info@estatein.com',  'phone'=>'+1 (223) 456-7890', 'city'=>'Metropolis'],
                ['type'=>'regional', 'tag'=>'Regional Offices','name'=>'456 Urban Avenue, Downtown District, Metropolis',   'desc'=>"Estatein's presence extends to multiple regions, each with its own dynamic real estate landscape.", 'email'=>'info@estatein.com', 'phone'=>'+1 (223) 628-7890', 'city'=>'Metropolis'],
            ];
            foreach ($offices as $o) : ?>
            <div class="office-card card" data-type="<?php echo $o['type']; ?>">
                <div class="office-card__inner">
                    <div class="office-card__header">
                        <span class="office-card__tag"><?php echo $o['tag']; ?></span>
                    </div>
                    <h3><?php echo $o['name']; ?></h3>
                    <p><?php echo $o['desc']; ?></p>
                    <div class="office-card__meta">
                        <span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                            <?php echo $o['email']; ?>
                        </span>
                        <span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8"/></svg>
                            <?php echo $o['phone']; ?>
                        </span>
                        <span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/></svg>
                            <?php echo $o['city']; ?>
                        </span>
                    </div>
                    <a href="#" class="btn btn-primary" style="width:100%; justify-content:center; margin-top:var(--spacing-sm)">Get Direction</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PHOTO GALLERY -->
<section class="section contact-gallery">
    <div class="container">
        <div class="contact-gallery__grid">
            <div class="contact-gallery__images">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&q=80" alt="Office">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&q=80" alt="Team">
                <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=400&q=80" alt="Workspace">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=400&q=80" alt="Meeting">
                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=400&q=80" alt="Team work">
            </div>
            <div class="contact-gallery__text">
                <div class="section-label">Our World</div>
                <h2>Explore Estatein's World</h2>
                <p>Step inside the world of Estatein, where professionalism meets warmth and expertise meets passion. Our gallery offers a glimpse into our team and workspaces, inviting you to get to know us better.</p>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
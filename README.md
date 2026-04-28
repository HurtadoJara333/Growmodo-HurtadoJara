# Estatein — Custom WordPress Theme

A pixel-perfect custom WordPress theme for a real estate business, built from a Figma design as part of a technical assessment.

## 🔗 Links
- **Live Demo:** [growmodo-hurtadojara.local](http://growmodo-hurtadojara.local)
- **GitHub:** [github.com/tu-usuario/estatein-wordpress-theme](https://github.com/tu-usuario/estatein-wordpress-theme)
- **Figma Reference:** [Real Estate Business Website UI Template](https://www.figma.com/community/file/1314076616839640516)

---

## 🛠 Tech Stack

| Layer | Tech |
|---|---|
| CMS | WordPress 6.x |
| Language | PHP 8.1, HTML5, CSS3, JavaScript (ES6) |
| Styling | Custom CSS with CSS Variables (no framework) |
| Fields | Advanced Custom Fields (ACF) |
| SEO | Yoast SEO |
| Dev Environment | Local WP |

---

## 📁 Theme Structure
estatein-theme/
├── assets/
│   ├── css/
│   │   ├── main.css          # Design tokens + all component styles
│   │   └── responsive.css    # Breakpoints: 1024px, 768px, 480px
│   ├── js/
│   │   └── main.js           # Navbar, FAQ accordion, office tabs filter
│   └── images/
├── inc/
│   ├── enqueue.php           # CSS/JS registration
│   ├── post-types.php        # CPT: property, team_member
│   └── acf-fields.php        # ACF field groups for properties
├── template-parts/
│   ├── hero.php              # Homepage hero + services strip
│   ├── properties-grid.php   # Featured properties section
│   ├── testimonials.php      # Client testimonials
│   ├── faq.php               # FAQ accordion
│   └── cta-banner.php        # Reusable CTA section
├── front-page.php            # Homepage
├── page-about.php            # About Us
├── page-properties.php       # Properties listing
├── page-services.php         # Services
├── page-contact.php          # Contact
├── single-property.php       # Single property detail
├── header.php                # Global header + navbar
├── footer.php                # Global footer
├── functions.php             # Theme setup
└── style.css                 # Theme declaration

---

## 🎨 Design Decisions

### CSS Variables over frameworks
Instead of Bootstrap or Tailwind, I used a custom CSS variable system to stay true to the Figma design tokens — exact colors, spacing, and typography without fighting against a framework's defaults.

### Custom Post Types
Properties are registered as a CPT (`property`) with ACF fields for price, bedrooms, bathrooms, sqft, location, type, and gallery. This gives the client a clean dashboard to manage listings without touching code.

### Template Parts
Reusable components like the CTA banner, hero, and FAQ are split into `template-parts/` so they can be included across multiple pages without code duplication.

### No jQuery dependency
All interactive elements (navbar toggle, FAQ accordion, office tabs filter, announcement bar) are built with vanilla JavaScript to keep the theme lightweight.

### Unsplash for placeholder images
Since the Figma assets weren't exportable, high-quality Unsplash images matching the design's aesthetic (dark architecture, modern buildings) were used as placeholders.

---

## 🔌 Plugins Used

| Plugin | Purpose |
|---|---|
| Advanced Custom Fields (ACF) Free | Custom fields for property listings |
| Yoast SEO | Meta tags, sitemap, SEO optimization |

---

## ⚙️ Local Installation

### Requirements
- PHP 8.1+
- WordPress 6.x
- Local WP (recommended) or XAMPP/MAMP

### Steps

1. Clone the repo:
```bash
git clone https://github.com/tu-usuario/estatein-wordpress-theme.git
```

2. Install WordPress locally with Local WP

3. Copy the theme folder to:
wp-content/themes/estatein-theme/

4. Import the database:
   - Install **All-in-One WP Migration** plugin
   - Go to WP Admin → All-in-One WP Migration → Import
   - Upload the `.wpress` file included in the repo

5. Go to **WP Admin → Appearance → Themes** and activate **Estatein**

6. Go to **Settings → Permalinks** → select **Post name** → Save

7. Assign page templates via WP CLI:
```bash
wp post meta update 8 _wp_page_template "page-properties.php"
wp post meta update 6 _wp_page_template "page-about.php"
wp post meta update 10 _wp_page_template "page-services.php"
wp post meta update 12 _wp_page_template "page-contact.php"
```

8. Visit `http://your-local-site.local` 🎉

---

## 📱 Responsive Breakpoints

| Breakpoint | Target |
|---|---|
| 1024px | Tablet landscape |
| 768px | Tablet portrait + mobile |
| 480px | Small mobile |

---

## 🚀 Pages Implemented

- **Home** — Hero, Services strip, Featured Properties, Testimonials, FAQ, CTA
- **About Us** — Journey, Values, Achievements, Process steps, Team, Clients
- **Properties** — Search + filters, Property grid, Contact form
- **Services** — 3 service blocks with sub-services and CTAs
- **Contact** — Info cards, Contact form, Office locations with tabs, Gallery
- **Single Property** — Gallery, Description, Features, Inquiry form, Pricing

---

## ⏱ Development Notes

This theme was built under a 4-hour stress test constraint as part of a technical assessment for Growmodo. Priority was given to:

1. Design fidelity to the Figma reference
2. Clean, modular PHP/CSS architecture
3. WordPress best practices (CPTs, template hierarchy, hooks)
4. Responsive layout across all breakpoints
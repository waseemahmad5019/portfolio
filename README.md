# Waseem Ahmad — 21st.dev WordPress Performance Portfolio & Theme

A state-of-the-art, high-converting portfolio website and custom WordPress theme built for **WordPress Performance Engineers**, **Technical SEO Specialists**, and **Full-Stack Developers**.

Inspired by **21st.dev**, **Aceternity UI**, and **Linear.app**.

---

## 📁 Modular Project Architecture & File Separation

Every single page and section is completely modular and separated into standalone files:

```
waseem-portfolio/
├── index.html                     # Complete Home Page
├── about.html                     # Dedicated About Page
├── services.html                  # Services & 3-Tier Package Comparison
├── projects.html                  # Filterable Case Studies with Modal Inspector
├── audit.html                     # Interactive Speed ROI Calculator & Free Audit Form
├── blog.html                      # Technical Insights & Guides
├── contact.html                   # Contact, Booking & Interactive FAQ
│
├── css/                           # Modular CSS Architecture
│   ├── main.css                   # Design tokens, typography, header, footer
│   ├── components.css             # 21st.dev UI components (spotlight, bento, tabs, badges)
│   ├── animations.css             # Scanbeams, marquee, live pulses, reveals
│   └── sections/                  # Individual Section Styles (100% Separated)
│       ├── hero.css               # Hero section & live telemetry dial
│       ├── bento-services.css     # Services bento grid styling
│       ├── terminal.css           # Live interactive terminal emulator
│       ├── case-studies.css       # Projects grid & modal inspector
│       ├── calculator.css         # Interactive Speed & Revenue Loss ROI calculator
│       ├── process.css            # 4-phase engineering roadmap
│       ├── testimonials.css       # Client testimonials & trust marquee
│       ├── about.css              # Deep-dive story & skill matrix
│       └── contact.css            # Inquiry form & FAQ accordion
│
├── js/                            # Modular JavaScript Engines
│   ├── main.js                    # Mobile navigation, scroll observer, toast notifications, quick-copy
│   ├── spotlight.js               # 21st.dev dynamic cursor-following card spotlight engine
│   ├── terminal.js                # Multi-tab live server terminal emulator (Nginx, PM2, WP-CLI, Security)
│   ├── calculator.js              # Speed & Revenue loss formula calculation engine
│   └── case-studies.js            # Category filter & modal inspection engine
│
├── sections/                      # Standalone HTML Section Partials (For easy copy & paste)
│   ├── hero-section.html
│   ├── about-section.html
│   ├── services-bento.html
│   ├── terminal-section.html
│   ├── projects-section.html
│   ├── process-section.html
│   ├── calculator-section.html
│   ├── testimonials-section.html
│   └── cta-footer-section.html
│
└── wordpress-theme/               # Ready-to-Upload Custom WordPress Theme
    └── waseem-performance/
        ├── style.css              # Theme header & WordPress metadata
        ├── functions.php          # Enqueue scripts, fonts, navigation menus
        ├── header.php             # Global header & navigation
        ├── footer.php             # Global footer & modal container
        ├── front-page.php         # Home page assembling template parts
        ├── page-about.php         # Dedicated About template
        ├── page-services.php      # Dedicated Services template
        ├── page-projects.php      # Dedicated Case Studies template
        ├── page-audit.php         # Dedicated Speed Audit template
        ├── page-blog.php          # Dedicated Blog template
        ├── page-contact.php       # Dedicated Contact template
        ├── index.php              # Fallback archive template
        ├── single.php             # Single blog post template
        ├── template-parts/        # Individual Section PHP Templates (Separated)
        │   ├── section-hero.php
        │   ├── section-bento.php
        │   ├── section-terminal.php
        │   ├── section-projects.php
        │   ├── section-calculator.php
        │   ├── section-process.php
        │   ├── section-testimonials.php
        │   ├── section-about.php
        │   ├── section-contact.php
        │   └── section-cta.php
        ├── css/                   # Theme CSS
        └── js/                    # Theme JS
```

---

## 🚀 How to Deploy on Shared Hosting (cPanel / Hostinger / Namecheap / LiteSpeed)

### Option A: As a Custom WordPress Theme (Recommended)
1. Zip the folder `wordpress-theme/waseem-performance`.
2. In your WordPress Admin Dashboard, go to **Appearance → Themes → Add New Theme → Upload Theme**.
3. Upload `waseem-performance.zip` and click **Activate**.
4. Create your WordPress pages (**Home**, **About**, **Services**, **Projects**, **Speed Audit**, **Insights**, **Contact**) and assign the corresponding template under **Page Attributes → Template**.
5. In **Settings → Reading**, set **Your homepage displays** to **A static page** and select your Home page.

### Option B: As a Superfast Static Website
1. Open your hosting File Manager (cPanel `public_html`).
2. Upload the root files (`index.html`, `about.html`, `services.html`, `projects.html`, `audit.html`, `blog.html`, `contact.html`, `css/`, `js/`).
3. Enjoy an instant 100/100 Google PageSpeed rating with zero database latency!

---

## ⚡ 21st.dev Interactive Features Included:
- **Cursor Spotlight Glow**: Smooth dynamic radial highlights that track your cursor on every card.
- **Interactive Multi-Tab Terminal**: Switch between Nginx FastCGI testing, WP-CLI queries, PM2 workers, and security vulnerability scans.
- **Live Core Web Vitals Telemetry**: Animated SVG score dial and metrics gauges for LCP, INP, CLS, and TTFB.
- **Speed & Revenue Impact Calculator**: Interactive range sliders calculating real monetary leakage from slow load times.
- **Case Studies Inspector**: Fast filtering (All, Speed, WooCommerce, Security) with deep-dive modal dialogs.
- **Toast Notifications & Quick Copy**: 1-click clipboard copy for email with animated toast confirmation.

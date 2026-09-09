<?php
/**
 * Template Name: Speed Audit & Calculator Page Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <section style="padding: 100px 0 60px;">
    <div class="container">
      
      <div class="section-header text-center reveal" style="max-width: 800px; margin: 0 auto 50px;">
        <span class="section-caption">// Zero-Risk Speed Diagnostic</span>
        <h1 class="section-title" style="font-size: 46px;">
          Free WordPress <span class="highlight">Speed &amp; CWV Diagnostic</span>
        </h1>
        <p class="section-subtitle">
          Get an actionable 1-on-1 technical teardown of your WordPress site. I'll pinpoint your render-blocking assets, slow database queries, and edge-caching flaws within 24 hours.
        </p>
      </div>

      <?php
      // Render Calculator Module
      get_template_part('template-parts/section', 'calculator');
      ?>

      <!-- Audit Request Form -->
      <div class="contact-grid reveal" style="max-width: 900px; margin: 60px auto 0;">
        <div class="contact-form-col" style="grid-column: span 2;">
          <h3 style="font-size: 24px; margin-bottom: 8px;">Request Your Free Performance Report</h3>
          <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 24px;">
            Fill in your details below and I'll send your custom video &amp; PDF teardown directly to your inbox.
          </p>

          <form id="wpAuditForm" onsubmit="event.preventDefault(); window.showToast('Audit request submitted! Waseem will reply within 24h.'); this.reset();">
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-input" required placeholder="e.g. John Smith">
              </div>
              <div class="form-group">
                <label class="form-label">Your Email Address</label>
                <input type="email" class="form-input" required placeholder="john@company.com">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">WordPress Site URL</label>
                <input type="url" class="form-input" required placeholder="https://yourwebsite.com">
              </div>
              <div class="form-group">
                <label class="form-label">Current Hosting Provider</label>
                <input type="text" class="form-input" placeholder="e.g. Hostinger, cPanel, SiteGround, VPS">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label">What is your primary concern?</label>
              <textarea class="form-textarea" placeholder="e.g. Failed mobile INP score, slow WooCommerce checkout, or slow Elementor rendering."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 10px;">
              <span>Send Me The Free Audit Teardown →</span>
            </button>
          </form>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>

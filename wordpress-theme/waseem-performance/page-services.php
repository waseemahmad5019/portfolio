<?php
/**
 * Template Name: Services Page Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <section style="padding: 100px 0 60px;">
    <div class="container">
      <div class="section-header text-center reveal" style="max-width: 800px; margin: 0 auto 50px;">
        <span class="section-caption">// Transparent Engagements</span>
        <h1 class="section-title" style="font-size: 46px;">
          Engineered Services Built for <span class="highlight">Speed &amp; Conversion</span>
        </h1>
        <p class="section-subtitle">
          Whether you need emergency Core Web Vitals remediation, custom WooCommerce optimization, or hands-off ongoing server maintenance, every engagement comes with verifiable benchmark guarantees.
        </p>
      </div>

      <!-- 3 Tier Pricing / Package Cards -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 80px;" class="reveal">
        
        <!-- Package 1: Speed Sprint -->
        <div class="spotlight-card" style="display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="badge" style="margin-bottom: 16px;">ONE-TIME SPRINT</span>
            <h3 style="font-size: 24px; margin-bottom: 8px;">Core Web Vitals Sprint</h3>
            <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 24px;">
              Designed for established WordPress &amp; Elementor sites failing mobile PageSpeed and Google search metrics.
            </p>
            
            <div style="font-size: 36px; font-family: var(--font-heading); font-weight: 800; color: #fff; margin-bottom: 24px;">
              Fixed Scope <span style="font-size: 14px; color: var(--text-muted); font-weight: normal;">/ per site</span>
            </div>

            <ul class="bento-features" style="margin-bottom: 32px;">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 90+ Mobile PageSpeed score guarantee</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fix LCP, INP &amp; CLS layout shifts</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Total Core Vitals plugin installation</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cloudflare edge caching configuration</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30-day post-launch monitoring</li>
            </ul>
          </div>
          <a href="<?php echo esc_url(home_url('/contact/?service=cwv')); ?>" class="btn btn-secondary" style="width: 100%;">Book Speed Sprint →</a>
        </div>

        <!-- Package 2: WooCommerce Scaling (Featured) -->
        <div class="spotlight-card" style="display: flex; flex-direction: column; justify-content: space-between; border-color: var(--primary-border); background: linear-gradient(155deg, rgba(203,32,45,0.09) 0%, var(--surface-1) 70%);">
          <div>
            <span class="badge badge-primary" style="margin-bottom: 16px;">MOST POPULAR FOR STORES</span>
            <h3 style="font-size: 24px; margin-bottom: 8px;">WooCommerce Scaling</h3>
            <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 24px;">
              Comprehensive checkout acceleration, database indexing, and high-concurrency optimization for e-commerce.
            </p>
            
            <div style="font-size: 36px; font-family: var(--font-heading); font-weight: 800; color: #fff; margin-bottom: 24px;">
              Custom Architecture
            </div>

            <ul class="bento-features" style="margin-bottom: 32px;">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Everything in Core Web Vitals Sprint</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eliminate cart fragments TTFB lag</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> High-Performance Order Storage (HPOS) setup</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Redis Persistent Object Cache setup</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 1,000+ concurrent shopper capacity tuning</li>
            </ul>
          </div>
          <a href="<?php echo esc_url(home_url('/contact/?service=woocommerce')); ?>" class="btn btn-primary" style="width: 100%;">Scale Your Store →</a>
        </div>

        <!-- Package 3: Security & Server Retainer -->
        <div class="spotlight-card" style="display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span class="badge" style="margin-bottom: 16px;">MONTHLY RETAINER</span>
            <h3 style="font-size: 24px; margin-bottom: 8px;">DevOps &amp; Security Retainer</h3>
            <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 24px;">
              Dedicated technical engineering partner. Zero downtime, ongoing CWV audits, security patches, and emergency response.
            </p>
            
            <div style="font-size: 36px; font-family: var(--font-heading); font-weight: 800; color: #fff; margin-bottom: 24px;">
              Retainer <span style="font-size: 14px; color: var(--text-muted); font-weight: normal;">/ month</span>
            </div>

            <ul class="bento-features" style="margin-bottom: 32px;">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 24/7 uptime &amp; speed degradation alerts</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero-downtime plugin/core updates</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Emergency malware removal &amp; recovery</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Direct WhatsApp developer access</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Monthly speed &amp; SEO health report</li>
            </ul>
          </div>
          <a href="<?php echo esc_url(home_url('/contact/?service=retainer')); ?>" class="btn btn-secondary" style="width: 100%;">Inquire Retainer →</a>
        </div>

      </div>

    </div>
  </section>

  <?php
  // Render Bento Services Breakdown
  get_template_part('template-parts/section', 'bento');

  // Render Process
  get_template_part('template-parts/section', 'process');

  // Render Final CTA
  get_template_part('template-parts/section', 'cta');
  ?>

</main>

<?php get_footer(); ?>

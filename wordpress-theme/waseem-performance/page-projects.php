<?php
/**
 * Template Name: Case Studies Page Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <section style="padding: 100px 0 20px;">
    <div class="container">
      <div class="section-header text-center reveal" style="max-width: 800px; margin: 0 auto 40px;">
        <span class="section-caption">// Real Production Benchmarks</span>
        <h1 class="section-title" style="font-size: 46px;">
          Proven Case Studies &amp; <span class="highlight">Architectural Wins</span>
        </h1>
        <p class="section-subtitle">
          Explore in-depth technical breakdowns of real WordPress &amp; WooCommerce sites optimized for high speeds and search visibility.
        </p>
      </div>
    </div>
  </section>

  <?php
  // Render Projects Catalog
  get_template_part('template-parts/section', 'projects');

  // Render Testimonials
  get_template_part('template-parts/section', 'testimonials');

  // Render Final CTA
  get_template_part('template-parts/section', 'cta');
  ?>

</main>

<?php get_footer(); ?>

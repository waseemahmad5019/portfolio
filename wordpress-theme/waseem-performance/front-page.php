<?php
/**
 * Front Page Template (Modular Section Assembly)
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php
  // 1. Hero Section with Live Telemetry
  get_template_part('template-parts/section', 'hero');

  // 2. Services Bento Grid
  get_template_part('template-parts/section', 'bento');

  // 3. Interactive Server Terminal
  get_template_part('template-parts/section', 'terminal');

  // 4. Case Studies & Benchmarks
  get_template_part('template-parts/section', 'projects');

  // 5. Interactive Speed ROI Calculator
  get_template_part('template-parts/section', 'calculator');

  // 6. Systematic 4-Phase Process
  get_template_part('template-parts/section', 'process');

  // 7. Testimonials & Client Trust
  get_template_part('template-parts/section', 'testimonials');

  // 8. Final CTA
  get_template_part('template-parts/section', 'cta');
  ?>

</main>

<?php get_footer(); ?>

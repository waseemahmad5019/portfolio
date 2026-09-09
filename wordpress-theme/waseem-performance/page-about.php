<?php
/**
 * Template Name: About Page Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php
  // Render Modular About Section
  get_template_part('template-parts/section', 'about');

  // Render Testimonials
  get_template_part('template-parts/section', 'testimonials');

  // Render Final CTA
  get_template_part('template-parts/section', 'cta');
  ?>

</main>

<?php get_footer(); ?>

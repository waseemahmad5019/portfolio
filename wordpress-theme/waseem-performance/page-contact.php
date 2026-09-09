<?php
/**
 * Template Name: Contact Page Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php
  // Render Contact & FAQ Module
  get_template_part('template-parts/section', 'contact');
  ?>

</main>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.faq-question').forEach(btn => {
      btn.addEventListener('click', () => {
        const item = btn.parentElement;
        item.classList.toggle('active');
      });
    });
  });
</script>

<?php get_footer(); ?>

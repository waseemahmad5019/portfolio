<?php
/**
 * Main Template File (Fallback)
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <section style="padding: 100px 0;">
    <div class="container">
      
      <?php if (have_posts()) : ?>
        <div class="section-header text-center reveal">
          <h1 class="section-title"><?php single_post_title(); ?></h1>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
          <?php while (have_posts()) : the_post(); ?>
            <article class="spotlight-card">
              <h2 style="font-size: 22px; margin-bottom: 12px;">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div style="color: var(--text-secondary); margin-bottom: 20px;">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">Read More →</a>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <div class="text-center">
          <h2>No posts found</h2>
          <p>Please check back later or return to home.</p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary" style="margin-top: 20px;">Return Home</a>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>

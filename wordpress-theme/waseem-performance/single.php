<?php
/**
 * Single Post Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <article style="padding: 100px 0 80px;">
    <div class="container container-narrow">
      
      <?php while (have_posts()) : the_post(); ?>
        
        <div style="margin-bottom: 36px;" class="reveal">
          <span class="badge badge-primary" style="margin-bottom: 16px;"><?php the_category(', '); ?></span>
          <h1 style="font-size: 42px; line-height: 1.2; margin-bottom: 16px;"><?php the_title(); ?></h1>
          
          <div style="display:flex; align-items:center; gap:16px; font-family:var(--font-mono); font-size:12.5px; color:var(--text-muted); padding-bottom:24px; border-bottom:1px solid var(--border);">
            <span>BY <?php the_author(); ?></span>
            <span>·</span>
            <span>PUBLISHED <?php echo get_the_date('M j, Y'); ?></span>
          </div>
        </div>

        <div style="font-size: 16.5px; line-height: 1.85; color: var(--text-secondary);" class="reveal">
          <?php the_content(); ?>
        </div>

        <div style="margin-top: 60px; padding-top: 30px; border-top: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;">
          <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-secondary btn-sm">← Back to Insights</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-sm">Discuss Your Project →</a>
        </div>

      <?php endwhile; ?>

    </div>
  </article>

</main>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Blog / Insights Page Template
 *
 * @package Waseem_Performance
 */

get_header(); ?>

<main id="primary" class="site-main">

  <section style="padding: 100px 0 80px;">
    <div class="container">
      
      <div class="section-header text-center reveal" style="max-width: 800px; margin: 0 auto 50px;">
        <span class="section-caption">// Deep-Dive Knowledge Base</span>
        <h1 class="section-title" style="font-size: 46px;">
          Technical Insights &amp; <span class="highlight">Performance Guides</span>
        </h1>
        <p class="section-subtitle">
          Actionable breakdowns on fixing Interaction to Next Paint (INP), tuning Nginx FastCGI microcache, and eliminating WooCommerce database bloat.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;" class="reveal">
        
        <?php
        $blog_posts = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 9,
        ]);

        if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) : $blog_posts->the_post();
        ?>
            <article class="spotlight-card" style="display:flex; flex-direction:column; justify-content:space-between;">
              <div>
                <span class="badge badge-primary" style="margin-bottom:14px;"><?php the_category(', '); ?></span>
                <h3 style="font-size: 20px; margin-bottom: 12px; line-height:1.3;">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px;">
                  <?php the_excerpt(); ?>
                </div>
              </div>
              <div style="font-family:var(--font-mono); font-size:12px; color:var(--text-muted); border-top:1px solid var(--border); padding-top:14px; display:flex; justify-content:space-between;">
                <span><?php echo get_the_date('M j, Y'); ?></span>
                <a href="<?php the_permalink(); ?>" style="color:var(--primary-light);">Read Guide →</a>
              </div>
            </article>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <!-- Fallback Mock Cards if no dynamic posts yet -->
            <article class="spotlight-card" style="display:flex; flex-direction:column; justify-content:space-between;">
              <div>
                <span class="badge badge-primary" style="margin-bottom:14px;">CORE WEB VITALS</span>
                <h3 style="font-size: 20px; margin-bottom: 12px; line-height:1.3;">
                  How to Fix Interaction to Next Paint (INP) on Heavy Elementor Sites
                </h3>
                <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px;">
                  Learn how main-thread JavaScript blocking degrades user interactions, and how script slicing and idle-callbacks bring INP under 50ms.
                </p>
              </div>
              <div style="font-family:var(--font-mono); font-size:12px; color:var(--text-muted); border-top:1px solid var(--border); padding-top:14px; display:flex; justify-content:space-between;">
                <span>8 MIN READ</span>
                <span style="color:var(--primary-light);">Read Technical Guide →</span>
              </div>
            </article>

            <article class="spotlight-card" style="display:flex; flex-direction:column; justify-content:space-between;">
              <div>
                <span class="badge badge-primary" style="margin-bottom:14px;">SERVER ARCHITECTURE</span>
                <h3 style="font-size: 20px; margin-bottom: 12px; line-height:1.3;">
                  Nginx FastCGI Microcaching vs. LiteSpeed LSCache on Shared Hosting
                </h3>
                <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px;">
                  A side-by-side benchmark comparing server response times (TTFB) and memory overhead during 500 req/sec load spikes.
                </p>
              </div>
              <div style="font-family:var(--font-mono); font-size:12px; color:var(--text-muted); border-top:1px solid var(--border); padding-top:14px; display:flex; justify-content:space-between;">
                <span>12 MIN READ</span>
                <span style="color:var(--primary-light);">Read Technical Guide →</span>
              </div>
            </article>

            <article class="spotlight-card" style="display:flex; flex-direction:column; justify-content:space-between;">
              <div>
                <span class="badge badge-primary" style="margin-bottom:14px;">WOOCOMMERCE</span>
                <h3 style="font-size: 20px; margin-bottom: 12px; line-height:1.3;">
                  Why AJAX Cart Fragments Kill TTFB and How to Suppress Them Safely
                </h3>
                <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px;">
                  Step-by-step code snippet to replace un-cached `wc-ajax` fragment requests with browser LocalStorage caching.
                </p>
              </div>
              <div style="font-family:var(--font-mono); font-size:12px; color:var(--text-muted); border-top:1px solid var(--border); padding-top:14px; display:flex; justify-content:space-between;">
                <span>6 MIN READ</span>
                <span style="color:var(--primary-light);">Read Technical Guide →</span>
              </div>
            </article>
        <?php endif; ?>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>

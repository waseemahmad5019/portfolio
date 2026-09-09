<?php
/**
 * Template Part: Call to Action (CTA) Banner
 *
 * @package Waseem_Performance
 */
?>
<section class="cta-section" style="padding:100px 0; position:relative; overflow:hidden; border-top:1px solid var(--border);">
  <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); width:700px; height:350px; background:radial-gradient(ellipse, rgba(203, 32, 45, 0.22), transparent 70%); pointer-events:none; z-index:0;"></div>
  
  <div class="container text-center reveal" style="position:relative; z-index:2; max-width:760px; margin:0 auto; text-align:center;">
    <span class="section-caption">// Zero-Risk Speed Acceleration</span>
    <h2 class="section-title" style="font-size:42px; margin-bottom:18px;">
      Ready to Turn Slow Scores into <span class="highlight">High-Converting Speed</span>?
    </h2>
    <p class="section-subtitle" style="margin-bottom:36px; font-size:17px;">
      Send me your WordPress site URL for a complimentary, no-obligation technical performance diagnostic. I'll identify your biggest bottlenecks within 24 hours.
    </p>

    <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
      <a href="<?php echo esc_url(home_url('/audit/')); ?>" class="btn btn-primary btn-lg">
        <span>Request Free Speed Audit →</span>
      </a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary btn-lg">
        <span>Book Strategy Call</span>
      </a>
    </div>
  </div>
</section>

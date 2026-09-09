<?php
/**
 * Template Part: Hero Section with Real Profile & Live Telemetry
 *
 * @package Waseem_Performance
 */
?>
<section class="hero-section" id="hero">
  <div class="hero-bg-glow"></div>
  <div class="container">
    
    <!-- Meta Telemetry Bar -->
    <div class="hero-meta-bar">
      <div class="hero-meta-left">
        <span class="badge badge-live">
          <span class="live-dot"></span>
          ACTIVE STATUS: AVAILABLE FOR MARCH AUDITS
        </span>
        <span class="badge">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          WORDPRESS &amp; TECHNICAL SEO
        </span>
      </div>
      <div class="hero-meta-right">
        <span>LATENCY: 0.12s</span> · <span>LOCATION: REMOTE / GLOBAL</span>
      </div>
    </div>

    <!-- Main Hero Grid -->
    <div class="hero-grid">
      <div class="hero-content reveal">
        <div class="hero-badge-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          WordPress Performance Engineer &amp; Full Stack Dev
        </div>
        <h1 class="hero-title">
          I engineer WordPress sites that pass <em>Core Web Vitals</em> — not just look pretty.
        </h1>
        <p class="hero-description">
          Hi, I'm <strong>Waseem Ahmad</strong>. I optimize WordPress, WooCommerce, and technical search infrastructure for agencies, high-traffic stores, and fast-moving brands. From custom plugin architecture to zero-downtime server tuning.
        </p>

        <div class="hero-ctas-group">
          <a href="<?php echo esc_url(home_url('/audit/')); ?>" class="btn btn-primary btn-lg">
            <span>Claim Free Speed Audit</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/projects/')); ?>" class="btn btn-secondary btn-lg">
            <span>Explore Case Studies</span>
          </a>
        </div>

        <!-- Trust Stats -->
        <div class="hero-stats-row">
          <div class="stat-item">
            <span class="stat-value">90<span>+</span></span>
            <span class="stat-label">Avg Mobile Score</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">1.1<span>s</span></span>
            <span class="stat-label">Avg LCP Time</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">100<span>%</span></span>
            <span class="stat-label">CWV Pass Rate</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">1<span>st</span></span>
            <span class="stat-label">Proprietary Plugin</span>
          </div>
        </div>
      </div>

      <!-- Hero Visual: Engineer Profile + Live CWV Telemetry -->
      <div class="hero-visual reveal">
        
        <div class="hero-engineer-card spotlight-card">
          <div class="engineer-photo-mini">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/waseem-photo.jpg'); ?>" alt="Waseem Ahmad — WordPress Performance Engineer">
          </div>
          <div class="engineer-info">
            <h4>Waseem Ahmad</h4>
            <span>WordPress Performance Engineer &amp; Full Stack Dev</span>
            <p style="font-size:12px; color:var(--text-secondary); margin-top:2px;">Creator of Total Core Vitals Plugin</p>
          </div>
        </div>

        <div class="telemetry-card spotlight-card">
          <div class="telemetry-header">
            <div class="telemetry-title">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <span>REAL-TIME AUDIT ENGINE · TOTAL CORE VITALS</span>
            </div>
            <span class="telemetry-badge">CWV PASSED</span>
          </div>

          <div class="telemetry-score-box">
            <div class="score-circle">
              <span class="score-num">98</span>
              <span class="score-lbl">Score</span>
            </div>
            <div class="score-details">
              <h4>Google PageSpeed Verified</h4>
              <p>Green across all Core Web Vitals parameters for desktop &amp; mobile.</p>
            </div>
          </div>

          <div class="metric-bars">
            <div class="metric-row">
              <div class="metric-info">
                <span class="name">Largest Contentful Paint (LCP)</span>
                <span class="val">1.1s (Good &lt; 2.5s)</span>
              </div>
              <div class="metric-progress"><div class="metric-fill" style="width: 95%;"></div></div>
            </div>

            <div class="metric-row">
              <div class="metric-info">
                <span class="name">Interaction to Next Paint (INP)</span>
                <span class="val">42ms (Good &lt; 200ms)</span>
              </div>
              <div class="metric-progress"><div class="metric-fill" style="width: 98%;"></div></div>
            </div>

            <div class="metric-row">
              <div class="metric-info">
                <span class="name">Cumulative Layout Shift (CLS)</span>
                <span class="val">0.00 (Zero Shift)</span>
              </div>
              <div class="metric-progress"><div class="metric-fill" style="width: 100%;"></div></div>
            </div>

            <div class="metric-row">
              <div class="metric-info">
                <span class="name">Time to First Byte (TTFB)</span>
                <span class="val">110ms (Edge Cached)</span>
              </div>
              <div class="metric-progress"><div class="metric-fill" style="width: 94%;"></div></div>
            </div>
          </div>

          <div class="telemetry-footer">
            <span>Stack: LiteSpeed / Nginx + Redis</span>
            <span>Plugin: Total Core Vitals</span>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

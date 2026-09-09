<?php
/**
 * Footer Template for Waseem Performance Theme
 *
 * @package Waseem_Performance
 */
?>
  <!-- Global Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        
        <div class="footer-brand">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo">
            <span class="logo-symbol">W</span>
            <span class="logo-text">Waseem<span>.dev</span></span>
          </a>
          <p>
            WordPress Performance Engineer &amp; Full Stack Developer specializing in Core Web Vitals, WooCommerce scaling, security hardening, and technical search infrastructure.
          </p>
          <div class="footer-live-badge">
            <span class="live-dot"></span>
            <span>SYSTEMS NORMAL · READY FOR DEPLOYS</span>
          </div>
        </div>

        <div class="footer-col">
          <h5>Navigation</h5>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About &amp; Story</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services &amp; Pricing</a></li>
            <li><a href="<?php echo esc_url(home_url('/projects/')); ?>">Case Studies</a></li>
            <li><a href="<?php echo esc_url(home_url('/audit/')); ?>">Speed Calculator</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact &amp; Booking</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Specializations</h5>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Core Web Vitals (CWV)</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">WooCommerce Optimization</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Total Core Vitals Plugin</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Cloudflare APO &amp; CDN</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Malware Cleanup &amp; Hardening</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Shared &amp; VPS Hosting Ops</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Direct Reach</h5>
          <ul>
            <li><a href="mailto:Waseemahmad5019@gmail.com">Waseemahmad5019@gmail.com</a></li>
            <li><a href="https://wa.me/923208457734" target="_blank">WhatsApp: +92 320 8457734</a></li>
            <li><span style="color:var(--text-muted); font-size:13px;">Timezone: UTC+5 (PKT) / Global</span></li>
          </ul>
        </div>

      </div>

      <div class="footer-bottom">
        <span>&copy; <?php echo date('Y'); ?> Waseem Ahmad. All rights reserved. Engineered for peak speed.</span>
        <div class="footer-socials">
          <button class="social-icon-btn" data-copy="Waseemahmad5019@gmail.com" title="Copy Email">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </button>
          <a href="https://wa.me/923208457734" target="_blank" class="social-icon-btn" title="WhatsApp">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal Container for Project Inspection -->
  <div class="modal-overlay" id="projectModal">
    <div class="modal-container">
      <button class="modal-close" id="modalClose">&times;</button>
      <div id="modalContent"></div>
    </div>
  </div>

<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Template Part: Contact & FAQ
 *
 * @package Waseem_Performance
 */
?>
<section class="contact-section" style="padding-top: 100px;">
  <div class="container">
    
    <div class="section-header text-center reveal" style="max-width: 800px; margin: 0 auto 50px;">
      <span class="section-caption">// Let's Build Fast</span>
      <h1 class="section-title" style="font-size: 46px;">
        Start a Project or <span class="highlight">Get in Touch</span>
      </h1>
      <p class="section-subtitle">
        Have a project in mind or need an emergency site fix? Send a message below or contact me directly via WhatsApp / Email.
      </p>
    </div>

    <div class="contact-grid reveal">
      
      <!-- Left: Direct Channels -->
      <div class="contact-info-col">
        <div class="contact-card-box">
          <h3 style="font-size: 22px; margin-bottom: 8px;">Direct Communication</h3>
          <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6;">
            I typically respond within 2 to 4 hours on business days.
          </p>

          <div class="contact-method-list">
            
            <a href="mailto:Waseemahmad5019@gmail.com" class="contact-method-item">
              <div class="c-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div class="c-details">
                <span>Direct Email</span>
                <strong>Waseemahmad5019@gmail.com</strong>
              </div>
            </a>

            <a href="https://wa.me/923208457734" target="_blank" class="contact-method-item">
              <div class="c-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
              </div>
              <div class="c-details">
                <span>WhatsApp / Direct Call</span>
                <strong>+92 320 8457734</strong>
              </div>
            </a>

            <div class="contact-method-item">
              <div class="c-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="c-details">
                <span>Working Hours</span>
                <strong>Monday – Saturday (Global Clients)</strong>
              </div>
            </div>

          </div>

          <div style="margin-top: 24px; display:flex; gap:10px;">
            <button class="btn btn-secondary btn-sm" data-copy="Waseemahmad5019@gmail.com" style="flex:1;">Copy Email</button>
            <a href="https://wa.me/923208457734" target="_blank" class="btn btn-primary btn-sm" style="flex:1;">Chat WhatsApp →</a>
          </div>
        </div>
      </div>

      <!-- Right: Project Form -->
      <div class="contact-form-col">
        <h3 style="font-size: 24px; margin-bottom: 8px;">Project Inquiry Form</h3>
        <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 24px;">
          Tell me about your site and project goals.
        </p>

        <form onsubmit="event.preventDefault(); window.showToast('Message sent successfully! Waseem will reply shortly.'); this.reset();">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-input" required placeholder="Alex Turner">
            </div>
            <div class="form-group">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-input" required placeholder="alex@brand.com">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Website URL</label>
              <input type="url" class="form-input" placeholder="https://yoursite.com">
            </div>
            <div class="form-group">
              <label class="form-label">Service Interested In</label>
              <select class="form-select">
                <option>Core Web Vitals Speed Sprint</option>
                <option>WooCommerce Store Optimization</option>
                <option>Security / Malware Removal</option>
                <option>Custom Plugin / Theme Dev</option>
                <option>DevOps &amp; Maintenance Retainer</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Project Details &amp; Current Problems</label>
            <textarea class="form-textarea" required placeholder="Describe your site performance, hosting stack, or specific goals..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 10px;">
            <span>Submit Inquiry →</span>
          </button>
        </form>
      </div>

    </div>

    <!-- FAQ Accordion -->
    <div class="faq-section reveal">
      <div class="section-header text-center" style="max-width: 650px; margin: 60px auto 40px;">
        <span class="section-caption">// Frequently Asked Questions</span>
        <h2 class="section-title">Common Questions</h2>
      </div>

      <div class="faq-list">
        
        <div class="faq-item">
          <button class="faq-question">
            <span>Will speed optimization work on shared hosting (e.g. Hostinger, cPanel)?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Yes, absolutely! While VPS environments offer more server-level control, the majority of speed bottlenecks on shared hosting come from un-delayed third-party scripts, un-cached DOM rendering, and un-optimized database transients. With our Total Core Vitals plugin and Cloudflare edge caching, shared hosting sites consistently achieve 90+ mobile scores.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Will optimization break my site design or functionality?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Never. All optimization work is either performed on an isolated staging clone or thoroughly tested before pushing to production. We verify all interactive elements (cart popups, checkout flows, contact forms, navigation menus) across desktop and mobile devices.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>How quickly can you clean up a malware infection?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Emergency malware removal is typically completed within 4 to 8 hours. We purge infected core files, remove backdoors from the database, fix permissions, and submit review requests to Google Search Console to clear blacklist warnings immediately.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

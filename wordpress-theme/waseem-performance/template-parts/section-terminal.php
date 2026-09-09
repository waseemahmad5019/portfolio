<?php
/**
 * Template Part: Interactive Terminal
 *
 * @package Waseem_Performance
 */
?>
<section class="terminal-section" id="terminal">
  <div class="container">
    
    <div class="section-header text-center reveal">
      <span class="section-caption">// Under the Hood</span>
      <h2 class="section-title">Built by an Engineer Who <span class="highlight">Lives in the Server</span></h2>
      <p class="section-subtitle">
        Performance isn't just toggling plugins — it's fine-tuning web server workers, caching layers, and database threads. Click the tabs below to simulate live server telemetry.
      </p>
    </div>

    <div class="terminal-wrapper reveal">
      <div class="terminal-window">
        
        <div class="terminal-topbar">
          <div class="terminal-dots">
            <span class="terminal-dot dot-red"></span>
            <span class="terminal-dot dot-yellow"></span>
            <span class="terminal-dot dot-green"></span>
          </div>

          <div class="terminal-tabs">
            <button class="terminal-tab-btn active" data-tab="nginx">nginx.conf</button>
            <button class="terminal-tab-btn" data-tab="wpcli">wp-cli</button>
            <button class="terminal-tab-btn" data-tab="pm2">pm2 cluster</button>
            <button class="terminal-tab-btn" data-tab="security">security scan</button>
          </div>

          <span class="terminal-user">waseem@production</span>
        </div>

        <div class="terminal-content-area" id="terminalContent">
          <!-- Live typed lines via terminal.js -->
        </div>

      </div>

      <div class="terminal-quick-actions">
        <button class="term-trigger-btn" data-scenario="nginx">▶ Test Nginx FastCGI Cache</button>
        <button class="term-trigger-btn" data-scenario="wpcli">▶ Query Total Core Vitals Plugin</button>
        <button class="term-trigger-btn" data-scenario="pm2">▶ Inspect Node/PM2 Workers</button>
        <button class="term-trigger-btn" data-scenario="security">▶ Run Malware Vulnerability Scan</button>
      </div>
    </div>

  </div>
</section>

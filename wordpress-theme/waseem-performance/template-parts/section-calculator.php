<?php
/**
 * Template Part: Speed & Revenue Calculator
 *
 * @package Waseem_Performance
 */
?>
<section class="calc-section" id="calculator">
  <div class="container">
    
    <div class="section-header text-center reveal">
      <span class="section-caption">// Interactive Estimator</span>
      <h2 class="section-title">Calculate Your <span class="highlight">Speed ROI &amp; Lost Sales</span></h2>
      <p class="section-subtitle">
        According to Google &amp; Amazon benchmark studies, each 1-second delay in page load drops conversions by 7% and spikes bounce rates by up to 32%.
      </p>
    </div>

    <div class="calc-container spotlight-card reveal">
      <div class="calc-grid">
        
        <!-- Controls / Inputs -->
        <div class="calc-inputs">
          
          <div class="calc-group">
            <div class="calc-label-row">
              <span class="calc-label">Monthly Website Visitors</span>
              <span class="calc-val-badge" id="trafficVal">25,000 /mo</span>
            </div>
            <input type="range" class="calc-slider" id="calcTraffic" min="2000" max="250000" step="1000" value="25000">
          </div>

          <div class="calc-group">
            <div class="calc-label-row">
              <span class="calc-label">Estimated Monthly Revenue</span>
              <span class="calc-val-badge" id="revenueVal">$15,000 /mo</span>
            </div>
            <input type="range" class="calc-slider" id="calcRevenue" min="1000" max="100000" step="1000" value="15000">
          </div>

          <div class="calc-group">
            <div class="calc-label-row">
              <span class="calc-label">Current Mobile Load Time</span>
              <span class="calc-val-badge" id="speedVal">4.2s</span>
            </div>
            <input type="range" class="calc-slider" id="calcSpeed" min="1.0" max="8.0" step="0.1" value="4.2">
          </div>

        </div>

        <!-- Calculated Results -->
        <div class="calc-results-card">
          <div class="calc-res-label">ESTIMATED ANNUAL REVENUE LEAKAGE</div>
          <div class="calc-res-big" id="lostRevenueVal">$36,720</div>
          <div class="calc-res-sub">lost every year due to slow mobile LCP &amp; drop-off</div>

          <div class="calc-breakdown">
            <div class="calc-breakdown-item">
              <div>ESTIMATED BOUNCE RATE</div>
              <b id="calcBounceRate">64%</b>
            </div>
            <div class="calc-breakdown-item">
              <div>POTENTIAL MONTHLY RECOVERY</div>
              <b id="calcRecoveredSales" style="color:var(--success);">+$3,060/mo</b>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/audit/')); ?>" class="btn btn-primary" style="width:100%;">
            <span>Reclaim This Revenue with an Audit →</span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>

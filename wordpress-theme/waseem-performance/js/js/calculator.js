/**
 * CALCULATOR.JS — Interactive WordPress Speed & Revenue Impact Calculator
 * Formula based on Google & Amazon benchmark studies (0.1s latency = 1-7% conversion impact)
 */

document.addEventListener('DOMContentLoaded', () => {
  const trafficSlider = document.getElementById('calcTraffic');
  const revenueSlider = document.getElementById('calcRevenue');
  const speedSlider = document.getElementById('calcSpeed');

  const trafficVal = document.getElementById('trafficVal');
  const revenueVal = document.getElementById('revenueVal');
  const speedVal = document.getElementById('speedVal');

  const lostRevenueEl = document.getElementById('lostRevenueVal');
  const bounceRateEl = document.getElementById('calcBounceRate');
  const recoveredSalesEl = document.getElementById('calcRecoveredSales');

  if (!trafficSlider || !revenueSlider || !speedSlider) return;

  function updateCalculator() {
    const traffic = parseInt(trafficSlider.value, 10);
    const revenue = parseInt(revenueSlider.value, 10);
    const speed = parseFloat(speedSlider.value);

    // Update labels
    trafficVal.textContent = traffic.toLocaleString() + ' /mo';
    revenueVal.textContent = '$' + revenue.toLocaleString() + ' /mo';
    speedVal.textContent = speed.toFixed(1) + 's';

    // Calculation:
    // Ideal speed is 1.2s. Every second above 1.5s causes ~7% conversion loss.
    const excessSeconds = Math.max(0, speed - 1.2);
    const lossPercentage = Math.min(0.65, (excessSeconds * 0.068));
    const monthlyLost = Math.round(revenue * lossPercentage);
    const annualLost = monthlyLost * 12;

    const baseBounce = 28;
    const estimatedBounce = Math.min(88, Math.round(baseBounce + (excessSeconds * 12)));

    if (lostRevenueEl) {
      lostRevenueEl.textContent = '$' + annualLost.toLocaleString();
    }
    if (bounceRateEl) {
      bounceRateEl.textContent = estimatedBounce + '%';
    }
    if (recoveredSalesEl) {
      recoveredSalesEl.textContent = '+$' + monthlyLost.toLocaleString() + '/mo';
    }
  }

  trafficSlider.addEventListener('input', updateCalculator);
  revenueSlider.addEventListener('input', updateCalculator);
  speedSlider.addEventListener('input', updateCalculator);

  updateCalculator();
});

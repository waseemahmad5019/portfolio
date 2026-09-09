/**
 * CASE-STUDIES.JS — Project Filter & Deep-Dive Modal Inspector
 */

document.addEventListener('DOMContentLoaded', () => {
  const filterBtns = document.querySelectorAll('[data-filter]');
  const projectCards = document.querySelectorAll('.project-card');

  // 1. Category Filtering
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      projectCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter || (category && category.includes(filter))) {
          card.style.display = 'flex';
          setTimeout(() => card.style.opacity = '1', 10);
        } else {
          card.style.opacity = '0';
          setTimeout(() => card.style.display = 'none', 200);
        }
      });
    });
  });

  // 2. Modal Inspection
  const modal = document.getElementById('projectModal');
  const modalBody = document.getElementById('modalContent');
  const closeBtn = document.getElementById('modalClose');

  const caseData = {
    'upsleeve': {
      title: 'Upsleeve.ae — E-Commerce Core Web Vitals Overhaul',
      domain: 'upsleeve.ae',
      badge: 'Speed · Cloudflare · CWV',
      metrics: [
        { label: 'Speed Score', val: '41 → 96/100' },
        { label: 'LCP (Largest Contentful Paint)', val: '4.8s → 1.1s' },
        { label: 'Total Page Weight', val: '6.2MB → 1.4MB' },
        { label: 'Mobile Conversion Rate', val: '+24.5%' }
      ],
      overview: 'Upsleeve is a fast-growing UAE lifestyle & fashion e-commerce brand built on WooCommerce. Heavy third-party tracking scripts, unoptimized high-res banners, and un-cached AJAX cart fragments were pushing mobile LCP to nearly 5 seconds.',
      solutions: [
        'Implemented Total Core Vitals plugin for lazy-evaluating tracking pixels (TikTok Pixel, Meta CAPI, Google Ads).',
        'Configured Cloudflare Enterprise APO with stale-while-revalidate edge caching.',
        'Migrated font delivery from external Google Fonts calls to preloaded self-hosted WOFF2 with font-display: swap.',
        'Refactored WooCommerce AJAX cart fragments using local storage caching to eliminate 1.2s TTFB delays.'
      ]
    },
    'superclone': {
      title: 'SuperCloneWatches — High-Traffic WooCommerce SEO & Server Architecture',
      domain: 'superclonewatches.com',
      badge: 'WooCommerce · VPS · Security',
      metrics: [
        { label: 'Organic Traffic', val: '+38% MoM' },
        { label: 'Server TTFB', val: '850ms → 140ms' },
        { label: 'Concurrent Capacity', val: '1,500+ users' },
        { label: 'Security Grade', val: 'A+ (SSL Labs)' }
      ],
      overview: 'A luxury catalog with over 4,000 SKU variations experiencing database query locks during peak traffic spikes and crawl-budget bloat from faceted filters.',
      solutions: [
        'Engineered custom Nginx microcaching bypassing PHP completely for logged-out catalog browsers.',
        'Fixed faceted navigation crawl-budget leak by parameterizing canonical tags and noindexing thin filter combinations.',
        'Implemented Redis Object Cache with persistent query caching for high-load category queries.',
        'Hardened Ubuntu VPS with Fail2Ban, custom UFW firewall rules, and malware auto-quarantine daemon.'
      ]
    },
    'bellafoods': {
      title: 'BellaFoods.pk — Checkout Speed Recovery & Malware Remediation',
      domain: 'bellafoods.pk',
      badge: 'Malware Cleanup · Checkout Speed',
      metrics: [
        { label: 'Malware Status', val: '100% Eradicated' },
        { label: 'Checkout Latency', val: '3.4s → 0.9s' },
        { label: 'Google Blacklist', val: 'Delisted in 6h' },
        { label: 'Checkout Drop-off', val: '-31%' }
      ],
      overview: 'BellaFoods was infected with an obfuscated redirect malware script inserted through an outdated plugin vulnerability, causing Google Chrome to flag the site with security warnings.',
      solutions: [
        'Conducted complete core file integrity check via WP-CLI and cleaned 38 infected database tables.',
        'Replaced compromised third-party plugins with custom lightweight functions.',
        'Cleaned Google Search Console security issues and had domain delisted within 6 hours.',
        'Optimized WooCommerce checkout flow and shipping calculation triggers.'
      ]
    }
  };

  document.querySelectorAll('[data-project-id]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const id = btn.getAttribute('data-project-id');
      const data = caseData[id];
      if (!data || !modal || !modalBody) return;

      modalBody.innerHTML = `
        <div style="margin-bottom:20px;">
          <span class="badge badge-primary" style="margin-bottom:12px;">${data.badge}</span>
          <h3 style="font-size:26px;font-weight:700;margin-bottom:8px;">${data.title}</h3>
          <p style="font-family:var(--font-mono);font-size:13px;color:var(--text-muted);">Client Target: <span style="color:var(--text-primary);">${data.domain}</span></p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin:24px 0;padding:18px;background:var(--surface-2);border-radius:var(--radius-md);border:1px solid var(--border);">
          ${data.metrics.map(m => `
            <div>
              <span style="font-family:var(--font-mono);font-size:11px;color:var(--text-muted);display:block;text-transform:uppercase;">${m.label}</span>
              <strong style="font-family:var(--font-heading);font-size:18px;color:var(--success);">${m.val}</strong>
            </div>
          `).join('')}
        </div>

        <div style="margin-bottom:20px;">
          <h4 style="font-size:16px;margin-bottom:8px;color:var(--text-primary);">Challenge & Context</h4>
          <p style="font-size:14px;color:var(--text-secondary);line-height:1.7;">${data.overview}</p>
        </div>

        <div>
          <h4 style="font-size:16px;margin-bottom:12px;color:var(--text-primary);">Key Engineering Deliverables</h4>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;">
            ${data.solutions.map(s => `
              <li style="display:flex;align-items:flex-start;gap:10px;font-size:13.5px;color:var(--text-secondary);line-height:1.5;">
                <span style="color:var(--primary-light);font-weight:bold;font-family:var(--font-mono);">✔</span>
                <span>${s}</span>
              </li>
            `).join('')}
          </ul>
        </div>

        <div style="margin-top:32px;display:flex;gap:12px;justify-content:flex-end;">
          <a href="contact.html" class="btn btn-primary btn-sm">Get Similar Results →</a>
        </div>
      `;

      modal.classList.add('open');
    });
  });

  if (closeBtn && modal) {
    closeBtn.addEventListener('click', () => modal.classList.remove('open'));
    modal.addEventListener('click', (e) => {
      if (e.target === modal) modal.classList.remove('open');
    });
  }
});

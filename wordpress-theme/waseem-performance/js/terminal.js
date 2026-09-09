/**
 * TERMINAL.JS — Interactive Live Server Terminal Emulator with Tabs & Triggers
 */

document.addEventListener('DOMContentLoaded', () => {
  const terminalArea = document.getElementById('terminalContent');
  if (!terminalArea) return;

  const terminalScenarios = {
    nginx: [
      { cmd: 'sudo nginx -t', out: 'nginx: configuration file /etc/nginx/nginx.conf syntax is ok\nnginx: configuration file test is successful' },
      { cmd: 'sudo systemctl reload nginx', out: '✔ [OK] fastcgi_cache enabled with 30d microcache' },
      { cmd: 'curl -I https://upsleeve.ae', out: 'HTTP/2 200\ncf-cache-status: HIT\nx-fastcgi-cache: HIT\nresponse-time: 0.18s' }
    ],
    pm2: [
      { cmd: 'pm2 status', out: '┌────┬──────────────────┬────────┬────────┬──────┐\n│ id │ name             │ mode   │ ↺      │ stat │\n├────┼──────────────────┼────────┼────────┼──────┤\n│ 0  │ wp-cron-worker   │ cluster│ 0      │ online│\n│ 1  │ img-optimizer    │ fork   │ 0      │ online│\n└────┴──────────────────┴────────┴────────┴──────┘' },
      { cmd: 'pm2 reload all --update-env', out: '✔ [PM2] Reloading all processes with zero-downtime cluster.' }
    ],
    wpcli: [
      { cmd: 'wp plugin status total-core-vitals', out: 'Plugin total-core-vitals details:\n  Name: Total Core Vitals Pro\n  Status: Active\n  Version: 2.4.0\n  Features: JS Delay, CSS Critical Path, DB Auto-Purge' },
      { cmd: 'wp cache flush', out: 'Success: Redis object cache completely flushed in 4ms.' }
    ],
    security: [
      { cmd: 'clamscan -r /var/www/html/wp-content', out: '----------- SCAN SUMMARY -----------\nKnown viruses: 8649231\nEngine version: 1.0.1\nScanned files: 14208\nInfected files: 0\nTime: 1.428 sec' },
      { cmd: 'ufw status verbose', out: 'Status: active\nLogging: on (low)\nDefault: deny (incoming), allow (outgoing)' }
    ]
  };

  let activeTab = 'nginx';
  let isTyping = false;

  function runScript(scenarioKey) {
    if (isTyping) return;
    isTyping = true;
    terminalArea.innerHTML = '';
    const lines = terminalScenarios[scenarioKey] || terminalScenarios.nginx;
    let step = 0;

    function typeStep() {
      if (step >= lines.length) {
        isTyping = false;
        return;
      }

      const item = lines[step];
      const lineDiv = document.createElement('div');
      lineDiv.className = 'term-line';
      lineDiv.innerHTML = `<span class="term-prompt">waseem@prod:~$</span> <span class="term-cmd"></span><span class="term-cursor"></span>`;
      terminalArea.appendChild(lineDiv);

      const cmdEl = lineDiv.querySelector('.term-cmd');
      const cursorEl = lineDiv.querySelector('.term-cursor');
      let charIdx = 0;

      const typer = setInterval(() => {
        cmdEl.textContent += item.cmd[charIdx];
        charIdx++;
        if (charIdx >= item.cmd.length) {
          clearInterval(typer);
          cursorEl.remove();

          setTimeout(() => {
            const outDiv = document.createElement('div');
            outDiv.className = 'term-output';
            outDiv.innerHTML = item.out.replace(/\n/g, '<br/>').replace(/✔/g, '<span class="term-success">✔</span>');
            terminalArea.appendChild(outDiv);
            terminalArea.scrollTop = terminalArea.scrollHeight;

            step++;
            setTimeout(typeStep, 600);
          }, 350);
        }
      }, 35);
    }

    typeStep();
  }

  // Handle Tab Switch
  document.querySelectorAll('.terminal-tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.terminal-tab-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeTab = btn.getAttribute('data-tab');
      runScript(activeTab);
    });
  });

  // Handle Quick Trigger Buttons
  document.querySelectorAll('.term-trigger-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const scenario = btn.getAttribute('data-scenario');
      const tabTarget = document.querySelector(`.terminal-tab-btn[data-tab="${scenario}"]`);
      if (tabTarget) {
        document.querySelectorAll('.terminal-tab-btn').forEach(b => b.classList.remove('active'));
        tabTarget.classList.add('active');
      }
      runScript(scenario);
    });
  });

  // Initial Run
  runScript('nginx');
});

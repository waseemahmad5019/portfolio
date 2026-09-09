/**
 * SPOTLIGHT.JS — 21st.dev Dynamic Cursor-Tracking Card Spotlight
 * Computes relative mouse coordinates and sets CSS variables --mouse-x and --mouse-y
 */

document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.spotlight-card, .bento-card, .project-card, .process-card, .pillar-card');

  cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
  });
});

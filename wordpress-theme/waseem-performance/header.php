<?php
/**
 * Header Template for Waseem Performance Theme
 *
 * @package Waseem_Performance
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Background Gradients (21st.dev Style) -->
  <div class="bg-grid-pattern"></div>
  <div class="noise-overlay"></div>

  <!-- Global Navigation -->
  <header class="site-header">
    <div class="container">
      <div class="nav-inner">
        
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo">
          <div class="logo-symbol">W</div>
          <div class="logo-text">Waseem<span>.dev</span></div>
        </a>

        <ul class="nav-menu">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link <?php echo is_page('about') ? 'active' : ''; ?>">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="nav-link <?php echo is_page('services') ? 'active' : ''; ?>">Services</a></li>
          <li><a href="<?php echo esc_url(home_url('/projects/')); ?>" class="nav-link <?php echo is_page('projects') ? 'active' : ''; ?>">Case Studies</a></li>
          <li><a href="<?php echo esc_url(home_url('/audit/')); ?>" class="nav-link <?php echo is_page('audit') ? 'active' : ''; ?>">Speed Audit</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="nav-link <?php echo (is_home() || is_page('blog')) ? 'active' : ''; ?>">Insights</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link <?php echo is_page('contact') ? 'active' : ''; ?>">Contact</a></li>
        </ul>

        <div class="nav-actions">
          <a href="<?php echo esc_url(home_url('/audit/')); ?>" class="btn btn-secondary btn-sm">Free Audit</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-sm">
            <span>Start Project</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>

      </div>
    </div>
  </header>

  <!-- Mobile Drawer -->
  <div class="mobile-drawer" id="mobileDrawer">
    <ul class="mobile-nav-links">
      <li><a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Home <span>→</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="mobile-nav-link <?php echo is_page('about') ? 'active' : ''; ?>">About <span>→</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="mobile-nav-link <?php echo is_page('services') ? 'active' : ''; ?>">Services <span>→</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/projects/')); ?>" class="mobile-nav-link <?php echo is_page('projects') ? 'active' : ''; ?>">Case Studies <span>→</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/audit/')); ?>" class="mobile-nav-link <?php echo is_page('audit') ? 'active' : ''; ?>">Speed Audit <span>→</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="mobile-nav-link <?php echo (is_home() || is_page('blog')) ? 'active' : ''; ?>">Insights <span>→</span></a></li>
      <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="mobile-nav-link <?php echo is_page('contact') ? 'active' : ''; ?>">Contact <span>→</span></a></li>
    </ul>
    <div style="margin-top:auto; display:flex; flex-direction:column; gap:12px;">
      <a href="<?php echo esc_url(home_url('/audit/')); ?>" class="btn btn-primary" style="width:100%;">Free Speed Audit →</a>
      <button class="btn btn-secondary" data-copy="Waseemahmad5019@gmail.com" style="width:100%;">Copy Email</button>
    </div>
  </div>

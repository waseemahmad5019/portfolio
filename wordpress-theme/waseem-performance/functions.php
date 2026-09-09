<?php
/**
 * Waseem Performance Theme Functions & Asset Enqueues
 *
 * @package Waseem_Performance
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function waseem_performance_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Title tag management
    add_theme_support('title-tag');

    // Post thumbnails
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus([
        'primary' => __('Primary Navigation Menu', 'waseem-performance'),
        'footer'  => __('Footer Navigation Menu', 'waseem-performance'),
    ]);

    // HTML5 markup support
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
}
add_action('after_setup_theme', 'waseem_performance_setup');

/**
 * Enqueue Styles and Scripts for shared hosting performance
 */
function waseem_performance_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // Google Fonts: Inter, Space Grotesk, JetBrains Mono
    wp_enqueue_style(
        'waseem-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700;800&display=swap',
        [],
        null
    );

    // Core Theme Styles
    wp_enqueue_style('waseem-main-style', get_template_directory_uri() . '/css/main.css', [], $theme_version);
    wp_enqueue_style('waseem-components-style', get_template_directory_uri() . '/css/components.css', [], $theme_version);
    wp_enqueue_style('waseem-animations-style', get_template_directory_uri() . '/css/animations.css', [], $theme_version);

    // Section Modular Styles
    wp_enqueue_style('waseem-hero-style', get_template_directory_uri() . '/css/sections/hero.css', [], $theme_version);
    wp_enqueue_style('waseem-bento-style', get_template_directory_uri() . '/css/sections/bento-services.css', [], $theme_version);
    wp_enqueue_style('waseem-terminal-style', get_template_directory_uri() . '/css/sections/terminal.css', [], $theme_version);
    wp_enqueue_style('waseem-case-studies-style', get_template_directory_uri() . '/css/sections/case-studies.css', [], $theme_version);
    wp_enqueue_style('waseem-calculator-style', get_template_directory_uri() . '/css/sections/calculator.css', [], $theme_version);
    wp_enqueue_style('waseem-process-style', get_template_directory_uri() . '/css/sections/process.css', [], $theme_version);
    wp_enqueue_style('waseem-testimonials-style', get_template_directory_uri() . '/css/sections/testimonials.css', [], $theme_version);
    wp_enqueue_style('waseem-about-style', get_template_directory_uri() . '/css/sections/about.css', [], $theme_version);
    wp_enqueue_style('waseem-contact-style', get_template_directory_uri() . '/css/sections/contact.css', [], $theme_version);

    // Core Theme JavaScript
    wp_enqueue_script('waseem-main-script', get_template_directory_uri() . '/js/main.js', [], $theme_version, true);
    wp_enqueue_script('waseem-spotlight-script', get_template_directory_uri() . '/js/spotlight.js', [], $theme_version, true);
    wp_enqueue_script('waseem-terminal-script', get_template_directory_uri() . '/js/terminal.js', [], $theme_version, true);
    wp_enqueue_script('waseem-calculator-script', get_template_directory_uri() . '/js/calculator.js', [], $theme_version, true);
    wp_enqueue_script('waseem-case-studies-script', get_template_directory_uri() . '/js/case-studies.js', [], $theme_version, true);
}
add_action('wp_enqueue_scripts', 'waseem_performance_scripts');

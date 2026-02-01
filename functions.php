<?php
if (!defined('ABSPATH')) exit;

function slt_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
  add_theme_support('custom-logo');

  register_nav_menus([
    'primary' => __('Primary Menu', 'sl-luxury-tours'),
  ]);
}
add_action('after_setup_theme', 'slt_theme_setup');

function slt_enqueue_assets() {
  wp_enqueue_style('slt-style', get_stylesheet_uri(), [], '1.1');
}
add_action('wp_enqueue_scripts', 'slt_enqueue_assets');

function slt_customize_register($wp_customize){

  // Contact section
  $wp_customize->add_section('slt_contact', [
    'title'    => __('Contact Details', 'sl-luxury-tours'),
    'priority' => 30,
  ]);

  $wp_customize->add_setting('slt_whatsapp', [
    'default' => '+94777958036',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('slt_whatsapp', [
    'label' => __('WhatsApp Number', 'sl-luxury-tours'),
    'section' => 'slt_contact',
    'type' => 'text',
  ]);

  $wp_customize->add_setting('slt_phone', [
    'default' => '+94777958036',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('slt_phone', [
    'label' => __('Phone Number', 'sl-luxury-tours'),
    'section' => 'slt_contact',
    'type' => 'text',
  ]);

  // Hero section
  $wp_customize->add_section('slt_hero', [
    'title'    => __('Homepage Hero', 'sl-luxury-tours'),
    'priority' => 28,
  ]);

  $wp_customize->add_setting('slt_hero_title', [
    'default' => 'SL Luxury Tours & Travel',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('slt_hero_title', [
    'label' => __('Hero Title', 'sl-luxury-tours'),
    'section' => 'slt_hero',
    'type' => 'text',
  ]);

  $wp_customize->add_setting('slt_hero_subtitle', [
    'default' => 'Luxury & comfortable private tours with Toyota Axio in Sri Lanka.',
    'sanitize_callback' => 'sanitize_text_field',
  ]);
  $wp_customize->add_control('slt_hero_subtitle', [
    'label' => __('Hero Subtitle', 'sl-luxury-tours'),
    'section' => 'slt_hero',
    'type' => 'text',
  ]);

  // Hero background image
  $wp_customize->add_setting('slt_hero_bg', [
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'slt_hero_bg',
    [
      'label' => __('Hero Background Image', 'sl-luxury-tours'),
      'section' => 'slt_hero',
    ]
  ));
}
add_action('customize_register', 'slt_customize_register');

function slt_whatsapp_link(){
  $num = get_theme_mod('slt_whatsapp', '+94777958036');
  $clean = preg_replace('/[^0-9]/', '', $num);
  if (!$clean) $clean = '94777958036';
  return 'https://wa.me/' . $clean;
}

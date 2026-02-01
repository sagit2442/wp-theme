<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <div class="title"><?php echo esc_html(get_bloginfo('name')); ?></div>
      <div class="tag"><?php echo esc_html(get_bloginfo('description')); ?></div>
    </a>

    <nav class="nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => false,
          'items_wrap'     => '%3$s',
          'depth'          => 1,
        ]);
      ?>
      <a class="btn primary" href="<?php echo esc_url( slt_whatsapp_link() ); ?>" target="_blank" rel="noopener">
        WhatsApp
      </a>
    </nav>
  </div>
</header>

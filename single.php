<?php get_header(); ?>

<div class="content-area">
  <div class="container">
    <div class="card">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 style="margin-top:0;"><?php the_title(); ?></h1>
        <div style="color:var(--muted); font-size:13px; margin-bottom:14px;">
          <?php echo esc_html(get_the_date()); ?>
        </div>
        <div><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

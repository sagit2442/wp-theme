<?php get_header(); ?>

<div class="content-area">
  <div class="container">
    <div class="card">
      <h1><?php single_post_title(); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article style="margin: 18px 0; padding-top: 18px; border-top: 1px solid rgba(255,255,255,0.10);">
          <h2 style="margin:0 0 8px;">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div style="color: rgba(232,236,244,0.82);"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; else: ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

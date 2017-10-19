<?php get_header(); ?>
<main id="main">
  <div class="container narrow">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php if(is_archive()): ?>
        <div class="blog-summary">
          <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_excerpt(); ?>
        </div>
      <?php else: ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <article>
          <?php the_content(); ?>
        </article>
      <?php endif; ?>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
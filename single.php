<?php get_header(); ?>
<main id="main">
  <div class="container narrow">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
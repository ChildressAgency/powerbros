<?php get_header(); ?>
<section id="mainContent">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endif; endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>
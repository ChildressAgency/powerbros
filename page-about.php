<?php get_header(); ?>
<main id="main">
  <div class="container narrow">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; ?>
    <?php if(have_rows('team_members')): ?>
      <div class="row">
        <?php $i==0; while(have_rows('team_members')): the_row(); ?>
          <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-6">
            <div class="owner">
              <h2><?php the_sub_field('team_member_name'); ?></h2>
              <p><a href="mailto:<?php the_sub_field('team_member_email'); ?>"><?php the_sub_field('team_member_email'); ?></a></p>
              <p><a href="tel:<?php the_sub_field('team_member_phone'); ?>"><?php the_sub_field('team_member_phone'); ?></a></p>
            </div>
          </div>
        <?php $i++; endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php if(get_field('mission')): ?>
  <section id="mission">
    <div class="container narrow">
      <article>
        <h1 class="page-title">Our Mission</h1>
        <?php the_field('mission'); ?>
      </article>
    </div>
  </section>
<?php endif; ?>
<?php get_footer(); ?>
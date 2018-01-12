<?php get_header(); ?>
<main id="main">
  <div class="container narrow">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="page-title">Services</h1>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; ?>
  </div>
  <div class="container services">
    <div class="row">
      <?php
        $services = new WP_Query(array(
          'post_type' => 'services',
          'posts_per_page' => -1
        ));

        if($services->have_posts()): $i=0; while($services->have_posts()): $services->the_post(); ?>
          <?php if($i%3==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-4">
            <div class="service-card">
              <?php the_post_thumbnail('full', ['class' => 'img-responsive center-block']); ?>
              <div class="card-footer">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php if(get_field('service_short_description')): ?>
                  <p><?php the_field('service_short_description'); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </div>
</main>
  <section id="contactInfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <a href="mailto:<?php the_field('email', 'option'); ?>" class="contact-icon-link email-icon"><?php the_field('email', 'option'); ?></a>
        </div>
        <div class="col-sm-4">
          <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="contact-icon-link phone-icon"><?php the_field('phone_number', 'option'); ?></a>
        </div>
        <div class="col-sm-4">
          <a href="#" class="contact-icon-link map-icon"><?php the_field('city', 'option'); ?></a>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
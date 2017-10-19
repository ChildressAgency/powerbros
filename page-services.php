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
      <?php if(have_rows('services')): $i=0; while(have_rows('services')): the_row(); ?>
        <?php if($i%3==0){ echo '<div class="clearfix"></div>'; } ?>
        <div class="col-sm-4">
          <div class="service-card">
            <img src="<?php the_sub_field('service_image'); ?>" class="img-responsive center-block" alt="" />
            <div class="card-footer">
              <h2><?php the_sub_field('service_title'); ?></h2>
              <p><?php the_sub_field('service_text'); ?></p>
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
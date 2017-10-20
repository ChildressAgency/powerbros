<?php get_header(); ?>
  <section id="hp-hero">
    <div class="container">
      <div class="content-wrapper">
        <div class="content">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Power Brothers Logo" />
          <h2><?php the_field('hero_section_caption'); ?></h2>
          <a href="<?php echo home_url('contact-us'); ?>" class="btn-main">Free Estimate</a>
        </div>
      </div>
    </div>
  </section>
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
  <section id="services">
    <div class="container">
      <div class="content-square">
        <h1>Services</h1>
        <ul>
          <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
            <li><?php the_sub_field('service'); ?></li>
          <?php endwhile; endif; ?>
        </ul>
        <a href="<?php echo home_url('services'); ?>" class="btn-main">All Services</a>
        <br />
        <a href="<?php echo home_url('contact-us'); ?>" class="btn-main">Contact Us</a>
      </div>
    </div>
  </section>
  <?php 
    $images = get_field('recent_work_images');
    if($images): ?>
      <section id="recentWork">
        <div class="container">
          <h1>Our Recent Work</h1>
          <div class="gallery">
            <div class="row">
              <div class="col-sm-4">
                <div class="row">
                  <?php 
                    $i=0;
                    foreach($images as $image):
                      if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
                      <div class="col-xs-6">
                        <a href="#" class="thumb" data-full_size="<?php echo $image['url']; ?>"><img src="<?php echo $image['sizes']['medium']; ?>" class="img-responsive center-block" alt="thumb" /></a>
                      </div>
                  <?php $i++; endforeach; ?>
                </div>
              </div>
              <div class="col-sm-8">
                <img src="<?php echo $images[0]['url']; ?>" id="fullSizeImage" class="img-responsive center-block" alt="" />
              </div>
            </div>
          </div>
          <a href="<?php echo home_url('our-work'); ?>" class="btn-main">More Recent Work</a>
        </div>
      </section>
  <?php endif; ?>
<?php get_footer(); ?>
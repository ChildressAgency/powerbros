<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>  
      <?php endwhile; endif; ?>
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-bubble">
            <p><a href="tel:<?php the_field('phone_number', 'option'); ?>" class="phone-icon-small"><?php the_field('phone_number', 'option'); ?></a></p>
            <p><a href="mailto:<?php the_field('email', 'option'); ?>" class="mail-icon-small"><?php the_field('email', 'option'); ?></a></p>
            <p><a href="#" class="map-icon-small"><?php the_field('coverage_area', 'option'); ?></a></p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/credit-cards.png" class="img-responsive center-block credit-cards" alt="" />
          <?php 
            $facebook = get_field('facebook', 'option');
            $twitter = get_field('twitter', 'option');
            $instagram = get_field('instagram', 'option');
            $linkedin = get_field('linkedin', 'option');
          ?>
          <div class="social social-btns">
            <?php if($facebook): ?>
              <a href="<?php echo $facebook; ?>" class="btn-alt" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a>
            <?php endif; if($twitter): ?>
              <a href="<?php echo $twitter; ?>" class="btn-alt" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
            <?php endif; if($instagram): ?>
              <a href="<?php echo $instagram; ?>" class="btn-alt" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
            <?php endif; if($linkedin): ?>
              <a href="<?php echo $linkedin; ?>" class="btn-alt" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-6">
          <?php echo do_shortcode('[contact-form-7 id="16" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </main>
  <section id="estimatesPhone">
    <div class="container">
      <h1>Free Estimates</h1>
      <h2><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></h2>
    </div>
  </section>
<?php get_footer(); ?>
<?php //testimonials section
  if(!is_page('contact-us')){
    get_template_part('partials/testimonials', 'section');
  }
?>

<?php //homepage social section
  if(is_front_page()){
    get_template_part('partials/hp_social', 'section');
  }
?>

<?php if(!is_page('contact-us')): ?>
  <section id="contact">
    <?php if(is_front_page()): ?>
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height image-side"></div>
          <div class="col-sm-6 col-sm-height">
            <?php echo do_shortcode('[contact-form]'); ?>
          </div>
        </div>
      </div>
    <?php else: ?>
      <div class="container">
        <?php echo do_shortcode('[contact-form]'); ?>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>

  <footer>
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-3 col-sm-height">
          <a href="<?php echo home_url(); ?>" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.png" class="img-responsive center-block" alt="Power Brothers Logo" /></a>
        </div>
        <div class="col-sm-3 col-sm-height left-border">
          <div class="contact-info">
            <p><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
            <p><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
            <p><?php the_field('city', 'option'); ?></p>
          </div>
        </div>
        <div class="col-sm-4 col-sm-height left-border">
          <ul class="list-unstyled list-inline footer-nav">
            <li><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('our-work'); ?>">Our Work</a></li>
            <li><a href="<?php echo home_url('contact-us'); ?>">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-2 col-sm-height left-border">
          <?php get_template_part('partials/social', 'section'); ?>
        </div>
      </div>
    </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> Power Brothers Exterior Services</p>
        <p>website created by <a href="https://childressagency.com">The Childress Agency</a></p>
      </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
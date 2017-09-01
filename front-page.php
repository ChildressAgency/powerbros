<?php get_header(); ?>
  <section id="hp-hero">
    <div class="container">
      <div class="content-wrapper">
        <div class="content">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Power Brothers Logo" />
          <div class="box-note">
            <p>For A Free Estimate Contact Below or Fill Out Our Contact Form</p>
          </div>
          <h2>Site under construction</h2>
          <p class="phone"><a href="tel:540.272.4424">540.272.4424</a></p>
        </div>
      </div>
    </div>
  </section>
  <div id="contactInfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <a href="mailto:joshua@powerbrosva.com" class="contact-icon-link email-icon">joshua@powerbrosva.com</a>
        </div>
        <div class="col-sm-4">
          <a href="tel:540.272.4424" class="contact-icon-link phone-icon">540.272.4244</a>
        </div>
        <div class="col-sm-4">
          <a href="#" class="contact-icon-link map-icon">Fredericksburg, VA</a>
        </div>
      </div>
    </div>
  </div>
  <section id="requestQuote">
    <div class="container">
      <div class="content-wrapper">
        <div class="content">
          <h1>Request a Quote</h1>
          <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
        </div>
      </div>
      <div class="copyright">
        <p>&copy;2017 Power Brothers Exterior Services</p>
        <p>website created by <a href="#">The Childress Agency</a></p>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
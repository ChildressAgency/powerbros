  <section id="social">
    <div class="container">
      <?php get_template_part('partials/social', 'section'); ?>
      <div class="row">
        <div class="col-sm-6">
          <div class="twitter-feed">
            <h1>Intsagram</h1>
            <?php echo do_shortcode('[instagram-feed]'); ?>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="facebook-feed">
            <h1>Facebook</h1>
            <?php echo do_shortcode('[custom-facebook-feed]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

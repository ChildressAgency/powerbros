<?php if(have_rows('testimonials', 'option')): ?>
<section id="testimonials"<?php if(is_page('our-work')){ echo ' style="background-image:none; background-color:#e1e3df; box-shadow:0px 3px 10px #000; position:relative;"'; } ?>>
  <div class="container">
    <div class="content-square">
      <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php $i=0; while(have_rows('testimonials', 'option')): the_row(); ?>
            <div class="item<?php if($i==0){ echo ' active'; } ?>">
              <?php the_sub_field('testimonial'); ?>
              <div class="testimonial-footer">
                <p class="testimonial-author"><?php the_sub_field('testimonial_author'); ?></p>
                <p><?php the_sub_field('testimonial_city'); ?><br /><?php the_sub_field('testimonial_service'); ?></p>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>
        <a href="#testimonial-slider" class="left carousel-control" role="button" data-slide="prev">
          <span class="arrow left-arrow" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#testimonial-slider" class='right carousel-control' role="button" data-slide="next">
          <span class="arrow right-arrow" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--<a href="#" class="btn-main">More Testimonials</a>-->
  </div>
</section>
<?php endif; ?>
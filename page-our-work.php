<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1 class="page-title">Our Recent Work</h1>
      <div class="row">
        <div class="col-sm-3 col-lg-2">
          <div id="filters">
            <div class="option-set parents" data-group="parent-cats">
              <div class="checkbox">
                <input type="checkbox" value=".residential" id='residential' /><label for="residential">Residential</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" value=".commercial" id="commercial" /><label for="commercial">Commercial</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" value=".all" id="all" /><label for="all">All</label>
              </div>
            </div>
            <div class="option-set" data-group="child-cats">
              <?php if(have_rows('our_work_gallery_categories', 'option')): while(have_rows('our_work_gallery_categories', 'option')): the_row();
                $cat_name = get_sub_field('gallery_category');
                $cat_slug = sanitize_title($cat_name); ?>

                <div class="checkbox">
                  <input type="checkbox" value=".<?php echo $cat_slug; ?>" id="<?php echo $cat_slug; ?>" />
                  <label for="pressure-washing">Pressure Washing</label>
                </div>

              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-lg-10">
          <div class="grid">
            <div class="grid-sizer col-xs-6 col-sm-4"></div>
            <?php
              if(have_rows('our_work_gallery')):$c=1; while(have_rows('our_work_gallery')): the_row();
                $parent_category = get_sub_field('parent_category');
                $child_categories = get_sub_field('child_category');
                $categories = array();

                foreach($child_categories as $category){
                  array_push($categories, $category['value']);
                }
                array_push($categories, $parent_category['value'], 'all');

                $categories_class = implode(' ', $categories); ?>

                <div class="grid-item col-xs-6 col-sm-4 <?php echo $categories_class; ?>">
                  <div class="gallery-item">
                    <a href="<?php the_sub_field('gallery_image'); ?>" data-lightbox="image<?php echo $c; ?>" data-title="<?php the_sub_field('gallery_image_title'); ?>"><img src="<?php the_sub_field('gallery_image'); ?>" class="img-responsive center-block" alt="" /></a>
                  </div>
                </div>
            <?php $c++; endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <section id="estimatesPhone" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/hedge-trimmer.jpg);">
    <div class="container">
      <h1>Free Estimates</h1>
      <h2><a href="tel:<?php the_field('phone_number', 'option';); ?>"><?php the_field('phone_number', 'option'); ?></a></h2>
    </div>
  </section>
<?php get_footer(); ?>
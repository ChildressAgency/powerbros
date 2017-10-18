<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Power Brothers Exterior Services</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
  <nav id="header-nav"<?php if(is_front_page()){ echo ' class="homepage"'; } ?>>
    <div class="container-fluid">
      <div class="hidden-xs">
        <?php get_template_part('partials/social', 'section'); ?>
        <div class="contact-info">
          <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="header-phone"><?php the_field('phone_number', 'option'); ?></a>
          <a href="<?php echo home_url('contact-us'); ?>" class="header-estimate">Free Estimate</a>
        </div>
      </div>
      <div class="navbar-header">
        <a href="<?php home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo-small.png" alt="Power Brothers Logo" /></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-control="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="menu-container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li<?php if(is_page('services')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('services'); ?>">Services</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li<?php if(is_page('our-work')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('our-work'); ?>">Our Work</a></li>
            <li<?php if(is_page('contact-us')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact-us'); ?>">Contact</a></li>
            <li class="visible-xs-block">
              <?php get_template_part('partials/social', 'section'); ?>
              <div class="contact-info">
                <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="header-phone"><?php the_field('phone_number', 'option'); ?></a>
                <a href="<?php home_url('contact-us'); ?>" class="header-estimate">Free Estimate</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

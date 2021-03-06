<?php

/**
 * The template for displaying the page about
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>


<div id="primary" class="home-page hero-content">
  <div class="main-content" role="main">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div><!-- .main-content -->
</div><!-- #primary -->

<!-- SERVICE DESCRIPTION SECTION -->
<section>
  <div class="about-container">
    <h2 class="about-service-intro-heading">Our Services</h2>
    <p class="about-service-intro-para">We take pride in our clients and the content we create for them.</br>
      Here's a brief overview of our offered services.</p>

    <?php $iconfirst = 'yes'; ?>
    <?php query_posts('post_type=services'); ?>

    <?php while (have_posts()) : the_post();
      $icon = get_field("icon");
      $size = "medium";
    ?>

      <?php
      if ($iconfirst === 'yes') { ?>
        <div class="about-service-row">
          <div class="about-service-icon">
            <?php echo wp_get_attachment_image($icon, $size); ?>
          </div>
          <div class="about-service-desc">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php $iconfirst = "no"; ?>
          </div>
        </div>
      <?php } else { ?>
        <div class="about-service-row">
          <div class="about-service-desc">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>
          <div class="about-service-icon">
            <?php echo wp_get_attachment_image($icon, $size); ?>
            <?php $iconfirst = 'yes'; ?>
          </div>
        </div>
      <?php } ?>

    <?php endwhile; ?>

    <?php wp_reset_query(); ?>

  </div>
</section>

<!-- CONTACT US SECTION -->
<section class="about-contact-container">
  <br>
  <hr>
  <h3>Interested in working with us?</h3>
  <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
</section>

<!-- FOOTER SECTION -->
<?php get_footer(); ?>
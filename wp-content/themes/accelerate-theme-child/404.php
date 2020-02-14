<?php

/**
 * The template for displaying all pages
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

<div id="primary" class="site-content sidebar page-404-container">
  <div class="main-content" role="main">
    <h1 class="page-404-head">404 Error</h1>
    <div class="page-404-para">
      <p>Ahoy, Matey.</p>
      <p>Looks like the ship (aka page) has sailed.</p>
      <p>It cannot be found.</p>
      <p>It's gone, vanished, moved!</p>
      <p>Click on Home at the top for safe passage back.</p>
    </div>
    <div class="page-404-img">
      <img src="http://localhost:8888/accelerate/wp-content/themes/accelerate-theme-child/img/lego_pirate.png">
    </div><!-- .main-content -->
  </div>
</div> <!-- #primary -->

<?php get_footer(); ?>
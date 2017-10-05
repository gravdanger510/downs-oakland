<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DownsOakland
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="hero-container">
        <video autoplay loop muted plasinline class="hero-video" type="video/mp4">
          <source src="https://player.vimeo.com/external/232157127.hd.mp4?s=5afb8b6971792b44d5c2fd237dcd4dd9fdcc7e68&profile_id=174" />
        </video>
        <div class="hero-content">
          <h1 class="hero-header">Your Church Family Is Here</h1>
          <h2 class="hero-subheader">Sundays at 10:30</h2>
        </div>
      </div>

      <section class="site-section">
        <h2 class="section-title">Announcements</h2>
      </section>

      <section class="site-section dark-section">
        <h2 class="section-title">Event Calendar</h2>

        <?php echo do_shortcode('[calendar id="10"]') ?>
        <?php echo do_shortcode('[calendar id="35"]') ?>
      </section>

      <section class="site-section">
        <h2 class="section-title">Media Gallery</h2>
      </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

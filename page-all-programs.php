<?php
/**
 * Template Name: All Programs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DownsOakland
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="site-section">
        <?php the_content(); ?>
      </div>

      <div class="program-sidebar">
        <ul>
          <li>Here's a thing</li>
          <li>Here's a thing</li>
          <li>Here's a thing</li>
        </ul>
      </div>

      <div class="program-list">
        <?php
        	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

        	foreach( $mypages as $page ) {
        		$content = $page->post_content;
        		if ( ! $content ) // Check for empty page
        			continue;

      		$content = apply_filters( 'the_content', $content );
      	?>
        <section class="program-section">
      		<h2 class="program-title"><?php echo $page->post_title; ?></h2>
      		<div class="program-copy"><?php echo $content; ?></div>
        </section>
      	<?php } ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

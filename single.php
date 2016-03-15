<?php
/**
 * The template for displaying all single posts.
 *
 * @package sth
 */

get_header(); ?>

	<div id="primary">

      <main id="main" class="col-md-6 col-md-offset-2" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'single' ); ?>

          <?php the_post_navigation(); ?>

        <?php endwhile; // End of the loop. ?>

        </main><!-- #main .container -->
      
      <aside class="col-md-3 col-md-offset-1 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>


<?php get_footer(); ?>
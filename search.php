<?php
/**
 * The template for displaying search results pages.
 *
 * @package sth
 */

get_header(); ?>

	<div id="primary">

      <main id="main" class="col-md-6 col-md-offset-2 col-sm-7" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sth' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'template-parts/content', 'search' );
          ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      </main><!-- #main-->
     <aside class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
        <?php get_sidebar(); ?>
      </aside>
    </div> <!-- #primary -->


<?php get_footer(); ?>

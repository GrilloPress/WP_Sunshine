<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sth
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info">
          <div id="widget-footer">
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		        <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		        <?php endif; ?>
		      </div>
        
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <hr>
            <div class="row">
              <div class="col-md-7">
                
              </div>
              
              <div class="col-md-5">
                <a href="http://www.sth.nhs.uk" title="Homepage for the Sheffield Teaching Hospitals NHS Foundation Trust" target="_blank">
                  <img src="<?php echo get_template_directory_uri() . '/images/sth-trans.png' ;?>" class="img-responsive">
                </a>
              </div>
            </div>

            
          </div>
        </div>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

  </body>
</html>
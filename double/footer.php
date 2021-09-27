<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) :  ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
            <?php endif; ?>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) :  ?>
                <?php dynamic_sidebar('sidebar-2'); ?>
            <?php endif; ?>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
            <?php if ( is_active_sidebar( 'sidebar-3' ) ) :  ?>
                <?php dynamic_sidebar('sidebar-3'); ?>
            <?php endif; ?>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
            <?php if ( is_active_sidebar( 'sidebar-4' ) ) :  ?>
                <?php dynamic_sidebar('sidebar-4'); ?>
            <?php endif; ?>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright &copy;<?php echo esc_attr(date('Y'));?> All rights reserved.</h5>
      <h6>Developed and Distributed by <a href="<?php echo esc_url( __( 'https://softinnovationbd.com/', 'double' ) ); ?>">
              <?php

                printf( __( 'Proudly powered by %s.', 'double' ), 'SoftinnovationBD' ); ?>
          </a>
          <?php the_taxonomies( array(
              'before' => '<div class="tax-link-wrap">',
              'template' => '<span class="taxonomy-label">%s:</span> <span class="taxonomy-term-list">%l.</span>',
              'term_template' => '<a href="%1$s" rel="tag">%2$s</a>',
              'sep' => '<br />',
              'after' => '</div>',
          ) ); ?></h6>
  </div>
</footer> <!-- end footer -->
</body>
  <?php wp_footer(); ?>
</html>
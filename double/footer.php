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
    <h5>Copyright &copy;<?php echo date('Y');?> All rights reserved.</h5>
    <h6>Design and Developed by <?php bloginfo('name');?></h6>
		<h6>Distributed by <a href="https://softinnovationbd.com/">SoftinnovationBD</a></h6>
  </div>
</footer> <!-- end footer -->
</body>
  <?php wp_footer(); ?>
</html>
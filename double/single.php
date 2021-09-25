<?php get_header();?>

<?php get_template_part('inc/breadcrumb'); ?>

<!-- blog details part start -->
<section class="blog-details section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">


          <?php

            while (have_posts()){
                the_post();

                get_template_part('template-parts/content/content','sidebar');
            }



           ?>

      </div>
      <div class="col-lg-4">
        <!-- sidebar -->
        <aside class="sidebar">
            <?php if ( is_active_sidebar( 'mainbar-1' ) ) :  ?>
                <?php dynamic_sidebar('mainbar-1'); ?>
            <?php endif; ?>
        </aside>
      </div>
    </div>
  </div>
</section>
<!-- blog details part end -->

<?php get_footer();?>
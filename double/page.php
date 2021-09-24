<?php get_header();?>

<?php get_template_part('inc/breadcrumb'); ?>

<!-- blog details part start -->
<section class="blog-details section">
  <div class="container">
    <div class="row">


          <?php

          // Start the Loop.
          while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content/content', 'page' );

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                  comments_template();
              }

          endwhile; // End the loop.
          ?>



    </div>
  </div>
</section>
<!-- blog details part end -->

<?php get_footer();?>
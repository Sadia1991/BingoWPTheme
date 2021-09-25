<?php
/**
 * Template Name: Portfolio
 *
 *
 */

get_header();

$daa = get_option('double_framework');

?>


<?php get_template_part('inc/breadcrumb'); ?>

<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-12">

				<!-- section title -->
				<div class="title text-center">
                    <?php if ($daa['all_title']) : ?>
					<h2><?php echo esc_html($daa['all_title']);?></h2>
                    <?php endif; ?>
                    <?php if ($daa['all_sub_title']) : ?>
					<p><?php echo esc_html($daa['all_sub_title']);?></p>

					<div class="border"></div>
                    <?php endif;?>
				</div>
				<!-- /section title -->

				<div class="portfolio-filter">
					<button type="button" data-filter="all">All</button>
                    <?php
                      $portfolio_menus = get_terms('portfolio-cat');
                      if ($portfolio_menus):
                      foreach ($portfolio_menus as $portfolio_menu):
                          ?>
                          <button type="button" data-filter="<?php echo $portfolio_menu->slug;?>"><?php echo $portfolio_menu->name;?></button>

                          <?php

                      endforeach;
                      endif;
                    ?>

				</div>

				<div class="row filtr-container">
                    <?php
                       $args = array(
                               'post_type' => 'portfolio',
                               'post_per_page' => 10
                       );

                       $query = new WP_Query($args);
                       if ($query->have_posts()):
                       while ($query->have_posts()):
                           $query-> the_post();
                    ?>


					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="<?php
                    $portfolio_items = get_the_terms(get_the_ID(),'portfolio-cat');
                    foreach ($portfolio_items as $portfolio_item){
                        echo $portfolio_item->slug.', ';
                    }
                    ?>">
						<div class="portfolio-block">
							<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
							<div class="caption">
								<a class="search-icon" href="<?php the_post_thumbnail_url();?>" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
							</div>
						</div>
					</div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    else : ?>
                        <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.' ,'double'); ?></h2>
                       <?php endif; ?>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->


	<!-- Start Testimonial
=========================================== -->
<?php get_template_part('template-parts/content/content','testimonial');?>




<?php get_footer();?>
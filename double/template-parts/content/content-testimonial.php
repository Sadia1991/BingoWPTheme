<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/7/2021
 * Time: 4:28 PM
 */
?>

<!-- Start Testimonial
=========================================== -->

<section class="testimonial section" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- testimonial wrapper -->
                <div class="testimonial-slider">
                    <?php

                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 6,
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                    while ($query -> have_posts()):

                    $query -> the_post();

                    $name = get_field('name');
                    $designation = get_field('designation');
                    $description = get_field('description');

                    ?>

                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p><?php echo esc_html($description);?></p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3><?php echo esc_html($name);?></h3>
                            <span><?php echo esc_html($designation);?></span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    else : ?>
                        <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.','double' ); ?></h2>
                    <?php endif; ?>

                    <!-- /testimonial single -->

                </div>
            </div> 		<!-- end col lg 12 -->
        </div>	    <!-- End row -->
    </div>       <!-- End container -->
</section>    <!-- End Section -->

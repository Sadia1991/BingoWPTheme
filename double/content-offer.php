<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/7/2021
 * Time: 3:41 PM
 */
?>

<!--
Start About Section
==================================== -->
<section class="service-2 section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- section title -->
                <div class="title text-center">
                    <h2>What Do We Offer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>

            <div class="col-md-4 text-center">
                <img src="<?php echo get_template_directory_uri();?>/images/about/member.jpg " class="inline-block" alt="">
            </div>
            <div class="col-md-8">
                <div class="row text-center">
                    <?php

                    $args = array(
                        'post_type' => 'offers',
                        'posts_per_page' => 4,
                    );

                    $query = new WP_Query($args);
                    while ($query -> have_posts()){

                    $query -> the_post();

                    $service_icon = get_field('service_icon');


                    ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="<?php echo $service_icon;?>"></i>
                            <h4><?php the_title();?></h4>
                            <?php the_content();?>
                            </div>
                    </div><!-- END COL -->
                    <?php } ?>
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->


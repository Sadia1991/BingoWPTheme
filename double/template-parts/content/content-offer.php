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
                <?php
                $config = get_option('double_framework');
                $image = $config['about-image'];

                ?>
                <div class="title text-center">
                    <?php if ($config['about_sec_title']): ?>
                    <h2><?php echo esc_html($config['about_sec_title']);?></h2>
                    <?php endif; ?>
                    <?php if ($config['about_sec_subtitle']):?>
                    <p><?php echo esc_html($config['about_sec_subtitle']);?> </p>
                    <?php endif; ?>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>

            <div class="col-md-4 text-center">
                 <?php if ($image):?>
                <img src="<?php echo esc_url($image['url']);?>" class="inline-block" alt="">
                 <?php endif; ?>
            </div>
            <div class="col-md-8">
                <div class="row text-center">
                    <?php

                    $args = array(
                        'post_type' => 'offers',
                        'posts_per_page' => 6,
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                    while ($query -> have_posts()):

                    $query -> the_post();

                    $service_icon = get_field('service_icon');


                    ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="<?php echo esc_attr($service_icon);?>"></i>
                            <h4><?php the_title();?></h4>
                            <?php the_content();?>
                            </div>
                    </div><!-- END COL -->
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    else : ?>
                        <h2 style="padding-top: 20px;text-align: center;color: #28ABE3;"><?php esc_html_e('Sorry, no posts matched your criteria.','double'); ?></h2>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->


<?php
/**
 * Template Name: Services
 *
 *
 */

get_header();

?>


<?php get_template_part('inc/breadcrumb'); ?>
<?php $service  = get_option('double_framework');?>

	<!-- Start Services Section
		==================================== -->

<section class="services" id="services">
	<div class="container">
		<div class="row no-gutters">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2><?php echo $service['service_title'];?></h2>
					<p><?php echo $service['service_sub_title'];?></p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Single Service Item -->
            <?php

            $args = array(
                'post_type' => 'services',
                'posts_per_page' => 6,
            );

            $query = new WP_Query($args);
            while ($query -> have_posts()){

            $query -> the_post();

            $service_icon = get_field('service_icon');


            ?>
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">

				<div class="service-block p-4 text-center">

					<div class="service-icon text-center">
						<i class="<?php echo $service_icon;?>"></i>
					</div>
					<h3><?php the_title();?></h3>
                    <?php the_content();?>
				</div>

			</div>
                <?php
            }
            wp_reset_postdata();
            ?>
			<!-- End Single Service Item -->



		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->



	<!-- Start Team Skills
		=========================================== -->

<section class="team-skills section-sm" id="skills">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2><?php echo $service['slider_title'];?></h2>
					<p><?php echo $service['slider_sub_title'];?></p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<div class="col-md-5">
				<div class="team-skills-content">
					<h2><?php echo $service['skill_title'];?></h2>
					<p><?php echo $service['skill_sub_title'];?></p>
					<a href="<?php echo $service['cta_btn_url'];?>" class="btn btn-main mt-20">Contact Us</a>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<div class="progress-block">
                        <?php
                        $sliders = $service['slider_lists'];
                        if($sliders){
                            ?>
					<ul>

                            <?php

                            foreach($sliders as $slider)
                            {
                                ?>
						<li>
							<span><?php echo $slider['slide_title'];?></span>
							<div class="progress">
								<div class="progress-bar" style="width: <?php echo $slider['slider_number'];?>%;">
                                   <div><?php echo $slider['slider_number'];?>%</div>
								</div>
							</div>
						</li>
						<?php } } ?>
					</ul>

				</div>
			</div>
		</div> <!-- End row -->
		<div class="row">
			<div class="col-md-12">
				<div id="clients-slider" class="clients-logo-slider">
                    <?php

                    $args = array(
                        'post_type' => 'logo',
                        'posts_per_page' => -1,
                        'order' => 'ASC',

                    );

                    $query = new WP_Query($args);
                    while ($query -> have_posts()){

                        $query -> the_post();




                        ?>
                        <img src="<?php the_post_thumbnail_url();?>" alt="">

                        <?php
                    }
                    wp_reset_postdata();
                    ?>
				</div>

			</div>
		</div>
	</div> <!-- End container -->
</section> <!-- End section -->



    <!--
        Start Counter Section
        ==================================== -->
    <section  class="counter-wrapper section-sm" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2><?php echo $service['counter_title'];?></h2>
                        <p><?php echo $service['counter_sub_title'];?></p>
                    </div>
                </div>
                <?php

                $counters = $service['counter_lists'];

                foreach ($counters as $counter){

                    ?>


                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
                        <div class="counters-item">
                            <i class="<?php echo $counter['counter_icon'];?>"></i>
                            <div>
                                <span class="counter" data-count="<?php echo $counter['counter_number'];?>">0</span>
                            </div>
                            <h3><?php echo $counter['counter_number'];?>s</h3>
                        </div>
                    </div>
                    <!-- end first count item -->
                    <?php
                }



                ?>

            </div> 		<!-- end row -->
        </div>   	<!-- end container -->
    </section>   <!-- end section -->


	<!-- Start Testimonial
=========================================== -->
<?php get_template_part('content','testimonial');?>



<?php get_footer();?>
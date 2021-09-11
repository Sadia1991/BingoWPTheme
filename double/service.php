<?php
/**
 * Template Name: Services
 *
 *
 */

get_header();

?>


<?php get_template_part('inc/breadcrumb'); ?>

	<!-- Start Services Section
		==================================== -->

<section class="services" id="services">
	<div class="container">
		<div class="row no-gutters">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Our Services</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
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
					<h2>Our Skills</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fugiat, vel veniam, eos et
						delectus eveniet molestiae. Esse, voluptas ratione.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<div class="col-md-5">
				<div class="team-skills-content">
					<h2>Simple To Start</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in
						faucibus lorem accumsan non. Donec mattis tin unt metuorbi sed tort Igor aman luctus dignissim.
						Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in
						faucibus lorem accumsan non.</p>
					<a href="" class="btn btn-main mt-20">Contact Us</a>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<div class="progress-block">
					<ul>
						<li>
							<span>Photoshop</span>
							<div class="progress">
								<div class="progress-bar" style="width: 90%;">
								</div>
							</div>
						</li>
						<li>
							<span>Web Application</span>
							<div class="progress">
								<div class="progress-bar" style="width: 85%;">
								</div>
							</div>
						</li>
						<li>
							<span>Andriod Application</span>
							<div class="progress">
								<div class="progress-bar" style="width: 92%;">
								</div>
							</div>
						</li>
						<li>
							<span>IOS Development</span>
							<div class="progress">
								<div class="progress-bar" style="width: 78%;">
								</div>
							</div>
						</li>
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
							<h2>Award-Winning Agency</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <span class="counter" data-count="150">0</span>
							</div>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <span class="counter" data-count="130">0</span>
							</div>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">0</span>
							</div>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">0</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->



	<!-- Start Testimonial
=========================================== -->
<?php get_template_part('content','testimonial');?>



<?php get_footer();?>
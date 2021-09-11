<?php
/**
 * Template Name: Team
 *
 *
 */

get_header();

?>


<?php get_template_part('inc/breadcrumb'); ?>
	<!--
Start About Section
==================================== -->
<section class="about" id="about">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center"  >
				<h2>About Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat voluptas tempore recusandae quasi nesciunt in, facilis animi. Sint, possimus?</p>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="images/about-us.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula. Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a.</p>
				<p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a</p>
				<h4>Lorem ipsum dolor sit.</h4>
				<ul class="feature-list">
					<li> <i class="tf-ion-android-checkmark-circle"></i> Web Development</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> Application Development</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> Website Design</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> UI/UX Design</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> SEO Service</li>
				</ul>
				<a href="#" class="btn btn-main mt-20">Learn More</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->



	<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2>Our Team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis
						similique quos.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

            <?php

            $args = array(
                'post_type' => 'team',
                'posts_per_page' => 3,
                'order_by' => 'menu_order',
                'order' => 'ASC',
            );

            $query = new WP_Query($args);
            while ($query -> have_posts()){

                $query -> the_post();

                $designation = get_field('designation');
                $team_facebook = get_field('team_facebook');
                $team_twitter = get_field('team_twitter');
                $team_google = get_field('team_google');
                $team_dribble = get_field('team_dribble');


                ?>

			<!-- team member -->
			<div class="col-md-4 col-sm-6 ">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
                                <?php if ($team_facebook){ ?>
                                    <li><a href="<?php echo $team_facebook;?>"><i class="tf-ion-social-facebook"></i></a></li>

                               <?php
                                }
                                ?>
                                <?php if ($team_twitter){ ?>
                                    <li><a href="<?php echo $team_twitter;?>"><i class="tf-ion-social-twitter"></i></a></li>

                                    <?php
                                }
                                ?>

                                <?php if ($team_google){ ?>
                                    <li><a href="<?php echo $team_google;?>"><i class="tf-ion-social-google-outline"></i></a></li>

                                    <?php
                                }
                                ?>

                                <?php if ($team_google){ ?>
                                    <li><a href="<?php echo $team_dribble;?>"><i class="tf-ion-social-dribbble"></i></a></li>

                                    <?php
                                }
                                ?>




							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3><?php the_title();?></h3>
						<span><?php echo $designation;?></span>
                        <?php the_content(); ?>
						</div>
					<!-- /member name & designation -->

				</div>
			</div>
                <?php
            }
            wp_reset_postdata();
            ?>
			<!-- end team member -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->




<?php get_footer();?>
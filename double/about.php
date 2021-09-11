<?php
/**
 * Template Name: About Us
 *
 *
 */

get_header();

?>


<?php get_template_part('inc/breadcrumb'); ?>


<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<h2>We Create Designs<br> and technology</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!</p>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/company/company-image.jpg" alt="">
			</div>
		</div>
	</div>
</section>



<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Our Mission</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img src="<?php echo get_template_directory_uri();?>/images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6">
				<h3>Our Vision</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img src="<?php echo get_template_directory_uri();?>/images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>



	<section class="promo-video section-sm">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Our Promo Video</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
			<div class="col-md-8 mx-auto">
				<iframe src="https://player.vimeo.com/video/51119176" width="100%" height="360" frameborder="0"
					webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>



	<!--
Start Call To Action
==================================== -->
<section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->



<section class="section grallery">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>Sneak Peak Gallery</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae qui aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro, praesentium consectetur tempore. Nulla, error eius dolorem.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="company-gallery">
                    <?php

                    $args = array(
                        'post_type' => 'gallery',
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
	</div>
</section>



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



	<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->




<?php get_footer();?>
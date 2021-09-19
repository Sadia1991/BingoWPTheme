<?php
/**
 * Template Name: About Us
 *
 *
 */

get_header();

$bingo = get_option('double_framework');

?>
    <pre><?php //var_dump(get_option('double_framework'));?></pre>

<?php get_template_part('inc/breadcrumb'); ?>


<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<h2><?php echo $bingo['about_first_title'];?></h2>
                <p><?php echo $bingo['about_first_sec_des'];?></p>
            </div>
			<div class="col-md-6">
				<img class="img-fluid" src="<?php if($bin_img = $bingo['opt-about-1']){echo $bin_img['url'];}?>" alt="">
			</div>
		</div>
	</div>
</section>



<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3><?php echo $bingo['about_second_title'];?></h3>
				<p><?php echo $bingo['about_second_sec_des'];?><img src="<?php if($bin_img_1 = $bingo['opt-about-3']){echo $bin_img_1['url'];}?>" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6">
				<h3><?php echo $bingo['about_third_title'];?></h3>
				<p><?php echo $bingo['about_third_sec_des'];?></p>
				<img src="<?php if($bin_img_2 = $bingo['opt-about-4']){echo $bin_img_2['url'];}?>" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>






<section class="section grallery">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2><?php echo $bingo['gallery_title'];?></h2>
					<p><?php echo $bingo['gallery_sub_title'];?></p>
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
					<h2><?php echo $bingo['team_title'];?></h2>
					<p><?php echo $bingo['team_sub_title'];?></p>
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
                        <h2><?php echo $bingo['counter_title'];?></h2>
                        <p><?php echo $bingo['counter_sub_title'];?></p>
                    </div>
                </div>
                <?php

                $counters = $bingo['counter_lists'];

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




    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action section" style="background-image: url(<?php if($cat_img = $bingo['opt-upload-1']){echo $cat_img['url'];}?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><?php echo $bingo['banner_title'];?></h2>
                    <p><?php echo $bingo['banner_sub_title'];?></p>
                    <a href="<?php echo get_the_permalink(30);?>" class="btn btn-main">Contact Us</a>
                </div>
            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->



<?php get_footer();?>
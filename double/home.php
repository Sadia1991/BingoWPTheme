<?php

/*
Template Name: Home
*/

get_header();

?>


<?php get_template_part('template-parts/content/content','slider');?>
<?php get_template_part('template-parts/content/content','offer');?>








<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
                    <?php
                    $bingo = get_option('double_framework');
                    $bin_img = $bingo['opt-upload-2'];
                    ?>
                    <?php if ($bingo['bingo_title']):?>
					<h2><?php echo esc_html($bingo['bingo_title']);?></h2>
                    <?php endif; ?>
                    <?php if ($bingo['bingo_sub_title']):?>
					<p><?php echo esc_attr($bingo['bingo_sub_title']);?></p>
                    <?php endif; ?>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
                 <?php if($bingo['opt-upload-2']):?>
				<img src="<?php echo esc_url($bin_img['url']);?>" class="img-fluid" alt="">
                 <?php endif; ?>
			</div>
			<div class="col-md-6">
				<ul class="checklist">
                    <?php if ($bingo['about_sec_des']): ?>
					<?php echo esc_attr($bingo['about_sec_des']);?>
                    <?php endif; ?>
				</ul>
                <?php if ($bingo['bingo_btn_url']): ?>
				<a href="<?php echo esc_url($bingo['bingo_btn_url']);?>" class="btn btn-main mt-20"><?php esc_html_e('Learn More','double');?></a>
                <?php endif; ?>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section" style="background-image: url(<?php if($cat_img = $bingo['opt-upload-1']){echo $cat_img['url'];}?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><?php echo $bingo['banner_title'];?></h2>
				<p><?php echo $bingo['banner_sub_title'];?></p>
				<a href="<?php echo $bingo['cta_btn_url'];?>" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

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

<?php get_template_part('content','testimonial');?>

<!--
		Start Blog Section
		=========================================== -->

<section class="blog" id="blog">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2><?php echo $bingo['blog_title'];?></h2>
					<div class="border"></div>
					<p><?php echo $bingo['blog_sub_title'];?></p>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
                <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );

                $query = new WP_Query($args);
                while ($query -> have_posts()){

                    $query -> the_post();



                    ?>

    <article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="<?php the_post_thumbnail_url();?>" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<?php the_excerpt();?>
						<a class="btn btn-main" href="<?php the_permalink();?>">Read more</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->
                    <?php
                }
                wp_reset_postdata();
                ?>

		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<?php get_footer(); ?>
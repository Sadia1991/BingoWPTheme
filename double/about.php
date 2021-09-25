<?php
/**
 * Template Name: About Us
 *
 *
 */

get_header();



?>


<?php get_template_part('inc/breadcrumb'); ?>

<?php

$about = get_option('double_framework');
$about_img = $about['opt-about-1'];
$about_img_1 = $about['opt-about-3'];
$about_img_2 = $about['opt-about-4'];
?>


<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
                <?php if ($about['about_first_title']):?>
				<h2><?php echo esc_html($about['about_first_title']);?></h2>
                <?php endif;?>
                <?php if ($about['about_first_sec_des']):?>
                <p><?php echo esc_html($about['about_first_sec_des']);?></p>
                <?php endif;?>
            </div>
			<div class="col-md-6">
				<img class="img-fluid" src="<?php if($about['opt-about-1']): echo esc_url($about_img['url']); endif;?>" alt="">
			</div>
		</div>
	</div>
</section>



<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
                <?php if ($about['about_second_title']):?>
				<h3><?php echo esc_html($about['about_second_title']);?></h3>
                <?php endif;?>
                <?php if ($about['about_second_sec_des']):?>
				<p><?php echo esc_html($about['about_second_sec_des']);?><?php endif;?><img src="<?php if($about['opt-about-3']): echo esc_url($about_img_1['url']);endif;?>" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6">
                <?php if ($about['about_third_title']):?>
				<h3><?php echo esc_html($about['about_third_title']);?></h3>
                <?php endif;?>
                <?php if ($about['about_third_sec_des']):?>
				<p><?php echo esc_html($about['about_third_sec_des']);?></p>
                <?php endif;?>
				<img src="<?php if($about['opt-about-4']): echo esc_url($about_img_2['url']); endif;?>" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>






<section class="section grallery">
	<div class="container-fluid">
        <?php get_template_part('template-parts/content/content','gallery');?>
	</div>
</section>



	<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row">

			<?php get_template_part('template-parts/content/content','team');?>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->


    <!--
            Start Counter Section
            ==================================== -->
    <section  class="counter-wrapper section-sm" >
        <div class="container">
            <div class="row">
                <?php get_template_part('template-parts/content/content','counter');?>

            </div> 		<!-- end row -->
        </div>   	<!-- end container -->
    </section>   <!-- end section -->




    <!--
    Start Call To Action
    ==================================== -->
    <?php get_template_part('template-parts/content/content','cta');?>


<?php get_footer();?>
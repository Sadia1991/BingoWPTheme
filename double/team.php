<?php
/**
 * Template Name: Team
 *
 *
 */

get_header();

$team = get_option('double_framework');
$tea = $team['abs_con'];

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
                <?php if ($team['all_about_title']) : ?>
				<h2><?php echo esc_html($team['all_about_title']);?></h2>
                <?php endif; ?>
                <?php if ($team['all_about_sub_title']) : ?>
				<p><?php echo esc_html($team['all_about_sub_title']);?></p>
				<div class="border"></div>
                <?php endif; ?>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="<?php if ($team['abs_con']): echo esc_url($tea['url']);endif;?>" class="img-fluid" alt="">
			</div>
			<div class="col-md-6">
                <?php if ($team['about_team_sec_des']) :?>
                <?php echo esc_textarea($team['about_team_sec_des']);?>
                <?php endif; ?>
                <?php if ($team['cta_btn_url']) :?>
				<a href="<?php echo esc_url($team['cta_btn_url']);?>" class="btn btn-main mt-20"><?php esc_html_e('Learn More','double');?></a>
                <?php endif; ?>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->



	<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row">

			<?php get_template_part('template-parts/content/content','team'); ?>


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->




<?php get_footer();?>
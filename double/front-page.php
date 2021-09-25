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
			<?php get_template_part('template-parts/content/content','agency');?>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<?php get_template_part('template-parts/content/content','cta');?>

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

 <?php get_template_part('template-parts/content/content','testimonial');?>

<!--
		Start Blog Section
		=========================================== -->

<section class="blog" id="blog">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
                    <?php $blog = get_option('double_framework'); ?>
                    <?php if ($blog['blog_title']): ?>
					<h2><?php echo esc_html($blog['blog_title']);?></h2>
                    <?php endif; ?>
					<div class="border"></div>
                    <?php if ($blog['blog_sub_title']): ?>
					<p><?php echo esc_html($blog['blog_sub_title']);?></p>
                    <?php endif;?>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
               <?php get_template_part('template-parts/content/content','blog');?>

		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<?php get_footer(); ?>
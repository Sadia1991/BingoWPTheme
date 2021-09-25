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

          <?php get_template_part('template-parts/content/content','service');?>


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->



	<!-- Start Team Skills
		=========================================== -->

<section class="team-skills section-sm" id="skills">
	<div class="container">
		<div class="row">

          <?php get_template_part('template-parts/content/content','skill');?>
		</div> <!-- End row -->
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part('template-parts/content/content','logo');?>

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
                <?php get_template_part('template-parts/content/content','counter');?>
            </div> 		<!-- end row -->
        </div>   	<!-- end container -->
    </section>   <!-- end section -->


	<!-- Start Testimonial
=========================================== -->
<?php get_template_part('template-parts/content/content','testimonial');?>



<?php get_footer();?>
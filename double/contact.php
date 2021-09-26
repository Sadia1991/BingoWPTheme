<?php
/**
 * Template Name: Contact Us
 *
 */

get_header();

$con = get_option('double_framework');

?>


<?php get_template_part('inc/breadcrumb'); ?>
<!--

<!--Start Contact Us
=========================================== -->
<section class="contact-us" id="contact">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
                <?php if ($con['con_title']):?>
				<h2><?php echo esc_html($con['con_title']);?></h2>
                <?php endif;?>
                <?php if ($con['con_sub_title']):?>
				<p><?php echo esc_html($con['con_sub_title']);?></p>

				<div class="border"></div>
                <?php endif;?>
			</div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
                <?php if ($con['con_dec_title']):?>
				<h3><?php echo esc_html($con['con_dec_title']);?></h3>
                <?php endif;?>
                <?php if ($con['con_dec_sub_title']):?>
				<p><?php echo esc_html($con['con_dec_sub_title']);?></p>
                <?php endif; ?>
				<ul class="contact-short-info" >
                    <?php
                      $contact_items = $con['contact_info'];
                       if ($contact_items) :
                        foreach ($contact_items as $contact_item): ?>

					<li>
						<i class="<?php echo esc_html($contact_item['contact_info_icon']);?>"></i>
						<span><?php echo esc_html($contact_item['contact_info_des']);?></span>
					</li>
                            <?php
                        endforeach;

                        endif; ?>


				</ul>
				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
                        <?php $social_icons = $con['social_icons'];

                         if ($social_icons) :
                         foreach ($social_icons as $social_icon): ?>
						<li><a href="<?php echo esc_url($social_icon['social_link']);?>"><i class="<?php echo $social_icon['social_icon'];?>"></i></a></li>
                         <?php
                         endforeach;
                         endif;
                        ?>

					</ul>
				</div>
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<?php echo do_shortcode('[contact-form-7 id="221" title="Contact-form"]');?>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<!--================================
=            Google Map            =
=================================-->



<?php get_footer(); ?>
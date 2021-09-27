<?php get_header();?>


  

	<section class="page-404 section text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php esc_html(_e('404','double'));?></h1>
					<h2><?php esc_html(_e('Page Not Found','double'));?></h2>
  					<p><?php esc_html(_e('Sorry, but the page you were trying to view does not exist.','double'));?></p>
					<a href="<?php echo esc_url(home_url());?>" class="btn btn-main mt-20"><?php esc_html_e('Go Home','double');?></a>
				</div>
			</div>
		</div>
	</section>



    

<?php get_footer();?>
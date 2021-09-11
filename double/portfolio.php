<?php
/**
 * Template Name: Portfolio
 *
 *
 */

get_header();

?>


<?php get_template_part('inc/breadcrumb'); ?>

<section class="portfolio section-sm" id="portfolio">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-12">

				<!-- section title -->
				<div class="title text-center">
					<h2>Our Works</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet,
						consectetur adipisicing elit. Minima, vitae? </p>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<div class="portfolio-filter">
					<button type="button" data-filter="all">All</button>
					<button type="button" data-filter="photography">Photography</button>
					<button type="button" data-filter="ios">IOS App</button>
					<button type="button" data-filter="development">Development</button>
					<button type="button" data-filter="design">Design</button>
				</div>

				<div class="row filtr-container">
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, ios">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-2.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-2.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, development">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-3.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-3.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, ios">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-4.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-4.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-5.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-5.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, development">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-6.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-6.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-7.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-7.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, development">
						<div class="portfolio-block">
							<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
							<div class="caption">
								<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
									<i class="tf-ion-ios-search-strong"></i>
								</a>
								<h4><a href="">AirBnB Postcard</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- End section -->


	<!-- Start Testimonial
=========================================== -->
<?php get_template_part('content','testimonial');?>




<?php get_footer();?>
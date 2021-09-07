<?php get_header(); ?>


	<?php get_template_part('content','slider');?>

    <?php get_template_part('content','offer');?>







<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>We Are Bingo Agency</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto,
						aut, eum itaque illo totam tempora eius.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="images/about/about-2.png" class="img-fluid" alt="">
			</div>
			<div class="col-md-6">
				<ul class="checklist">
					<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
					<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
					<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
					<li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
					<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
				</ul>
				<a href="#" class="btn btn-main mt-20">Learn More</a>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

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
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero
						inventore nam.</p>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="<?php echo get_template_directory_uri();?>/images/blog/post-1.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">Reasons to Smile</a></h3>
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non skateboard dolor brunch.</p>
						<a class="btn btn-main" href="single-post.html">Read more</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="<?php echo get_template_directory_uri();?>/images/blog/post-2.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">A Few Moments</a></h3>
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non skateboard dolor brunch.</p>
						<a class="btn btn-main" href="single-post.html">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="<?php echo get_template_directory_uri();?>/images/blog/post-3.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">Hints for Life</a></h3>
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
							moon officia aute, non skateboard dolor brunch.</p>
						<a class="btn btn-main" href="single-post.html">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<?php get_footer(); ?>
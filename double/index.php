<?php get_header(); ?>




<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blog</h2>

            </div>
        </div>
    </div>
</section>



<section class="posts section">
    <div class="container">
        <div class="row">
            <?php
            while(have_posts()){
                the_post();
                ?>
            <!-- /section title -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
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
           <?php } ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
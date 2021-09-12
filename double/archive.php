<?php get_header(); ?>




<!--
End Fixed Navigation
==================================== -->

    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_archive_title();?></h2>
                    <ol class="breadcrumb header-bradcrumb">
                        <li><a href="<?php echo site_url();?>"><h4>Home</h4></a></li>
                        <li class="active"><h4><?php the_archive_title();?></h4></li>
                    </ol>
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
           <?php } wp_reset_postdata();?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
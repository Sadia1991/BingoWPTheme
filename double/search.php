<?php get_header(); ?>




    <!--
    End Fixed Navigation
    ==================================== -->

    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2><?php
                    printf('Search For: %s', get_search_query());
                    ?></h2>
                </div>
            </div>
        </div>
    </section>


    <section class="posts section">
        <div class="container">
            <div class="row">

                <?php
                if(have_posts()){
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
                <?php
                }
                    wp_reset_postdata();
                }  else{

                    ?>
                    <div class="col-lg-8">
                        <?php
                        echo '<h2>Not Found!</h2>';?>
                        </div><?php
                        }
                        ?>




                <div class="col-lg-4">
                    <!-- sidebar -->
                    <aside class="sidebar">
                        <?php if ( is_active_sidebar( 'mainbar-1' ) ) :  ?>
                            <?php dynamic_sidebar('mainbar-1'); ?>
                        <?php endif; ?>
                    </aside>
                </div>

            </div>
            <?php the_posts_pagination();?>
        </div>
    </section>



<?php get_footer(); ?>
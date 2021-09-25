<?php get_header(); ?>




<!--
End Fixed Navigation
==================================== -->
    <?php
        $head_image = get_option('double_framework');
        $img = $head_image['head_image'];
    ?>
    <section class="single-page-header" style="background-image: url(<?php if ($head_image['head_image']): echo esc_url($img['url']); endif;?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog</h2>
                    <ol class="breadcrumb header-bradcrumb">
                        <li><h2><a href="<?php echo esc_url(home_url());?>">Home</a>==>></h2></li>
                        <li class="active"><h2>Blog</h2></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


<section class="posts section">
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()):
            while(have_posts()):
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
                        <a class="btn btn-main" href="<?php the_permalink();?>"><?php esc_html_e('Read more','double');?></a>
                    </div>
                </div>
            </article>
           <?php
           endwhile;
           wp_reset_postdata();
           else : ?>
                <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.','double' ); ?></h2>
            <?php endif; ?>

        </div>
        <?php the_posts_pagination();?>
    </div>
</section>

<?php get_footer(); ?>
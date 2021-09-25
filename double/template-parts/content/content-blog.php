<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 1:18 PM
 */
?>

<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
);

$query = new WP_Query($args);
if ($query->have_posts()):
while ($query -> have_posts()):

    $query -> the_post();



    ?>

    <article class="col-md-4 col-sm-6 col-xs-12 ">
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
    <!-- /single blog post -->
    <?php
endwhile;
wp_reset_postdata();
else : ?>
    <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.','double' ); ?></h2>
<?php endif; ?>


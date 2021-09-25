<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 2:34 PM
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="title text-center">
            <?php $gallery = get_option('double_framework');?>
            <?php if ($gallery['gallery_title']):?>
            <h2><?php echo esc_html($gallery['gallery_title']);?></h2>
            <?php endif; ?>
            <?php if ($gallery['gallery_sub_title']):?>
            <p><?php echo esc_html($gallery['gallery_sub_title']);?></p>
            <?php endif;?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="company-gallery">
            <?php

            $args = array(
                'post_type' => 'gallery',
                'posts_per_page' => -1,
                'order' => 'ASC',

            );

            $query = new WP_Query($args);
            if ($query->have_posts()):
            while ($query -> have_posts()):

                $query -> the_post();




                ?>
                <img src="<?php the_post_thumbnail_url();?>" alt="">

                <?php
            endwhile;
            wp_reset_postdata();
            else : ?>
                <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.','double'); ?></h2>
            <?php endif; ?>

        </div>
    </div>
</div>

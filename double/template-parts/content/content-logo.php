<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 3:03 PM
 */
?>

<div id="clients-slider" class="clients-logo-slider">
    <?php

    $args = array(
        'post_type' => 'logo',
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
        <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.','double' ); ?></h2>
    <?php endif; ?>
</div>

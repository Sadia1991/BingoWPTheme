<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 4:03 PM
 */
?>
<?php

 $service = get_option('double_framework');

?>
<!-- section title -->
<div class="col-12">
    <div class="title text-center">
        <?php if ($service['service_title']) : ?>
        <h2><?php echo esc_html($service['service_title']);?></h2>
        <?php endif; ?>
        <?php if ($service['service_sub_title']) : ?>
        <p><?php echo esc_html($service['service_sub_title']);?></p>
        <?php endif; ?>
        <div class="border"></div>
    </div>
</div>
<!-- /section title -->

<!-- Single Service Item -->
<?php

$args = array(
    'post_type' => 'services',
    'posts_per_page' => 6,
);

$query = new WP_Query($args);
if (have_posts()):
while ($query -> have_posts()):

    $query -> the_post();

    $service_icon = get_field('service_icon');


    ?>
    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">

        <div class="service-block p-4 text-center">

            <div class="service-icon text-center">
                <i class="<?php echo esc_html($service_icon);?>"></i>
            </div>
            <h3><?php the_title();?></h3>
            <?php the_content();?>
        </div>

    </div>
    <?php
endwhile;
wp_reset_postdata();
else : ?>
    <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.','double' ); ?></h2>
<?php endif; ?>
<!-- End Single Service Item -->

<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/9/2021
 * Time: 5:43 PM
 */
$head_image = get_option('double_framework');
$img = $head_image['head_image'];

?>



<section class="single-page-header" style="background-image: url(<?php if ($head_image['head_image']): echo esc_url($img['url']); endif;?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb header-bradcrumb">
                    <?php
                    if (have_posts()):
                    while(have_posts()):
                    the_post();
                    ?>

                    <li><h2><a href="<?php echo esc_url(home_url());?>">Home == > </a></h2></li>
                    <li><h2 class="font-weight-bold"><?php the_title();?></h2></li>
                        <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

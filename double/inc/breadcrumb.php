<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/9/2021
 * Time: 5:43 PM
 */

?>

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb header-bradcrumb">
                    <?php
                    while(have_posts()){
                    the_post();
                    ?>

                    <li><h2><a href="<?php echo site_url();?>">Home == > </a></h2></li>
                    <li><h2 class="font-weight-bold"><?php the_title();?></h2></li>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/7/2021
 * Time: 12:44 PM
 */

?>


<div class="hero-slider">
    <?php

      $args = array(
          'post_type' => 'slides',
          'posts_per_page' => 3,
      );

      $query = new WP_Query($args);
      while ($query -> have_posts()){

          $query -> the_post();

          $btn_text = get_field('btn_text');
          $btn_link = get_field('btn_link');

       ?>


    <div class="slider-item th-fullpage hero-area" style="background-image: url('<?php the_post_thumbnail_url();?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"><?php the_title();?></h1>
                    <?php the_content();?>
                    <?php if($btn_text){ ?>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="<?php echo $btn_link ;?>"><?php echo $btn_text ;?></a>
                    <?php
                    }
                    ?>
                      </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

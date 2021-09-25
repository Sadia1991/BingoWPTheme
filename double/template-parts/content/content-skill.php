<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 3:07 PM
 */
?>

<?php
  $service = get_option('double_framework');
?>
<!-- section title -->
<div class="col-12">
    <div class="title text-center">
        <?php if ($service['skill_title']):?>
        <h2><?php echo esc_html($service['skill_title']);?></h2>
        <?php endif;?>
        <?php if ($service['skill_sub_title']):?>
        <p><?php echo esc_html($service['skill_sub_title']);?></p>
        <?php endif;?>
        <div class="border"></div>
    </div>
</div>
<!-- /section title -->

<div class="col-md-5">
    <div class="team-skills-content">
        <?php if ($service['slider_title']):?>
        <h2><?php echo esc_html($service['slider_title']);?></h2>
        <?php endif;?>
        <?php if ($service['slider_sub_title']):?>
        <p><?php echo esc_html($service['slider_sub_title']);?></p>
        <?php endif;?>
        <?php if ($service['cta_btn_url']):?>
        <a href="<?php echo esc_url($service['cta_btn_url']);?>" class="btn btn-main mt-20"><?php esc_html_e('Contact Us','double');?></a>
        <?php endif;?>
    </div>
</div>
<div class="col-md-6 col-md-offset-1">
    <div class="progress-block">
        <?php
        $sliders = $service['slider_lists'];
        if($sliders):
        ?>
        <ul>

            <?php

            foreach($sliders as $slider) :

                ?>
                <li>
                    <span><?php echo esc_html($slider['slide_title']);?></span>
                    <div class="progress">
                        <div class="progress-bar" style="width: <?php echo esc_html($slider['slider_number']);?>%;">
                            <div><?php echo esc_html($slider['slider_number']);?>%</div>
                        </div>
                    </div>
                </li>
            <?php endforeach; endif; ?>
        </ul>

    </div>
</div>

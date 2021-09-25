<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 12:21 PM
 */
?>
<div class="col-12">
				<div class="title text-center">
                    <?php
                    $bingo = get_option('double_framework');
                    $bin_img = $bingo['opt-upload-2'];
                    ?>
<?php if ($bingo['bingo_title']):?>
    <h2><?php echo esc_html($bingo['bingo_title']);?></h2>
<?php endif; ?>
<?php if ($bingo['bingo_sub_title']):?>
    <p><?php echo esc_html($bingo['bingo_sub_title']);?></p>
<?php endif; ?>
<div class="border"></div>
</div>
</div>
<!-- /section title -->

<div class="col-md-6">
    <?php if($bingo['opt-upload-2']):?>
        <img src="<?php echo esc_url($bin_img['url']);?>" class="img-fluid" alt="">
    <?php endif; ?>
</div>
<div class="col-md-6">
    <?php if ($bingo['about_sec_des']): ?>
    <ul class="checklist">

           <li><?php echo esc_textarea($bingo['about_sec_des']);?></li>

    </ul>
    <?php endif; ?>
    <?php if ($bingo['opt-link-1']): ?>
        <a href="<?php echo esc_url($bingo['opt-link-1']);?>" class="btn btn-main mt-20"><?php esc_html_e('Learn More','double');?></a>
    <?php endif; ?>
</div>
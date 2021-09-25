<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 1:26 PM
 */
?>

<?php
$cat = get_option('double_framework');
$cat_img = $cat['opt-upload-1'];
?>
<section class="call-to-action section" style="background-image: url(<?php if($cat['opt-upload-1']): echo esc_url($cat_img['url']); endif;?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php if ($cat['banner_title']): ?>
                    <h2><?php echo esc_html($cat['banner_title']);?></h2>
                <?php endif; ?>
                <?php if ($cat['banner_sub_title']): ?>
                    <p><?php echo esc_html($cat['banner_sub_title']);?></p>
                <?php endif; ?>
                <?php if ($cat['cta_btn_url']): ?>
                    <a href="<?php echo esc_url($cat['cta_btn_url']);?>" class="btn btn-main"><?php esc_html_e('Contact Us','double');?></a>
                <?php endif; ?>
            </div>
        </div> 		<!-- End row -->
    </div>   	<!-- End container -->
</section>   <!-- End section -->

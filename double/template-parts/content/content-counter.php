<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 12:58 PM
 */
?>

<?php 
   $count = get_option('double_framework');
   
?>
<div class="col-md-12 text-center">
    <div class="title">
        <?php if ($count['counter_title']) : ?>
        <h2><?php echo esc_html($count['counter_title']);?></h2>
        <?php endif; ?>
        <?php if ($count['counter_sub_title']):?>
        <p><?php echo esc_html($count['counter_sub_title']);?></p>
        <?php endif; ?>
    </div>
</div>
<?php

$counters = $count['counter_lists'];

if ($count['counter_lists']):

foreach ($counters as $counter){

    ?>


    <!-- first count item -->
    <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
        <div class="counters-item">
            <i class="<?php echo esc_attr($counter['counter_icon']);?>"></i>
            <div>
                <span class="counter" data-count="<?php echo esc_attr($counter['counter_number']);?>">0</span>
            </div>
            <h3><?php echo esc_html($counter['counter_number']);?>s</h3>
        </div>
    </div>
    <!-- end first count item -->
    <?php
}

endif;

?>

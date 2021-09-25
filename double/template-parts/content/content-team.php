<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 2:26 PM
 */
?>

<!-- section title -->
<div class="col-12">
    <div class="title text-center ">
        <?php $team = get_option('double_framework');?>
        <?php if ($team['team_title']):?>
        <h2><?php echo esc_html($team['team_title']);?></h2>
        <?php endif;?>
        <?php if ($team['team_sub_title']):?>
        <p><?php echo esc_html($team['team_sub_title']);?></p>
        <?php endif;?>
        <div class="border"></div>
    </div>
</div>
<!-- /section title -->

<?php

$args = array(
    'post_type' => 'team',
    'posts_per_page' => 3,
    'order_by' => 'menu_order',
    'order' => 'ASC',
);

$query = new WP_Query($args);
if ($query->have_posts()):
while ($query -> have_posts()):

    $query -> the_post();

    $designation = get_field('designation');
    $team_facebook = get_field('team_facebook');
    $team_twitter = get_field('team_twitter');
    $team_google = get_field('team_google');
    $team_dribble = get_field('team_dribble');


    ?>

    <!-- team member -->
    <div class="col-md-4 col-sm-6 ">
        <div class="team-member text-center">
            <div class="member-photo">
                <!-- member photo -->
                <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="Meghna">
                <!-- /member photo -->

                <!-- member social profile -->
                <div class="mask">
                    <ul class="clearfix">
                        <?php if ($team_facebook){ ?>
                            <li><a href="<?php echo esc_url($team_facebook);?>"><i class="tf-ion-social-facebook"></i></a></li>

                            <?php
                        }
                        ?>
                        <?php if ($team_twitter){ ?>
                            <li><a href="<?php echo esc_url($team_twitter);?>"><i class="tf-ion-social-twitter"></i></a></li>

                            <?php
                        }
                        ?>

                        <?php if ($team_google){ ?>
                            <li><a href="<?php echo esc_url($team_google);?>"><i class="tf-ion-social-google-outline"></i></a></li>

                            <?php
                        }
                        ?>

                        <?php if ($team_google){ ?>
                            <li><a href="<?php echo esc_url($team_dribble);?>"><i class="tf-ion-social-dribbble"></i></a></li>

                            <?php
                        }
                        ?>




                    </ul>
                </div>
                <!-- /member social profile -->
            </div>

            <!-- member name & designation -->
            <div class="member-content">
                <h3><?php the_title();?></h3>
                <span><?php echo esc_html($designation);?></span>
                <?php the_content(); ?>
            </div>
            <!-- /member name & designation -->

        </div>
    </div>
    <?php
endwhile;
wp_reset_postdata();
else : ?>
    <h2><?php esc_html_e( 'Sorry, no posts matched your criteria.' ,'double'); ?></h2>
<?php endif; ?>

<!-- end team member -->

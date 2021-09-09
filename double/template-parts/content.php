<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/8/2021
 * Time: 4:28 PM
 */
?>

<article class="post">
    <div class="post-image">
        <img class="img-fluid w-100" src="<?php the_post_thumbnail_url();?>" alt="post-image">
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <h3><?php the_title();?></h3>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#"><?php the_author();?></a>&nbsp;/
            </li>
            <li class="list-inline-item">
                <a href="#"><?php get_comments_number();?></a>&nbsp;/
            </li>

        </ul>
        <?php the_content();?>



        <!-- Comment Form -->
        <?php comments_template(); ?>

    </div>
</article>

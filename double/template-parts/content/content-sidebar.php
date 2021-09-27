<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/25/2021
 * Time: 6:32 PM
 */
?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                <a href="#"><?php the_category( ', ' ); ?></a>&nbsp;/
            </li>
            <li class="list-inline-item">
                <a href="#"><?php echo get_the_date(); ?> </a>&nbsp;/
            </li>

        </ul>
        <?php the_content();?>


        <?php
        $wpbtags =  get_tags();
        $html = '<span class="tagbox">';
        foreach ($wpbtags as $tag) {
            $tag_link = get_tag_link( $tag->term_id );
            $html .= "<a class='taglink' href='{$tag_link}' title='{$tag->name}'>";
            $html .= "{$tag->name}"."</a>";
            $html .= '<span class="tagcount">'. $tag->count ."  ";
            $html .= '</span>';
        }
        $html .= '</span>';
        echo $html;

        ?>

        <!-- Comment Form -->
        <?php comments_template(); ?>

    </div>
</article>


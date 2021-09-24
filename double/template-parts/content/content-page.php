<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/21/2021
 * Time: 6:03 PM
 */

?>

<div class="">


    <?php

    the_content();

    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'double' ),
            'after'  => '</div>',
        )
    );
    ?>




</div>

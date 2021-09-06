<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <!-- Mobile Specific Meta ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'double' ); ?></a>

<?php do_action('double_before_site'); //Hooked: double_preloader() ?>

<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->

       <?php if(has_custom_logo()) : ?>
        <?php the_custom_logo();?>
        <?php endif;?>
        <!-- /logo -->



      <div class="collapse navbar-collapse " id="navigation">
          <?php if ( has_nav_menu( 'menu-1' ) ) : ?>

              <?php
              wp_nav_menu(
                  array(
                      'theme_location' => 'menu-1',
                      'depth'            => 2,
                      'menu_class' => 'navbar-nav ml-auto text-center',
                      'container' => false,
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker' => new WP_Bootstrap_Navwalker()

                  )
              );
              ?>

          <?php endif; ?>
      </div>

    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->
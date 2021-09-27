<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">

    <!-- Mobile Specific Meta ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
      $options = get_option( 'double_framework' );
      $favicon = $options['favicon'];
      $logo = $options['logo'];
      $logo_one = $options['hello']
      ?>
    <!-- Favicon -->
    <?php
      if($options['favicon'])

      {?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($favicon['url']);?>" />
    <?php
      }

    ?>
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

        <a class="navbar-brand logo" href="<?php echo esc_url(home_url());?>">
            <?php
             if($options['logo']):?>
            <img class="logo-default" src="<?php echo esc_url($logo['url']);?>" alt="logo"/>
            <?php endif; ?>
            <?php
            if($options['hello']): ?>
            <img class="logo-white" src="<?php echo esc_url($logo_one['url']);?>" alt="logo"/>
            <?php endif; ?>

        </a>
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
<?php
/**
 * Header
 * @package accionaborto
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Links adicionales -->
    <link href="https://fonts.googleapis.com/css?family=Londrina+Solid" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/interiores.css" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300,500,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/slicknav.css" />
    <script src="<?php bloginfo('template_url')?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/jquery.slicknav.min.js"></script>

    <script src="<?php bloginfo('template_url')?>/js/sharer.min.js"></script>

    <script>
      $(function(){
        $('#menu').slicknav({
          label: '',
          duration: 300,
          closeOnClick: true
        });
      });
    </script>

    <!-- wp_head(); al final para lo que haga falta. -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header class="superior">
    <div class="container superior">
      <div class="row">
        <div class="col">
          <?php /* Menú */ ?>
          <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-superior" aria-controls="menu-superior" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
              if ( is_front_page() ) {
            ?>
              <?php
                wp_nav_menu( array(
                  'theme_location'    => 'portada',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'menu-superior',
                  'menu_class'        => 'nav navbar-nav mx-auto', /* mr-auto para poner a la izquierda */
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
                );
              ?>
            <?php } else { ?>
              <?php
                wp_nav_menu( array(
                  'theme_location'    => 'no-portada',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'menu-superior',
                  'menu_class'        => 'nav navbar-nav mx-auto',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
                );
              ?>
            <?php } ?>
          </nav>
          <?php /* Fin del menú */ ?>
        </div>
      </div>
    </div>
  </header>

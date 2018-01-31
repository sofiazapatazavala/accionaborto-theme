<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Grilla de Bootstrap, único CSS agregado por si acaso -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap-grid.min.css">
</head>
<body <?php body_class(); ?>>
  <?php /* Este archivo se encargará de los menús */ ?>
  <nav>
    <div class="contenedor">
      <?php if ( is_front_page() ) { ?>
        <?php wp_nav_menu(
          array(
            'container' => false,
            'items_wrap' => '<ul id="menu" class="responsive menu space-between">%3$s</ul>',
            'theme_location' => 'menu'
          ));
        ?>
      <?php } else { ?>
        <?php wp_nav_menu(
          array(
            'container' => false,
            'items_wrap' => '<ul id="menu" class="responsive menu space-between">%3$s</ul>',
            'theme_location' => 'menu2'
          ));
        ?>
      <?php } ?>
    </div>
  </nav>

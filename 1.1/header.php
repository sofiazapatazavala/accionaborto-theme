<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset=“utf-8”>
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

</head>

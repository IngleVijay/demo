<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wp_daily</title>
    <!-- style.css-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head();?>
</head>
<body <?php body_class('body-class');?>>
<header class="header-area">
<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
<h3><?php bloginfo('description');?></h3>

</header>

<main id = "main">
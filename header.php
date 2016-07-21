<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="generator" content="Anchor CMS">
  <meta name="description" content="<?php echo site_description(); ?>">
  <title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
  <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon">
  <link href="<?php echo theme_url('css/style.css'); ?>"     rel="stylesheet">
  <link href="<?php echo theme_url('css/ir-black.css'); ?>"  rel="stylesheet">
  <link href="<?php echo theme_url('css/spin-star.css'); ?>" rel="stylesheet">
  <link href="<?php echo theme_url('css/form.css'); ?>"      rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Add per-post CSS -->
  <?php if(article_css()): ?>
    <style><?php echo article_css(); ?></style>
  <?php endif; ?>

</head>
<body class="preload" onload=" document.getElementByTagName('body').className = ''; ">

  <header class="page-header">

    <ul class="menu">
      <li class="grid-unit">Justin McGuire</li>
      <li class="grid-unit align-center"><a href="<?php echo base_url(); ?>">landedstar.com</a></li>
      <li class="grid-unit align-right"><span class="fa fa-star spin-star" aria-hidden="true"></span></li>
    </ul>

    <?php if(false and has_menu_items()) : ?>
      <nav role="main">
        <?php while(menu_items()) : ?>
          <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
        <?php endwhile; ?>
      </nav>
    <?php endif; ?>

    <!-- NEED: breadcrumbs -->

  </header>

<!--
  <?php site_description(); ?>
-->


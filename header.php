<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!-- Links to our Style.css file -->
  <link rel="stylesheet" type="text/css" href="
    <?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
  <div class="container"> <!-- Begin Container -->
    <header class="row">
      <div class="eight columns">
        <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url;?>">
          <?php bloginfo('name'); ?>
        </a></h1>
        <h2 class="sub-title"><?php bloginfo('description'); ?></h2>
      </div>
      <div class="four columns">
        <h3>Search Bar</h3>
      </div>
    </header>
    <div class="row">
      <div class="twelve columns">
        <?php
            wp_nav_menu(array(
              'sort_column' => 'menu_order',
              'container_class' => 'blank-menu-header'
            ));
        ?>
      </div>
    </div>

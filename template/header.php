<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en">
  <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/jquery.js"></script>
  <!-- Google Analytics start -->
  <!-- Google Analytics end -->
  <?php wp_head(); ?>
</head>
<body>
  <div id="wrapper">
    <header id="header">
      <h1><a href="/">ANOUSKA HEMPEL</a></h1>
      <div class="hamburger"><span></span><span></span><span></span><span></span></div>
      <div class="overlay">
        <div class="menu">
          <ul class="gnavi">
            <li class="link"><a href="#">Home</a></li>
            <li class="link"><a href="#">About</a></li>
            <li class="link sub">
              <a href="#">Project</a>
              <ul class="sub_menu">
                <li class="link-sub"><a href="#">gardens</a></li>
                <li class="link-sub"><a href="#">gardens</a></li>
                <li class="link-sub"><a href="#">gardens</a></li>
                <li class="link-sub"><a href="#">gardens</a></li>
              </ul>
            </li>
            <li class="link"><a href="#">Contact</a></li>

          </ul>
          <ul class="social">
            <li class="insta"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/common/insta.png" alt="instagram"></a></li>
          </ul>
        </div>
      </div>
    </header>
    <main class="main">
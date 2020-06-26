<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Document</title>
  <?php wp_head(); ?>

</head>

<body>
  <header>
    <nav class="front_page-nav">
      <div class="top-navbar">
        <div class="localization">
          <select class="form-control form-control-sm">
            <option>EN</option>
            <option>AR</option>
          </select>
          <select class="form-control form-control-sm">
            <option>USD</option>
            <option>EURO</option>
          </select>
        </div>
        <div class="nav-phone">
          <a href="tel:004402039742579">+44 (0)203 974 2579</a>
        </div>
      </div>
      <div class="bottom-navbar">
        <a href="#" class="navbar_logo">
          <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="My Turkey Property" />
        </a>

        <ul class="bottom_navbar-menu">
          <li><a href="#">Home</a></li>
          <li class="hasChildren"><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
          <li><a href="#">Link 4</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <?php get_footer();?>
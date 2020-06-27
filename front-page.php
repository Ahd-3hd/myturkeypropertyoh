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
  <header class="front_page-header">
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
        <ul class="bottom_navbar-menu-mobile">
          <li><a href="#">Home</a></li>
          <li class="hasChildren"><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
          <li><a href="#">Link 4</a></li>
          <button id="menu-button-close"><i class="fa fa-bars"></i></button>

        </ul>
        <button id="menu-button"><i class="fa fa-bars"></i></button>

      </div>
    </nav>
    <div class="front_page-header-content">
      <h1>My Turkey Property</h1>
      <form action="<?php echo the_permalink();?>/properties" method="get">
        <div class="input-group">
          <label>Location:</label>
          <select name="location" class="form-control form-control-sm">
            <option value="">Any</option>
            <option value="antalia" <?php selected( isset($_GET['location']) ? $_GET['location'] : '', 'antalia' ); ?>>
              Antalia</option>
            <option value="bursa" <?php selected( isset($_GET['location']) ? $_GET['location'] : '', 'bursa' ); ?>>Bursa
            </option>
            <option value="fethiye" <?php selected( isset($_GET['location']) ? $_GET['location'] : '', 'fethiye' ); ?>>
              Fethiye
            </option>
            <option value="istanbul"
              <?php selected( isset($_GET['location']) ? $_GET['location'] : '', 'istanbul' ); ?>>
              Istanbul</option>
          </select>
        </div>

        <div class="input-group">
          <label>Type:</label>
          <select name="type" class="form-control form-control-sm">
            <option value="">Any</option>
            <option value="apartment" <?php selected( isset($_GET['type']) ? $_GET['type'] : '', 'apartment' ); ?>>
              Apartment
            </option>
            <option value="penthouse" <?php selected( isset($_GET['type']) ? $_GET['type'] : '', 'penthouse' ); ?>>
              Penthouse
            </option>
            <option value="villa" <?php selected( isset($_GET['type']) ? $_GET['type'] : '', 'villa' ); ?>>
              Villa
            </option>
          </select>
        </div>
        <div class="input-group">
          <label>MIN. Bedrooms:</label>
          <select name="minbedrooms" class="form-control form-control-sm">
            <option value="">Any</option>
            <option value="1" <?php selected( isset($_GET['minbedrooms']) ? $_GET['minbedrooms'] : '', '1' ); ?>>1
            </option>
            <option value="2" <?php selected( isset($_GET['minbedrooms']) ? $_GET['minbedrooms'] : '', '2' ); ?>>2
            </option>
            <option value="3" <?php selected( isset($_GET['minbedrooms']) ? $_GET['minbedrooms'] : '', '3' ); ?>>3
            </option>
            <option value="4" <?php selected( isset($_GET['minbedrooms']) ? $_GET['minbedrooms'] : '', '4' ); ?>>4
            </option>
            <option value="5" <?php selected( isset($_GET['minbedrooms']) ? $_GET['minbedrooms'] : '', '5' ); ?>>5
            </option>
          </select>
        </div>
        <div class="input-group">
          <label>MIN. Bathrooms:</label>
          <select name="minbathrooms" class="form-control form-control-sm">
            <option value="">Any</option>
            <option value="1" <?php selected( isset($_GET['minbathrooms']) ? $_GET['minbathrooms'] : '', '1' ); ?>>1
            </option>
            <option value="2" <?php selected( isset($_GET['minbathrooms']) ? $_GET['minbathrooms'] : '', '2' ); ?>>2
            </option>
            <option value="3" <?php selected( isset($_GET['minbathrooms']) ? $_GET['minbathrooms'] : '', '3' ); ?>>3
            </option>
          </select>
        </div>
        <div class="input-group">
          <label>Min Price:</label>
          <input class="form-control form-control-sm" type="number" name="minprice" placeholder="Min Price" />
        </div>
        <div class="input-group">
          <label>Max Price:</label>
          <input class="form-control form-control-sm" type="number" name="maxprice" placeholder="Max Price" />
        </div>
        <div class="input-group">
          <label>REF NO.:</label>
          <input placeholder="e.g. ista1" name="refno" value="<?php echo $_GET['refno']?>"
            class="form-control form-control-sm" />
        </div>
        <div class="input-group">
          <button class="btn btn-primary btn-sm" type="submit" name="">Search</button>
        </div>
      </form>
    </div>
  </header>
  <div style="height: 100vh"></div>

  <?php get_footer();?>
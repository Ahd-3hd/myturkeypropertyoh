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

  <div class="services-container">
    <h3>What We Do</h3>
    <section class="services">
      <div class="box">
        <svg viewBox="-31 0 479 480" xmlns="http://www.w3.org/2000/svg">
          <path class="box1"
            d="M376.5 40c0-22.398-17.602-40-40-40h-296C18.102 0 .5 17.602.5 40v64h64v336c0 22.398 17.602 40 40 40h272c22.398 0 40-17.602 40-40v-40h-40zm-312 48h-48V40c0-13.602 10.398-24 24-24s24 10.398 24 24zm16 352V40c0-8.8-3.2-16.8-8-24h264c13.602 0 24 10.398 24 24v360h-232v40c0 13.602-10.398 24-24 24s-24-10.398-24-24zm320-24v24c0 13.602-10.398 24-24 24h-240c5.602-7.2 8-15.2 8-24v-24zm0 0">
          </path>
          <path
            d="M280.5 256h64v16h-64zm0 0M96.5 256h168v16h-168zm0 0M184.5 288h160v16h-160zm0 0M96.5 288h72v16h-72zm0 0M240.5 352h104v16h-104zm0 0M96.5 352h128v16h-128zm0 0M206.898 163.2l9.602 6.402 9.602-6.403C254.898 144 272.5 111.2 272.5 76.801V50.398L216.5 32l-56 18.398v26.403c0 34.398 17.602 67.199 46.398 86.398zM176.5 61.601L216.5 48l40 13.602V76.8c0 29.597-14.398 56.8-39.2 73.597h-.8l-.8-.796c-24.802-16-39.2-44-39.2-73.602zm0 0">
          </path>
          <path
            d="M240.5 80.8l-16-1.6c-1.602 13.6-8.8 26.402-20 34.402l8.8 13.597c15.2-11.199 25.598-28 27.2-46.398zm0 0M144.5 320h200v16h-200zm0 0M96.5 320h32v16h-32zm0 0M184.5 224h160v16h-160zm0 0M96.5 224h72v16h-72zm0 0M160.5 184h112v16h-112zm0 0">
          </path>
        </svg>
        <p class="box-title">Free Legals</p>
        <p class="box-paragraph">We will simplify seemingly complicated procedures</p>
      </div>
      <div class="box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
          <path class="box2"
            d="M57 2H15a5.006 5.006 0 00-5 5v17.667a1 1 0 002 0V7a3 3 0 013-3h38.026A4.948 4.948 0 0052 7v11.393a1 1 0 002 0V12h7a1 1 0 001-1V7a5.006 5.006 0 00-5-5zm3 8h-6V7a3 3 0 016 0zM53 42.392a1 1 0 00-1 1V57a3 3 0 01-6 0v-2a1 1 0 00-1-1H3a1 1 0 00-1 1v2a5.006 5.006 0 005 5h42a5.006 5.006 0 005-5V43.392a1 1 0 00-1-1zM7 60a3 3 0 01-3-3v-1h40v1a4.98 4.98 0 001 3z">
          </path>
          <path
            d="M3 36h19v12h-3v-5a3 3 0 00-3-3h-2a3 3 0 00-3 3v5H8v-9a1 1 0 00-2 0v10a1 1 0 001 1h16a1 1 0 001-1V36h3a1 1 0 00.555-1.832l-12-8a1 1 0 00-1.11 0l-12 8A1 1 0 003 36zm10 12v-5a1 1 0 011-1h2a1 1 0 011 1v5zm2-19.8l8.7 5.8H6.3zM60.5 17.4a3 3 0 00-4.1 1.1l-1.5 2.6a1 1 0 00-1.366.366l-1.5 2.6-.866-.5a3 3 0 00-4.1 1.1l-4 6.929a1 1 0 001.733 1l4-6.929a1 1 0 011.366-.365l.866.5-9.5 16.454c-.007.012-.007.027-.013.039a1 1 0 00-.1.285c0 .024-.011.047-.013.072s-.008.029-.009.044l-.198 3.46a2.594 2.594 0 00.549 1.732l-.611 1.058a1 1 0 001.733 1l.61-1.056a2.7 2.7 0 00.334.044 2.615 2.615 0 001.441-.436l2.9-1.913a.723.723 0 00.078-.067.859.859 0 00.091-.079.954.954 0 00.093-.119c.017-.025.039-.044.054-.07l5.255-9.1a1 1 0 00-1.733-1l-4.754 8.236-1.732-1-1.732-1 9-15.588 3.463 2-2.245 3.888a1 1 0 001.733 1l2.237-3.885.866.5a1 1 0 101-1.732l-.866-.5 1.5-2.6A1 1 0 0060.1 24.1l1.5-2.6a3 3 0 00-1.1-4.1zM44.149 46.828a.619.619 0 01-.958-.554l.112-1.85 2.397 1.382zM58.133 19.5a1 1 0 011.366-.365 1 1 0 01.366 1.365l-1.5 2.6-.866-.5-.867-.5zm-4.365 5.563l1-1.732 3.463 2-1 1.732zM42 13V9a1 1 0 00-1-1H23a1 1 0 00-1 1v4a1 1 0 001 1h18a1 1 0 001-1zm-2-1H24v-2h16zM27 17a1 1 0 000 2h10a1 1 0 000-2zM23 24h18a1 1 0 000-2H23a1 1 0 000 2zM23 29h19a1 1 0 000-2H23a1 1 0 000 2zM40 32h-9a1 1 0 000 2h9a1 1 0 000-2z">
          </path>
          <path d="M41 39a1 1 0 00-1-1H27a1 1 0 000 2h13a1 1 0 001-1zM29 43a1 1 0 000 2h7a1 1 0 000-2z"></path>
        </svg>
        <p class="box-title">Turkish Mortgage</p>
        <p class="box-paragraph">Mortgage available up to 75% of purchase price</p>
      </div>
      <div class="box">
        <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
          <circle cx="56.397" cy="106.431" r="3.966"></circle>
          <circle cx=" 68.294" cy="106.396" r="4"></circle>
          <circle cx="80.191" cy="106.431" r="3.966"></circle>
          <path
            d="M101.586 161.299c4.105-3.665 6.708-8.979 6.708-14.902 0-11.028-8.972-20-20-20s-20 8.972-20 20c0 5.923 2.603 11.237 6.708 14.902-11.027 5.057-18.708 16.194-18.708 29.098v20a4 4 0 004 4h56a4 4 0 004-4v-20c0-12.905-7.681-24.041-18.708-29.098zm-25.292-14.903c0-6.617 5.383-12 12-12s12 5.383 12 12-5.383 12-12 12-12-5.383-12-12zm36 60h-48v-16c0-13.234 10.766-24 24-24s24 10.766 24 24zM136.294 142.396h28a4 4 0 000-8h-28a4 4 0 000 8zM204.294 154.396h-68a4 4 0 000 8h68a4 4 0 000-8zM204.294 174.396h-68a4 4 0 000 8h68a4 4 0 000-8z">
          </path>
          <path
            d="M262.785 78.253a4.008 4.008 0 00-2.882-1.445c-.213-.011-21.377-1.218-31.373-13.705a3.999 3.999 0 00-3.043-1.499 3.981 3.981 0 00-3.101 1.377c-10.937 12.602-31.278 13.816-31.477 13.827a4 4 0 00-3.762 4.544c.241 1.737.516 3.413.816 5.044H40.294a4 4 0 00-4 4v144a4 4 0 004 4h184a4 4 0 004-4v-98.827c6.961-2.449 29.734-13.483 35.374-54.217a4 4 0 00-.883-3.099zM44.294 230.396v-136h145.47c7.292 27.082 22.963 36.992 30.53 40.293v95.707zM225.41 128.11c-4.495-1.487-23.649-9.746-29.697-43.79 6.752-1.001 19.852-4.018 29.605-12.912 9.377 8.956 22.87 11.952 29.78 12.932-6.058 34.059-25.236 42.299-29.688 43.77z">
          </path>
          <path class="box3"
            d="M219.052 98.304a4 4 0 00-6.125 5.147l6.298 7.496a4.001 4.001 0 003.062 1.427h.074a4.001 4.001 0 003.082-1.541l14.006-17.977a4 4 0 10-6.311-4.917l-10.968 14.078z">
          </path>
          <circle cx="156.294" cy="206.396" r="4"></circle>
          <circle cx="140.294" cy="206.396" r="4"></circle>
          <circle cx="172.294" cy="206.396" r="4"></circle>
        </svg>
        <p class="box-title">Turkish Citizenship</p>
        <p class="box-paragraph">We will ease the process of obtaining the turkish citizenship for eligible clients</p>
      </div>
      <div class="box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="m202 452c-2.628906 0-5.210938 1.070312-7.070312 2.929688-1.859376 1.859374-2.929688 4.441406-2.929688 7.070312s1.070312 5.210938 2.929688 7.070312c1.859374 1.859376 4.441406 2.929688 7.070312 2.929688s5.210938-1.070312 7.070312-2.929688c1.859376-1.859374 2.929688-4.441406 2.929688-7.070312s-1.070312-5.210938-2.929688-7.070312c-1.859374-1.859376-4.441406-2.929688-7.070312-2.929688zm0 0">
          </path>
          <path
            d="m501.324219 136.320312c-14.210938-14.210937-37.332031-14.210937-51.542969 0l-45.78125 45.78125v-148.101562c0-18.746094-15.253906-34-34-34h-336c-18.746094 0-34 15.253906-34 34v444c0 18.746094 15.253906 34 34 34h336c18.746094 0 34-15.253906 34-34v-192.808594l97.324219-97.328125c14.210937-14.210937 14.210937-37.332031 0-51.542969zm-117.324219-102.320312v168.101562l-20 20v-172.101562c0-5.523438-4.476562-10-10-10h-66.832031v-20h82.832031c7.71875 0 14 6.28125 14 14zm-54.601562 274.246094 13.5-30.328125 16.828124 16.828125zm-62.230469-288.246094v40.75c0 6.203125-5.046875 11.25-11.25 11.25h-107.835938c-6.203125 0-11.25-5.046875-11.25-11.25v-40.75zm102.832031 472h-336c-7.71875 0-14-6.28125-14-14v-444c0-7.71875 6.28125-14 14-14h82.832031v20h-66.832031c-5.523438 0-10 4.476562-10 10v412c0 5.523438 4.476562 10 10 10h112c5.523438 0 10-4.476562 10-10s-4.476562-10-10-10h-102v-392h56.832031v.75c0 17.230469 14.019531 31.25 31.25 31.25h107.835938c17.230469 0 31.25-14.019531 31.25-31.25v-.75h56.832031v182.101562l-11.390625 11.386719c-.863281.867188-1.5625 1.886719-2.0625 3.003907l-30.015625 67.417968c-1.683594 3.785156-.863281 8.210938 2.0625 11.140625 1.917969 1.914063 4.476562 2.929688 7.074219 2.929688 1.375 0 2.757812-.28125 4.066406-.863281l30.265625-13.476563v128.359375h-102c-5.523438 0-10 4.476562-10 10s4.476562 10 10 10h112c5.519531 0 10-4.476562 10-10v-147.265625l17.152344-7.636719c1.054687-.46875 2.011718-1.121094 2.847656-1.921875v172.824219c0 7.71875-6.28125 14-14 14zm79.910156-281.007812-72.824218 72.828124-23.261719-23.261718 90.167969-90.167969 23.261718 23.261719zm37.273438-37.269532-5.789063 5.785156-23.257812-23.257812 5.785156-5.785156c6.414063-6.414063 16.847656-6.414063 23.261719 0 6.410156 6.410156 6.410156 16.84375 0 23.257812zm0 0">
          </path>
          <path
            d="m162 120h-64c-5.523438 0-10 4.476562-10 10v64c0 5.523438 4.476562 10 10 10h64c5.523438 0 10-4.476562 10-10v-64c0-5.523438-4.476562-10-10-10zm-10 64h-44v-44h44zm0 0">
          </path>
          <path
            d="m162 230h-64c-5.523438 0-10 4.476562-10 10v64c0 5.523438 4.476562 10 10 10h64c5.523438 0 10-4.476562 10-10v-64c0-5.523438-4.476562-10-10-10zm-10 64h-44v-44h44zm0 0">
          </path>
          <path
            d="m162 340h-64c-5.523438 0-10 4.476562-10 10v64c0 5.523438 4.476562 10 10 10h64c5.523438 0 10-4.476562 10-10v-64c0-5.523438-4.476562-10-10-10zm-10 64h-44v-44h44zm0 0">
          </path>
          <path
            d="m233.578125 191.644531c1.953125 1.953125 4.511719 2.929688 7.070313 2.929688 2.558593 0 5.117187-.976563 7.070312-2.929688l45.148438-45.148437c3.902343-3.902344 3.902343-10.234375 0-14.140625-3.90625-3.90625-10.238282-3.90625-14.144532 0l-38.074218 38.074219-15.175782-15.175782c-3.90625-3.90625-10.234375-3.90625-14.144531 0-3.902344 3.90625-3.902344 10.238282 0 14.140625zm0 0">
          </path>
          <path
            d="m233.578125 301.644531c1.875 1.875 4.417969 2.929688 7.070313 2.929688 2.652343 0 5.195312-1.054688 7.070312-2.929688l45.148438-45.144531c3.902343-3.90625 3.902343-10.238281 0-14.144531-3.90625-3.902344-10.238282-3.902344-14.144532 0l-38.074218 38.078125-15.175782-15.175782c-3.90625-3.90625-10.234375-3.90625-14.144531 0-3.902344 3.902344-3.902344 10.234376 0 14.140626zm0 0">
          </path>
          <path class="box4"
            d="m252.097656 396.144531 15.503906 15.5c1.953126 1.953125 4.511719 2.929688 7.070313 2.929688s5.117187-.976563 7.070313-2.929688c3.90625-3.90625 3.90625-10.238281 0-14.140625l-15.5-15.503906 15.5-15.503906c3.90625-3.902344 3.90625-10.234375 0-14.140625s-10.234376-3.90625-14.140626 0l-15.503906 15.5-15.5-15.5c-3.90625-3.902344-10.234375-3.90625-14.144531 0-3.902344 3.90625-3.902344 10.238281 0 14.140625l15.503906 15.503906-15.503906 15.503906c-3.902344 3.902344-3.902344 10.234375 0 14.140625 1.953125 1.953125 4.515625 2.929688 7.074219 2.929688s5.117187-.976563 7.070312-2.929688zm0 0">
          </path>
        </svg>
        <p class="box-title">Free Evaluation</p>
        <p class="box-paragraph">Properties will get evaluated for free</p>
      </div>
      <div class="box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M181.72 366.814a10.002 10.002 0 00-2.208-.362c10.954-11.513 17.7-27.066 17.7-44.174v-52.611c0-.481-.046-.95-.111-1.412.066-.95.111-1.906.111-2.872v-33.286c0-5.523-4.477-10-10-10h-67.073c-28.245 0-51.223 22.979-51.223 51.223v48.958c0 17.108 6.745 32.661 17.7 44.174a9.984 9.984 0 00-2.206.362C37.153 371.093 0 410.924 0 459.276V502c0 5.523 4.477 10 10 10h246.127c5.523 0 10-4.477 10-10v-42.724c0-48.351-37.151-88.182-84.407-92.462zm-92.804-80.813v-12.682c0-17.216 14.007-31.223 31.223-31.223h57.073v23.286c0 11.723-9.537 21.26-21.26 21.26H88.916v-.641zm0 20.641h67.036a40.998 40.998 0 0021.26-5.914v21.549c0 24.343-19.805 44.148-44.148 44.148-24.343 0-44.148-19.805-44.148-44.148v-15.635zm65.913 79.784l-21.765 21.766-21.765-21.766h43.53zM246.128 492H20v-20h41.5c5.523 0 10-4.477 10-10s-4.477-10-10-10H20.365c3.359-33.716 29.806-60.717 63.255-64.969l42.373 42.373a10.001 10.001 0 0014.142 0l42.373-42.373c35.824 4.553 63.62 35.204 63.62 72.245V492zM427.595 144.718a10.01 10.01 0 00-2.21-.362c10.954-11.513 17.699-27.066 17.699-44.174V47.57c0-.481-.046-.95-.111-1.412.066-.95.111-1.906.111-2.872V10c0-5.523-4.477-10-10-10h-67.073c-28.245 0-51.223 22.979-51.223 51.223v48.958c0 17.108 6.745 32.661 17.699 44.174a10.02 10.02 0 00-2.21.362c-47.255 4.281-84.405 44.112-84.405 92.462v42.723c0 5.523 4.477 10 10 10h80.46c5.523 0 10-4.477 10-10s-4.477-10-10-10h-70.46V237.18c0-37.041 27.795-67.692 63.619-72.245l42.373 42.373c1.953 1.953 4.512 2.929 7.071 2.929s5.119-.976 7.071-2.929l42.373-42.373C464.205 169.489 492 200.139 492 237.18v32.723h-73.667c-5.523 0-10 4.477-10 10s4.477 10 10 10H502c5.523 0 10-4.477 10-10V237.18c0-48.35-37.151-88.181-84.405-92.462zm-48.658 41.377l-21.765-21.765h43.53l-21.765 21.765zm44.148-85.914c0 24.343-19.805 44.148-44.148 44.148s-44.148-19.804-44.148-44.147V84.546h67.036a41.007 41.007 0 0021.26-5.914v21.549zm0-56.895c0 11.723-9.537 21.26-21.26 21.26h-67.036V51.223c0-17.216 14.007-31.223 31.223-31.223h57.073v23.286z">
          </path>
          <path
            d="M386.01 272.83a10.076 10.076 0 00-7.07-2.93c-2.64 0-5.21 1.07-7.07 2.93a10.033 10.033 0 00-2.93 7.07c0 2.64 1.06 5.21 2.93 7.07 1.86 1.87 4.43 2.93 7.07 2.93 2.63 0 5.21-1.06 7.07-2.93 1.86-1.86 2.93-4.43 2.93-7.07 0-2.63-1.07-5.21-2.93-7.07zM267.405 139.929l-41.821-41.821V50c0-27.57-22.43-50-50-50H50C22.43 0 0 22.43 0 50v88c0 27.57 22.43 50 50 50h125.583c20.674 0 38.702-12.407 46.266-31h38.484a10.002 10.002 0 007.072-17.071zM214.554 137a10 10 0 00-9.746 7.758C201.66 158.442 189.643 168 175.583 168H50c-16.542 0-30-13.458-30-30V50c0-16.542 13.458-30 30-30h125.583c16.542 0 30 13.458 30 30v52.25c0 2.652 1.054 5.196 2.929 7.071L236.191 137h-21.637zM462 324H336.417c-20.674 0-38.702 12.407-46.266 31h-38.484a10.002 10.002 0 00-7.072 17.071l41.821 41.821V462c0 27.57 22.43 50 50 50H462c27.57 0 50-22.43 50-50v-88c0-27.57-22.43-50-50-50zm30 138c0 16.542-13.458 30-30 30H336.417c-16.542 0-30-13.458-30-30v-52.25c0-2.652-1.054-5.196-2.929-7.071L275.809 375h21.637a10 10 0 009.746-7.758C310.34 353.558 322.357 344 336.417 344H462c16.542 0 30 13.458 30 30v88z">
          </path>
          <path class="box5"
            d="M444.156 391.392c-3.904-3.905-10.236-3.905-14.141 0l-26.583 26.583-12.361-12.361c-3.905-3.905-10.237-3.905-14.143 0-3.905 3.905-3.905 10.237 0 14.143l19.432 19.432c1.953 1.953 4.512 2.929 7.071 2.929s5.119-.976 7.071-2.929l33.654-33.654c3.905-3.905 3.905-10.237 0-14.143zM158.253 66.268c-1.182-17.147-15.004-30.969-32.151-32.151-9.723-.669-18.991 2.611-26.091 9.239a34.796 34.796 0 00-11.017 25.349c.001 5.524 4.478 10.001 10.001 10.001s10-4.477 10-10c0-4.111 1.656-7.921 4.664-10.729 3.003-2.804 6.938-4.196 11.069-3.906 7.239.499 13.074 6.334 13.573 13.573.505 7.319-4.293 13.787-11.408 15.379-7.788 1.742-13.227 8.513-13.227 16.465v5.335c0 5.523 4.477 10 10 10s10-4.477 10-10v-2.91c15.494-4.622 25.719-19.229 24.587-35.645zM130.74 136.02a10.076 10.076 0 00-7.07-2.93c-2.64 0-5.21 1.07-7.07 2.93-1.87 1.86-2.93 4.44-2.93 7.07s1.06 5.21 2.93 7.07c1.86 1.86 4.43 2.93 7.07 2.93 2.63 0 5.21-1.07 7.07-2.93 1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07zM108.57 454.93c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21 1.07-7.07 2.93-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07c1.86 1.86 4.44 2.93 7.07 2.93s5.21-1.07 7.07-2.93 2.93-4.44 2.93-7.07-1.07-5.21-2.93-7.07z">
          </path>
        </svg>
        <p class="box-title">After Sales Care</p>
        <p class="box-paragraph">Our services extend beyond giving you the keys.</p>
      </div>
    </section>
  </div>

  <section class="featured-properties">
    <h3>Featured Properties</h3>
    <div class="featured-properties-container">
      <a href="#" class="property-card">
        <div class="property-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="property" />
        </div>
        <div class="property-details">
          <p class="property-price">price: 123123</p>
          <p class="property-location"><i class="fas fa-map-marker-alt"></i> Istanbul</p>
          <p class="property-description">sdfs dfs dfsdf sdf sdf sdrgf </p>
        </div>
        <div class="property-icons">
          <p><i class="fas fa-ruler-vertical" aria-hidden="true"></i> 123 ft sq</p>
          <p><i class="fas fa-bed" aria-hidden="true"></i> 2</p>
          <p><i class="fas fa-bath" aria-hidden="true"></i> 1</p>
          <p><i class="fas fa-home" aria-hidden="true"></i> Villa</p>
        </div>
      </a>
      <a href="#" class="property-card">
        <div class="property-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="property" />
        </div>
        <div class="property-details">
          <p class="property-price">price: 123123</p>
          <p class="property-location"><i class="fas fa-map-marker-alt"></i> Istanbul</p>
          <p class="property-description">sdfs dfs dfsdf sdf sdf sdrgf </p>
        </div>
        <div class="property-icons">
          <p><i class="fas fa-ruler-vertical" aria-hidden="true"></i> 123 ft sq</p>
          <p><i class="fas fa-bed" aria-hidden="true"></i> 2</p>
          <p><i class="fas fa-bath" aria-hidden="true"></i> 1</p>
          <p><i class="fas fa-home" aria-hidden="true"></i> Villa</p>
        </div>
      </a>
      <a href="#" class="property-card">
        <div class="property-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="property" />
        </div>
        <div class="property-details">
          <p class="property-price">price: 123123</p>
          <p class="property-location"><i class="fas fa-map-marker-alt"></i> Istanbul</p>
          <p class="property-description">sdfs dfs dfsdf sdf sdf sdrgf </p>
        </div>
        <div class="property-icons">
          <p><i class="fas fa-ruler-vertical" aria-hidden="true"></i> 123 ft sq</p>
          <p><i class="fas fa-bed" aria-hidden="true"></i> 2</p>
          <p><i class="fas fa-bath" aria-hidden="true"></i> 1</p>
          <p><i class="fas fa-home" aria-hidden="true"></i> Villa</p>
        </div>
      </a>
      <a href="#" class="property-card">
        <div class="property-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="property" />
        </div>
        <div class="property-details">
          <p class="property-price">price: 123123</p>
          <p class="property-location"><i class="fas fa-map-marker-alt"></i> Istanbul</p>
          <p class="property-description">sdfs dfs dfsdf sdf sdf sdrgf </p>
        </div>
        <div class="property-icons">
          <p><i class="fas fa-ruler-vertical" aria-hidden="true"></i> 123 ft sq</p>
          <p><i class="fas fa-bed" aria-hidden="true"></i> 2</p>
          <p><i class="fas fa-bath" aria-hidden="true"></i> 1</p>
          <p><i class="fas fa-home" aria-hidden="true"></i> Villa</p>
        </div>
      </a>
    </div>
  </section>

  <section class="news-section">
    <h3>Latest News</h3>
    <div class="news-card-container">
      <div class="news-card" href="#">
        <div class="news-card-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="news" />
        </div>
        <div class="news-details">
          <p class="news-title">this is the title</p>
          <p class="news-time"><i class="fa fa-clock" aria-hidden="true"></i> January 26, 2020</p>
          <p class="news-short-text">Beautiful beach in the center of Side, Turkey If you want to invest and earn good
            money in the long run, real estate is the best domain to focus on
          </p>
          <a href="#">Read More</a>
        </div>
      </div>

      <div class="news-card" href="#">
        <div class="news-card-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="news" />
        </div>
        <div class="news-details">
          <p class="news-title">this is the title</p>
          <p class="news-time">January 26, 2020</p>
          <p class="news-short-text">Beautiful beach in the center of Side, Turkey If you want to invest and earn good
            money in the long run, real estate is the best domain to focus on
          </p>
          <a href="#" class="news-link">Read More</a>
        </div>
      </div>

      <div class="news-card" href="#">
        <div class="news-card-media">
          <img src="<?php echo get_template_directory_uri()?>/img/featured.jpg" alt="news" />
        </div>
        <div class="news-details">
          <p class="news-title">this is the title</p>
          <p class="news-time">January 26, 2020</p>
          <p class="news-short-text">Beautiful beach in the center of Side, Turkey If you want to invest and earn good
            money in the long run, real estate is the best domain to focus on
          </p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer();?>
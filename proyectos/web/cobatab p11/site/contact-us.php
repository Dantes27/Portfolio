<?php include "admin/conexion.php"; ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Contáctanos</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
  <link rel="stylesheet" href="fonts/fontawesome-free-6.1.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    .contac-img{
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="ie-panel">
    <a href="http://windows.microsoft.com/en-US/internet-explorer/">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
    </a>
  </div>
  <!-- PANTALLA DE CARGA-->
  <div id="page-loader">
    <?php
			include_once "preloaderr.php";
		?>
  </div>
  <!-- PAGINA-->
  <div class="page">
    <!-- HEADER-->
    <header class="section page-header">
      <?php
        require_once('header.php');
      ?>
    </header>

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image.jpg);">
      <div class="shell">
        <h1 class="breadcrumbs-custom__title">Contáctanos</h1>
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.html">Inicio</a></li>
          <li class="active">Contáctanos</li>
        </ul>
      </div>
    </section>

    <!-- PONERSE EN CONTACTO-->
    <section class="section section-md bg-white text-center">
      <div class="shell">
        <div class="range range-md-center">
          <div class="cell-md-11 cell-lg-10">
            <div class="layout-columns">
              <div class="layout-columns__main">
              <img class="contac-img" src="admin/vendors/images/carousel/carousel_1.jpg">
              </div>
              <div class="layout-columns__aside">
                <div class="layout-columns__aside-item">
                  <p class="heading-5">Redes Sociales</p>
                  <div class="divider-modern"></div>
                  <ul class="list-inline-xs">
                    <li><a class="icon icon-md icon-gray-7 fa fa-facebook"
                        href="https://www.facebook.com/profile.php?id=100063801382413" target="_blank"></a></li>
                    <li><a class="icon icon-md icon-gray-7 fa-solid fa-envelope"
                        href="mailto:cobatabplantel11@hotmail.com" target="_blank"></a></li>
                    <li><a class="icon icon-md icon-gray-7 fa fa-tiktok"
                        href="https://www.tiktok.com/@cobatabplantel11" target="_blank"></a></li>
                  </ul>
                </div>
                <div class="layout-columns__aside-item">
                  <p class="heading-5">Teléfono</p>
                  <div class="divider-modern"></div>
                  <div class="unit unit-horizontal unit-spacing-xxs">
                    <div class="unit__left"><span class="icon icon-md icon-primary material-icons-local_phone"></span>
                    </div>
                    <div class="unit__body"><a href="tel:#" target="_blank">932 363 0396</a></div>
                  </div>
                </div>
                <div class="layout-columns__aside-item">
                  <p class="heading-5">Dirección</p>
                  <div class="divider-modern"></div>
                  <div class="unit unit-horizontal unit-spacing-xxs">
                    <div class="unit__left"><span class="icon icon-md icon-primary material-icons-location_on"></span>
                    </div>
                    <div class="unit__body"><a
                        href="https://www.google.com/maps/place/Colegio+de+Bachilleres+de+Tabasco+No.+11/@17.7223274,-92.8123034,16.78z/data=!4m12!1m6!3m5!1s0x85edd7826984c729:0xc318b447d0052f5c!2sColegio+de+Bachilleres+de+Tabasco+No.+11!8m2!3d17.7236912!4d-92.8093183!3m4!1s0x85edd7826984c729:0xc318b447d0052f5c!8m2!3d17.7236912!4d-92.8093183" target="_blank">José
                        María Pino Suárez S/n, Centro, 86850 Jalapa, Tab.</a></div>
                  </div>
                </div>
                <div class="layout-columns__aside-item">
                  <p class="heading-5">Horario de apertura</p>
                  <div class="divider-modern"></div>
                  <div class="unit unit-horizontal unit-spacing-xxs">
                    <div class="unit__left"><span class="icon icon-md icon-primary mdi mdi-clock"></span></div>
                    <div class="unit__body"><span>Laboramos los de Lun-Vie de 9:00–17:00</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-centered section bg-gray-darker">
      <?php
        require_once('footer.php');
      ?>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- JAVASCRIPT-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
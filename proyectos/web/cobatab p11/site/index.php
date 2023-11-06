<?php include "admin/conexion.php"; ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
  <!-- TITULO -->
  <title>Inicio</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!-- ICON -->
  <link rel="icon" href="admin/vendors/images/ie8-panel/icon_logo.ico" type="image/x-icon">
  <!-- STYLES -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
  <link rel="stylesheet" href="fonts/fontawesome-free-6.1.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS -->
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

    .rd-navbar-nav li:hover>ul {
      display: block;
    }
  </style>
</head>

<body>
  <!-- NAV DESACTUALIZADO -->
  <div class="ie-panel">
    <a href="https://support.microsoft.com/es-es/windows/ayuda-de-internet-explorer-23360e49-9cd3-4dda-ba52-705336cc0de2">
      <img src="admin/vendors/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="Está utilizando un navegador obsoleto. Para una experiencia de navegación más rápida y segura, actualicelo gratis">
    </a>
  </div>

  <!-- PANTALLA DE CARGA -->
  <div id="page-loader">
    <?php
    include_once "preloaderr.php";
    ?>
  </div>

  <!-- PAGINA -->
  <div class="page">
    <!-- HEADER -->
    <header class="section page-header">
      <?php
      require_once('header.php');
      ?>
    </header>

    <!-- CAROUSEL -->
    <section class="section text-center">
      <!-- Slick CAROUSEL-->
      <div class="slick-wrap">
        <?php
        $sentecia = "SELECT * FROM carousel";
        $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
        ?>
        <div class="slick-slider slick-style-1" data-arrows="true" data-autoplay="true" data-loop="true" data-dots="true" data-swipe="true" data-xs-swipe="true" data-sm-swipe="false" data-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-center-mode="true" data-lightgallery="group-slick">
          <?php
          while ($fila = $resultado->fetch_assoc()) {
            echo "<div class='item'>";
            echo "<div class='slick-slide-inner'>";
            echo "<div class='slick-slide-caption'>";
            echo "<a class='thumb-ann thumb-mixed_large' href='admin/" . $fila['imagen'] . "' data-lightgallery='item'>";
            echo "<img class='thumb-ann__image' src='admin/" . $fila['imagen'] . "' alt='' width='961' height='664' />";
            echo "<div class='thumb-ann__caption'>";
            echo "<p class='thumb-ann__title heading-3'>";
            echo $fila['titulo'];
            echo "</p>";
            echo "<p class='thumb-ann__text'>";
            echo $fila['descripcion'];
            echo "</p>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          ?>
        </div>
      </div>
    </section>

    <!-- CONOCENOS -->
    <section class="section section-md bg-white">
      <div class="shell">
        <?php
        $sentecia = "SELECT * FROM conocenos";
        $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
        $fila = $resultado->fetch_assoc();
        ?>
        <div class="range range-50 range-sm-center range-md-left range-md-middle range-md-reverse">
          <div class="cell-sm-6 wow fadeInRightSmall">
            <div class="thumb-line"><img src="admin/<?php echo $fila['imagen']; ?>" alt="" width="531" height="640" />
            </div>
          </div>
          <div class="cell-sm-6">
            <div class="box-width-3">
              <p class="heading-1 wow fadeInLeftSmall">
                <?php echo $fila['titulo']; ?>
              </p>
              <div class="divider wow fadeInLeftSmall" data-wow-delay=".2s"></div>
              <p style="text-align: justify;" class="wow fadeInLeftSmall" data-wow-delay=".3s">
                <?php echo $fila['descripcion']; ?>
              </p><a class="button button-primary-outline button-ujarak button-size-1 wow fadeInLeftSmall" href="about-me.php" data-wow-delay=".4s">LEER MAS...</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PREMIOS/RECONOCIMIENTOS -->
    <section class="section parallax-container bg-image-dark" data-parallax-img="admin/vendors/images/banners/banner_inicio.jpg">
      <div class="parallax-content">
        <div class="section-md text-center">
          <div class="shell">
            <p class="heading-1">Premios y Reconocimientos</p>
            <div class="range range-50 range-lg-bottom">
              <div class="owl-carousel">
                <?php
                $sentecia = "SELECT * FROM premios_reconocimientos";
                $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<div class='cell-xs-6 cell-md-3 wow fadeIn'>";
                  echo "<article class='box-award'>";
                  echo "<img class='box-award__image' src='admin/" . $fila['imagen'] . "' width='134' height='98' />";
                  echo "<h3 class='box-award__title'>";
                  echo $fila['titulo'];
                  echo "</h3>";
                  echo "<div class='box-award__divider'>";
                  echo "</div>";
                  echo "<time class='box-award__time'>";
                  echo $fila['fecha'];
                  echo "</time>";
                  echo "</article>";
                  echo "</div>";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ACTIVIDADES ACADEMICAS -->
    <section class="section section-md bg-white text-center">
      <?php
      $sentecia = "SELECT * FROM act_academicas ";
      $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
      $fila = $resultado
      ?>
      <div class="shell-fluid">
        <p class="heading-1">Actividades Académicas</p>
        <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry">
          <div class="row">
            <?php
            while ($fila = $resultado->fetch_assoc()) {
              echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item wow animate__animated animate__backInUp' data-wow-delay='.4s'>";
              echo "<a class='thumb-ruby thumb-mixed_height-2 thumb-mixed_md' href='galeria-act-academicas-view.php?album=" . $fila['id_act_academicas'] . "'>";
              echo "<img class='thumb-ruby__image' src='admin/" . $fila['imagen'] . "' width='440' height='327' />";
              echo "<div class='thumb-ruby__caption'>";
              echo "<p class='thumb-ruby__title heading-3'>";
              echo $fila['titulo_alb'];
              echo "</p>";
              echo "<p class='thumb-ruby__text'>";
              echo $fila['descripcion'];
              echo "</p>";
              echo "</div>";
              echo "</a>";
              echo "</div>";
            }
            ?>
          </div>
        </div>
      </div>
      <br>
    </section>

    <!-- NOTICIAS -->
    <section id="sliderowl" class="pt-5 section section-md bg-gray-lighter text-center">
      <div class="container">
        <h1 class="text-center">
          <p class="heading-1">Noticias</p>
        </h1>
        <div class="sliderowl">
          <div class="owl-carousel">
            <?php
            $sentecia = "SELECT * FROM noticias ORDER BY id_noticias DESC LIMIT 0,4;";
            $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
            while ($fila = $resultado->fetch_assoc()) { ?>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <img src="admin/<?php echo $fila['imagen']; ?>" style="height: 300px; width: 345px; ">
                </div>
                <ul class="post-boxed__meta">
                  <li>
                    <time><?php $newDate = date("d-m-y", strtotime($fila["fecha"]));
                          echo $newDate ?></time>
                  </li>
                </ul>
                <h5 class="mb-0 text-center ">
                  <b><?php echo $fila['titulo']; ?></b>
                </h5>
                <p class="text-center p-4" style="padding: 10px 20px 10px 20px; text-align: justify;"><?php echo substr($fila['descripcion'], 0, 148); ?>...</p>
                <br>
                <a href="noticias-com-view.php?noticias=<?php echo $fila['id_noticias']; ?>"><button type="button" class="btn mb-20 btn-danger btn-block">Ver Mas <i class='fa-solid fa-trash-can'></i></button></a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <center>
        <div class="grupo">
          <div class="row">
            <div class="col">
              <a href="noticias-view.php"><button type="button" class="btn btn-primary">Ver Todas</button></a>
            </div>
          </div>
        </div>
      </center>
    </section>

    <!-- FOOTER -->
    <footer class="footer-centered section bg-gray-darker">
      <?php
      require_once('footer.php');
      ?>
    </footer>

  </div>

  <!-- JAVASCRIPT -->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>


</body>

</html>
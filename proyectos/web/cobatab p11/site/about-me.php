<?php   include "admin/conexion.php";?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
  <!-- Site Title-->
  <title>Conócenos</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/icon_p11.ico" type="image/x-icon">
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
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
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

    <!-- BANNER-->
    <?php
      $sentecia="SELECT * FROM conocenos";
      $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
      $fila=$resultado->fetch_assoc();
    ?>
    <section class="breadcrumbs-custom bg-image" style="background-image: url(admin/<?php echo $fila['banner'];?>);">
      <div class="shell">
        <h1 class="breadcrumbs-custom__title">Conócenos</h1>
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.php">Inicio</a></li>
          <li class="active">Conócenos</li>
        </ul>
      </div>
    </section>

    <!-- About Me-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50 range-sm-center range-md-left">
          <div class="cell-sm-6 cell-md-5">
            <img src="admin/<?php echo $fila['imagen'];?>" alt="" width="437" height="435" />
          </div>
          <div class="cell-sm-6 cell-md-7">
            <div class="box-width-3 box-centered">
              <article class="quote-big">
                <p class="q">MISIÓN</p>
              </article>
              <div class="divider"></div>
              <p class="text-spacing-05"><?php echo $fila['mision'];?></p>
            </div><br><br>
            <div class="box-width-3 box-centered">
              <article class="quote-big">
                <p class="q">VISIÓN</p> 
              </article>
              <div class="divider"></div>
              <p class="text-spacing-05"><?php echo $fila['vision'];?></p>
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

  <!-- JAVASCRIPT-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
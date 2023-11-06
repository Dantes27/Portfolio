<?php require_once "conexion/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en-es" class="no-js classic-page-layout " data-audio-tick="audio/tick.mp3" data-click-ripple-animation="yes">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1755cf" />

    <title>PORTAFOLIO</title>

    <!-- FAV and TOUCH ICONS -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/fonts/jost/jost.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="js/jquery.magnific-popup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/fonts/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/768.css">


    <!-- INITIAL SCRIPTS -->
    <script src="js/jquery.js"></script>
</head>



<body>
    <!-- PAGE -->
    <div id="page" class="hfeed site">
        <!-- .site-main -->
        <main id="main" class="site-main cd-main">
            <!-- site-middle -->
            <div class="site-middle">
                <div class="layout-medium">
                    <div id="primary" class="content-area">
                        <!-- site-content -->
                        <div id="content" class="site-content" role="main">
                            <!-- .page-single -->
                            <div class="page-single page-layout">
                                <!-- .hentry -->
                                <article class="page hentry">
                                    <!-- .entry-header -->
                                    <header class="entry-header">
                                        <h1 class="entry-title">Portfolio</h1>
                                    </header>
                                    <!-- .entry-header -->
                                    <!-- .entry-content -->
                                    <div class="entry-content">
                                        <!--FILTERS-->
                                        <ul id="filters" class="filters">
                                            <li class="current">
                                                <a href="#" data-filter="*">Todo</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".web">Webs</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".game">Juegos</a>
                                            </li>
                                        </ul>
                                        <!--FILTERS-->
                                        <!-- PORTFOLIO -->
                                        <div class="portfolio-items media-grid masonry" data-layout="masonry"
                                            data-item-width="360">
                                            <!-- portfolio-item -->
                                            <?php
                                                $query = "SELECT * FROM portafolio";
                                                $result = $conn->query($query) or die(mysqli_error($conn));

                                                while ($portfolio = $result->fetch_assoc()) {
                                                    // Obtenemos la primera ruta de la imagen
                                                    $ruta_imagenes = explode(", ", $portfolio['imagenes']);
                                                    if (!empty($ruta_imagenes)) {
                                                        $ruta_primera_imagen = $ruta_imagenes[0];

                                                        // Obtener el tipo de proyecto y el nombre del proyecto
                                                        $tipo_proyecto = $portfolio['tipo']; // "webs" o "games"
                                                        $nombre_proyecto = $portfolio['nombre_proyecto']; // Nombre del proyecto

                                                        // Construir la parte dinámica de la ruta
                                                        $parte_dinamica_ruta = "images/portfolio/$tipo_proyecto/$nombre_proyecto/";

                                                        // Construir la ruta completa de la primera imagen
                                                        $ruta_completa = $parte_dinamica_ruta . $ruta_primera_imagen;


                                            ?>

                                            <div class="media-cell <?php echo $portfolio['tipo']; ?> hentry">
                                                <div class="media-box">
                                                    <img style="border: 1px solid #ccc;" src="<?php echo $ruta_completa; ?>" alt="portfolio-post">
                                                    <div class="mask"></div>
                                                    <a href="portfolio-item-01.php?proyecto=<?php echo $portfolio['id_portafolio']; ?>" class="ajax"></a>
                                                </div>
                                                <div class="media-cell-desc">
                                                    <!--convertirlo a mayúsculas -->
                                                    <h3><?php echo strtoupper($portfolio['nombre_proyecto']) ; ?></h3>
                                                    <p class="category"><?php echo strtoupper($portfolio['tipo']); ?></p>
                                                </div>
                                            </div>
                                            <?php } } ?>
                                            <!-- portfolio-item -->
                                        </div>
                                        <!-- PORTFOLIO -->
                                    </div>
                                    <!-- .entry-content -->
                                </article>
                                <!-- .hentry -->
                            </div>
                            <!-- .page-single -->
                        </div>
                        <!-- site-content -->
                    </div>
                    <!-- primary -->
                </div>
                <!-- layout -->
            </div>
            <!-- site-middle -->
        </main>
        <!-- .site-main -->
        <!-- ALERT : used for contact form mail delivery alert -->
        <div class="site-alert animated"></div>
    </div>
    <!-- PAGE -->

    <a href="#" id="back-to-top" class="show">↑ <span>Scroll to top</span></a>

    <!-- SCRIPTS -->
    <script src="js/tween-max.js"></script>
    <script src="js/jquery-address.js"></script>
    <script src="js/nprogress/nprogress.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/jquery-fitvids.js"></script>
    <script src="js/jquery.magnific-popup/jquery-magnific-popup.js"></script>
    <script src="js/jquery-easing.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/resize-sensor.js"></script>
    <script src="js/jquery-sticky-sidebar.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
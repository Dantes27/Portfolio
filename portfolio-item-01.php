<?php require_once "conexion/conexion.php"; ?>
<?php require_once "filtro.php"; ?>
<!DOCTYPE html>
<html lang="en-es" class="no-js classic-page-layout " data-audio-tick="audio/tick.mp3" data-click-ripple-animation="yes">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta name="theme-color" content="#1755cf" />

    <title></title>

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
    <link rel="stylesheet" type="text/css" href="css/tower-block-game-style.css">
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
                    <!-- primary -->
                    <div id="primary" class="content-area">
                        <!-- site-content -->
                        <div id="content" class="site-content" role="main">
                            <!-- .portfolio-single -->
                            <div class="portfolio-single page-layout">
                                <!-- .hentry -->
                                <article class="hentry">
                                    <!-- .entry-header -->
                                    <header class="entry-header">
                                        <!-- PORTFOLIO-NAV -->
                                        <?php
                                        // Obtener el tipo del proyecto actual
                                        
                                        $query = "SELECT * FROM portafolio WHERE id_portafolio = " . $_GET["proyecto"];
                                        $result = $conn->query($query) or die(mysqli_error($conn));
                                        $portfolio = $result->fetch_assoc();
                                        $tipo_proyecto = $portfolio['tipo'];

                                        if (empty($portfolio)) {
                                            $tipo_proyecto = "";
                                        } else {
                                            $paginacion = array();
                                            if ($_SESSION["filtro"] == "*") {
                                                $consulta = "SELECT id_portafolio FROM portafolio ORDER BY id_portafolio ASC";
                                            } else {
                                                $consulta = "SELECT id_portafolio FROM portafolio WHERE tipo = '$tipo_proyecto' ORDER BY id_portafolio ASC";
                                            }

                                            $tipo_proyecto = $portfolio['tipo'];
                                            $res = $conn->query($consulta) or die(mysqli_error($conn));
                                            
                                            while ($pag = $res->fetch_assoc()) {
                                                $paginacion[] = $pag['id_portafolio'];
                                            }

                                            $total_resultados = $res->num_rows;
                                            $ruta = "portfolio-item-01.php?proyecto=";
                                            $posicion = array_search($_GET["proyecto"], $paginacion);

                                            if ($total_resultados >= 3) {

                                                $posicion_ultimo = count($paginacion) - 1;

                                                if ($posicion == 0) {
                                                    $prev_link = $ruta . $paginacion[$posicion_ultimo];
                                                    $next_link = $ruta . $paginacion[$posicion + 1];
                                                } else if ($posicion == $posicion_ultimo) {
                                                    $prev_link = $ruta . $paginacion[$posicion - 1];
                                                    $next_link = $ruta . $paginacion[0];
                                                } else {
                                                    $prev_link = $ruta . $paginacion[$posicion - 1];
                                                    $next_link = $ruta . $paginacion[$posicion + 1];
                                                }
                                            } else if ($total_resultados == 2) {

                                                if ($posicion == 0) {
                                                    $prev_link = $ruta . $paginacion[$posicion + 1];
                                                    $next_link = $ruta . $paginacion[$posicion + 1];
                                                } else {
                                                    $prev_link = $ruta . $paginacion[$posicion - 1];
                                                    $next_link = $ruta . $paginacion[$posicion - 1];
                                                }
                                            } else if ($total_resultados == 1) {

                                                $prev_link = $ruta . $paginacion[$posicion];
                                                $next_link = $ruta . $paginacion[$posicion];
                                            }
                                        }

                                        ?>

                                        <!-- PORTFOLIO-NAV -->
                                        <div class="portfolio-nav">
                                            <span class="prev ajax"><a
                                                    href="<?php echo $prev_link; ?>">Anterior</a></span>
                                            <span class="back"><a href="#/portfolio">Cerrra</a></span>
                                            <span class="next ajax"><a
                                                    href="<?php echo $next_link; ?>">Siguente</a></span>
                                        </div>
                                        <!-- PORTFOLIO-NAV -->

                                        <!-- PORTFOLIO-NAV -->
                                        <!-- TITLE -->

                                        <!-- TITLE -->
                                    </header>
                                    <!-- .entry-header -->
                                    <!-- .entry-content -->


                                    <?php


                                    $query = "SELECT * FROM portafolio WHERE id_portafolio = " . $_GET["proyecto"];
                                    $result = $conn->query($query) or die(mysqli_error($conn));
                                    $portfolio = $result->fetch_assoc();

                                    if (empty($portfolio)) {
                                        echo "Hola";
                                    } else { ?>

                                    <h1 class="entry-title"><?php echo strtoupper($portfolio['nombre_proyecto']); ?></h1>

                                    <div class="entry-content">
                                        <!-- .portfolio-desc -->
                                        <div class="portfolio-desc">
                                            <p style="text-align: justify;"><?php echo $portfolio['descripcion']; ?></p>
                                            <div class="portfolio-meta">
                                                <span><strong>Cliente</strong><?php echo $portfolio['cliente']; ?></span>
                                                <span><strong>Fecha</strong><?php $newDate = date("d-m-y", strtotime($portfolio["fecha"]));
                                                                                echo $newDate ?></span>
                                                <span><strong>Servicio</strong><?php echo $portfolio['servicio']; ?></span>
                                            </div>
                                            <p>
                                                <a href="<?php echo $portfolio['url']; ?>" target="_blank"
                                                    class="button primary">VER PROJECTO</a>
                                            </p>
                                        </div>
                                        <!-- .portfolio-desc -->

                                        <?php
                                            
                                            $query = "SELECT * FROM portafolio WHERE id_portafolio = " . $_GET["proyecto"];
                                            $resultado = mysqli_query($conn, $query);
                                            $portfolio = mysqli_fetch_assoc($resultado);
                                            
                                            if (isset($portfolio['imagenes'])) {
                                                $rutas_imagenes = explode(", ", $portfolio['imagenes']);
                                                
                                                foreach ($rutas_imagenes as $ruta) {
                                                    $partes_ruta = explode("/", $ruta); // Dividir la ruta en partes
                                                    
                                                    // Obtener el tipo de proyecto y el nombre del proyecto
                                                    $tipo_proyecto = $portfolio['tipo']; // "webs" o "games"
                                                    $nombre_proyecto = $portfolio['nombre_proyecto']; // Nombre del proyecto
                                                    
                                                    // Construir la parte dinámica de la ruta
                                                    $parte_dinamica_ruta = "images/portfolio/$tipo_proyecto/$nombre_proyecto/";
                                                    
                                                    // Combinar la parte fija, parte dinámica y nombre de archivo
                                                    $ruta_completa = $parte_dinamica_ruta . end($partes_ruta);
                                                    
                                                    echo '<p>';
                                                    echo '<img style="border: 1px solid #ccc;" src="' . $ruta_completa . '">';
                                                    echo '</p>';
                                                }
                                            } else {
                                                echo '<p>No se encontraron imágenes para este proyecto.</p>';
                                            }
                                            
                                            ?>
                                    </div>
                                    <?php } ?>
                                    <!-- .entry-content -->
                                </article>
                                <!-- .hentry -->
                            </div>
                            <!-- .portfolio-single -->
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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
    <script src="js/tower-blocks-game-script.js"></script>
</body>

</html>

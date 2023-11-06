<?php include('admin/conexion.php'); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
    <!-- TITULO-->
    <title>Capacitación Administracion</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- ICON -->
    <link rel="icon" href="images/icon_p11.ico" type="image/x-icon">
    <!-- STYLE-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
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
    <!-- NAVEGADOR DESACTUALIZADO -->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="Está utilizando un navegador obsoleto. Para una experiencia de navegación más rápida y segura, actualizalo"></a>
    </div>

    <!-- PAGINA -->
    <div class="page">

        <!-- HEADER -->
        <header class="section page-header">
            <?php
                require_once('header.php');
            ?>
        </header>

        <!-- BANNER -->
        <?php
            $consulta="SELECT * FROM capacitaciones_series WHERE id_capacitaciones_series = ".$_GET["capacitacion_serie"];
            $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
            $fila=$resultado->fetch_assoc();
        ?>
        <section class="breadcrumbs-custom bg-image" style="background-image: url(admin/<?php echo $fila['banner_url'];?>);">
            <div class="shell">
                <h1 class="breadcrumbs-custom__title"><?php echo $fila['titulo'];?></h1>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Capacitaciones y Series</li>
                </ul>
            </div>
        </section>

        <!-- INFO CAPACITACION -->
        <section class="section section-md bg-white">
            <div class="shell">
                <div class="range range-50 range-sm-center range-md-left">
                    <div class="cell-sm-6 cell-md-5">
                        <div class="thumb-bordered"><img src="admin/<?php echo $fila['imagen_url'];?>" alt="" width="437" height="435" />
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-7">
                        <div class="box-width-3 box-centered">
                            <article class="quote-big">
                                <p class="q">Misión</p>
                            </article>
                            <div class="divider"></div>
                            <p class="text-spacing-05 text-justify"><?php echo $fila['mision'];?></p>
                        </div>
                        <br>
                        <div class="box-width-3 box-centered">
                            <article class="quote-big">
                                <p class="q">Visión</p>
                            </article>
                            <div class="divider"></div>
                            <p class="text-spacing-05 text-justify"><?php echo $fila['vision'];?></p>
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

    <!-- SALIDA DE FORMULARIO DE CORREO GLOBAL -->
    <div class="snackbars" id="form-output-global"></div>
    <!-- JAVASCRIPT -->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
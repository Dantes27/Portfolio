<?php
include('admin/conexion.php');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
    <!-- TITULO-->
    <title>Inicio</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon_logo.ico" type="image/x-icon">
    <!-- STYLES-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CSS-->
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

        .heading {
            color: #444;
            font-size: 40px;
            text-align: center;
            padding: 10px;
        }

        hr.rounded {
            border-top: 8px solid #bbb;
            border-radius: 5px;
            weight: 80%;
        }

        .divider {
            width: 75%;
            background: #212121;
        }
                /* Float four columns side by side */
        .column {
        float: left;
        width: 25%;
        padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding in columns */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Style the counter cards */
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
        }

        /* Responsive columns - one column layout (vertical) on small screens */
        @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
        }
    </style>
</head>

<body>
    <!-- NAV DESACTUALIZADO -->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="Está utilizando un navegador obsoleto. Para una experiencia de navegación más rápida y segura, actualicelo gratis"></a>
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

        <!-- NOTICIAS -->
        <?php
            $consulta="SELECT * FROM noticias WHERE id_noticias = ".$_GET["noticias"];
            $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
            $fila=$resultado->fetch_assoc();
        ?>
        <section id="sliderowl" class="pt-5 section section-md bg-gray-lighter text-center">
            <div class="container">
                    <p class="heading-1">Noticias</p>
                    <center>
                        <img src="admin/<?php echo $fila['imagen']; ?>" style="height: 350px; width: 400px;">
                        <br>
                        <time><?php $newDate = date("d-m-y", strtotime($fila["fecha"])); echo $newDate?></time>
                        <br>
                        <b><?php echo $fila['titulo']; ?></b>
                        <br>
                        <p class="text-center p-4 noticep" style="padding: 10px 20px 10px 20px; text-align: justify;"><?php echo $fila['descripcion']; ?></p>
                        <br>
                    </center>
            </div>
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

</body>

</html>
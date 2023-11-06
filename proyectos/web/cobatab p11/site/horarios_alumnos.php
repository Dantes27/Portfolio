<?php include('admin/conexion.php') ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
    <!-- TITULOS -->
    <title>Horario Alumnos</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- ICON -->
    <link rel="icon" href="images/icon_p11.ico" type="image/x-icon">
    <!-- STYLES -->
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

        .divider {
            width: 75%;
            background: #212121;
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
    <!-- Page-->
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
                <h1 class="breadcrumbs-custom__title">Horarios Alumnos <i class="fa-solid fa-calendar-days"></i></h1>
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Horarios Alumnos</li>
                </ul>
            </div>
        </section>




        <section>
            <center>
                <div class="container">
                    <h1 class="text-center">
                        <br>
                        <p class="heading-1">Turno Matutino</p>
                    </h1>
                </div>

                <div class="space">
                    <?php
                        $sentecia="SELECT `turno`, `grado_grupo`, `horario_pdf` FROM `horarios_alumnos` WHERE turno = 'matutino'";
                        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                        while($fila=$resultado->fetch_assoc()){
                            echo "<div class='first'>";
                                echo "<a  target='_blank' href='admin/".$fila['horario_pdf']."'>"; echo"<button class='btn button-primary'>"; echo $fila['grado_grupo']; echo "</button>"; echo"</a>";
                            echo "</div>";
                        }
                    ?>
                </div>

                <ul>
                    <li class="divider"></li>
                </ul>

                <div class="space">
                    <div class="container">
                        <h1 class="text-center">
                            <br>
                            <p class="heading-1">Turno Vespertino</p>
                        </h1>
                    </div>
                    <?php
                        $sentecia="SELECT `turno`, `grado_grupo`, `horario_pdf` FROM `horarios_alumnos` WHERE turno = 'vespertino'";
                        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                        while($fila=$resultado->fetch_assoc()){
                            echo "<div class='first'>";
                                echo "<a  target='_blank' href='admin/".$fila['horario_pdf']."'>"; echo"<button class='btn button-primary'>"; echo $fila['grado_grupo']; echo "</button>"; echo"</a>";
                            echo "</div>";
                        }
                    ?>
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
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
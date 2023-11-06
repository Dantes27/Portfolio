<?php
include('admin/conexion.php');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
    <!-- TITULO-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Inicio</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon_logo.ico" type="image/x-icon">
    <!-- STYLES-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
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

        .main {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            font-weight: 400;
            text-align: center;
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: white;
        }

        .card_title {
            color: black;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: black;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- NAV DESACTUALIZADO -->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="Está utilizando un navegador obsoleto. Para una experiencia de navegación más rápida y segura, actualicelo gratis"></a>
    </div>

    <!-- PANTALLA DE CARGA 
    <div id="page-loader">
        <?php
        //include_once "preloaderr.php";
        ?>
    </div> -->

    <!-- PAGINA -->
    <div class="page">
        <!-- HEADER -->
        <header class="section page-header">
            <?php
            require_once('header.php');
            ?>
        </header>






        <div class="main">
            <h1>
                <p class="heading-1">Noticias</p>
            </h1><br>
            <form method="post" name="formFechas" id="formFechas">
                De: <input type="date" name="fecha_de" id="fecha_de" required> A:
                <input type="date" name="fecha_a" id="fecha_a" required>
                <input type="hidden" id="form_sent" name="form_sent" value="true">
                <span id="buscars" name="buscars" class="btn btn-primary">Buscar</span>
            </form><br>

            <section id="tabla_resultado" class="main wow animate__animated animate__zoomIn" data-wow-delay=".2s">
                <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
            </section>

            <div id="stop">
                <ul class="cards">
                    <?php
                    $sentecia = "SELECT * FROM noticias WHERE YEAR(fecha) = YEAR(NOW())";
                    $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
                    while ($fila = $resultado->fetch_assoc()) { ?>
                        <li class="cards_item wow animate__animated animate__zoomIn" data-wow-delay=".2s">
                            <div class="card">
                                <center>
                                    <div class="card_image"><img src="admin/<?php echo $fila['imagen']; ?>" style="height: 300px; width: 345px; "></div>
                                    <div class="card_content">
                                        <time><?php $newDate = date("d-m-y", strtotime($fila["fecha"])); echo $newDate ?></time>
                                        <h5 class="mb-0 text-center "><b><?php echo $fila['titulo']; ?></b></h5>
                                        <p class="card_text"><?php echo substr($fila['descripcion'], 0, 148); ?>...</p>
                                        <a href="noticias-com-view.php?noticias=<?php echo $fila['id_noticias']; ?>"><button type="button" class="btn mb-20 btn-danger btn-block">Ver Mas <i class='fa-solid fa-trash-can'></i></button></a>
                                    </div>
                                </center>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

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
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#buscars').click(function() {
                datos = $('#formFechas').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "fechas.php",
                    success: function(data) {
                        $('#tabla_resultado').html('');
                        $('#tabla_resultado').append(data);
                        $('#stop').html('');
                    }
                });
            });
        });
    </script>

</body>

</html>
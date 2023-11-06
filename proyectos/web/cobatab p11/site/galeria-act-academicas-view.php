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

        .grid-gallery {
            display: grid;
            grid-auto-rows: 200px;
            gap: 1rem;
            grid-auto-flow: row dense;
            margin-left: 10px;
            margin-bottom: 10px;
            margin-right: 10px;
            margin-top:10px;
        }

        @media all and (min-width: 320px) {
            .grid-gallery {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        @media all and (min-width: 768px) {
            .grid-gallery {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media all and (min-width: 1024px) {
            .grid-gallery {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        .grid-gallery__item:nth-child(11n+1) {
            grid-column: span 1;
        }

        .grid-gallery__item:nth-child(11n+4) {
            grid-column: span 2;
            grid-row: span 1;
        }

        .grid-gallery__item:nth-child(11n+6) {
            grid-column: span 3;
            grid-row: span 1;
        }

        .grid-gallery__item:nth-child(11n+7) {
            grid-column: span 1;
            grid-row: span 2;
        }

        .grid-gallery__item:nth-child(11n+8) {
            grid-column: span 2;
            grid-row: span 2;
        }

        .grid-gallery__item:nth-child(11n+9) {
            grid-row: span 3;
        }

        .grid-gallery__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        body{
            background: #eee;
        }

        .heading{
            color: #444;
            font-size: 40px;
            text-align: center;
            padding: 10px;
        }

        .pantro{
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 15px;
            align-items: flex-start;
            padding: 5px, 5%;
            padding-bottom:10px;
            margin: 10px;
        }

        .pantro .main-video{
            background: #fff;
            border-radius: 5px;
            padding: 10px;
        }

        .pantro .main-video video{
            width: 100%;
            border-radius: 5px;
        }

        .pantro .main-video .title{
            color: #333;
            font-size: 23px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .pantro .video-list{
            background: #fff;
            border-radius: 5px;
            height: 638px;
            overflow-y: scroll;
        }

        .pantro .video-list::-webkit-scrollbar{
            width: 7px;
        }

        .pantro .video-list::-webkit-scrollbar-track{
            background: #ccc;
            border-radius: 50px;
        }

        .pantro .video-list::-webkit-scrollbar-thumb{
            background: #666;
            border-radius: 50px;
        }

        .pantro .video-list .vid video{
            width: 100px;
            border-radius: 5px;
        }

        .pantro .video-list .vid{
            display: flex;
            align-items: center;
            gap: 15px;
            background: #f7f7f7;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            border:  1px solid rgba(0,0,0,.1);
            cursor: pointer;
        }

        .pantro .video-list .vid:hover{
            background: #eee;
        }

        .pantro .video-list .vid.active{
            background: #2980b9; /*modificar*/
        }

        .pantro .video-list .vid.active .title{
            color: #fff;
        }

        .pantro .video-list .vid  .title{
            color: #333;
            font-size: 17px;
        }

        @media (max-width:991px){

            .pantro{
                grid-template-columns: 1.5fr 1fr;
                padding: 10px;
            }

        }

        @media (max-width:768px){

            .pantro{
                grid-template-columns: 1fr;
                padding: 10px;
            }

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

        <!-- ALBUM -->
        <br>
        <center><p class="heading-1">Imagenes</p></center>
        <div class="grid-gallery" data-isotope-group="gallery" data-lightgallery="group">
        
            <?php
            $consulta="SELECT * FROM fotos WHERE foto_album_id = ".$_GET["album"];
            $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
            while($fila=$resultado->fetch_assoc())
            {
                echo "<a class='grid-gallery__item' href='admin/".$fila['foto_url']."' data-lightgallery='item'>";
                    echo "<img class='grid-gallery__image' src='admin/".$fila['foto_url']."'>";
                echo "</a>";
            }
            ?>
        </div>
        <br><br>


        <!-- VIDEOS -->
        <center>
            <ul>
                <li class="divider"></li>
            </ul>
        </center>
        <br><br><br>
        <center><p class="heading-1">Videos</p></center>
        <div class="pantro">

            <div class="main-video">
                <div class="video">
                    <video src="" controls muted autoplay></video>
                    <h3 class="title"></h3>
                </div>
            </div>

            <div class="video-list">
                <!--<div class="vid active">
                    <video src="images/2022-03-24 11-18-05.mp4" muted></video>
                    <h3 class="title">01. video titulo</h3>
                </div>-->
                <?php
                    $sentecia="SELECT * FROM videos";
                    $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                    while($fila=$resultado->fetch_assoc()){?>
                        <div class="vid">
                            <video src="admin/<?php echo $fila['video'];?>" muted></video>
                            <h3 class="title"><?php echo $fila['titulo'];?></h3>
                        </div>
                <?php }?>
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
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title');

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    title.innerHTML = text;
                };
            };
        });
    </script>

</body>

</html>
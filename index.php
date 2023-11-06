<?php require_once "conexion/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en-es" class="no-js one-page-layout sound-effects" data-audio-tick="audio/tick.mp3"
    data-click-ripple-animation="yes">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1755cf" />

    <title>Abraham Alayon</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/fonts/jost/jost.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" rel="stylesheet">

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
    <script src="library/particles-loader.js"></script>

    <!-- InstanceBeginEditable name="head" -->
    <link rel="stylesheet" type="text/css" href="css/demo3.css">
    <!-- InstanceEndEditable -->
    <!-- InstanceParam name="OnePageLayout" type="boolean" value="true" -->
    <!-- InstanceParam name="SoundEffects" type="boolean" value="true" -->
    <!-- InstanceParam name="Sidebar" type="boolean" value="false" -->
    <!-- InstanceParam name="PageDefault" type="boolean" value="false" -->
    <!-- InstanceParam name="PageFixed" type="boolean" value="false" -->
    <!-- InstanceParam name="PageFull" type="boolean" value="false" -->
    <!-- InstanceParam name="PagePlain" type="boolean" value="true" -->
    <!-- InstanceParam name="ClassicMenu" type="boolean" value="false" -->

</head>

<body>
    <!-- InstanceBeginEditable name="OnePageContent" -->
    <!-- .home-wrap -->
    <div class="home-wrap">


        <!-- HOME BG IMAGE -->
        <div class="home-bg" id="particles-js"></div><!-- style="background-image: url(images/home/pexels.jpg)" -->
        <!-- HOME BG IMAGE -->

        <!-- HOME BG LOGO -->
        <div class="home-bg-logo">
            <img src="images/home/icon-bg3.svg" alt="icon" />
        </div>
        <!-- HOME BG LOGO -->

        <!-- .home-menu -->
        <nav class="home-menu">
            <a href="portfolio.php" data-slug="portfolio" id="portfolio-link">
                <span class="item-name">Portfolio</span>
            </a>
            <a href="contact.php" data-slug="contact">
                <span class="item-name">Contacto</span>
            </a>
            <a href="resume.php" data-slug="resume">
                <span class="item-name">Resume</span>
            </a>
            </a>

        </nav>
        <!-- .home-menu -->

        <!-- .home-heading -->
        <div class="home-heading">

            <!-- .home-logo -->
            <div class="home-logo">

                <p class="home-job-title">SOFTWARE DEVELOPER</p>

                <p class="home-marquee">
                    Creación de sitios web creativos para la gente del mundo. Siempre en busca
                    de la gran experiencia de usuario.
                    Creación de sitios web creativos para la gente del mundo. Siempre en busca
                    de la gran experiencia de usuario.
                </p>

                <i class="home-logo-left "><span>Software</span></i>
                <i class="home-logo-center">
                    <span class="home-icon">
                        <img src="images/home/icon3.svg" alt="icon" />
                    </span>
                    <span class="home-text-container">
                        <span class="home-text-container-placeholder">Abraham Alayon</span>
                    </span>
                    <span class="home-text">Abraham Alayon</span>
                </i>
                <i class="home-logo-right"><span>Developer</span></i>

            </div>
            <!-- .home-logo -->

        </div>
        <!-- .home-heading -->

        <!-- .home-social -->
        <p class="home-social">
            <a class="social-link facebook" target="_blank" href="https://www.facebook.com/abraham.alayon.35/"></a>
            <a class="social-link instagram" target="_blank" href="https://www.instagram.com/abraham_alayon/"></a>
            <!--  <a class="social-link twitter" target="_blank" href="#"></a> -->
            <!-- <a class="social-link spotify" target="_blank" href="#"></a> -->
            <a class="social-link email" target="_blank" href="mailto:abraham.alayon27@.com"></a>
        </p>
        <!-- .home-social -->

        <!-- FULL SCREEN TOGGLE -->
        <div class="full-screen-wrap">
            <div class="top-left"></div>
            <div class="top-left-horiz"></div>
            <div class="top-right"></div>
            <div class="top-right-horiz"></div>
            <div class="bottom-left"></div>
            <div class="bottom-left-horiz"></div>
            <div class="bottom-right"></div>
            <div class="bottom-right-horiz"></div>
        </div>
        <!-- FULL SCREEN TOGGLE -->
        <!-- REMOVE THIS MARKUP TO DISABLE BG AUDIO -->

        <div class="bg-music-confirm">
            <p>Autoplay Music?</p>
            <p><a class="bg-music-yes">Yeah!</a> <a class="bg-music-no">Nope</a> </p>
        </div>

        <!-- HOME BG MUSIC -->
        <div id="play-music" class="play-music autoplay">
            <div id="music-animation" class="music-animation">
                <span class="music-bar bar1"></span>
                <span class="music-bar bar2"></span>
                <span class="music-bar bar3"></span>
                <span class="music-bar bar4"></span>
                <span class="music-bar bar5"></span>
            </div>
            <div class="music-toggle" id="music-toggle"><a id="toggle" data-on-text="Music on"
                    data-off-text="Music off">Music off</a></div>
        </div>

        <audio id="bg-music" loop src="audio/music1.mp3"></audio>
        <!-- HOME BG MUSIC -->

        <!-- REMOVE THIS MARKUP TO DISABLE BG AUDIO -->
    </div>
    <!-- .home-wrap -->

    <!-- .one-page-content-->
    <div class="one-page-content">

        <a href="/" class="close-page">
            <span class="close-text"></span>
        </a>

        <div class="content-wrap"></div>

    </div>
    <!-- .one-page-content-->


    <!-- page transition overlays -->
    <div class="overlay overlay-1"></div>
    <div class="overlay overlay-2"></div>
    <!-- page transition overlays -->

    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="Body-End-Content" -->
    <!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
    <div class="p-overlay"></div>
    <div class="p-overlay"></div>
    <!-- InstanceEndEditable -->
    <!-- SCRIPTS -->
    <script src="library/particles.js-master/particles.min.js"></script>
    <script src="library/particles.js-master/particles.js"></script>
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
<!-- InstanceEnd -->

</html>
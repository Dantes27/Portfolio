<?php require_once "conexion/conexion.php"; ?>
<?php
$query = "SELECT * FROM contacto";
$result = $conn->query($query) or die(mysqli_error($conn));
$contacto = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en-es" class="no-js classic-page-layout " data-audio-tick="audio/tick.mp3"
    data-click-ripple-animation="yes">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1755cf" />
    <!-- TITULO -->
    <title>CONTACTO</title>
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
            <!-- HEADER -->
            <header id="masthead" class="header" role="banner">
                <!-- header-wrap -->
                <div class="header-wrap layout-full">
                    <img src="images/home/pexels.jpg" alt="profile-image">
                    <!-- HOME BG LOGO -->
                    <div class="home-bg-logo">
                        <img src="images/home/icon-bg2.svg" alt="icon" />
                    </div>
                    <!-- HOME BG LOGO -->
                    <!-- header-social -->
                    <div class="header-bottom">
                        <a class="social-link facebook" href="#"></a>
                        <a class="social-link twitter" href="#"></a>
                        <a class="social-link linkedin" href="#"></a>
                        <a class="social-link instagram" href="#"></a>
                    </div>
                    <!-- header-social -->

                </div>
                <!-- header-wrap -->
            </header>
            <!-- HEADER -->
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
                                        <h1 class="entry-title">Contacto</h1>
                                    </header>
                                    <!-- .entry-header -->
                                    <!-- .entry-content -->
                                    <div class="entry-content">
                                        <div class="boxed">
                                            <div class="row">
                                                <!-- Column 1 -->
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <div class="fun-fact text-center">
                                                        <img src="images/site/icon-location.svg" alt="image" />
                                                        <h4><?php echo $contacto['direccion']; ?></h4>
                                                    </div>
                                                </div>

                                                <!-- Column 2 -->
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <div class="fun-fact text-center">
                                                        <img src="images/site/icon-phone.svg" alt="image" />
                                                        <h4>Tel : <?php echo $contacto['telefono']; ?></h4>
                                                    </div>
                                                </div>

                                                <!-- Column 3 -->
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <div class="fun-fact text-center">
                                                        <img src="images/site/icon-mail.svg" alt="image" />
                                                        <h4><?php echo $contacto['correo']; ?></h4>
                                                    </div>
                                                </div>

                                                <!-- Column 4 -->
                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                    <div class="fun-fact text-center">
                                                        <img src="images/site/icon-check.svg" alt="image" />
                                                        <h4>Disponible</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <!-- SCROLL -->
    <a href="#" id="back-to-top" class="show">↑ <span>Arriva</span></a>
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
<?php require_once "controllerUserData.php";?>
<?php
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    if ($email != false && $password != false) {
        $sql = "SELECT * FROM usertable WHERE email = '$email'";
        $run_Sql = mysqli_query($conexion, $sql);
        if ($run_Sql) {
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $status = $fetch_info['status'];
            $code = $fetch_info['code'];
            if ($status == "verified") {
                if ($code != 0) {
                    header('Location: reset-code.php');
                }
            } else {
                header('Location: user-otp.php');
            }
        }
    } else {
        header('Location: login-user.php');
    }
?>
<!DOCTYPE html>
<html lang="en-es">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Calendario Escolar</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
    <link rel="stylesheet" href="../fonts/fontawesome-free-6.1.1-web/css/all.css">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
    <style>
        .container {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
</style>
</head>

<body>

    <div class="header">
        <?php
			include_once "header.php";
		?>
    </div>
    <div class="left-side-bar">
        <?php
			include_once "sidebar.php";
		?>
    </div>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-dark h4">CALENDARIO ESCOLAR</h4><br>
                            <!--<p>Recomendaciones:</p>-->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id alumnos</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Pdf Url</th>
                                    <th scope="col">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $consulta="SELECT * FROM alumnos WHERE id_alumnos = 2";
                                    $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
                                    while($fila=$resultado->fetch_assoc())
                                    {
                                        echo "<tr>";
                                            echo "<td>"; echo $fila['id_alumnos']; echo "</td>";
                                            echo "<td>"; echo $fila['titulo']; echo "</td>";
                                            echo "<td>"; echo $fila['url_pdf']; echo "</td>";
                                            echo "<td><a href='actualizar-calendario-escolar-view.php?id_alumnos=".$fila['id_alumnos']."'> <button type='button' class='btn btn-success'><i class='fa-solid fa-pen-to-square'></i></button></a></td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                        <?php
                            $consulta="SELECT * FROM alumnos WHERE id_alumnos = 2";
                            $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
                            $fila=$resultado->fetch_assoc();
                            echo "<br>";
                            echo "<div class='container'>";
                                echo "<iframe class='responsive-iframe' scrolling='no' src='".$fila['url_pdf']."' frameborder='0'  style='width: px ;'>"; echo"</iframe>"; 
                            echo "</div>";
                        ?>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>

</body>

</html>



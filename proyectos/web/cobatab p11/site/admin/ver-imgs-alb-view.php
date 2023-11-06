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
    <title>Imagenes</title>
    <?php
		include_once "head.php";
	?>
    <link rel="stylesheet" type="text/css" href="vendors/plugins/sweetalert2/sweetalert2.css">
    <style>
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
				<div class="row clearfix">

                    <?php
                        $consulta="SELECT * FROM fotos WHERE foto_album_id = ".$_GET["album"];
                        $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
                        while($fila=$resultado->fetch_assoc())
                        {?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                                <div class="pd-20 card-box text-center height-30-p">
                                        <img src="<?php echo $fila['foto_url'];?>" style="height: 250px; width: 250px; object-fit: cover;">
                                        <br><br>
                                    <div class="max-width-200 mx-auto">
                                        <a href='eliminar-img-alb.php?id_fotos=<?php echo $fila['id_fotos'];?>'><button type="button" class="btn mb-20 btn-danger btn-block">Eliminar <i class='fa-solid fa-trash-can'></i></button></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
				</div>
			</div>
            <br><br>
		</div>
	</div>



    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <!-- ALERT -->
    <script src="vendors/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="vendors/plugins/sweetalert2/sweet-alert.init.js"></script>

</body>

</html>
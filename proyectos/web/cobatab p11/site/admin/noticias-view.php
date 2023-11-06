<?php require_once "controllerUserData.php"; ?>
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
    <title>Noticias</title>
    <?php
    include_once "head.php";
    ?>
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
                            <h4 class="text-dark h4">NOTICIAS <a href="agregar-noticias-view.php"> <button type="button" class="btn btn-info">Agregar <i class="fa-solid fa-plus"></i></button> </a></h4>
                            <!--<p>Recomendaciones:</p>-->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID Noticia</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha dd/mm/yy</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //$consulta="SELECT * FROM noticias";
                                $consulta = "SELECT * FROM noticias WHERE id_noticias ORDER BY id_noticias DESC";
                                $resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                        echo "<td>"; echo $fila['id_noticias']; echo "</td>";
                                        echo "<td>"; echo $fila['titulo']; echo "</td>";
                                        echo "<td style='text-align: justify;'>"; echo substr($fila['descripcion'], 0, 200); echo "</td>";
                                        echo "<td>"; $newDate = date("d-m-y", strtotime($fila["fecha"])); echo $newDate; echo "</td>";
                                        echo "<td>"; echo "<img src='" . $fila['imagen'] . "' width='50' >"; echo "</td>";
                                        echo "<td><a href='actualizar-noticias-view.php?id_noticias=" . $fila['id_noticias'] . "'> <button type='button' class='btn btn-success'><i class='fa-solid fa-pen-to-square'></i></button></a></td>";
                                        echo "<td><a href='eliminar-noticias.php?id_noticias=" . $fila['id_noticias'] . "'> <button type='button' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button></a></td>";
                                    echo "</tr>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
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
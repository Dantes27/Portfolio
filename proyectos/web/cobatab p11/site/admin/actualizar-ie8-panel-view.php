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

<?php
    $consulta=ActualizarIe8Panel($_GET['id_ie8_panel']);
    function ActualizarIe8Panel( $id_ie8_panel )
    {
        $email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
            include 'conexion.php';
            $sentencia="SELECT * FROM ie8_panel WHERE id_ie8_panel='".$id_ie8_panel."' ";
            $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
            $fila=$resultado->fetch_assoc();
            return [
                $fila['id_ie8_panel'], //0
                $fila['logo'], //1
                $fila['nombre_plantel'], //2
                $fila['img_preloader'] // 3
            ];
		}
    }
?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <title>Actualizar</title>
    <?php
    include 'head-formularios.php';
    ?>
</head>

<body>
    <form action="actualizar-ie8-panel.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Ie8 Panel <i class="fa-solid fa-pen-to-square"></i></h1>
                <input type="hidden" name="id_ie8_panel" value="<?php echo $_GET['id_ie8_panel']?>" required><span class="barra"></span>
                <div class="grupo">
                    <div class="input-group mb-3"  style="padding-top: 10px">
                        <input  type="file" name="file1" id="file1" value="<?php echo $consulta[1] ?>" class="form-control">
                        <label>Logo Pagina</label>
                    </div>
                </div>
                <div class="grupo">
                    <input type="text"  name="nombre_plantel" value="<?php echo $consulta[2] ?>" required><span class="barra"></span>
                    <label>No Plantel</label>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3"  style="padding-top: 10px">
                        <input  type="file" name="file2" id="file2" value="<?php echo $consulta[3] ?>" class="form-control">
                        <label>Imagen Preloader</label>
                    </div>
                </div>
                <center>
                    <div class="grupo">
                        <div class="row">
                            <div class="col">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                    <a href="ie8-panel-view.php">Volver</a>
                </center>
            </div>
    </form>
<script>
    $("#file-1").fileinput({
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any"
    });
</script>
</body>

</html>
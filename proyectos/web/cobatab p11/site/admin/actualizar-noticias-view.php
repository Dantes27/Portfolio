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
    $consulta=ActualizarNoticias($_GET['id_noticias']);
    function ActualizarNoticias( $id_noticias )
    {
        $email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
            include 'conexion.php';
            $sentencia="SELECT * FROM noticias WHERE id_noticias='".$id_noticias."' ";
            $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
            $fila=$resultado->fetch_assoc();
            return [
                $fila['id_noticias'], //0
                $fila['titulo'], //1
                $fila['descripcion'], //2
                $fila['fecha'] //3
            ];
		}
    }
?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <title> Actualizar Noticias</title>
    <?php
    include 'head-formularios.php';
    ?>
</head>

<body>
    <form action="actualizar-noticias.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Noticias <i class="fa-solid fa-pen-to-square"></i></h1>
                <input type="hidden" name="id_noticias" value="<?php echo $_GET['id_noticias']?>" required><span class="barra"></span>
                <div class="grupo">
                    <input type="text"  name="titulo" value="<?php echo $consulta[1] ?>" required><span class="barra"></span>
                    <label>Titulo</label>
                </div>
                <div class="grupo">
                    <input type="text" value="<?php echo $consulta[2] ?>" name="descripcion"><span class="barra"></span>
                    <label>Descripción</label>
                </div>
                <div class="grupo">
                    <input type="date" value="<?php echo $consulta[3] ?>" name="fecha"><span class="barra"></span>
                    <label>Fecha</label>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input  type="file" name="file1" id="file1" class="form-control">
                        <label>Imagen </label>
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
                    <a href="noticias-view.php">Volver</a>
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
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
    $consulta=ActualizarActAcademicas($_GET['id_act_academicas']);
    function ActualizarActAcademicas( $id_act_academicas )
    {
        $email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
            include 'conexion.php';
            $sentencia="SELECT * FROM act_academicas WHERE id_act_academicas='".$id_act_academicas."' ";
            $resultado= $conexion->query($sentencia) or die ("Error al consultar".mysqli_error($conexion)); 
            $fila=$resultado->fetch_assoc();
            return [
                $fila['id_act_academicas'], //0
                $fila['titulo_alb'], //1
                $fila['descripcion'], //2
                $fila['imagen'] // 3
            ];
		}
    }
?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <title>Actualizar Act Academica</title>
    <?php
    include 'head-formularios.php' 
    ?>
</head>

<body>
    <form action="actualizar-act-academicas.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Act Academicas <i class="fa-solid fa-pen-to-square"></i></h1>
                <input type="hidden" name="id_act_academicas" value="<?php echo $_GET['id_act_academicas']?>" required><span class="barra"></span>
                <div class="grupo">
                    <input type="text"  name="titulo_alb" value="<?php echo $consulta[1] ?>" required><span class="barra"></span>
                    <label>Titulo Album</label>
                </div>
                <div class="grupo">
                    <input type="text" value="<?php echo $consulta[2] ?>" name="descripcion"><span class="barra"></span>
                    <label>Descripción (Opcional)</label>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input  type="file" name="file1" id="file1" value="<?php echo $consulta[3] ?>" class="form-control">
                        <label>Imagen</label>
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
                    <a href="actividades-academicas-view.php">Volver</a>
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
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
    $consulta=ActualizarAdm($_GET['id']);
    function ActualizarAdm( $id )
    {
        $email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
            include 'conexion.php';
            $sentencia="SELECT * FROM usertable WHERE id='".$id."' ";
            $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
            $fila=$resultado->fetch_assoc();
            return [
                $fila['id'], //0
                $fila['name'], //1
                $fila['email'], //2
                $fila['password'] //3
            ];
		}
    }
?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <title> Actualizar Carousel</title>
    <?php
    include 'head-formularios.php';
    ?>
</head>

<body>
    <form action="actualizar-adm.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Administrador <i class="fa-solid fa-pen-to-square"></i></h1>
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>" required><span class="barra"></span>
                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input  type="file" name="file1" id="file1" class="form-control">
                        <label>Foto De Perfil</label>
                    </div>
                </div>
                <div class="grupo">
                    <input type="text"  name="name" value="<?php echo $consulta[1] ?>" required><span class="barra"></span>
                    <label>Nombre</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" value="<?php echo $consulta[2] ?>"><span class="barra"></span>
                    <label>Correo</label>
                </div>
                <div class="grupo">
                    <input type="password" name="password" value="<?php echo $consulta[3] ?>"><span class="barra"></span>
                    <label>Contraseña</label>
                </div>
                <center>
                    <div class="grupo">
                        <div class="row">
                            <div class="col">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                    <a href="javascript: window.history.back(); ">Volver</a>
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
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
    $consulta=ActualizarCapSerie($_GET['id_capacitaciones_series']);
    function ActualizarCapSerie( $id_capacitaciones_series )
    {
        $email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
            include 'conexion.php';
            $sentencia="SELECT * FROM capacitaciones_series WHERE id_capacitaciones_series='".$id_capacitaciones_series."' ";
            $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion));
            $fila=$resultado->fetch_assoc();
            return [
                $fila['id_capacitaciones_series'], //0
                $fila['nombre'], //1
                $fila['titulo'], //2
                $fila['tipo'], //3
                $fila['banner_url'], // 4
                $fila['imagen_url'], // 5
                $fila['mision'], //6
                $fila['vision'] //7
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
    <form action="actualizar-cap-serie.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Conócenos <i class="fa-solid fa-pen-to-square"></i></h1>
                <input type="hidden" name="id_capacitaciones_series" value="<?php echo $_GET['id_capacitaciones_series']?>" required><span class="barra"></span>
                <div class="grupo">
                    <input type="text"  name="nombre" value="<?php echo $consulta[1] ?>" required><span class="barra"></span>
                    <label>Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text"  name="titulo" value="<?php echo $consulta[2] ?>" required><span class="barra"></span>
                    <label>Titulo</label>
                </div>
                <?php
                    if ($consulta[3] == 'capacitacion') {
                        echo "<div class='grupo'>";
                            echo "<div class='input-group mb-3'>";
                                echo "<select name='tipo' id='tipo' class='form-control'>";
                                    echo "<option value='capacitacion'>"; echo "Capacitación"; echo "</option>";
                                    echo "<option value='serie'>"; echo"Serie"; echo "</option>";
                                echo "</select>";
                                echo"<label>"; echo"</label>";
                            echo "</div>";
                        echo "</div>";
                    } else {
                        echo "<div class='grupo'>";
                            echo "<div class='input-group mb-3'>";
                                echo "<select name='tipo' id='tipo' class='form-control'>";
                                    echo "<option value='serie'>"; echo"Serie"; echo "</option>";
                                    echo "<option value='capacitacion'>"; echo "Capacitación"; echo "</option>";
                                echo "</select>";
                                echo"<label>"; echo"</label>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
                <div class="grupo">
                    <div class="input-group mb-3"  style="padding-top: 10px">
                        <input  type="file" name="file1" id="file1" value="<?php echo $consulta[4] ?>" class="form-control">
                        <label>Banner </label>
                    </div>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3"  style="padding-top: 10px">
                        <input  type="file" name="file2" id="file2" value="<?php echo $consulta[5] ?>" class="form-control">
                        <label>Imagen</label>
                    </div>
                </div>
                <div class="grupo">
                    <input type="text"  name="mision" value="<?php echo $consulta[6] ?>" required><span class="barra"></span>
                    <label>Misión</label>
                </div>
                <div class="grupo">
                    <input type="text"  name="vision" value="<?php echo $consulta[7] ?>" required><span class="barra"></span>
                    <label>Visión</label>
                </div>
                <center>
                    <div class="grupo">
                        <div class="row">
                            <div class="col">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:history.back()">Volver</a>
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
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
    <title>Agregar</title>
    <?php
        include 'head-formularios.php';
    ?>
</head>

<body>
    <form action="agregar-img-alb.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Agregar Imagen <i class="fa-solid fa-image"></i></h1>

                <div class="grupo">
                    <div class="input-group mb-3">
                        <select name="titulo_alb" id="titulo_alb" class="form-control">
                            <option>Seleccionar Album</option>
                            <?php
                                $email = $_SESSION['email'];
                                $password = $_SESSION['password'];
                                if($email != false && $password != false){
                                    $sentecia="SELECT * FROM act_academicas";
                                    $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                                    while($fila=$resultado->fetch_assoc()){
                                        echo "<option value='".$fila['id_act_academicas']."'>"; echo $fila['titulo_alb']; echo "</option>";
                                    }
                                }
                                ?>
                        </select>
                        <label></label>
                    </div>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input  type="file" name="file1" id="file1" class="form-control"><span class="barra"></span>
                        <label>Imagen (Obligatorio)</label>
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
</body>

</html>
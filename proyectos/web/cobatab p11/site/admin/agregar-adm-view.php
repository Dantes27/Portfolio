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
    <title> Agregar Administrador</title>
    <?php
    include 'head-formularios.php';
    ?>
</head>

<body>
    <form action="agregar-adm.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Agregar Administrador <i class="fa-solid fa-plus"></i></h1>
                <div class="grupo">
                    <input type="text" id="name"  name="name"  required><span class="barra"></span>
                    <label>Nombre</label>
                </div>
                <div class="grupo">
                    <input type="email" id="email"  name="email" required><span class="barra"></span>
                    <label>Correo</label>
                </div>
                <div class="grupo">
                    <input type="password" id="password"  name="password" required><span class="barra"></span>
                    <label>Contraseña</label>
                </div>

                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input type="file" name="file1" id="file1" class="form-control">
                        <label >Foto Perfil (Opcional)</label>
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
                    <a href="administradores-view.php">Volver</a>
                </center>
            </div>
    </form>
</body>

</html>
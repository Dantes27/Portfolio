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
    <title> Agregar Cap-Serie</title>
    <?php
    include 'head-formularios.php';
    ?>
</head>

<body>
    <form action="agregar-cap-serie.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Agregar Capacitacion - Serie <i class="fa-solid fa-plus"></i></h1>
                <div class="grupo">
                    <input type="text" id="nombre"  name="nombre"  required><span class="barra"></span>
                    <label>Nombre</label>
                </div>
                <div class="grupo">
                    <input type="text" id="titulo"  name="titulo"  required><span class="barra"></span>
                    <label>Titulo (Ejemplo: Capacitacion o Serie De "Nombre")</label>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3">
                        <select name="tipo" id="tipo" class="form-control" required>
                            <option></option>
                            <option value="capacitacion">Capacitación</option>
                            <option value="serie">Serie</option>
                        </select>
                        <label>Elegir Tipo</label>
                    </div>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input type="file" name="file1" id="file1" class="form-control">
                        <label >Banner (Obligatorio)</label>
                    </div>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3" style="padding-top: 10px">
                        <input type="file" name="file2" id="file2" class="form-control">
                        <label >Imagen (Obligatorio)</label>
                    </div>
                </div>
                <div class="grupo">
                    <input type="text" id="mision"  name="mision"  required><span class="barra"></span>
                    <label>Misión</label>
                </div>
                <div class="grupo">
                    <input type="text" id="vision"  name="vision"  required><span class="barra"></span>
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
</body>

</html>
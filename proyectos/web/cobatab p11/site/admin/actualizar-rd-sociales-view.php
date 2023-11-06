<?php
    $consulta=ActualizarRdSociales($_GET['id_rd_sociales']);

    function ActualizarRdSociales( $id_rd_sociales )
    {
        include 'conexion.php';
        $sentencia="SELECT * FROM rd_sociales WHERE id_rd_sociales='".$id_rd_sociales."' ";
        $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
        $fila=$resultado->fetch_assoc();
        return [
            $fila['id_rd_sociales'], //0
            $fila['icon'], //1
            $fila['link'] //2
        ];
    }
?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Rd Social</title>
    <link rel="stylesheet" href="vendors/styles/estiloformulario.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<body>
    <form action="actualizar-rd-sociales.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Rd Social <i class="fas fa-tools"></i></h1>
                <input type="hidden" name="id_rd_sociales" value="<?php echo $_GET['id_rd_sociales']?>" required><span class="barra"></span>
                <div class="grupo">
                    <input type="text" id="icon"  name="icon"><span class="barra"></span>
                    <label>Icon (ejemplo: <b>&lt;i class="fa-solid fa-link"&gt;&lt;/i&gt;</b> )</label>
                </div>
                <div class="grupo">
                    <input type="text" id="link"  name="link" value="<?php echo $consulta[2] ?>" required><span class="barra"></span>
                    <label>Link</label>
                </div>
                <center>
                    <div class="grupo">
                        <div class="row">
                            <div class="col">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                    <a href="rd-sociales-view.php">Volver</a>
                </center>
            </div>
    </form>
</body>

</html>
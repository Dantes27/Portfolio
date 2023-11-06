<?php
    $consulta=ActualizarCalendarioEscolar($_GET['id_alumnos']);
    function ActualizarCalendarioEscolar( $id_alumnos )
    {
        include 'conexion.php';
        $sentencia="SELECT * FROM alumnos WHERE id_alumnos='".$id_alumnos."' ";
        $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
        $fila=$resultado->fetch_assoc();
        return [
            $fila['id_alumnos'], //0
            $fila['titulo'], //1
            $fila['url_pdf'] //2
        ];
    }
?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
    <link rel="stylesheet" href="vendors/styles/estiloformulario.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<body>
    <form action="actualizar-calendario-escolar.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Actualizar Carousel <i class="fas fa-tools"></i></h1>
                <input type="hidden" name="id_alumnos" value="<?php echo $_GET['id_alumnos']?>" required><span class="barra"></span>
                <div class="grupo">
                    <input type="text"  name="titulo" value="<?php echo $consulta[1] ?>" required><span class="barra"></span>
                    <label>Titulo</label>
                </div>
                <div class="grupo">
                    <div class="input-group mb-3">
                        <input  type="file" name="file1" id="file1" class="form-control">
                        <label>PDF</label>
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
                    <a href="calendario-escolar-view.php">Volver</a>
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
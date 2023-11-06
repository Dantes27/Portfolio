<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="en-es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Rd Social</title>
    <link rel="stylesheet" href="vendors/styles/estiloformulario.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<body>
    <form action="agregar-rd-sociales.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <h1>Agregar Rd Social <i class="fas fa-tools"></i></h1>
                <div class="grupo">
                    <input type="text" id="icon"  name="icon"  required><span class="barra"></span>
                    <label>Icon (ejemplo: <b>&lt;i class="fa-solid fa-link"&gt;&lt;/i&gt;</b> )</label>
                </div>
                <div class="grupo">
                    <input type="text" id="link"  name="link"><span class="barra"></span>
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
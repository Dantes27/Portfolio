<?php require_once "controllerUserData.php";?>
<!DOCTYPE html>
<html lang="es-en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/styles/styleadm.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="vendors/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Has olvidado tu contraseña</h2>
                    <p class="text-center">Ingrese su dirección de correo electrónico</p>
                    <?php
                        if (count($errors) > 0) { ?>
                                <div class="alert alert-danger text-center">
                                    <?php foreach ($errors as $error) {
                                    echo $error;
                                    } ?>
                                </div>
                    <?php } ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Introduce Tu Correo" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                    <div class="link login-link text-center"><a href="login-user.php"><i class="fa-solid fa-arrow-left-long"></i> Iniciar Sesión</a></div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
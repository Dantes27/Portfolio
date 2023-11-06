<?php require_once "controllerUserData.php";?>
<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/styles/styleadm.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Iniciar Sesión</h2>
                    <p class="text-center">Inicie sesión con su correo electrónico y contraseña.</p>
                    <?php
                        if (count($errors) > 0) { ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                    foreach ($errors as $showerror) {
                                            echo $showerror;
                                        } ?>
                            </div>
                        <?php } ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Correo" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">¿Se te olvidó tu contraseña?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Continuar">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
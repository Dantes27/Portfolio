<?php
$conexion = mysqli_connect('localhost', 'root', '', 'miwebsite');
$conexion->set_charset("utf8");
if ($conexion->connect_error) {
    echo $error = $conexion->connect_error;
}
if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>

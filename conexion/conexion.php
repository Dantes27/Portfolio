<?php
$conn = mysqli_connect('localhost', 'root', '', 'miwebsite');
$conn->set_charset("utf8");
if ($conn->connect_error) {
	echo $error = $conn->connect_error;
}
if (mysqli_connect_errno()) {
	printf("Fallo la conexion");
} else {
	//printf("Estas conectado");
}
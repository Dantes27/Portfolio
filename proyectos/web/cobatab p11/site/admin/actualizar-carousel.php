<?php require_once "controllerUserData.php"; ?>
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
<?php
ActualizarCarousel($_POST['id_carousel'], $_POST['titulo'], $_POST['descripcion']);
function ActualizarCarousel($id_carousel, $titulo, $descripcion)
{
	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
	if ($email != false && $password != false) {
		include 'conexion.php';
		$sentencia = "UPDATE carousel SET titulo='" . $titulo . "', descripcion='" . $descripcion . "' WHERE id_carousel='" . $id_carousel . "' ";
		$conexion->query($sentencia) or die("Error al actualizar datos" . mysqli_error($conexion));
	}
}

if ($_FILES["file1"]["error"] > 0) {
} else {
	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
	if ($email != false && $password != false) {
		include 'conexion.php';
		$nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
		$ruta = "vendors/images/carousel/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
		$subir = move_uploaded_file($archivo, $ruta); //se sube el archivo
		$sentencia_img = "UPDATE carousel SET imagen='$ruta' WHERE id_carousel='" . $_POST['id_carousel'] . "' ";
		$conexion->query($sentencia_img) or die("Error al actualizar datos" . mysqli_error($conexion));
	}
}

?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!!");
	window.location.href = 'carousel-view.php';
</script>
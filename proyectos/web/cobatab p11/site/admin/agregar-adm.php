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
	AgregarAdm($_POST['name'], $_POST['email'], $_POST['password']);
	
	function AgregarAdm($name, $email, $password)
	{
        $code = 0;
        $status = "verified";
        include 'conexion.php';
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "vendors/images/perfil_adm/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
        $sentencia= "INSERT INTO usertable (name, email, password, code, status, foto_perfil) VALUES ('".$name."', '".$email."', '".$encpass."', '".$code."', '".$status."', '".$ruta."') ";
        $conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>


<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!!");
	window.location.href = 'administradores-view.php';
</script>
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

<?php
	ActualizarConocenos($_POST['id_conocenos'], $_POST['titulo'], $_POST['descripcion']);
	function ActualizarConocenos($id_conocenos, $titulo, $descripcion)
	{
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
			include 'conexion.php';
			$sentencia="UPDATE conocenos SET titulo='".$titulo."', descripcion='".$descripcion."' WHERE id_conocenos='".$id_conocenos."' ";
			$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
		}
	}

	if ($_FILES["file1"]["error"] > 0){
	} else {
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
			include 'conexion.php';
			$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
			$ruta = "vendors/images/banners/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
			$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
			$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
			$sentencia_img="UPDATE conocenos SET banner='$ruta' WHERE id_conocenos='".$_POST['id_conocenos']."' ";
			$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
		}
	}

    if($_FILES["file2"]["error"] > 0){
    } else {
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
			include 'conexion.php';
			$nom_archivo2=$_FILES['file2']['name']; // Para conocer el nombre del archivo
			$ruta2 = "vendors/images/cobachito/" . $nom_archivo2;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
			$archivo2 = $_FILES['file2']['tmp_name']; //el arhivo a subir
			$subir2=move_uploaded_file($archivo2, $ruta2); //se sube el archivo
			$sentencia_img2="UPDATE conocenos SET imagen='$ruta2' WHERE id_conocenos='".$_POST['id_conocenos']."' ";
			$conexion->query($sentencia_img2) or die ("Error al actualizar datos".mysqli_error($conexion));
		}
    }
	
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!!");
	window.location.href='conocenos-view.php';
</script>
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
	AgregarNoticias($_POST['titulo'], $_POST['descripcion'], $_POST['fecha']);
	
	function AgregarNoticias($titulo, $descripcion, $fecha)
	{
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
			include 'conexion.php';
			$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
			$ruta = "vendors/images/noticias/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
			$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
			$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
			$sentencia= "INSERT INTO noticias (titulo, descripcion, fecha, imagen) VALUES ('".$titulo."', '".$descripcion."', '".$fecha."', '".$ruta."') ";
			$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
		}
	}
?>

<script type="text/javascript">
	alert("Agregado Exitosamante!!!");
	window.location.href='noticias-view.php';
</script>
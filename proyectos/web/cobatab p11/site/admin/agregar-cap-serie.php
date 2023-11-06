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
	AgragarCapSerie($_POST['nombre'], $_POST['titulo'], $_POST['tipo'], $_POST['mision'], $_POST['vision']);
	
	function AgragarCapSerie($nombre, $titulo, $tipo, $mision, $vision)
	{
        $email = $_SESSION['email'];
		$password = $_SESSION['password'];
		if($email != false && $password != false){
			include 'conexion.php';
			$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo (Banner)
            $nom_archivo2=$_FILES['file2']['name']; // Para conocer el nombre del archivo (Imagen)
			$ruta = "vendors/images/cap_series/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
            $ruta2 = "vendors/images/cap_series/" . $nom_archivo2;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
			$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
            $archivo2 = $_FILES['file2']['tmp_name']; //el arhivo a subir
			$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
            $subir2=move_uploaded_file($archivo2, $ruta2); //se sube el archivo
			$sentencia= "INSERT INTO capacitaciones_series (nombre, titulo, tipo, banner_url, imagen_url, mision, vision) VALUES ('".$nombre."', '".$titulo."',  '".$tipo."', '".$ruta."', '".$ruta2."', '".$mision."', '".$vision."') ";
			$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
            $id_capacitaciones_series = mysqli_insert_id($conexion);
            //echo "Ultimo ID : ".$id_capacitaciones_series;
            echo "<script>alert('Agregado Exitosamante!!!');</script>";
            echo "<script>window.location = 'capacitaciones-series-view.php?capacitacion_serie=".$id_capacitaciones_series."'</script>";
		}
	}
?>
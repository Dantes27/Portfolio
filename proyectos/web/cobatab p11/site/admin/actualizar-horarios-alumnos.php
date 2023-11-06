<?php
	ActualizarHorarios($_POST['id_horarios_alumnos'], $_POST['grado_grupo']);

	function ActualizarHorarios($id_horarios_alumnos, $grado_grupo)
	{
		include 'conexion.php';
		$sentencia="UPDATE horarios_alumnos SET grado_grupo='".$grado_grupo."' WHERE id_horarios_alumnos='".$id_horarios_alumnos."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}

	if ($_FILES["file1"]["error"] > 0)
	{
	} else{ 
        include 'conexion.php';
		$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
		$ruta = "vendors/docs/horarios/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
		$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
		$sentencia_img="UPDATE horarios_alumnos SET horario_pdf='$ruta' WHERE id_horarios_alumnos='".$_POST['id_horarios_alumnos']."' ";
		$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
	
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!!");
	window.location.href='horario-escolar-view.php';
</script>
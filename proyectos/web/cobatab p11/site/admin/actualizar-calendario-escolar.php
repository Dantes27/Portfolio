<?php
	ActualizarCalendarioEscolar($_POST['id_alumnos'], $_POST['titulo']);

	function ActualizarCalendarioEscolar($id_alumnos, $titulo)
	{
		include 'conexion.php';
		$sentencia="UPDATE alumnos SET titulo='".$titulo."' WHERE id_alumnos='".$id_alumnos."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}

	if ($_FILES["file1"]["error"] > 0)
	{
	} else 
	{
        include 'conexion.php';
		$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
		$ruta = "vendors/docs/cobatab_docs/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
		$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
		$sentencia_url="UPDATE alumnos SET url_pdf='$ruta' WHERE id_alumnos='".$_POST['id_alumnos']."' ";
		$conexion->query($sentencia_url) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
	
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!!");
	if($id_alumnos=2){
		window.location.href='calendario-escolar-view.php';
	}
	if($id_alumnos=3){
		window.location.href='reglamento-escolar-view.php';
	}
	if($id_alumnos=4){
		window.location.href='himno-cobatab-view.php';
	}
</script>
<?php
	ActualizarRdSociales($_POST['id_rd_sociales'], $_POST['icon'], $_POST['link']);

	function ActualizarRdSociales($id_rd_sociales, $icon, $link)
	{
		include 'conexion.php';
		$sentencia="UPDATE rd_sociales SET icon='".$icon."', link='".$link."' WHERE id_rd_sociales='".$id_rd_sociales."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
	
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!!");
	window.location.href='rd-sociales-view.php';
</script>
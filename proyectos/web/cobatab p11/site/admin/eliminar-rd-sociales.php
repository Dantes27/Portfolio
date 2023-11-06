<?php
	EliminarRdSiciales($_GET['id_rd_sociales']);
	function EliminarRdSiciales($id_rd_sociales)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM rd_sociales WHERE id_rd_sociales='".$id_rd_sociales."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
	}
?>
<script type="text/javascript">
	alert("Eliminado Corectamente!!!");
	window.location.href='rd-sociales-view.php';
</script>



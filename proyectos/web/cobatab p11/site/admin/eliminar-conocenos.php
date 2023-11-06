<?php
	EliminarConocenos($_GET['id_conocenos']);
	function EliminarConocenos($id_conocenos)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM conocenos WHERE id_conocenos='".$id_conocenos."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
	}
?>
<script type="text/javascript">
	alert("Eliminado Corectamente!!!");
	window.location.href='quienes-somos-view.php';
</script>



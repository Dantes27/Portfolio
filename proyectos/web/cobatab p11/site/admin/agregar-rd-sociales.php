<?php

	AgragarCarousel($_POST['icon'], $_POST['link']);
	
	function AgragarCarousel($icon, $link)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO rd_sociales (icon, link) VALUES ('".$icon."', '".$link."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}

?>

<script type="text/javascript">
	alert("Agregado Exitosamante!!!");
	window.location.href='rd-sociales-view.php';
</script>
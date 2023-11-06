<?php
$consulta = "SELECT * FROM `ie8_panel` WHERE id_ie8_panel = 1";
$resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
$fila = $resultado->fetch_assoc()
?>
<div class="pre-loader-box">
	<div class="loader-logo" align="center">
		<img src="<?php echo $fila['logo']; ?>" width="100%" height="100%">
		<h4 class="font-20 weight-500 mb-10 text-capitalize">Plantel 11</h4>
	</div>
	<div class='loader-progress' id="progress_div">
		<div class='bar' id='bar1'></div>
	</div>
	<div class='percent' id='percent1'>0%</div>
	<div class="loading-text">
		Cargando...
	</div>
</div>
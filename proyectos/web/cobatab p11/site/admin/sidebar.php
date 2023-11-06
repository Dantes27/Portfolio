<?php require_once "controllerUserData.php"; ?>
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
$consulta = "SELECT * FROM `ie8_panel` WHERE id_ie8_panel = 1";
$resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
$fila = $resultado->fetch_assoc()
?>
<div class="brand-logo">
	<a href="home.php">
		<img src="<?php echo $fila['logo']; ?>" alt="" class="dark-logo">
		<img src="<?php echo $fila['logo']; ?>" width="100%" height="100%" alt="" class="light-logo">
	</a>
	<div class="close-sidebar" data-toggle="left-sidebar-close">
		<i class="ion-close-round"></i>
	</div>
</div>

<div class="menu-block customscroll">
	<div class="sidebar-menu">
		<ul id="accordion-menu">
			<li>
				<div class="sidebar-small-cap">Pagina</div>
			</li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">
					<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
				</a>
				<ul class="submenu">
					<li><a href="carousel-view.php">Carrousel</a></li>
					<li><a href="conocenos-view.php">Conócenos</a></li>
					<li><a href="reconocimientos-premios-view.php">Reconocimientos</a></li>
					<li><a href="actividades-academicas-view.php">Actividades Académicas</a></li>
					<!--<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="mtext">Act Academicas</span>
								</a>
								<ul class="submenu child">
									<li><a href="actividades-academicas-view.php">Act Academicas</a></li>
									<li><a href="">Galeria</a></li>
									<li><a href="">Videos</a></li>
								</ul>
					</li> -->
					<li><a href="noticias-view.php">Noticias</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">
					<span class="micon dw dw-edit2"></span><span class="mtext">Alumnos</span>
				</a>
				<ul class="submenu">
					<li><a href="horario-escolar-view.php">Horario Alumnos</a></li>
					<li><a href="calendario-escolar-view.php">Calendario Escolar</a></li>
					<li><a href="ver-mis-calificaciones-view.php">Ver Mis Calificaciones</a></li>
					<li><a href="reglamento-escolar-view.php">Reglamento Cobatab</a></li>
					<li><a href="himno-cobatab-view.php">Himno Cobatab</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">
					<span class="micon dw dw-library"></span><span class="mtext">Capacitaciones</span>
				</a>
				<ul class="submenu">
					<?php
					$consulta = "SELECT `id_capacitaciones_series`, `nombre`, `titulo` FROM `capacitaciones_series` WHERE tipo = 'capacitacion'";
					$resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
					while ($fila = $resultado->fetch_assoc()) {
						echo "<li>";
						echo "<a href='capacitaciones-series-view.php?capacitacion_serie=" . $fila['id_capacitaciones_series'] . "'>";
						echo $fila['nombre'];
						echo "</a>";
						echo "</li>";
					}
					?>
				</ul>
			</li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">
					<span class="micon dw dw-library"></span><span class="mtext">Series</span>
				</a>
				<ul class="submenu">
					<?php
					$consulta = "SELECT `id_capacitaciones_series`, `nombre`, `titulo` FROM `capacitaciones_series` WHERE tipo = 'serie'";
					$resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
					while ($fila = $resultado->fetch_assoc()) {
						echo "<li>";
							echo "<a href='capacitaciones-series-view.php?capacitacion_serie=" . $fila['id_capacitaciones_series'] . "'>"; echo $fila['nombre']; echo "</a>";
						echo "</li>";
					}
					?>
				</ul>
			</li>
			<!--<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">
					<span class="micon dw dw-apartment"></span><span class="mtext">Docentes</span>
				</a>
				<ul class="submenu">
					<li><a href="ui-buttons.html">LIC. hernesto</a></li>
				</ul>
			</li>-->
			<li>
				<div class="dropdown-divider"></div>
			</li>
			<li>
				<div class="sidebar-small-cap">Extra</div>
			</li>
			<li>
				<a href="administradores-view.php" class="dropdown-toggle no-arrow">
					<span class="micon dw dw-user-1"></span><span class="mtext">Administradores</span>
				</a>
			</li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">
					<span class="micon dw dw-house-1"></span><span class="mtext">Inicio-ei8</span>
				</a>
				<ul class="submenu">
					<li><a href="ie8-panel-view.php">ie8_Panel</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle">

					<span class="micon dw dw-worldwide-1"></span><span class="mtext">Footer</span>
				</a>
				<ul class="submenu">
					<li><a href="rd-sociales-view.php">RD Sociales</a></li>
				</ul>
			</li>
			<!--<li>
				<a href="calendario-view.php" class="dropdown-toggle no-arrow">
					<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
				</a>
			</li>-->
			<div class="dropdown-divider"></div>
		</ul>
	</div>
</div>
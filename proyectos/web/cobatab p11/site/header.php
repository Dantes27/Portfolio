<!-- RD Navbar-->
<div class="rd-navbar-wrap">
  <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
    <div class="rd-navbar-main-outer">
      <div class="rd-navbar-main">

        <!-- RD Navbar Panel-->
        <?php
        $consulta = "SELECT * FROM ie8_panel";
        $resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
        $fila = $resultado->fetch_assoc()
        ?>
        <div class="rd-navbar-panel">
          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand">
            <a class="brand" href="index.php">
              <div class="brand__name">
                <img class="brand__logo-dark" src="admin/<?php echo $fila['logo']; ?>" alt="" width="237" height="35" />
                <!-- <img class="brand__logo-light" src="images/logo-inverse-237x35.png" alt=""width="237" height="35" /> -->
              </div>
              <span class="brand__slogan"><?php echo $fila['nombre_plantel']; ?></span>
            </a>
          </div>
        </div>

        <!-- RD Navbar Nav-->
        <div class="rd-navbar-nav-wrap">
          <!-- RD Navbar Nav-->
          <ul class="rd-navbar-nav">
            <li><a href="index.php">Inicio</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alumnos <i class="fa-solid fa-sort-down"></i></a>
              <ul style="width: auto;"  class="dropdown-menu" role="menu">

                <li><a href="horarios_alumnos.php">Horario Alumnos</a></li>
                <li class="divider"></li>
                <?php
                $consulta = "SELECT * FROM alumnos WHERE id_alumnos = 1";
                $resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
                $fila = $resultado->fetch_assoc();
                echo "<li>";
                echo "<a href='" . $fila['url_pdf'] . "' target='_blank'>";
                echo $fila['titulo'];
                echo "</a>";
                echo "</li>";
                echo "<li class='divider'>";
                echo "</li>";
                ?>
                <?php
                $consulta = "SELECT * FROM alumnos WHERE id_alumnos >= 2";
                $resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<li>";
                  echo "<a href='admin/" . $fila['url_pdf'] . "' target='_blank'>";
                  echo $fila['titulo'];
                  echo "</a>";
                  echo "</li>";
                  echo "<li class='divider'>";
                  echo "</li>";
                }
                ?>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Capacitaciones y Series <i class="fa-solid fa-sort-down"></i></a>

              <ul style="width: auto;" class="dropdown-menu" role="menu">
                <li>
                  <p style="text-align: center; padding-bottom: 10px; color:#2d2d2d;">Capacitaciones</p>
                </li>
                <?php
                $consulta = "SELECT `id_capacitaciones_series`, `nombre`, `titulo` FROM `capacitaciones_series` WHERE tipo = 'capacitacion'";
                $resultado = $conexion->query($consulta) or die(mysqli_error($conexion));
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<li>";
                  echo "<a href='cap-serie-view.php?capacitacion_serie=" . $fila['id_capacitaciones_series'] . "'>";
                  echo $fila['nombre'];
                  echo "</a>";
                  echo "</li>";
                }
                ?>
                <li class="divider"></li>
                <li>
                  <p style="text-align: center; padding-bottom: 10px ; color:#2d2d2d;">Series</p>
                </li>
                <?php
                $sentecia = "SELECT `id_capacitaciones_series`, `nombre` FROM `capacitaciones_series` WHERE tipo = 'serie'";
                $resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<li>";
                  echo "<a href='cap-serie-view.php?capacitacion_serie=" . $fila['id_capacitaciones_series'] . "'>";
                  echo $fila['nombre'];
                  echo "</a>";
                  echo "</li>";
                }
                ?>
              </ul>
            </li>
            <!-- <li><a href="docentes.php">Docentes</a></li> -->
            <li><a href="contact-us.php">Contactanos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
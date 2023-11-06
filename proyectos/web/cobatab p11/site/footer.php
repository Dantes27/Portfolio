<div class="shell">
  <div class="range range-sm-center">
    <div class="cell-sm-10 cell-md-8 cell-lg-6">
      <!-- LOGO -->
      <?php
        $consulta="SELECT * FROM ie8_panel";
        $resultado= $conexion->query($consulta) or die (mysqli_error($conexion));
        $fila=$resultado->fetch_assoc()
      ?>
      <a class="brand" href="index.php">
        <div class="brand__name"><img src="admin/<?php echo $fila['logo']; ?>" alt="" width="237" height="35" />
        </div><span class="brand__slogan"><?php echo $fila['nombre_plantel']; ?></span>
      </a>
      <!-- RD SOCIALES -->
      <ul class="list-icons list-inline-sm">
        <?php
          $sentecia="SELECT * FROM rd_sociales";
          $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
          while($fila=$resultado->fetch_assoc()){?>
            <li><a class="icon icon-sm icon-style-camera" href="<?php echo $fila['link'];?>" target="_blank"><?php echo $fila['icon'];?> </a></li>
        <?php }?>
      </ul>

      <!--POLITICA DE PRIVACIDAD-->
      <p class="rights"><span>COBATAB PLANTE 11</span><span>&nbsp;&copy;&nbsp; </span><span
          class="copyright-year"></span>.&nbsp; <br class="veil-xs"><a class="link-underline" href="politica-privacidad.php">Privacy
          Policy</a></p>
    </div>
  </div>
</div>